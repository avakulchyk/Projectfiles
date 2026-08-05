import { test } from '@playwright/test';
import { TestConfig } from '../test.config';
import { HomePage } from '../pages/HomePage';
import { SearchResultsPage } from '../pages/SearchResultsPage';
import { ProductPage } from '../pages/ProductPage';
import { Logger } from '../utils/Logger';

let config: TestConfig;
let homePage: HomePage;
let searchResultsPage: SearchResultsPage;
let productPage: ProductPage;

test.beforeEach(async ({ page }) => {

    Logger.info('Initializing test configuration and navigating to app URL');

    config = new TestConfig();

    await page.goto(config.appUrl);

    homePage = new HomePage(page);
    searchResultsPage = new SearchResultsPage(page);
    productPage = new ProductPage(page);

});


test('Add product to cart @master @regression', async () => {

    const productName = config.productName;
    const quantity = config.productQuantity;


    Logger.info(`Searching for product "${productName}"`);

    await homePage.searchProduct(productName);


    Logger.info('Verifying Search Results page is displayed');

    await searchResultsPage.expectSearchResultsPage();


    Logger.info(`Verifying product "${productName}" exists in search results`);

    await searchResultsPage.expectProductExists(productName);


    Logger.info(`Selecting product "${productName}"`);

    await searchResultsPage.selectProduct(productName);


    Logger.info(`Setting product quantity to ${quantity}`);

    await productPage.setQuantity(quantity);


    Logger.info('Adding product to cart');

    await productPage.addToCart();


    Logger.info('Verifying success confirmation message is visible');

    await productPage.isConfirmationMessageVisible();

});


