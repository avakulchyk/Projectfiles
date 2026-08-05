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
import { Logger } from '../utils/Logger';

let homePage: HomePage;
let registrationPage: RegistrationPage;
let config: TestConfig;

test.beforeEach(async ({ page }) => {
    Logger.info('Initializing test configuration and navigating to app URL');
    config = new TestConfig();

    await page.goto(config.appUrl);

    homePage = new HomePage(page);
    registrationPage = new RegistrationPage(page);
});

test('User registration test with mandatory fields @master @sanity @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();
    Logger.info(`Generated random user: ${user.email}`);

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Filling in registration form mandatory fields');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();

    Logger.info('Submitting registration form');
    await registrationPage.clickContinue();

    Logger.info('Verifying account creation confirmation message');
    const confirmationMsg = await registrationPage.getConfirmationMsg();
    expect(confirmationMsg).toContain('Your Account Has Been Created!');
});

test('User registration with newsletter subscription @master @sanity @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();
    Logger.info(`Generated random user: ${user.email}`);

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Filling in registration form with newsletter option enabled');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setSubscribe(true);
    await registrationPage.setPrivacyPolicy();

    Logger.info('Submitting registration form');
    await registrationPage.clickContinue();

    Logger.info('Verifying account creation confirmation message');
    const confirmationMsg = await registrationPage.getConfirmationMsg();
    expect(confirmationMsg).toContain('Your Account Has Been Created!');
});

test('Validate empty Register Account form @regression', async () => {
    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting empty registration form');
    await registrationPage.clickContinue();

    Logger.info('Verifying validation errors for all required fields');
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
    Logger.info(`Generated random user: ${user.email}`);

    Logger.info('Registering initial user');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    const confirmationMsg = await registrationPage.getConfirmationMsg();
    expect(confirmationMsg).toContain('Your Account Has Been Created!');

    Logger.info('Logging out newly registered user');
    const myAccountPage = new MyAccountPage(page);
    const logoutPage = await myAccountPage.clickLogout();
    await expect(logoutPage.continueButton).toBeVisible();
    await logoutPage.clickContinue();

    Logger.info('Attempting second registration with the same email address');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying duplicate email error message');
    await registrationPage.expectErrorMessageContains(
        'Warning: E-Mail Address is already registered!'
    );
});

test('Register with empty first name shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();
    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with an empty first name');
    await registrationPage.setFirstName('');
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying first name validation error');
    await registrationPage.expectFirstNameError();
});

test('Register with first name containing only spaces shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();
    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with spaces-only first name');
    await registrationPage.setFirstName('     ');
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying first name validation error');
    await registrationPage.expectFirstNameError();
});

test('Register with first name longer than 32 characters shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();
    const longFirstName = 'A'.repeat(33);

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with first name > 32 characters');
    await registrationPage.setFirstName(longFirstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying first name length error');
    await registrationPage.expectFirstNameError();
});

test('Register with invalid email shows browser validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with invalid email format');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail('test@');
    await registrationPage.setPassword(user.password);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying HTML5 browser email validation error');
    await registrationPage.expectBrowserEmailError();
});

test('Register with password shorter than 6 characters shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with a password < 6 characters');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword('12345'); // 5 characters
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying short password validation error');
    await registrationPage.expectPasswordError(
        'Password must be between 6 and 40 characters!'
    );
});

test('Register with empty password shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with empty password');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword('');
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying empty password validation error');
    await registrationPage.expectPasswordError(
        'Password must be between 6 and 40 characters!'
    );
});

test('Register with password containing only spaces shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with spaces-only password');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword('      '); // 6 spaces
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying password validation error');
    await registrationPage.expectPasswordError(
        'Password must be between 6 and 40 characters!'
    );
});

test('Register with password longer than 40 characters shows validation error @regression', async ({ page }) => {
    const user = RandomDataUtil.getUser();
    const longPassword = 'A'.repeat(41);

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Submitting form with a password > 40 characters');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(longPassword);
    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    Logger.info('Verifying long password validation error');
    await registrationPage.expectPasswordError(
        'Password must be between 6 and 40 characters!'
    );
});

test('Validate Register Account placeholders @regression', async ({ page }) => {
    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Verifying all input field placeholder attributes');
    await registrationPage.expectFirstNamePlaceholder();
    await registrationPage.expectLastNamePlaceholder();
    await registrationPage.expectEmailPlaceholder();
    await registrationPage.expectPasswordPlaceholder();
});

test('User registration without accepting Privacy Policy and newsletter unchecked @master @regression', async () => {
    const user = RandomDataUtil.getUser();

    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Filling form without agreeing to Privacy Policy');
    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);
    await registrationPage.setSubscribe(false);

    Logger.info('Submitting form without Privacy Policy checked');
    await registrationPage.clickContinue();

    Logger.info('Verifying Privacy Policy error banner');
    await registrationPage.expectPrivacyPolicyError();
});

test('Validate all mandatory fields are marked with red * symbol @master @sanity @regression', async () => {
    Logger.info('Navigating to Registration page');
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    Logger.info('Verifying red required field symbols (*) on all mandatory inputs');
    await registrationPage.expectMandatoryFieldsMarked();
});