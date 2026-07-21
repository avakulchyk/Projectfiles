import { Page, Locator, expect } from '@playwright/test';

export class HomePage {

    private readonly page: Page;

    // ======================
    // Locators
    // ======================

    private readonly lnkMyAccount: Locator;
    private readonly lnkRegister: Locator;
    private readonly lnkLogin: Locator;
    private readonly lnkLogout: Locator;
    private readonly txtSearchbox: Locator;
    private readonly btnSearch: Locator;

    constructor(page: Page) {

        this.page = page;

        // My Account dropdown
        this.lnkMyAccount = page.locator(
            'span:has-text("My Account")'
        );

        // Register link
        this.lnkRegister = page.locator(
            'a[href*="route=account/register"]'
        );

        // Login link
        this.lnkLogin = page.locator(
            '#top a.dropdown-item[href*="route=account/login"]'
        );

        // Logout link
        this.lnkLogout = page.locator(
            '#top a.dropdown-item[href*="route=account/logout"]'
        );

        // Search field
        this.txtSearchbox = page.locator(
            'input[placeholder="Search"]'
        );

        // Search button
        this.btnSearch = page.locator(
            'button.btn.btn-light.btn-lg'
        );
    }

    // ======================
    // Actions
    // ======================

    async isHomePageExists(): Promise<boolean> {

        return (await this.page.title()).length > 0;
    }

    async clickMyAccount(): Promise<void> {

        await this.lnkMyAccount.click();
    }

    async clickRegister(): Promise<void> {

        await this.lnkRegister.click();
    }

    async clickLogin(): Promise<void> {

        await this.lnkLogin.click();
    }

    async enterProductName(productName: string): Promise<void> {

        await this.txtSearchbox.fill(productName);
    }

    async clickSearch(): Promise<void> {

        await this.btnSearch.click();
    }

    // ======================
    // Verifications
    // ======================

    async isUserLoggedIn(): Promise<boolean> {

        await this.clickMyAccount();

        return await this.lnkLogout.isVisible();
    }

    async expectUserLoggedIn(): Promise<void> {

        await this.clickMyAccount();

        await expect(this.lnkLogout)
            .toBeVisible();
    }
}