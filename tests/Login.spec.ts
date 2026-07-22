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
import { RandomDataUtil } from '../utils/randomDataGenerator';


let config: TestConfig;
let homePage: HomePage;
let loginPage: LoginPage;
let myAccountPage: MyAccountPage;


test.beforeEach(async ({ page }) => {

    config = new TestConfig();

    await page.goto(config.appUrl);

    homePage = new HomePage(page);
    loginPage = new LoginPage(page);
    myAccountPage = new MyAccountPage(page);

});


test.afterEach(async ({ page }) => {

    await page.close();

});


// Valid login

test('User login test @master @sanity @regression', async ({ page }) => {


    // Navigate to Login page
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Login
    await loginPage.login(
        config.email,
        config.password
    );

    // Verify successful login
    await expect(myAccountPage.pageHeading)
        .toHaveText('My Account');

    await expect(page)
        .toHaveURL(/route=account\/account/);

});


// Invalid credentials

test('Validate logging into the Application using invalid credentials @master @regression', async ({ page }) => {


    const user = RandomDataUtil.getUser();

    await homePage.clickMyAccount();
    await homePage.clickLogin();

    await loginPage.login(
        user.email,
        user.password
    );

    // Verify login failed
    await expect(page)
        .toHaveURL(/route=account\/login/);


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


    await homePage.clickMyAccount();

    await homePage.clickLogin();

    await loginPage.expectForgottenPasswordLinkVisible();

    await loginPage.clickForgottenPassword();

    await expect(page)
        .toHaveURL(/route=account\/forgotten/);

});


// Placeholders

test('Validate E-Mail Address and Password fields have the correct placeholder text @master @regression', async () => {


    await homePage.clickMyAccount();

    await homePage.clickLogin();

    await loginPage.expectPlaceholders();

});


// Browser back after login

test('Validate Logging into the Application and browsing back using Browser Back button @master @regression', async ({ page }) => {


    // Login
    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    // Verify login
    await myAccountPage.expectMyAccountPage();


    // Browser back
    await loginPage.goBack();


    // Verify login page
    await expect(page)
        .toHaveURL(/route=account\/login/);


    // Verify session expired message
    await loginPage.expectSessionExpiredMessage();


    // Login again
    await loginPage.login(
        config.email,
        config.password
    );


    // Verify successful login again
    await myAccountPage.expectMyAccountPage();

});


// Account lock after failed login attempts

test('Validate account lock after five unsuccessful login attempts @master @regression', async ({ page }) => {


    const user = RandomDataUtil.getUser();


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    for (let attempt = 1; attempt <= 5; attempt++) {


        await loginPage.login(
            user.email,
            user.password
        );


        await expect(page)
            .toHaveURL(/route=account\/login/);



        if (attempt < 5) {


            await loginPage.expectLoginErrorMessage(
                'Warning: No match for E-Mail Address and/or Password.'
            );


        } else {


            await loginPage.expectLoginErrorMessage(
                'Warning: Your account has exceeded allowed number of login attempts. Please try again in 1 hour.'
            );

        }

    }

});



// Change password and login with new password

test('Validate logging into the application after changing the password @master @sanity @regression', async ({ page }) => {


    const newPassword = 'NewPassword@12345678';


    // Login with current password
    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    // Verify successful login
    await myAccountPage.expectMyAccountPage();



    // Open Change Password page
    const changePasswordPage =
        await myAccountPage.clickChangePassword();



    // Verify Change Password page
    await changePasswordPage.expectChangePasswordPage();



    // Change password
    await changePasswordPage.changePassword(
        newPassword
    );



    // Logout
    await homePage.clickMyAccount();


    const logoutPage =
        await myAccountPage.clickLogout();



    // Verify logout page
    await logoutPage.expectLogoutPage();



    // Navigate to Login page
    await homePage.clickMyAccount();

    await homePage.clickLogin();



    // Login with new password
    await loginPage.login(
        config.email,
        newPassword
    );



    // Verify login with new password
    await myAccountPage.expectMyAccountPage();


});



// Password masking

test('Validate password field hides entered text @master @sanity @regression', async ({ page }) => {


    // Navigate to Login page

    await homePage.clickMyAccount();

    await homePage.clickLogin();



    // Enter password

    await loginPage.setPassword(
        config.password
    );



    // Verify password is masked

    await loginPage.expectPasswordFieldMasked();

});

// Session expiration by clearing cookies
test('Validate timeout of the Login Session by clearing cookies @regression', async ({ page }) => {

    // Login
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    await loginPage.login(
        config.email,
        config.password
    );

    // Verify login
    await myAccountPage.expectMyAccountPage();


    // Expire session
    await page.context().clearCookies();

    await page.reload();
    await page.waitForLoadState('networkidle');


    // Verify redirect to Login page
    await expect(page)
        .toHaveURL(/route=account\/login/);

    await loginPage.expectLoginButtonVisible();

});




   