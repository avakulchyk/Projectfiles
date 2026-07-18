import { Page, Locator, expect } from '@playwright/test';
import { LogoutPage } from './LogoutPage';

export class MyAccountPage {

    private readonly page: Page;

    private readonly msgHeading: Locator;
    private readonly lnkLogout: Locator;


    constructor(page: Page) {

        this.page = page;

        // My Account heading
        this.msgHeading = page.locator(
            'h1:has-text("My Account")'
        );

        // Sidebar Logout link
        this.lnkLogout = page.locator(
            "a.list-group-item[href*='route=account/logout']"
        );
    }


    async isMyAccountPageExists(): Promise<boolean> {

        return await this.msgHeading.isVisible();
    }


    async expectLogoutLinkVisible(): Promise<void> {

        await expect(this.lnkLogout)
            .toBeVisible();
    }


    async clickLogout(): Promise<LogoutPage> {

        await this.lnkLogout.click();

        await this.page.waitForLoadState(
            'networkidle'
        );

        return new LogoutPage(this.page);
    }
}