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
    const errorMessage = await loginPage.getloginErrorMessage();

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
    const errorMessage = await loginPage.getloginErrorMessage();

    expect(errorMessage).toContain(
        'Warning: No match for E-Mail Address and/or Password.'
    );
});