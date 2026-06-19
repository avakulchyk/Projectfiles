import { Page, Locator, expect } from '@playwright/test';

export class RegistrationPage {
  private readonly page: Page;

  readonly firstNameInput: Locator;
  readonly lastNameInput: Locator;
  readonly emailInput: Locator;
  readonly passwordInput: Locator;
  readonly subscribeToggle: Locator;
  readonly privacyPolicyCheckbox: Locator;
  readonly continueButton: Locator;
  readonly notificationAlerts: Locator;
  readonly confirmationMsg: Locator;

  constructor(page: Page) {
    this.page = page;

    this.firstNameInput = page.locator('#input-firstname');
    this.lastNameInput = page.locator('#input-lastname');
    this.emailInput = page.locator('#input-email');
    this.passwordInput = page.locator('#input-password');
    this.subscribeToggle = page.locator('input[name="newsletter"][value="1"]');
    this.privacyPolicyCheckbox = page.locator('input[name="agree"]');
    this.continueButton = page.locator('button:has-text("Continue")');
    this.notificationAlerts = page.locator('.alert.alert-danger');
    this.confirmationMsg = page.locator("div[id='content'] h1");
  }

  async navigate(): Promise<void> {
    await this.page.goto(
      'http://localhost/opencart/upload/index.php?route=account/register&language=en-gb'
    );
  }

  async getUrl(): Promise<string> {
    return this.page.url();
  }

  async getWarningMsg(): Promise<string> {
    return (await this.notificationAlerts.textContent()) ?? '';
  }

  async warningMessage(expectedMessage: string): Promise<void> {
    await expect(this.notificationAlerts).toContainText(expectedMessage);
  }

  async setFirstName(fname: string): Promise<void> {
    await this.firstNameInput.fill(fname);
  }

  async setLastName(lname: string): Promise<void> {
    await this.lastNameInput.fill(lname);
  }

  async setEmail(email: string): Promise<void> {
    await this.emailInput.fill(email);
  }

  async setPassword(pwd: string): Promise<void> {
    await this.passwordInput.fill(pwd);
  }

  async setSubscribe(value: boolean): Promise<void> {
    const isChecked = await this.subscribeToggle.isChecked();

    if (value !== isChecked) {
      await this.subscribeToggle.click();
    }
  }

  async setPrivacyPolicy(): Promise<void> {
    await this.privacyPolicyCheckbox.check();
  }

  async clickContinue(): Promise<void> {
    await this.continueButton.click();
  }

  async getConfirmationMsg(): Promise<string> {
    return (await this.confirmationMsg.textContent()) ?? '';
  }
}