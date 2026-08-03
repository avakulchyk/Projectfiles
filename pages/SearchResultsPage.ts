import { Page, Locator, expect } from '@playwright/test';
import { ProductPage } from './ProductPage';

export class SearchResultsPage {

    private readonly page: Page;

    // Locators
    private readonly searchPageHeader: Locator;
    private readonly searchProducts: Locator;
    private readonly noProductsMessage: Locator;


    constructor(page: Page) {

        this.page = page;

        this.searchPageHeader = page.locator('#content h1');
        this.searchProducts = page.locator('h4 a');
        this.noProductsMessage = page.locator('#content p');

    }


    // Verify search results page is displayed
    async expectSearchResultsPage(): Promise<void> {

        await expect(this.page).toHaveURL(/route=product\/search/);

        await expect(this.searchPageHeader)
            .toBeVisible();

    }


    // Verify product exists in search results
    async expectProductExists(productName: string): Promise<void> {

        await expect(
            this.searchProducts.filter({ hasText: productName }).first()
        ).toBeVisible();

    }


    // Verify no products found message is displayed
    async expectNoProductsFound(): Promise<void> {

        await expect(this.noProductsMessage)
            .toContainText('There is no product that matches the search criteria.');

    }


    // Select product from search results
    async selectProduct(productName: string): Promise<ProductPage> {

        await this.searchProducts
            .filter({ hasText: productName })
            .first()
            .click();

        return new ProductPage(this.page);

    }


    // Get number of products in search results
    async getProductCount(): Promise<number> {

        return await this.searchProducts.count();

    }

}