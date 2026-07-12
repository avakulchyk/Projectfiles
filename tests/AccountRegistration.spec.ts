/**
 * Test Case: Account Registration
 *
 * Tags: @master @sanity @regression
 */

import { test, expect } from '@playwright/test';
import { HomePage } from '../pages/HomePage';
import { RegistrationPage } from '../pages/RegistrationPage';
import { RandomDataUtil } from '../utils/randomDataGenerator';
import { TestConfig } from '../test.config';
import { MyAccountPage } from '../pages/MyAccountPage';


let homePage: HomePage;
let registrationPage: RegistrationPage;
let config: TestConfig;


test.beforeEach(async ({ page }) => {

    config = new TestConfig();

    await page.goto(config.appUrl);

    homePage = new HomePage(page);
    registrationPage = new RegistrationPage(page);

});


test('User registration test with mandatory fields @master @sanity @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();

  await homePage.clickRegister();

  await registrationPage.setFirstName(user.firstName);

  await registrationPage.setLastName(user.lastName);

  await registrationPage.setEmail(user.email);

  await registrationPage.setPassword(user.password);

  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  const confirmationMsg = await registrationPage.getConfirmationMsg();
  
  expect(confirmationMsg)
        .toContain('Your Account Has Been Created!');
});


test('User registration with newsletter subscription @master @sanity @regression', async ({ page }) => {

    const user = RandomDataUtil.getUser();

    await homePage.clickMyAccount();
    await homePage.clickRegister();

    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);

    await registrationPage.setSubscribe(true);
    await registrationPage.setPrivacyPolicy();

    await registrationPage.clickContinue();

    const confirmationMsg = await registrationPage.getConfirmationMsg();

    expect(confirmationMsg)
        .toContain('Your Account Has Been Created!');
});


test('Validate empty Register Account form @regression', async () => {

    await homePage.clickMyAccount();

    await homePage.clickRegister();


    await registrationPage.clickContinue();


    await registrationPage.expectErrorMessageContains(
        'Warning: You must agree to the Privacy Policy!'
    );


    await registrationPage.expectFirstNameError();

    await registrationPage.expectLastNameError();

    await registrationPage.expectEmailError('E-Mail Address does not appear to be valid!');

    await registrationPage.expectPasswordError('Password must be between 6 and 40 characters!');

});


test('Register with existing email shows error @regression', async ({ page }) => {

    const user = RandomDataUtil.getUser();


    // First registration

    await homePage.clickMyAccount();

    await homePage.clickRegister();


    await registrationPage.setFirstName(user.firstName);

    await registrationPage.setLastName(user.lastName);

    await registrationPage.setEmail(user.email);

    await registrationPage.setPassword(user.password);


    await registrationPage.setPrivacyPolicy();

    await registrationPage.clickContinue();


    const confirmationMsg =
        await registrationPage.getConfirmationMsg();


    expect(confirmationMsg)
        .toContain('Your Account Has Been Created!');


    // Logout

    const myAccountPage = new MyAccountPage(page);

    const logoutPage =
        await myAccountPage.clickLogout();


    await expect(logoutPage.continueButton)
        .toBeVisible();


    await logoutPage.clickContinue();


    // Register again with same email

    await homePage.clickMyAccount();

    await homePage.clickRegister();


    await registrationPage.setFirstName(user.firstName);

    await registrationPage.setLastName(user.lastName);

    await registrationPage.setEmail(user.email);

    await registrationPage.setPassword(user.password);


    await registrationPage.setPrivacyPolicy();

    await registrationPage.clickContinue();


    await registrationPage.expectErrorMessageContains(
        'Warning: E-Mail Address is already registered!'
    );
});

test('Register with empty first name shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName('');
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword(user.password);
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectFirstNameError();
});

test('Register with first name containing only spaces shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName('     ');
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword(user.password);
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectFirstNameError();
});

test('Register with first name longer than 32 characters shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  const longFirstName = 'A'.repeat(33);

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName(longFirstName);
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword(user.password);
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectFirstNameError();
});


test('Register with invalid email shows browser validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName(user.firstName);
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail('test@');
  await registrationPage.setPassword(user.password);
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectBrowserEmailError();
});

test('Register with password shorter than 6 characters shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName(user.firstName);
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword('12345'); // 5 characters
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectPasswordError(
    'Password must be between 6 and 40 characters!'
);
});

test('Register with empty password shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName(user.firstName);
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword('');
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectPasswordError(
    'Password must be between 6 and 40 characters!'
  );
});

test('Register with password containing only spaces shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName(user.firstName);
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword('      '); // 6 spaces
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectPasswordError(
    'Password must be between 6 and 40 characters!'
  );
});

test('Register with password longer than 40 characters shows validation error @regression', async ({ page }) => {

  const user = RandomDataUtil.getUser();

  const longPassword = 'A'.repeat(41);

  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.setFirstName(user.firstName);
  await registrationPage.setLastName(user.lastName);
  await registrationPage.setEmail(user.email);
  await registrationPage.setPassword(longPassword);
  await registrationPage.setPrivacyPolicy();

  await registrationPage.clickContinue();

  await registrationPage.expectPasswordError(
    'Password must be between 6 and 40 characters!'
  );
});

test('Validate Register Account placeholders @regression', async ({ page }) => {
  await homePage.clickMyAccount();
  await homePage.clickRegister();

  await registrationPage.expectFirstNamePlaceholder();
  await registrationPage.expectLastNamePlaceholder();
  await registrationPage.expectEmailPlaceholder();
  await registrationPage.expectPasswordPlaceholder();

});

test('User registration without accepting Privacy Policy and newsletter unchecked @master @regression', async () => {

    const user = RandomDataUtil.getUser();

    await homePage.clickMyAccount();
    await homePage.clickRegister();

    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);

    //Not obligatory to set newsletter subscription, but we can set it to false to be explicit
    await registrationPage.setSubscribe(false);

    // Don't check Privacy Policy

    await registrationPage.clickContinue();

    await registrationPage.expectPrivacyPolicyError();
});

test('Validate all mandatory fields are marked with red * symbol @master @sanity @regression', async () => {

  await homePage.clickMyAccount();

  await homePage.clickRegister();

  await registrationPage.expectMandatoryFieldsMarked();
});