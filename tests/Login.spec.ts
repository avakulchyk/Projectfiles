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
import { RandomDataUtil } from '../utils/randomDataGenerator'; 


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


test.afterEach(async ({ page }) => {

    await page.close();

});


// Valid login

test('User login test @master @sanity @regression', async ({ page }) => {
    Logger.info('Navigating to Login Page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info(`Logging in with email: ${config.email}`);
    await loginPage.login(
        config.email,
        config.password
    );

    Logger.info('Verifying My Account page load');
    await myAccountPage.expectMyAccountPage();

    await expect(page).toHaveURL(/route=account\/account/);
});


// Invalid credentials

test('Validate logging into the application using a valid email address and an invalid password @master @regression', async ({ page }) => {
    Logger.info('Navigating to Login Page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info(`Entering valid email: ${config.email} and an invalid password`);
    await loginPage.setEmail(config.email);
    await loginPage.setPassword(RandomDataUtil.getPassword());
    await loginPage.clickLogin();

    Logger.info('Verifying login failure and error message');
    await expect(page).toHaveURL(/route=account\/login/);
    await loginPage.expectLoginErrorMessage(
        'Warning: No match for E-Mail Address and/or Password.'
    );
});


// Valid email + invalid password

test('Validate logging into the application using a valid email address and an invalid password @master @regression', async ({ page }) => {


    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.setEmail(
        config.email
    );


    await loginPage.setPassword(
        RandomDataUtil.getPassword()
    );

    await loginPage.clickLogin();

    await expect(page)
        .toHaveURL(/route=account\/login/);

    await loginPage.expectLoginErrorMessage(
        'Warning: No match for E-Mail Address and/or Password.'
    );

});


// Forgotten password
test("Validate 'Forgotten Password' link is available in the Login page and is working @master @sanity @regression", async ({ page }) => {
    Logger.info('Navigating to Login Page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info('Verifying and clicking Forgotten Password link');
    await loginPage.expectForgottenPasswordLinkVisible();
    await loginPage.clickForgottenPassword();

    Logger.info('Verifying redirect to Forgotten Password page');
    await expect(page).toHaveURL(/route=account\/forgotten/);
});


// Placeholders

test('Validate E-Mail Address and Password fields have the correct placeholder text @master @regression', async () => {
    Logger.info('Navigating to Login Page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info('Checking input field placeholders');
    await loginPage.expectPlaceholders();
});


// Browser back after login

test('Validate Logging into the Application and browsing back using Browser Back button @master @regression', async ({ page }) => {
    Logger.info('Navigating to Login Page and logging in');
    await homePage.clickMyAccount();
    await homePage.clickLogin();
    await loginPage.login(config.email, config.password);

    Logger.info('Verifying successful initial login');
    await myAccountPage.expectMyAccountPage();

    Logger.info('Navigating back using browser history');
    await loginPage.goBack();

    Logger.info('Verifying return to Login page and session expiration warning');
    await expect(page).toHaveURL(/route=account\/login/);
    await loginPage.expectSessionExpiredMessage();

    Logger.info('Re-authenticating after session expiration');
    await loginPage.login(config.email, config.password);
    await myAccountPage.expectMyAccountPage();
});


// Account lock after failed login attempts

// Account lock after failed login attempts
test('Validate account lock after five unsuccessful login attempts @master @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();

    Logger.info(`Generated random test user: ${user.email}`);

    Logger.info('Navigating to Login Page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info('Starting 5 consecutive failed login attempts');
    for (let attempt = 1; attempt <= 5; attempt++) {
        Logger.info(`Failed login attempt #${attempt} for user: ${user.email}`);

        await loginPage.login(
            user.email,
            user.password
        );

        Logger.info(`Verifying failure state for attempt #${attempt}`);
        await loginPage.expectLoginPage();

        await loginPage.expectLoginErrorMessage(
            'Warning: No match for E-Mail Address and/or Password.'
        );
    }

    Logger.info('Completed 5 failed login attempt assertions successfully');
});


// Change password and login with new password
test('Validate logging into the application after changing the password @master @sanity @regression', async ({ page }) => {
    const newPassword = 'NewPassword@12345678';

    Logger.info('Logging in with current password');
    await homePage.clickMyAccount();
    await homePage.clickLogin();
    await loginPage.login(
        config.email,
        config.password
    );

    Logger.info('Verifying successful initial login');
    await myAccountPage.expectMyAccountPage();

    Logger.info('Opening Change Password page');
    const changePasswordPage = await myAccountPage.clickChangePassword();

    Logger.info('Verifying Change Password page load');
    await changePasswordPage.expectChangePasswordPage();

    Logger.info('Updating account password');
    await changePasswordPage.changePassword(newPassword);

    Logger.info('Logging out of current session');
    await homePage.clickMyAccount();
    const logoutPage = await myAccountPage.clickLogout();

    Logger.info('Verifying Logout page load');
    await logoutPage.expectLogoutPage();

    Logger.info('Navigating back to Login page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info('Logging in with newly updated password');
    await loginPage.login(
        config.email,
        newPassword
    );

    Logger.info('Verifying successful login with new password');
    await myAccountPage.expectMyAccountPage();
});


// Password masking
test('Validate password field hides entered text @master @sanity @regression', async ({ page }) => {
    Logger.info('Navigating to Login page');
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info('Entering password');
    await loginPage.setPassword(config.password);

    Logger.info('Verifying password input field is masked');
    await loginPage.expectPasswordFieldMasked();
});


// Session expiration by clearing cookies
test('Validate timeout of the Login Session by clearing cookies @regression', async ({ page }) => {
    Logger.info('Navigating to Login page and signing in');
    await homePage.clickMyAccount();
    await homePage.clickLogin();
    await loginPage.login(
        config.email,
        config.password
    );

    Logger.info('Verifying successful initial login');
    await myAccountPage.expectMyAccountPage();

    Logger.info('Clearing context cookies to force session expiration');
    await page.context().clearCookies();

    Logger.info('Reloading page and waiting for network idle');
    await page.reload();
    await page.waitForLoadState('networkidle');

    Logger.info('Verifying redirection back to Login page and login button visibility');
    await expect(page).toHaveURL(/route=account\/login/);
    await loginPage.expectLoginButtonVisible();
});




   


   