import { Page, Locator } from '@playwright/test';

export class HomePage {

    private readonly page: Page;

    // Locators
    private readonly lnkMyAccount: Locator;
    private readonly lnkRegister: Locator;
    private readonly linkLogin: Locator;
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

        // Login link from My Account dropdown
        this.linkLogin = page.locator(
            '#top a.dropdown-item[href*="route=account/login"]'
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


    async isHomePageExists(): Promise<boolean> {

        return await this.page.title()
            .then(title => title.length > 0);
    }


    async clickMyAccount(): Promise<void> {

        await this.lnkMyAccount.click();
    }


    async clickRegister(): Promise<void> {

        await this.lnkRegister.click();
    }


    async clickLogin(): Promise<void> {

        await this.linkLogin.click();
    }


    async enterProductName(pName: string): Promise<void> {

        await this.txtSearchbox.fill(pName);
    }


    async clickSearch(): Promise<void> {

        await this.btnSearch.click();
    }
}