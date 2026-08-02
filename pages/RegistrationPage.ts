import { Page, Locator, expect } from '@playwright/test';

export class RegistrationPage {
  //getNotificationAlert() {
    //throw new Error('Method not implemented.');
  //}

  private readonly page: Page;

  // ======================
  // Locators
  // ======================
  private readonly firstNameInput: Locator;
  private readonly firstNameError: Locator;

  private readonly lastNameInput: Locator;
  private readonly lastNameError: Locator;

  private readonly emailInput: Locator;
  private readonly emailError: Locator;

  private readonly passwordInput: Locator;
  private readonly passwordError: Locator;

  private readonly subscribeToggle: Locator;
  private readonly privacyPolicyCheckbox: Locator;
  private readonly continueButton: Locator;

  private readonly notificationAlerts: Locator;
  private readonly confirmationMsg: Locator;
  
  private readonly requiredMarks: Locator;



  constructor(page: Page) {
    this.page = page;

    // Inputs
    this.firstNameInput = page.locator('#input-firstname');
    this.lastNameInput = page.locator('#input-lastname');
    this.emailInput = page.locator('#input-email');
    this.passwordInput = page.locator('#input-password');

    // Required field indicators
    this.requiredMarks = page.locator('.row.mb-3.required label.col-form-label');

    // Validation messages
    this.firstNameError = page.locator(
      'text=First Name must be between 1 and 32 characters!'
    );

    this.lastNameError = page.locator(
      'text=Last Name must be between 1 and 32 characters!'
    );

    this.emailError = page.locator(
      'text=E-Mail Address does not appear to be valid!'
    );

    this.passwordError = page.locator(
      'text=Password must be between 6 and 40 characters!'
    );


    // Controls
    this.subscribeToggle = page.locator(
      'input[name="newsletter"][value="1"]'
    );

    this.privacyPolicyCheckbox = page.locator(
      'input[name="agree"]'
    );

    this.continueButton = page.locator(
      'button:has-text("Continue")'
    );


    // Messages
    this.notificationAlerts = page.locator(
      '.alert.alert-danger'
    );

    this.confirmationMsg = page.locator(
      'div#content h1'
    );
  }


  // ======================
  // Actions
  // ======================

  async setFirstName(firstName: string): Promise<void> {
    await this.firstNameInput.fill(firstName);
  }


  async setLastName(lastName: string): Promise<void> {
    await this.lastNameInput.fill(lastName);
  }


  async setEmail(email: string): Promise<void> {
    await this.emailInput.fill(email);
  }


  async setPassword(password: string): Promise<void> {
    await this.passwordInput.fill(password);
  }


  async setSubscribe(value: boolean): Promise<void> {
    const checked = await this.subscribeToggle.isChecked();

    if (checked !== value) {
      await this.subscribeToggle.click();
    }
  }


  async setPrivacyPolicy(): Promise<void> {
    await this.privacyPolicyCheckbox.check();
  }


  async clickContinue(): Promise<void> {
    await this.continueButton.click();
  }



  // ======================
  // Validation Assertions
  // ======================

  async expectFirstNameError(): Promise<void> {
    await expect(this.firstNameError)
      .toBeVisible();

    await expect(this.firstNameError)
      .toHaveText(
        'First Name must be between 1 and 32 characters!'
      );
  }


  async expectLastNameError(): Promise<void> {
    await expect(this.lastNameError)
      .toBeVisible();

    await expect(this.lastNameError)
      .toHaveText(
        'Last Name must be between 1 and 32 characters!'
      );
  }


  // OpenCart validation
  async expectEmailError(expectedMessage: string): Promise<void> {
    await expect(this.emailError)
      .toBeVisible();

    await expect(this.emailError)
      .toHaveText(expectedMessage);
  }
  
async expectPasswordError(p0: string): Promise<void> {
  await expect(this.passwordError)
    .toBeVisible();

  await expect(this.passwordError)
    .toHaveText(
      'Password must be between 6 and 40 characters!'
    );
}
async expectPrivacyPolicyError(): Promise<void> {
  await expect(this.notificationAlerts)
    .toContainText(
      'Warning: You must agree to the Privacy Policy!'
    );
}

async expectMandatoryFieldsMarked(): Promise<void> {

  await expect(this.requiredMarks)
    .toHaveCount(4);

  for (const label of await this.requiredMarks.all()) {

    await expect(label)
      .toBeVisible();

    const styles = await label.evaluate((el) => {
      const pseudo = getComputedStyle(el, '::before');

      return {
        content: pseudo.content
          .replace(/['"]/g, '')
          .trim(),

        color: pseudo.color
      };
    });

    expect(styles.content)
      .toBe('*');

    expect(styles.color)
      .toBe('rgb(255, 0, 0)');
  }
}
  // ======================
  // Browser HTML5 Validation
  // ======================

  async getBrowserEmailValidationMessage(): Promise<string> {
    return await this.emailInput.evaluate(
      (element: HTMLInputElement) =>
        element.validationMessage
    );
  }


  async expectBrowserEmailError(): Promise<void> {

    const validationMessage =
      await this.getBrowserEmailValidationMessage();

    expect(validationMessage)
      .not
      .toBe('');
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
  // Page Assertions
  // ======================

  async expectAccountCreated(): Promise<void> {

    await expect(this.confirmationMsg)
      .toBeVisible();

    await expect(this.confirmationMsg)
      .toHaveText(
        /Your Account Has Been Created!/
      );
  }

  async expectErrorMessageContains(text: string): Promise<void> {

    await expect(this.notificationAlerts)
      .toBeVisible();

    await expect(this.notificationAlerts)
      .toContainText(text);
  }


  // ======================
  // Placeholder Assertions
  // ======================

  async expectPlaceholder(
    locator: Locator,
    expectedPlaceholder: string
  ): Promise<void> {

    await expect(locator)
      .toHaveAttribute(
        'placeholder',
        expectedPlaceholder
      );
  }


  async expectFirstNamePlaceholder(): Promise<void> {
    await this.expectPlaceholder(
      this.firstNameInput,
      'First Name'
    );
  }


  async expectLastNamePlaceholder(): Promise<void> {
    await this.expectPlaceholder(
      this.lastNameInput,
      'Last Name'
    );
  }


  async expectEmailPlaceholder(): Promise<void> {
    await this.expectPlaceholder(
      this.emailInput,
      'E-Mail'
    );
  }


  async expectPasswordPlaceholder(): Promise<void> {
    await this.expectPlaceholder(
      this.passwordInput,
      'Password'
    );
  }



  // ======================
  // Getters
  // ======================

  async getConfirmationMsg(): Promise<string> {
    return (
      await this.confirmationMsg.textContent()
    )?.trim() ?? '';
  }


  async getWarningMsg(): Promise<string> {
    return (
      await this.notificationAlerts.textContent()
    )?.trim() ?? '';
  }
}