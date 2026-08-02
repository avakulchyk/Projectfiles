import { Page, Locator, expect } from '@playwright/test';
import { LogoutPage } from './LogoutPage';
import { ChangePasswordPage } from './ChangePasswordPage';

export class MyAccountPage {

    private readonly page: Page;

    // ======================
    // Locators
    // ======================

    private readonly msgHeading: Locator;
    private readonly lnkLogout: Locator;
    private readonly lnkChangePassword: Locator;


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


        // Change Password link
        this.lnkChangePassword = page.locator(
            "a.list-group-item[href*='route=account/password']"
        );

    }



    // ======================
    // Validations
    // ======================


    /**
     * Verify My Account page is displayed
     */
    async expectMyAccountPage(): Promise<void> {

        await expect(this.msgHeading)
            .toHaveText('My Account');

    }


    /**
     * Verify Logout link is visible
     */
    async expectLogoutLinkVisible(): Promise<void> {

        await expect(this.lnkLogout)
            .toBeVisible();

    }


    /**
     * Verify Change Password link is visible
     */
    async expectChangePasswordLinkVisible(): Promise<void> {

        await expect(this.lnkChangePassword)
            .toBeVisible();

    }



    // ======================
    // Actions
    // ======================


    /**
     * Navigate to Change Password page
     */
    async clickChangePassword(): Promise<ChangePasswordPage> {

        await this.lnkChangePassword.click();


        await expect(this.page)
            .toHaveURL(/route=account\/password/);


        return new ChangePasswordPage(this.page);

    }



    /**
     * Logout from application
     */
    async clickLogout(): Promise<LogoutPage> {

        await this.lnkLogout.click();


        await expect(this.page)
            .toHaveURL(/route=account\/logout/);


        return new LogoutPage(this.page);

    }

}