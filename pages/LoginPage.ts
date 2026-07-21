import { expect, Page, Locator } from '@playwright/test';

export class LoginPage {

    private readonly page: Page;

    // ======================
    // Locators
    // ======================

    private readonly txtEmailAddress: Locator;
    private readonly txtPassword: Locator;
    private readonly btnLogin: Locator;
    private readonly txtErrorMessage: Locator;
    private readonly lnkForgottenPassword: Locator;


    constructor(page: Page) {

        this.page = page;

        // Login form fields
        this.txtEmailAddress = page.locator('#input-email');

        this.txtPassword = page.locator('#input-password');


        // Login button
        this.btnLogin = page.locator(
            "button[class='btn btn-primary']"
        );


        // Error / warning messages
        this.txtErrorMessage = page.locator(
            '.alert.alert-danger.alert-dismissible'
        );


        // Forgotten password link
        this.lnkForgottenPassword = page.locator(
            "#form-login div[class='mb-3'] a"
        );
    }



    // ======================
    // Actions
    // ======================


    /**
     * Enter email address
     */
    async setEmail(email: string): Promise<void> {

        await this.txtEmailAddress.fill(email);
    }



    /**
     * Enter password
     */
    async setPassword(password: string): Promise<void> {

        await this.txtPassword.fill(password);
    }



    /**
     * Click Login button
     */
    async clickLogin(): Promise<void> {

        await this.btnLogin.click();

        await this.page.waitForLoadState(
            'networkidle'
        );
    }



    /**
     * Login with credentials
     */
    async login(
        email: string,
        password: string
    ): Promise<void> {

        await this.setEmail(email);

        await this.setPassword(password);

        await this.clickLogin();
    }



    /**
     * Click Forgotten Password link
     */
    async clickForgottenPassword(): Promise<void> {

        await this.lnkForgottenPassword.click();
    }



    /**
     * Browser Back button
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
     * Verify Login button is visible
     */
    async expectLoginButtonVisible(): Promise<void> {

        await expect(this.btnLogin)
            .toBeVisible();
    }



    /**
     * Verify password field is masked
     */
    async expectPasswordFieldMasked(): Promise<void> {

        await expect(this.txtPassword)
            .toHaveAttribute(
                'type',
                'password'
            );
    }



    /**
     * Verify Forgotten Password link is visible
     */
    async expectForgottenPasswordLinkVisible(): Promise<void> {

        await expect(this.lnkForgottenPassword)
            .toBeVisible();
    }



    /**
     * Verify email and password placeholders
     */
    async expectPlaceholders(): Promise<void> {

        await expect(this.txtEmailAddress)
            .toHaveAttribute(
                'placeholder',
                'E-Mail Address'
            );


        await expect(this.txtPassword)
            .toHaveAttribute(
                'placeholder',
                'Password'
            );
    }



    /**
     * Verify invalid credentials error
     */
    async expectLoginErrorMessage(p0: string): Promise<void> {

        await expect(this.txtErrorMessage)
            .toContainText(
                'Warning: No match for E-Mail Address and/or Password.'
            );
    }



    /**
     * Verify expired session message after browser back
     */
    async expectSessionExpiredMessage(): Promise<void> {

        await expect(this.txtErrorMessage)
            .toContainText(
                'Invalid token session. Please login again!'
            );
    }



    // ======================
    // Getters
    // ======================


    /**
     * Get error message text
     */
    async getLoginErrorMessage(): Promise<string | null> {

        return await this.txtErrorMessage.textContent();
    }

}