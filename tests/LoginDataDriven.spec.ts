import { test } from '@playwright/test';
import { LoginPage } from '../pages/LoginPage';
import { MyAccountPage } from '../pages/MyAccountPage';
import { DataProvider } from '../utils/dataProvider';
import { TestConfig } from '../test.config';
import { HomePage } from '../pages/HomePage';
import { Logger } from '../utils/Logger';


// Load JSON test data
const jsonPath = "TestData/logindata.json";
const jsonTestData = DataProvider.getTestDataFromJson(jsonPath);


for (const data of jsonTestData) {

    test(`Login Test with JSON Data: ${data.testName} @datadriven`, async ({ page }) => {


        const config = new TestConfig();

        Logger.info(`Starting test: ${data.testName}`);


        // Navigate to application
        await page.goto(config.appUrl);


        // Open Login page
        const homePage = new HomePage(page);

        Logger.info('Navigating to Login page');

        await homePage.clickMyAccount();
        await homePage.clickLogin();



        // Login
        const loginPage = new LoginPage(page);

        Logger.info(`Login attempt with email: ${data.email}`);

        await loginPage.login(
            data.email,
            data.password
        );



        // Expected result validation
        if (data.expected.toLowerCase() === 'success') {


            Logger.info('Verifying successful login');


            const myAccountPage = new MyAccountPage(page);

            await myAccountPage.expectMyAccountPage();



        } else {


            Logger.info('Verifying login error message');


            await loginPage.expectLoginErrorMessage(
                'Warning: No match for E-Mail Address and/or Password.'
            );

        }

    });

}



// Load CSV test data
const csvPath = "TestData/logindata.csv";
const csvTestData = DataProvider.getTestDataFromCsv(csvPath);



for (const data of csvTestData) {

    test(`Login Test with CSV Data: ${data.testName} @datadriven`, async ({ page }) => {


        const config = new TestConfig();

        Logger.info(`Starting test: ${data.testName}`);



        // Navigate to application
        await page.goto(config.appUrl);



        // Navigate to login
        const homePage = new HomePage(page);

        await homePage.clickMyAccount();
        await homePage.clickLogin();



        // Login
        const loginPage = new LoginPage(page);

        Logger.info(`Login attempt with email: ${data.email}`);


        await loginPage.login(
            data.email,
            data.password
        );



        // Verify result
        if (data.expected.toLowerCase() === 'success') {


            Logger.info('Checking My Account page');


            const myAccountPage = new MyAccountPage(page);

            await myAccountPage.expectMyAccountPage();



        } else {


            Logger.info('Checking login error message');


            await loginPage.expectLoginErrorMessage(
                'Warning: No match for E-Mail Address and/or Password.'
            );

        }

    });

}