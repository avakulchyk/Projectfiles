# Instructions

- Following Playwright test failed.
- Explain why, be concise, respect Playwright best practices.
- Provide a snippet of code with the fix, if possible.

# Test info

- Name: AccountRegistration.spec.ts >> User registration test @master @sanity @regression
- Location: tests/AccountRegistration.spec.ts:41:5

# Error details

```
Test timeout of 30000ms exceeded.
```

```
Error: locator.fill: Target page, context or browser has been closed
Call log:
  - waiting for locator('#input-telephone')

```

# Test source

```ts
  1   | import { Page, Locator, expect } from '@playwright/test';
  2   | 
  3   | export class RegistrationPage {
  4   |     private readonly page: Page;
  5   |     
  6   |     // Locators using CSS selectors
  7   |     private readonly txtFirstname: Locator;
  8   |     private readonly txtLastname: Locator;
  9   |     private readonly txtEmail: Locator;
  10  |     private readonly txtTelephone: Locator;
  11  |     private readonly txtPassword: Locator;
  12  |     private readonly txtConfirmPassword: Locator;
  13  |     private readonly chkdPolicy: Locator;
  14  |     private readonly btnContinue: Locator;
  15  |     private readonly msgConfirmation: Locator;
  16  | 
  17  |     constructor(page: Page) {
  18  |         this.page = page;
  19  |         
  20  |         // Initialize locators with CSS selectors
  21  |         this.txtFirstname = page.locator('#input-firstname');
  22  |         this.txtLastname = page.locator('#input-lastname');
  23  |         this.txtEmail = page.locator('#input-email');
  24  |         this.txtTelephone = page.locator('#input-telephone');
  25  |         this.txtPassword = page.locator('#input-password');
  26  |         this.txtConfirmPassword = page.locator('#input-confirm');
  27  |         this.chkdPolicy = page.locator('input[name="agree"]');
  28  |         this.btnContinue = page.locator('input[value="Continue"]');
  29  |         this.msgConfirmation = page.locator('h1:has-text("Your Account Has Been Created!")');
  30  |     }
  31  | 
  32  |     /**
  33  |      * Sets the first name in the registration form
  34  |      * @param fname - First name to enter
  35  |      */
  36  |     async setFirstName(fname: string): Promise<void> {
  37  |         await this.txtFirstname.fill(fname);
  38  |     }
  39  | 
  40  |     /**
  41  |      * Sets the last name in the registration form
  42  |      * @param lname - Last name to enter
  43  |      */
  44  |     async setLastName(lname: string): Promise<void> {
  45  |         await this.txtLastname.fill(lname);
  46  |     }
  47  | 
  48  |     /**
  49  |      * Sets the email in the registration form
  50  |      * @param email - Email to enter
  51  |      */
  52  |     async setEmail(email: string): Promise<void> {
  53  |         await this.txtEmail.fill(email);
  54  |     }
  55  | 
  56  |     /**
  57  |      * Sets the telephone number in the registration form
  58  |      * @param tel - Telephone number to enter
  59  |      */
  60  |     async setTelephone(tel: string): Promise<void> {
> 61  |         await this.txtTelephone.fill(tel);
      |                                 ^ Error: locator.fill: Target page, context or browser has been closed
  62  |     }
  63  | 
  64  |     /**
  65  |      * Sets the password in the registration form
  66  |      * @param pwd - Password to enter
  67  |      */
  68  |     async setPassword(pwd: string): Promise<void> {
  69  |         await this.txtPassword.fill(pwd);
  70  |     }
  71  | 
  72  |     /**
  73  |      * Sets the confirm password in the registration form
  74  |      * @param pwd - Password to confirm
  75  |      */
  76  |     async setConfirmPassword(pwd: string): Promise<void> {
  77  |         await this.txtConfirmPassword.fill(pwd);
  78  |     }
  79  | 
  80  |     /**
  81  |      * Checks the privacy policy checkbox
  82  |      */
  83  |     async setPrivacyPolicy(): Promise<void> {
  84  |         await this.chkdPolicy.check();
  85  |     }
  86  | 
  87  |     /**
  88  |      * Clicks the Continue button
  89  |      */
  90  |     async clickContinue(): Promise<void> {
  91  |         await this.btnContinue.click();
  92  |     }
  93  | 
  94  |     /**
  95  |      * Gets the confirmation message text
  96  |      * @returns Promise<string> - Confirmation message text
  97  |      */
  98  |     async getConfirmationMsg(): Promise<string> {
  99  |         return await this.msgConfirmation.textContent() ?? '';
  100 |     }
  101 | 
  102 |     /**
  103 |      * Complete registration workflow
  104 |      * @param userData - Object containing registration data
  105 |      */
  106 |     async completeRegistration(userData: {
  107 |         firstName: string;
  108 |         lastName: string;
  109 |         email: string;
  110 |         telephone: string;
  111 |         password: string;
  112 |     }): Promise<void> {
  113 |         await this.setFirstName(userData.firstName);
  114 |         await this.setLastName(userData.lastName);
  115 |         await this.setEmail(userData.email);
  116 |         await this.setTelephone(userData.telephone);
  117 |         await this.setPassword(userData.password);
  118 |         await this.setConfirmPassword(userData.password);
  119 |         await this.setPrivacyPolicy();
  120 |         await this.clickContinue();
  121 |         await expect(this.msgConfirmation).toBeVisible();
  122 |     }
  123 | }
  124 | 
```