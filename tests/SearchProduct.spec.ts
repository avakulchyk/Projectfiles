/**
 * Test Case: Product Search
 * 
 * Tags: @master @regression
 * 
 * Steps:
 * 1) Navigate to the application URL
 * 2) Enter the product name in the search field
 * 3) Click the search button
 * 4) Verify if the product is displayed in the search results
 */

import { test, expect } from '@playwright/test';
import { HomePage } from '../pages/HomePage';
import { SearchResultsPage } from '../pages/SearchResultsPage';
import { TestConfig } from '../test.config';
import { Logger } from '../utils/Logger';

// Declare reusable variables
let config: TestConfig;
let homePage: HomePage;
let searchResultsPage: SearchResultsPage;

// Playwright hook - runs before each test
test.beforeEach(async ({ page }) => {
  Logger.info('Initializing test configuration and navigating to app URL');
  config = new TestConfig(); // Load configuration values like URL and product name
  await page.goto(config.appUrl); // Step 1: Navigate to the application

  // Initialize page objects
  homePage = new HomePage(page);
  searchResultsPage = new SearchResultsPage(page);
});

// Playwright hook - runs after each test (optional cleanup)
test.afterEach(async ({ page }) => {
  Logger.info('Cleaning up and closing page instance');
  await page.close(); // Closes the browser tab after test
});

test('Product search test @master @regression', async () => {
  const productName = config.productName;

  Logger.info(`Step 2 & 3: Entering product name "${productName}" and clicking Search`);
  await homePage.enterProductName(productName);
  await homePage.clickSearch();

  Logger.info('Step 4: Verifying Search Results page loaded');
  expect(await searchResultsPage.isSearchResultsPageExists()).toBeTruthy();

  Logger.info(`Step 5: Validating if product "${productName}" appears in search results`);
  const isProductFound = await searchResultsPage.isProductExist(productName);
  expect(isProductFound).toBeTruthy();
});
