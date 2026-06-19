/**
 * Test Case: Account Registration
 * 
 * Tags: @master @sanity @regression
 * 
 * Steps:
 * 1) Navigate to application URL 
 * 2) Go to 'My Account' and click 'Register'
 * 3) Fill in registration details with random data
 * 4) Agree to Privacy Policy and submit the form
 * 5) Validate the confirmation message
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
    await page.goto(config.appUrl); //Navigate to application URL 
    homePage = new HomePage(page);
    registrationPage = new RegistrationPage(page);

})


test.afterEach(async ({ page }) => {

    await page.waitForTimeout(3000);
    await page.close();

})


test('User registration test @master @sanity @regression', async () => {

    //Go to 'My Account' and click 'Register'

    await homePage.clickMyAccount();
    await homePage.clickRegister();

    //Fill in registration details with random data
    await registrationPage.setFirstName(RandomDataUtil.getFirstName());
    await registrationPage.setLastName(RandomDataUtil.getlastName());
    await registrationPage.setEmail(RandomDataUtil.getEmail());
    

    const password = RandomDataUtil.getPassword();
    await registrationPage.setPassword(password);
  

    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    //Validate the confirmation message

    const confirmationMsg = await registrationPage.getConfirmationMsg();
    expect(confirmationMsg).toContain('Your Account Has Been Created!')


})


test('User registration test  with all mandatory fields filled @master @sanity @regression', async () => {

    //Go to 'My Account' and click 'Register'

    await homePage.clickMyAccount();
    await homePage.clickRegister();

    //Fill in registration details with random data
    await registrationPage.setFirstName(RandomDataUtil.getFirstName());
    await registrationPage.setLastName(RandomDataUtil.getlastName());
    await registrationPage.setEmail(RandomDataUtil.getEmail());
    

    const password = RandomDataUtil.getPassword();
    await registrationPage.setPassword(password);

    //Toggle Subscribe option
    await registrationPage.setSubscribe(true);
  

    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    //Validate the confirmation message

    const confirmationMsg = await registrationPage.getConfirmationMsg();
    expect(confirmationMsg).toContain('Your Account Has Been Created!')


})


test('Validate empty Register Account form', async () => {

  await homePage.clickMyAccount();
  await homePage.clickRegister();
  await registrationPage.clickContinue();

  await registrationPage.expectErrorMessageContains(
    'Warning: You must agree to the Privacy Policy!'
  );

  await registrationPage.expectFirstNameError();
  await registrationPage.expectLastNameError();
  await registrationPage.expectEmailError();
  await registrationPage.expectPasswordError();
});

test('Register with existing email shows error', async ({ page }) => {

    const user = RandomDataUtil.getUser();
    const homePage = new HomePage(page);
    const registrationPage = new RegistrationPage(page);

    // STEP 1: register user
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);

    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    // Web-first assertion: auto-retries until text appears, avoids race conditions
    expect(await registrationPage.getConfirmationMsg())
  .toContain('Your Account Has Been Created!');

    // STEP 2: logout
    const myAccountPage = new MyAccountPage(page);
    const logoutPage = await myAccountPage.clickLogout();

    await expect(logoutPage.continueButton).toBeVisible();
    await logoutPage.clickContinue();

    // STEP 3: register again with SAME email
    await homePage.clickMyAccount();
    await homePage.clickRegister();

    await registrationPage.setFirstName(user.firstName);
    await registrationPage.setLastName(user.lastName);
    await registrationPage.setEmail(user.email);
    await registrationPage.setPassword(user.password);

    await registrationPage.setPrivacyPolicy();
    await registrationPage.clickContinue();

    // Web-first assertion for the warning too
   await registrationPage.expectErrorMessageContains(
  'Warning: E-Mail Address is already registered!'
);
});