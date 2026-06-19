import { Page, Locator, expect } from '@playwright/test';

export class RegistrationPage {
  private readonly page: Page;

  // ======================
  // Locators (always first)
  // ======================
  private readonly firstNameInput: Locator;
  private readonly firstNameError: Locator;
  private readonly lastNameInput: Locator;
  private readonly lastNameError: Locator;
  private readonly emailError: Locator;
  private readonly passwordError: Locator;
  private readonly emailInput: Locator;
  private readonly passwordInput: Locator;
  private readonly subscribeToggle: Locator;
  private readonly privacyPolicyCheckbox: Locator;
  private readonly continueButton: Locator;
  private readonly notificationAlerts: Locator;
  private readonly confirmationMsg: Locator;

  constructor(page: Page) {
    this.page = page;
  
    this.firstNameInput = page.locator('#input-firstname');
    this.lastNameInput = page.locator('#input-lastname');
    this.emailInput = page.locator('#input-email');
    this.passwordInput = page.locator('#input-password');

    this.firstNameError = page.locator('text=First Name must be between 1 and 32 characters!');
    this.lastNameError = page.locator('text=Last Name must be between 1 and 32 characters!');
    this.emailError = page.locator('text=E-Mail Address does not appear to be valid!');
    this.passwordError = page.locator('text=Password must be between 6 and 40 characters!');

    this.subscribeToggle = page.locator('input[name="newsletter"][value="1"]');
    this.privacyPolicyCheckbox = page.locator('input[name="agree"]');
    this.continueButton = page.locator('button:has-text("Continue")');

    this.notificationAlerts = page.locator('.alert.alert-danger');
    this.confirmationMsg = page.locator("div#content h1");
  }

  // ======================
  // Actions
  // ======================

  
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

    if (isChecked !== value) {
      await this.subscribeToggle.click();
    }
  }

  async setPrivacyPolicy(): Promise<void> {
    await this.privacyPolicyCheckbox.check();
  }

  async clickContinue(): Promise<void> {
    await this.continueButton.click();
  }

  async expectFirstNameError(): Promise<void> {
  await expect(this.firstNameError)
    .toContainText('First Name must be between 1 and 32 characters!');
}

async expectLastNameError(): Promise<void> {
  await expect(this.lastNameError)
    .toContainText('Last Name must be between 1 and 32 characters!');
}

async expectEmailError(): Promise<void> {
  await expect(this.emailError)
    .toContainText('E-Mail Address does not appear to be valid!');
}

async expectPasswordError(): Promise<void> {
  await expect(this.passwordError)
    .toContainText('Password must be between 6 and 40 characters!');
}

  // ======================
  // Workflow
  // ======================
  async register(user: {
    firstName: string;
    lastName: string;
    email: string;
    password: string;
  }): Promise<void> {

    await this.setFirstName(user.firstName);
    await this.setLastName(user.lastName);
    await this.setEmail(user.email);
    await this.setPassword(user.password);

    await this.setPrivacyPolicy();
    await this.clickContinue();
  }

  // ======================
  // Assertions
  // ======================
  async expectAccountCreated(): Promise<void> {
    await expect(this.confirmationMsg).toBeVisible();
    await expect(this.confirmationMsg).toHaveText(
      /Your Account Has Been Created!/
    );
  }

  async expectErrorMessageContains(text: string): Promise<void> {
    await expect(this.notificationAlerts).toBeVisible();
    await expect(this.notificationAlerts).toContainText(text);
  }

  // ======================
  // Getters (optional)
  // ======================
  async getConfirmationMsg(): Promise<string> {
    return (await this.confirmationMsg.textContent())?.trim() ?? '';
  }

  async getWarningMsg(): Promise<string> {
    return (await this.notificationAlerts.textContent())?.trim() ?? '';
  }
}