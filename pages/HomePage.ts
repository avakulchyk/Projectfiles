import { Page, Locator, expect } from '@playwright/test';
import { LoginPage } from './LoginPage';

export class HomePage {

    private readonly page: Page;

    // ======================
    // Locators
    // ======================

    private readonly myAccountMenu: Locator;
    private readonly loginOption: Locator;
    private readonly registerOption: Locator;
    private readonly logoutOption: Locator;

    private readonly searchInput: Locator;
    private readonly searchButton: Locator;


    constructor(page: Page) {

        this.page = page;

        // My Account dropdown
        this.myAccountMenu = page.locator(
            'span:has-text("My Account")'
        );

        // Dropdown options
        this.loginOption = page.locator(
            'a[href*="route=account/login"]'
        );

        this.registerOption = page.locator(
            'a[href*="route=account/register"]'
        );

        this.logoutOption = page.locator(
            'a[href*="route=account/logout"]'
        );

        // Search
        this.searchInput = page.locator(
            'input[placeholder="Search"]'
        );

        this.searchButton = page.locator(
    "button[class='btn btn-light btn-lg']"
);
    }


    // ======================
    // Actions
    // ======================

    async clickMyAccount(): Promise<void> {

        await this.myAccountMenu.click();

    }


    async clickLogin(): Promise<LoginPage> {

        await this.loginOption.click();

        return new LoginPage(this.page);

    }


    async clickRegister(): Promise<void> {

        await this.registerOption.click();

    }


    async searchProduct(productName: string): Promise<void> {

        await this.searchInput.fill(productName);

        await this.searchButton.click();

        await this.page.waitForURL(/route=product\/search/);

    }


    // ======================
    // Verifications
    // ======================

    /**
     * Verify Home page is opened
     */
    async expectHomePage(): Promise<void> {

        await expect(this.searchInput)
            .toBeVisible();

    }


    /**
     * Verify Logout option is displayed
     * User is authenticated
     */
    async expectLogoutVisible(): Promise<void> {

        await expect(this.logoutOption)
            .toBeVisible();

    }


    /**
     * Verify Logout option is not displayed
     * Guest user
     */
    async expectLogoutNotDisplayed(): Promise<void> {

        await expect(this.logoutOption)
            .not.toBeVisible();

    }


    /**
     * Verify Login option is displayed
     * User is logged out
     */
    async expectLoginOptionVisible(): Promise<void> {

        await expect(this.loginOption)
            .toBeVisible();

        await expect(this.logoutOption)
            .not.toBeVisible();

    }

}