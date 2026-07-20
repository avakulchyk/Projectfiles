/**
 * Test Case: Login with Valid Credentials
 * 
 * Tags: @master @sanity @regression
 * 
 * Steps:
 * 1) Navigate to the application URL
 * 2) Navigate to Login page via Home page
 * 3) Enter valid credentials and log in
 * 4) Verify successful login by checking 'My Account' page presence
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


// This hook runs before each test
test.beforeEach(async ({ page }) => {
  config = new TestConfig(); // Load config (URL, credentials)
  await page.goto(config.appUrl); // Navigate to base URL

  // Initialize page objects
  homePage = new HomePage(page);
  loginPage = new LoginPage(page);
  myAccountPage = new MyAccountPage(page);
});

// Optional cleanup after each test
test.afterEach(async ({ page }) => {
  await page.close(); // Close browser tab (good practice in local/dev run)
});


test('User login test @master @sanity @regression', async ({ page }) => {

    //Navigate to Login page via Home page

    await homePage.clickMyAccount();
    await homePage.clickLogin();

    //Enter valid credentials and log in
    await loginPage.setEmail(config.email);
    await loginPage.setPassword(config.password);
    await loginPage.clickLogin();
    await expect(page).toHaveURL(/route=account\/account/);

    //alternatevly
    //await loginPage.login(config.email,config.password);

    //Verify successful login by checking 'My Account' page presence
    const isLoggedIn=await myAccountPage.isMyAccountPageExists();
    expect(isLoggedIn).toBeTruthy();

})

test('Validate logging into the Application using invalid credentials @master @regression', async ({ page }) => {

    const user = RandomDataUtil.getUser();

    // Navigate to Login page via Home page
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Enter invalid credentials and log in
    await loginPage.setEmail(user.email);
    await loginPage.setPassword(user.password);
    await loginPage.clickLogin();

    // Verify login failed and user stays on Login page
    await expect(page).toHaveURL(/route=account\/login/);

    // Verify error message is displayed
    const errorMessage = await loginPage.getLoginErrorMessage();

    expect(errorMessage).toContain(
        'Warning: No match for E-Mail Address and/or Password.'
    );

    // Verify user is not logged in
    const isLoggedIn = await myAccountPage.isMyAccountPageExists();
    expect(isLoggedIn).toBeFalsy();

});

test('Validate logging into the application using a valid email address and an invalid password @master @regression', async ({ page }) => {

    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Enter valid email
    await loginPage.setEmail(config.email);

    // Enter invalid password
    await loginPage.setPassword(RandomDataUtil.getPassword());

    // Click Login
    await loginPage.clickLogin();

    // Verify user remains on Login page
    await expect(page).toHaveURL(/route=account\/login/);

    // Verify error message
    const errorMessage = await loginPage.getLoginErrorMessage();

    expect(errorMessage).toContain(
        'Warning: No match for E-Mail Address and/or Password.'
    );
});
test("Validate 'Forgotten Password' link is available in the Login page and is working @master @sanity @regression", async ({ page }) => {

    // Navigate to Login page
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Verify Forgotten Password link is visible
    await loginPage.expectForgottenPasswordLinkVisible();

    // Click Forgotten Password link
    await loginPage.clickForgottenPassword();

    // Verify user is redirected to Forgotten Password page
    await expect(page).toHaveURL(/route=account\/forgotten/);
});

test('Validate E-Mail Address and Password fields have the correct placeholder text @master @regression', async () => {
  await homePage.clickMyAccount();
  await homePage.clickLogin();

  await loginPage.expectPlaceholders();
});

test('Validate Logging into the Application and browsing back using Browser Back button @master @regression', async ({ page }) => {

    // Step 1: Navigate to Login page
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Step 2: Login with valid credentials
    await loginPage.login(config.email, config.password);

    // Step 3: Verify successful login
    expect(await myAccountPage.isMyAccountPageExists()).toBeTruthy();

    // Step 4: Click browser Back button
    await loginPage.goBack();

    // Step 5: Verify user is redirected to Login page
    await expect(page).toHaveURL(/route=account\/login/);

    // Step 6: Verify session expired message
    const errorMessage = await loginPage.getLoginErrorMessage();

    expect(errorMessage).toContain(
        'Warning: Invalid token session. Please login again!'
    );

    // Step 7: Login again
    await loginPage.login(config.email, config.password);

    // Step 8: Verify user can access My Account again
    expect(await myAccountPage.isMyAccountPageExists()).toBeTruthy();

});

test('Validate Logging out from the Application and browsing back using Browser Back button @master @regression', async ({ page }) => {


    // Step 1: Login
    await homePage.clickMyAccount();
    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    // Step 2: Verify user logged in
    expect(
        await myAccountPage.isMyAccountPageExists()
    ).toBeTruthy();


    // Step 3: Logout
    const logoutPage = await myAccountPage.clickLogout();


    // Step 4: Verify logout page
    await logoutPage.expectLogoutPage();


    // Step 5: Browser Back
    await logoutPage.goBack();


    // Step 6: Try to open My Account
    await homePage.clickMyAccount();


    // Step 7: User should be redirected to Login page
    await expect(page)
        .toHaveURL(/route=account\/login/);

});

test('Validate account lock after five unsuccessful login attempts @master @regression', async ({ page }) => {

    const user = RandomDataUtil.getUser();


    await homePage.clickMyAccount();
    await homePage.clickLogin();

    for (let attempt = 1; attempt <= 5; attempt++) {

        await loginPage.login(user.email, user.password);

        await expect(page).toHaveURL(/route=account\/login/);

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

test('Validate logging into the application after changing the password @master @sanity @regression', async ({ page }) => {

    const newPassword = 'NewPassword@123456';


    // Step 1-5: Login with current credentials
    await homePage.clickMyAccount();

    await homePage.clickLogin();

    await loginPage.login(
        config.email,
        config.password
    );


    // Verify successful login
    await expect(page)
        .toHaveURL(/route=account\/account/);

    expect(
        await myAccountPage.isMyAccountPageExists()
    ).toBeTruthy();



    // Step 6: Open Change Password page
    const changePasswordPage =
        await myAccountPage.clickChangePassword();


    // Verify Change Password page is displayed
    await changePasswordPage.expectChangePasswordPage();



    // Step 7-8: Change password
    await changePasswordPage.changePassword(
        newPassword
    );



    // Step 9: Logout
    await homePage.clickMyAccount();

    const logoutPage =
        await myAccountPage.clickLogout();


    await logoutPage.expectLogoutPage();



    // Step 10: Navigate to Login page again
    await homePage.clickMyAccount();

    await homePage.clickLogin();



    // Step 11: Login with the new password
    await loginPage.login(
        config.email,
        newPassword
    );



    // Verify login with updated password
    await expect(page)
        .toHaveURL(/route=account\/account/);

    expect(
        await myAccountPage.isMyAccountPageExists()
    ).toBeTruthy();

});

test('Validate password field hides entered text @master @sanity @regression', async ({ page }) => {

    // Navigate to Login page via Home page
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    // Enter password into Password field
    await loginPage.setPassword(config.password);

    // Verify password field hides entered text
    await loginPage.expectPasswordFieldMasked();

});
