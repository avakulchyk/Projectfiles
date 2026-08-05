
/**
 * Test Suite: Product Search
 *
 * Tags: @master @regression
 *
 * Scenarios:
 * 1. Search existing product
 * 2. Search non-existing product
 * 3. Search with empty product name
 * 4. Search product after login
 */


import { test } from '@playwright/test';
import { HomePage } from '../pages/HomePage';
import { SearchResultsPage } from '../pages/SearchResultsPage';
import { TestConfig } from '../test.config';
import { Logger } from '../utils/Logger';


let config: TestConfig;
let homePage: HomePage;
let searchResultsPage: SearchResultsPage;

let productName: string;


const nonExistingProduct = 'NonExistingProduct123';



test.beforeEach(async ({ page }) => {


    Logger.info('Initializing test configuration');


    config = new TestConfig();

    productName = config.productName;


    Logger.info(`Navigating to application URL: ${config.appUrl}`);


    await page.goto(config.appUrl);


    homePage = new HomePage(page);

    searchResultsPage = new SearchResultsPage(page);


});



test('Verify user can search product by name @master @regression', async () => {


    Logger.info(`Searching for product: ${productName}`);


    await homePage.searchProduct(productName);


    Logger.info('Verifying search results page');


    await searchResultsPage.expectSearchResultsPage();


    Logger.info(`Verifying product exists: ${productName}`);


    await searchResultsPage.expectProductExists(productName);


    Logger.info('Product search completed successfully');


});



test('Validate searching with a non existing Product Name @master @regression', async () => {


    Logger.info(`Searching for non-existing product: ${nonExistingProduct}`);


    await homePage.searchProduct(nonExistingProduct);


    Logger.info('Verifying no products found message');


    await searchResultsPage.expectNoProductsFound();


    Logger.info('Non-existing product validation completed successfully');


});

test('Verify user can search for a product after login @master @regression', async () => {

    Logger.info('Opening Login page');

    await homePage.clickMyAccount();

    const loginPage = await homePage.clickLogin();


    Logger.info('Verifying Login page');

    await loginPage.expectLoginPage();


    Logger.info('Logging in with valid credentials');

    await loginPage.login(
        config.email,
        config.password
    );


    Logger.info(`Searching for product: ${productName}`);

    await homePage.searchProduct(productName);


    Logger.info('Verifying search results');

    await searchResultsPage.expectSearchResultsPage();

    await searchResultsPage.expectProductExists(productName);


    Logger.info('Search after login completed successfully');

});



test('Validate searching by providing a search criteria which results in multiple products @master @regression', async () => {

    Logger.info(`Searching products using criteria: ${config.searchCriteria}`);


    await homePage.searchProduct(config.searchCriteria);


    Logger.info('Verifying search results page');


    await searchResultsPage.expectSearchResultsPage();


    Logger.info('Verifying multiple products are displayed');


    await searchResultsPage.expectMultipleProductsDisplayed();


    Logger.info('Multiple product search completed successfully');

});

test('Validate search functionality field has placeholder @master @regression', async () => {

    Logger.info('Verifying Home page is displayed');

    await homePage.expectHomePage();


    Logger.info('Verifying search field placeholder');


    await homePage.expectSearchFieldPlaceholder();


    Logger.info('Search field placeholder validation completed successfully');

});