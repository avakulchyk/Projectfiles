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

test('Add product to cart test @master @regression', async ({ page }) => {
  const productName = config.productName;
  const quantity = config.productQuantity;

  Logger.info(`Step 2 & 3: Entering product name "${productName}" in search box and clicking Search`);
  await homePage.enterProductName(productName);
  await homePage.clickSearch();

  Logger.info('Step 4: Verifying Search Results page is displayed');
  expect(await searchResultsPage.isSearchResultsPageExists()).toBeTruthy();

  Logger.info(`Step 5: Verifying product "${productName}" exists in search results`);
  expect(await searchResultsPage.isProductExist(productName)).toBeTruthy();

  if (await searchResultsPage.isProductExist(productName)) {
    Logger.info(`Step 6 & 7: Selecting product "${productName}", setting quantity to ${quantity}, and adding to cart`);
    await searchResultsPage.selectProduct(productName);
    await productPage.setQuantity(quantity); // Set quantity
    await productPage.addToCart();           // Add to cart

    Logger.info('Step 8: Asserting success confirmation message is visible');
    expect(await productPage.isConfirmationMessageVisible()).toBeTruthy();
  }
});

