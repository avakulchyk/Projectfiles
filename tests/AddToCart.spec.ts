/**
 * Test Case: Add Product to Cart
 * 
 * Tags: @master @regression
 * 
 * Steps:
 * 1. Navigate to application URL
 * 2. Enter an existing product name in the search box
 * 3. Click the search button
 * 4. Verify the product appears in the search results
 * 5. Select the product
 * 6. Set quantity
 * 7. Add the product to the cart
 * 8. Verify the success message
 */

import { test, expect } from '@playwright/test';
import { TestConfig } from '../test.config';
import { HomePage } from '../pages/HomePage';
import { SearchResultsPage } from '../pages/SearchResultsPage';
import { ProductPage } from '../pages/ProductPage';
import { Logger } from '../utils/Logger';

// Shared instances
let config: TestConfig;
let homePage: HomePage;
let searchResultsPage: SearchResultsPage;
let productPage: ProductPage;

test.beforeEach(async ({ page }) => {
  Logger.info('Initializing test configuration and navigating to app URL');
  config = new TestConfig(); // Load test configuration
  await page.goto(config.appUrl); // Step 1: Open application URL

  // Initialize page objects
  homePage = new HomePage(page);
  searchResultsPage = new SearchResultsPage(page);
  productPage = new ProductPage(page);
});

test.afterEach(async ({ page }) => {
  Logger.info('Cleaning up and closing page instance');
  await page.close(); // Optional cleanup
});

test('Add product to cart test @master @regression', async () => {

    const productName = config.productName;
    const quantity = config.productQuantity;


    Logger.info(`Searching for product: ${productName}`);

    await homePage.enterProductName(productName);

    await homePage.clickSearch();


    Logger.info('Verifying Search Results page is displayed');

    await searchResultsPage.expectSearchResultsPage();


    Logger.info(`Verifying product "${productName}" exists`);

    await searchResultsPage.expectProductExists(productName);


    Logger.info(`Selecting product "${productName}"`);

    await searchResultsPage.selectProduct(productName);


    Logger.info(`Setting quantity: ${quantity}`);

    await productPage.setQuantity(quantity);


    Logger.info('Adding product to cart');

    await productPage.addToCart();


    Logger.info('Verifying success message');

    await productPage.isConfirmationMessageVisible();


});

