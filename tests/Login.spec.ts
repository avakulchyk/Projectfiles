/**
 * Login Test Suite
 *
 * Tags: @master @sanity @regression
 */

import { test, expect } from '@playwright/test';
import { HomePage } from '../pages/HomePage';
import { LoginPage } from '../pages/LoginPage';
import { MyAccountPage } from '../pages/MyAccountPage';
import { TestConfig } from '../test.config';
import { Logger } from '../utils/Logger';


let config: TestConfig;
let homePage: HomePage;
let loginPage: LoginPage;
let myAccountPage: MyAccountPage;


test.beforeEach(async ({ page }) => {

    Logger.info('Starting test setup...');

    config = new TestConfig();

    await page.goto(config.appUrl);

    homePage = new HomePage(page);
    loginPage = new LoginPage(page);
    myAccountPage = new MyAccountPage(page);

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


    Logger.info(
        `Testing account lock for ${config.failedLoginEmail}`
    );


    for (let attempt = 1; attempt <= 5; attempt++) {


        Logger.info(
            `Failed login attempt #${attempt}`
        );


        await loginPage.login(
            config.failedLoginEmail,
            config.wrongPassword
        );


        await loginPage.expectLoginErrorMessage(
            'Warning: No match for E-Mail Address and/or Password.'
        );


    }


    Logger.info(
        'Account lock scenario completed'
    );

});


// -----------------------------------------------------
// Change password
// -----------------------------------------------------

test('Validate login after changing password @master @sanity @regression', async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.login(
        config.changePasswordEmail,
        config.changePassword
    );


    await myAccountPage.expectMyAccountPage();


    const changePasswordPage =
        await myAccountPage.clickChangePassword();


    await changePasswordPage.expectChangePasswordPage();


    await changePasswordPage.changePassword(
        config.newPassword
    );


    await homePage.clickMyAccount();


    const logoutPage =
        await myAccountPage.clickLogout();


    await logoutPage.expectLogoutPage();


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.login(
        config.changePasswordEmail,
        config.newPassword
    );


    await myAccountPage.expectMyAccountPage();

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



   


   