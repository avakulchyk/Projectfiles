import { Page, Locator, expect } from '@playwright/test';
import { LoginPage } from './LoginPage';

export class HomePage {

    private readonly page: Page;

    // Account
    private readonly myAccountMenu: Locator;
    private readonly loginOption: Locator;
    private readonly registerOption: Locator;
    private readonly logoutOption: Locator;

    // Search
    private readonly searchInput: Locator;
    private readonly searchButton: Locator;
    private readonly searchResults: Locator;


    constructor(page: Page) {

        this.page = page;

        // Account menu
        this.myAccountMenu = page.locator(
            '#top li.list-inline-item a.dropdown-toggle:has-text("My Account")'
        );

        this.loginOption = page.locator(
            '#top a[href*="route=account/login"]'
        );

        this.registerOption = page.locator(
            '#top a[href*="route=account/register"]'
        );

        this.logoutOption = page.locator(
            '#top a[href*="route=account/logout"]'
        );


        // Search
        this.searchInput = page.locator(
            'input[placeholder="Search"]'
        );

        this.searchButton = page.locator(
      'button:has(.fa-solid.fa-magnifying-glass)'
  );

        this.searchResults = page.locator(
            '#product-search'
        );
    }


    async openAccountMenu(): Promise<void> {

        await expect(this.myAccountMenu)
            .toBeVisible();

        await this.myAccountMenu.click();
    }


    async closeAccountMenu(): Promise<void> {

        if (await this.logoutOption.isVisible()) {
            await this.myAccountMenu.click();
        }
    }


    async clickLogin(): Promise<LoginPage> {

        await this.openAccountMenu();

        await expect(this.loginOption)
            .toBeVisible();

        await Promise.all([
            this.page.waitForURL(/route=account\/login/),
            this.loginOption.click()
        ]);

        return new LoginPage(this.page);
    }


    async clickRegister(): Promise<void> {

        await this.openAccountMenu();

        await expect(this.registerOption)
            .toBeVisible();

        await this.registerOption.click();
    }


    async logout(): Promise<void> {

        await this.openAccountMenu();

        await expect(this.logoutOption)
            .toBeVisible();

        await this.logoutOption.click();
    }


    async expectLogoutVisible(): Promise<void> {

        await this.openAccountMenu();

        await expect(this.logoutOption)
            .toBeVisible();
    }


    async enterProductName(productName: string): Promise<void> {

        await this.closeAccountMenu();

        await expect(this.searchInput)
            .toBeVisible();

        await this.searchInput.fill(productName);
    }


    async clickSearch(): Promise<void> {

        await expect(this.searchButton)
            .toBeEnabled();

        await this.searchButton.click();

        await this.page.waitForLoadState('networkidle');
    }


    async searchProduct(productName: string): Promise<void> {

        await this.enterProductName(productName);

        await this.clickSearch();
    }


    async expectSearchResultsVisible(): Promise<void> {

        await expect(this.searchResults)
            .toBeVisible();
    }


    async expectSearchFieldEmpty(): Promise<void> {

        await expect(this.searchInput)
            .toHaveValue('');
    }

}