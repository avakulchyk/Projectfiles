/**
 * Test Case: User Logout & Empty Login Validation
 * 
 * Tags: @master @sanity @regression
 * 
 * Steps:
 * 1) Navigate to the application URL
 * 2) Go to Login page from Home page
 * 3) Login with valid credentials
 * 4) Verify 'My Account' page
 * 5) Click on Logout link
 * 6) Click on Continue button
 * 7) Verify user is redirected to Home Page
 */

import { test, expect } from '@playwright/test';
import { TestConfig } from '../test.config';
import { HomePage } from '../pages/HomePage';
import { LoginPage } from '../pages/LoginPage';
import { MyAccountPage } from '../pages/MyAccountPage';
import { LogoutPage } from '../pages/LogoutPage';
import { Logger } from '../utils/Logger';

// Declare shared variables
let config: TestConfig;
let homePage: HomePage;
let loginPage: LoginPage;
let myAccountPage: MyAccountPage;
let logoutPage: LogoutPage;


// Setup before each test
test.beforeEach(async ({ page }) => {
  Logger.info('Initializing test configuration and navigating to app URL');
  config = new TestConfig(); // Load test config
  await page.goto(config.appUrl); // Step 1: Navigate to app URL

  // Initialize page objects
  homePage = new HomePage(page);
  loginPage = new LoginPage(page);
  myAccountPage = new MyAccountPage(page);
  //logoutPage = new LogoutPage(page);
});

// Optional cleanup after each test
test.afterEach(async ({ page }) => {
  Logger.info('Cleaning up and closing page instance');
  await page.close(); // Close the browser tab (helps keep tests clean)
});

test('User logout test @master @regression', async () => {

  Logger.info('Step 2: Navigating to Login page');

  await homePage.clickMyAccount();
  await homePage.clickLogin();


  Logger.info('Step 3: Performing login with valid credentials');

  await loginPage.login(
      config.email,
      config.password
  );


  Logger.info('Step 4: Verifying successful login to My Account page');

  await myAccountPage.expectMyAccountPage();


  Logger.info('Step 5: Clicking Logout');

  logoutPage = await myAccountPage.clickLogout();


  Logger.info('Step 6: Verifying Continue button is visible on Logout page');

  await logoutPage.expectContinueButtonVisible();


  Logger.info('Step 7: Clicking Continue and verifying redirection to Home Page');

  homePage = await logoutPage.clickContinue();

});


test("Validate Logging out by selecting Logout option from 'Right Column' options @master @sanity @regression", async () => {

    Logger.info('Step 1: Login with valid credentials');

    await homePage.clickMyAccount();
    await homePage.clickLogin();

    await loginPage.login(
        config.email,
        config.password
    );


    Logger.info('Step 2: Logout using My Account menu');

    const logoutPage = await myAccountPage.clickLogout();


    Logger.info('Step 3: Verify Account Logout page');

    await logoutPage.expectLogoutPage();


    Logger.info('Step 4: Navigate to Home page');

    homePage = await logoutPage.clickContinue();


    Logger.info('Step 5: Verify Login option is displayed instead of Logout');

    await homePage.expectLoginOptionVisible();

});
 