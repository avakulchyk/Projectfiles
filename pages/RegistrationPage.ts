import { Page, Locator, expect } from '@playwright/test';

export class RegistrationPage {
  private readonly page: Page;

  

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

  // Locators (STRICT: all private)
  private readonly firstNameInput: Locator;
  private readonly lastNameInput: Locator;
  private readonly emailInput: Locator;
  private readonly passwordInput: Locator;
  private readonly subscribeToggle: Locator;
  private readonly privacyPolicyCheckbox: Locator;
  private readonly continueButton: Locator;
  private readonly notificationAlerts: Locator;
  private readonly confirmationMsg: Locator;
  

  async getWarningMsg(): Promise<string> {
    return (await this.notificationAlerts.textContent()) ?? '';
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