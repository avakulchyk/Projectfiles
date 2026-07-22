/**
 * Test Case: End-to-End Test on Demo E-commerce Application
 *
 * Purpose:
 * This test simulates a complete user flow on an e-commerce site.
 * 
 * Steps:
 * 1) Register a new account
 * 2) Logout after registration
 * 3) Login with the same account
 * 4) Search for a product and add it to the shopping cart
 * 5) Verify cart contents
 * 6) Attempt checkout (disabled since feature isn't available on demo site)
 */

import { test, expect, Page } from '@playwright/test';
import { RegistrationPage } from '../pages/RegistrationPage';
import { HomePage } from '../pages/HomePage';
import { RandomDataUtil } from '../utils/randomDataGenerator';
import { TestConfig } from '../test.config';
import { LogoutPage } from '../pages/LogoutPage';
import { LoginPage } from '../pages/LoginPage';
import { MyAccountPage } from '../pages/MyAccountPage';
import { SearchResultsPage } from '../pages/SearchResultsPage';
import { ProductPage } from '../pages/ProductPage';
import { ShoppingCartPage } from '../pages/ShoppingCartPage';
import { CheckoutPage } from '../pages/CheckoutPage';
import { Logger } from '../utils/Logger';

// This is the main test block that runs the entire flow
test('execute end-to-end test flow @end-to-end', async ({ page }) => {
    const config = new TestConfig();

    Logger.info('Navigating to the application home page');
    await page.goto(config.appUrl);

    // Step 1: Register a new account and capture the generated email
    Logger.info('Starting Step 1: Account Registration');
    let registeredEmail: string = await performRegistration(page);
    Logger.info(`✅ Registration completed with email: ${registeredEmail}`);

    // Step 2: Logout after successful registration
    Logger.info('Starting Step 2: User Logout');
    await performLogout(page);
    Logger.info('✅ Logout completed!');

    // Step 3: Login with the registered email
    Logger.info('Starting Step 3: User Login');
    await performLogin(page, registeredEmail);
    Logger.info('✅ Login completed!');

    // Step 4: Search for a product and add it to the cart
    Logger.info('Starting Step 4: Search & Add Product to Cart');
    await addProductToCart(page);
    Logger.info('✅ Product added to cart!');

    // Step 5: Verify the contents of the shopping cart
    Logger.info('Starting Step 5: Shopping Cart Verification');
    await verifyShoppingCart(page);
    Logger.info('✅ Shopping cart verification completed!');

    // Step 6: Perform checkout (skipped for demo site)
    // await performCheckout(page);
});


// Function to register a new user account
async function performRegistration(page: Page): Promise<string> {
    Logger.info('Navigating to Registration page');
    const homePage = new HomePage(page);
    await homePage.clickMyAccount();       // Click "My Account" link
    await homePage.clickRegister();        // Click "Register" option

    const registrationPage = new RegistrationPage(page);

    let firstName = RandomDataUtil.getFirstName();
    let lastName = RandomDataUtil.getlastName();
    let email: string = RandomDataUtil.getEmail();

    Logger.info(`Filling registration details for ${firstName} ${lastName}`);
    await registrationPage.setFirstName(firstName);
    await registrationPage.setLastName(lastName);
    await registrationPage.setEmail(email);
    await registrationPage.setPassword("test123");

    Logger.info('Accepting Privacy Policy and submitting registration form');
    await registrationPage.setPrivacyPolicy();  // Accept the privacy policy
    await registrationPage.clickContinue();     // Submit the registration form

    Logger.info('Verifying registration success confirmation message');
    const confirmationMsg = await registrationPage.getConfirmationMsg();
    expect(confirmationMsg).toContain('Your Account Has Been Created!');

    return email; // Return the email for later use in login
}


// Function to log out the current user
async function performLogout(page: Page) {
    Logger.info('Clicking logout button');
    const myAccountPage = new MyAccountPage(page);
    const logoutPage: LogoutPage = await myAccountPage.clickLogout();

    Logger.info('Verifying Continue button is visible on Logout page');
await logoutPage.expectContinueButtonVisible();

    Logger.info('Clicking Continue and verifying redirection to Home Page');
    const homePage = await logoutPage.clickContinue();
    expect(await homePage.isHomePageExists()).toBe(true);
}


// Function to log in using the registered email
async function performLogin(page: Page, email: string) {
    const config = new TestConfig();
    Logger.info('Reloading home page before logging in');
    await page.goto(config.appUrl);  // Reload home page

    Logger.info('Navigating to Login page');
    const homePage = new HomePage(page);
    await homePage.clickMyAccount();
    await homePage.clickLogin();

    Logger.info(`Logging in with registered email: ${email}`);
    const loginPage = new LoginPage(page);
    await loginPage.login(email, "test123");  // Use the registered credentials

    Logger.info('Verifying redirection to My Account page');
    const myAccountPage = new MyAccountPage(page);
    await myAccountPage.expectMyAccountPage();
}


// Function to search for a product and add it to cart
async function addProductToCart(page: Page) {
    const homePage = new HomePage(page);

    const config = new TestConfig();
    const productName: string = config.productName;
    const productQuantity: string = config.productQuantity;

    Logger.info(`Searching for product: "${productName}"`);
    await homePage.enterProductName(productName);
    await homePage.clickSearch();  // Click on search button

    const searchResultsPage = new SearchResultsPage(page);

    Logger.info('Verifying search results page and product presence');
    expect(await searchResultsPage.isSearchResultsPageExists()).toBeTruthy();
    expect(await searchResultsPage.isProductExist(productName)).toBeTruthy();

    Logger.info(`Selecting product "${productName}" and setting quantity to ${productQuantity}`);
    const productPage = await searchResultsPage.selectProduct(productName);
    await productPage?.setQuantity(productQuantity);

    Logger.info('Adding product to cart');
    await productPage?.addToCart();  // Add product to shopping cart

    await page.waitForTimeout(3000); // Wait to simulate user delay

    Logger.info('Verifying product addition confirmation message');
    expect(await productPage?.isConfirmationMessageVisible()).toBe(true);
}


// Function to verify the shopping cart details
async function verifyShoppingCart(page: Page) {
    const productPage = new ProductPage(page);

    Logger.info('Navigating to shopping cart from product header');
    await productPage.clickItemsToNavigateToCart();
    const shoppingCartPage: ShoppingCartPage = await productPage.clickViewCart();

    Logger.info('🛒 Navigated to shopping cart page');

    const config = new TestConfig();
    
    Logger.info(`Validating cart total price against expected value: ${config.totalPrice}`);
    await shoppingCartPage.expectTotalPrice(config.totalPrice);
}


// Function to perform checkout (disabled for demo site)
async function performCheckout(page: Page) {
    // Checkout feature is not implemented since it's a demo site.
    // Place your checkout flow logic here if backend is available.
}