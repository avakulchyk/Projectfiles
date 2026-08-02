import { Page, Locator, expect } from '@playwright/test';
import { ProductPage } from './ProductPage';


export class SearchResultsPage {
    isSearchResultsPageExists(): any {
      throw new Error('Method not implemented.');
    }
    isProductExist(productName: string): any {
      throw new Error('Method not implemented.');
    }

    private readonly searchPageHeader: Locator;
    private readonly searchProducts: Locator;
    private readonly noProductsMessage: Locator;


    constructor(private readonly page: Page) {


        // ======================
        // Search Results Locators
        // ======================

        // Page title: Search - <keyword>
        this.searchPageHeader = page.locator(
            '#content h1'
        );


        // Product names in search results
        this.searchProducts = page.locator(
            'h4 a'
        );


        // Message displayed when no products found
        this.noProductsMessage = page.getByText(
            'There is no product that matches the search criteria.'
        );

    }


    // ======================
    // Assertions
    // ======================


    /**
     * Verify search results page is opened
     */
    async expectSearchResultsPage(): Promise<void> {

        await expect(this.searchPageHeader)
            .toContainText('Search -');

    }


    /**
     * Verify product exists in search results
     */
    async expectProductExists(productName: string): Promise<void> {

        await expect(
            this.searchProducts
                .filter({
                    hasText: productName
                })
                .first()
        )
        .toBeVisible();

    }


    /**
     * Verify no products found message is displayed
     */
    async expectNoProductsFound(): Promise<void> {

        await expect(this.noProductsMessage)
            .toBeVisible();

    }


    /**
     * Verify search page is displayed after empty search
     */
    async expectEmptySearchResults(): Promise<void> {

        await expect(this.searchPageHeader)
            .toContainText('Search');

    }



    // ======================
    // Actions
    // ======================


    /**
     * Open product details from search results
     */
    async selectProduct(productName: string): Promise<ProductPage> {

        await this.searchProducts
            .filter({
                hasText: productName
            })
            .first()
            .click();


        return new ProductPage(this.page);

    }



    // ======================
    // Helpers
    // ======================


    /**
     * Get count of products displayed
     */
    async getProductCount(): Promise<number> {

        return await this.searchProducts.count();

    }

}