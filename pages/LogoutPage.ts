import { expect, Page, Locator } from '@playwright/test';
import { HomePage } from './HomePage';

export class LogoutPage {

    private readonly page: Page;

    private readonly btnContinue: Locator;
    private readonly txtLogoutHeading: Locator;


    constructor(page: Page) {

        this.page = page;

        this.btnContinue = page.locator(
            '.btn.btn-primary'
        );

        this.txtLogoutHeading = page.locator(
            'h1'
        );
    }


    // ======================
    // Actions
    // ======================

    async clickContinue(): Promise<HomePage> {

        await this.btnContinue.click();

        await this.page.waitForLoadState(
            'networkidle'
        );

        return new HomePage(this.page);
    }


    async goBack(): Promise<void> {

        await this.page.goBack();

        await this.page.waitForLoadState(
            'networkidle'
        );
    }


    // ======================
    // Validations
    // ======================

    async expectLogoutPage(): Promise<void> {

        await expect(this.page)
            .toHaveURL(/route=account\/logout/);


        await expect(this.txtLogoutHeading)
            .toContainText(
                'Account Logout'
            );
    }


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