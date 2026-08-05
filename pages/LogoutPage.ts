import { expect, Page, Locator } from '@playwright/test';
import { HomePage } from './HomePage';

export class LogoutPage {

    private readonly page: Page;

    // ======================
    // Locators
    // ======================

    private readonly btnContinue: Locator;
    private readonly txtLogoutHeading: Locator;
    private readonly breadcrumb: Locator;


    constructor(page: Page) {

        this.page = page;

        // Continue button
        this.btnContinue = page.locator(
            '.btn.btn-primary'
        );

        // Account Logout heading
        this.txtLogoutHeading = page.locator(
            'h1'
        );

        // Breadcrumb
        this.breadcrumb = page.locator(
            '.breadcrumb'
        );
    }


    // ======================
    // Actions
    // ======================

    /**
     * Click Continue button and navigate to Home page
     */
    async clickContinue(): Promise<HomePage> {

        await this.btnContinue.click();

        await this.page.waitForLoadState(
            'networkidle'
        );

        return new HomePage(this.page);
    }


    /**
     * Click browser Back button
     */
    async goBack(): Promise<void> {

        await this.page.goBack();

        await this.page.waitForLoadState(
            'networkidle'
        );
    }


    // ======================
    // Validations
    // ======================

    /**
     * Verify Account Logout page
     */
    async expectLogoutPage(): Promise<void> {

        // Verify URL
        await expect(this.page)
            .toHaveURL(/route=account\/logout/);


        // Verify page heading
        await expect(this.txtLogoutHeading)
            .toHaveText(
                'Account Logout'
            );
    }


    /**
     * Verify browser page title
     */
    async expectPageTitle(): Promise<void> {

        await expect(this.page)
            .toHaveTitle(
                'Account Logout'
            );
    }


    /**
     * Verify breadcrumb text
     */
    async expectBreadcrumb(): Promise<void> {

        await expect(this.breadcrumb)
            .toContainText(
                'Account Logout'
            );
    }


    /**
     * Verify Continue button visibility
     */
    async expectContinueButtonVisible(): Promise<void> {

        await expect(this.btnContinue)
            .toBeVisible();
    }


    // ======================
    // Getters
    // ======================

    get continueButton(): Locator {

        return this.btnContinue;
    }

}