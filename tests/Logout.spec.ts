/**
 * Test Suite: User Logout Validation
 *
 * Tags: @master @sanity @regression
 */

import { test } from '@playwright/test';
import { TestConfig } from '../test.config';
import { HomePage } from '../pages/HomePage';
import { LoginPage } from '../pages/LoginPage';
import { MyAccountPage } from '../pages/MyAccountPage';
import { LogoutPage } from '../pages/LogoutPage';
import { Logger } from '../utils/Logger';


let config: TestConfig;
let homePage: HomePage;
let loginPage: LoginPage;
let myAccountPage: MyAccountPage;
let logoutPage: LogoutPage;


test.beforeEach(async ({ page }) => {

    Logger.info("Initialize test data and open application");

    config = new TestConfig();

    await page.goto(config.appUrl);


    homePage = new HomePage(page);
    loginPage = new LoginPage(page);
    myAccountPage = new MyAccountPage(page);
    logoutPage = new LogoutPage(page);

});



test("User logout test @master @sanity @regression", async () => {


    Logger.info("Step 1: Login with valid credentials");


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    Logger.info("Step 2: Verify My Account page");


    await myAccountPage.expectMyAccountPage();



    Logger.info("Step 3: Logout");


    logoutPage = await myAccountPage.clickLogout();



    Logger.info("Step 4: Verify Logout page and return Home");


    await logoutPage.expectLogoutPage();

    await logoutPage.expectContinueButtonVisible();


    homePage = await logoutPage.clickContinue();


    await homePage.expectHomePage();

});



test("Validate logout using My Account menu option @master @sanity @regression", async () => {


    Logger.info("Step 1: Login with valid credentials");


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    await myAccountPage.expectMyAccountPage();



    Logger.info("Step 2: Logout");


    logoutPage = await myAccountPage.clickLogout();



    Logger.info("Step 3: Verify user is logged out");


    await logoutPage.expectLogoutPage();


    homePage = await logoutPage.clickContinue();


    await homePage.clickMyAccount();


    await homePage.expectLoginOptionVisible();

});



test("Validate logging out and browsing back @master @sanity @regression", async ({ page }) => {


    Logger.info("Step 1: Login with valid credentials");


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    await myAccountPage.expectMyAccountPage();



    Logger.info("Step 2: Logout");


    logoutPage = await myAccountPage.clickLogout();


    await logoutPage.expectLogoutPage();



    Logger.info("Step 3: Browser Back");


    await page.goBack({
        waitUntil: "networkidle"
    });



    Logger.info("Step 4: Verify user is not authenticated");


    await homePage.clickMyAccount();

    await homePage.expectLoginOptionVisible();

});



test("Validate logging in immediately after logout @master @sanity @regression", async () => {


    Logger.info("Step 1: Login");


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    await myAccountPage.expectMyAccountPage();



    Logger.info("Step 2: Logout");


    logoutPage = await myAccountPage.clickLogout();


    await logoutPage.expectLogoutPage();



    Logger.info("Step 3: Login again");


    homePage = await logoutPage.clickContinue();


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );


    Logger.info("Step 4: Verify successful login");


    await myAccountPage.expectMyAccountPage();

});



test("Validate Account Logout page details @master @sanity @regression", async () => {


    Logger.info("Step 1: Login");


    await homePage.clickMyAccount();

    await homePage.clickLogin();


    await loginPage.login(
        config.email,
        config.password
    );



    Logger.info("Step 2: Open Logout page");


    logoutPage = await myAccountPage.clickLogout();



    Logger.info("Step 3: Verify Logout page details");


    await logoutPage.expectLogoutPage();

    await logoutPage.expectPageTitle();

    await logoutPage.expectBreadcrumb();

    await logoutPage.expectContinueButtonVisible();

});



test("Validate Logout option is not displayed before login @master @sanity @regression", async () => {


    Logger.info("Step 1: Open My Account menu");


    await homePage.clickMyAccount();



    Logger.info("Step 2: Verify Logout is not available for guest user");


    await homePage.expectLogoutNotDisplayed();

});