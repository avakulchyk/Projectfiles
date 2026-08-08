/**
 * Login Test Suite
 *
 * Tags: @master @sanity @regression
 */

import { test, expect } from '@playwright/test';
import { HomePage } from '../pages/HomePage';
import { LoginPage } from '../pages/LoginPage';
import { MyAccountPage } from '../pages/MyAccountPage';
import { LogoutPage } from '../pages/LogoutPage';
import { TestConfig } from '../test.config';
import { Logger } from '../utils/Logger';


let config: TestConfig;
let homePage: HomePage;
let loginPage: LoginPage;
let myAccountPage: MyAccountPage;
let logoutPage: LogoutPage;


test.beforeEach(async ({ page }) => {

    Logger.info('Starting test setup...');

    config = new TestConfig();

    await page.goto(config.appUrl);

    homePage = new HomePage(page);
    loginPage = new LoginPage(page);
    myAccountPage = new MyAccountPage(page);
    logoutPage = new LogoutPage(page);

});


test.afterEach(async ({ page }) => {

    Logger.info('Test completed, closing page.');

    await page.close();

});


// -----------------------------------------------------
// Valid login
// -----------------------------------------------------
test('User login test @master @sanity @regression', async ({ page }) => {

    await homePage.clickMyAccount();
    await homePage.clickLogin();


    Logger.info(`Login with user: ${config.email}`);


    await loginPage.login(
        config.email,
        config.password
    );


    await myAccountPage.expectMyAccountPage();


    await expect(page)
        .toHaveURL(/route=account\/account/);

});


// -----------------------------------------------------
// Invalid password
// -----------------------------------------------------

test('Validate login with valid email and invalid password @master @regression', async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.setEmail(
        config.email
    );


    await loginPage.setPassword(
        "WrongPassword123"
    );


    await loginPage.clickLogin();


    await expect(page)
        .toHaveURL(/route=account\/login/);


    await loginPage.expectLoginErrorMessage(
        'Warning: No match for E-Mail Address and/or Password.'
    );

});


// -----------------------------------------------------
// Forgotten password
// -----------------------------------------------------

test("Validate 'Forgotten Password' link is available @master @sanity @regression", async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.expectForgottenPasswordLinkVisible();


    await loginPage.clickForgottenPassword();


    await expect(page)
        .toHaveURL(/route=account\/forgotten/);

});


// -----------------------------------------------------
// Placeholders
// -----------------------------------------------------

test('Validate Login page placeholders @master @regression', async () => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.expectPlaceholders();

});


// -----------------------------------------------------
// Browser back after login
// -----------------------------------------------------

test('Validate browser back navigation after successful login @master @regression', async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    await myAccountPage.expectMyAccountPage();


    await page.goBack({
        waitUntil: 'networkidle'
    });


    await expect(page)
        .toHaveURL(/route=account\/login/);


    await loginPage.expectLoginPage();

});


// -----------------------------------------------------
// Account lock after five failed attempts
// -----------------------------------------------------

test('Validate account lock after five unsuccessful login attempts @master @regression', async ({ page }) => {
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Retrieving login values directly from the config file
    const targetEmail = config.failedLoginEmail;
    const wrongPassword = config.wrongPassword;

    Logger.info(
        `Testing account lock for ${targetEmail}`
    );

    // Perform up to 5 failed login attempts
    for (let attempt = 1; attempt <= 5; attempt++) {
        Logger.info(
            `Failed login attempt #${attempt}`
        );

        await loginPage.login(
            targetEmail,
            wrongPassword
        );

        // Check if the account was already locked
        const warningText = await loginPage.getWarningMsg();

        if (warningText.includes('exceeded allowed number')) {
            Logger.info(
                'Account lock limit reached'
            );
            break;
        }
    }

    // Verify that the account is locked
    await loginPage.expectAccountLockMessage();
});


// -----------------------------------------------------
// Change password
// -----------------------------------------------------


test('Validate login after changing password @master @sanity @regression', async ({
    page,
}) => {

    const originalPassword = config.changePassword;
    const newPassword = config.newPassword;

    try {
        // 1. Open Login page
        await homePage.clickMyAccount();
        await homePage.clickLogin();

        // 2. Login with original password
        await loginPage.login(
            config.changePasswordEmail,
            originalPassword
        );

        await myAccountPage.expectMyAccountPage();

        // 3. Open Change Password page
        const changePasswordPage =
            await myAccountPage.clickChangePassword();

        await changePasswordPage.expectChangePasswordPage();

        // 4. Change password to NEW password
        await changePasswordPage.changePassword(newPassword);

        // Verify password was changed
        await expect(page.locator('.alert-success')).toBeVisible({
            timeout: 10000
        });

        // 5. Logout
        await myAccountPage.clickLogout();
        await logoutPage.expectLogoutPage();

        // 6. Open Login page again
        await homePage.clickMyAccount();
        await homePage.clickLogin();

        // 7. Login with NEW password
        await loginPage.login(
            config.changePasswordEmail,
            newPassword
        );

        // 8. Verify successful login
        await myAccountPage.expectMyAccountPage();

    } finally {

        // ==========================================
        // Restore ORIGINAL password
        // ==========================================

        // Logout if we are still logged in
        try {
            await myAccountPage.clickLogout();
            await logoutPage.expectLogoutPage();
        } catch {
            // Already logged out
        }

        // Open Login page
        await homePage.clickMyAccount();
        await homePage.clickLogin();

        // Login with NEW password
        await loginPage.login(
            config.changePasswordEmail,
            newPassword
        );

        await myAccountPage.expectMyAccountPage();

        // Open Change Password page
        const restorePasswordPage =
            await myAccountPage.clickChangePassword();

        await restorePasswordPage.expectChangePasswordPage();

        // Restore ORIGINAL password
        await restorePasswordPage.changePassword(originalPassword);

        // Verify password was restored
        await expect(page.locator('.alert-success')).toBeVisible({
            timeout: 10000
        });

        // Logout after cleanup
        await myAccountPage.clickLogout();
        await logoutPage.expectLogoutPage();
    }
});








// -----------------------------------------------------
// Password masking
// -----------------------------------------------------

test('Validate password field hides entered text @master @sanity @regression', async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.setPassword(
        config.password
    );


    await loginPage.expectPasswordFieldMasked();

});


// -----------------------------------------------------
// Session timeout
// -----------------------------------------------------

test('Validate timeout of Login Session by clearing cookies @regression', async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    await myAccountPage.expectMyAccountPage();


    await page.context()
        .clearCookies();


    await page.reload();


    await page.waitForLoadState(
        'networkidle'
    );


    await expect(page)
        .toHaveURL(/route=account\/login/);


    await loginPage.expectLoginButtonVisible();

});



   


   