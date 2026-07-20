import { Page, Locator, expect } from '@playwright/test';

export class ChangePasswordPage {

    private readonly page: Page;

    private readonly pageHeading: Locator;
    private readonly passwordInput: Locator;
    private readonly confirmPasswordInput: Locator;
    private readonly continueButton: Locator;
    private readonly successMessage: Locator;
    private readonly errorMessage: Locator;


    constructor(page: Page) {

        this.page = page;

        this.pageHeading = page.locator(
            'h1:has-text("Change Password")'
        );

        this.passwordInput = page.locator(
            '#input-password'
        );

        this.confirmPasswordInput = page.locator(
            '#input-confirm'
        );

        this.continueButton = page.locator('button.btn.btn-primary:has-text("Continue")');

        this.successMessage = page.locator(
            '.alert.alert-success'
        );

        this.errorMessage = page.locator(
            '.alert.alert-danger'
        );
    }


    async expectChangePasswordPage(): Promise<void> {

        await expect(this.pageHeading)
            .toBeVisible();
    }


    async changePassword(password: string): Promise<void> {

        await this.passwordInput.fill(password);

        await this.confirmPasswordInput.fill(password);

        await expect(this.continueButton)
            .toBeEnabled();

        await this.continueButton.click();

        await this.expectPasswordChangedSuccessMessage();
    }


    async expectPasswordChangedSuccessMessage(): Promise<void> {

    await expect(this.successMessage)
        .toBeVisible({
            timeout: 10000
        });

    await expect(this.successMessage)
        .toContainText(
            /Success: Your password has been successfully updated/
        );
}


    async expectPasswordChangeError(): Promise<void> {

        await expect(this.errorMessage)
            .toBeVisible();
    }
}