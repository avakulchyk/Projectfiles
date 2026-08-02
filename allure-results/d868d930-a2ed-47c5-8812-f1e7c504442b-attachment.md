# Instructions

- Following Playwright test failed.
- Explain why, be concise, respect Playwright best practices.
- Provide a snippet of code with the fix, if possible.

# Test info

- Name: Login.spec.ts >> User login test @master @sanity @regression
- Location: tests/Login.spec.ts:41:5

# Error details

```
Test timeout of 30000ms exceeded.
```

```
Error: locator.click: Target page, context or browser has been closed
Call log:
  - waiting for locator('input[value="Login"]')

```

# Test source

```ts
  1  | import { Page, Locator } from '@playwright/test';
  2  | 
  3  | export class LoginPage {
  4  |     private readonly page: Page;
  5  |     
  6  |     // Locators
  7  |     private readonly txtEmailAddress: Locator;
  8  |     private readonly txtPassword: Locator;
  9  |     private readonly btnLogin: Locator;
  10 |     private readonly txtErrorMessage: Locator;
  11 |     
  12 | 
  13 |     constructor(page: Page) {
  14 |         this.page = page;
  15 |         
  16 |         // Initialize locators with CSS selectors
  17 |         this.txtEmailAddress = page.locator('#input-email');
  18 |         this.txtPassword = page.locator('#input-password');
  19 |         this.btnLogin = page.locator('input[value="Login"]');
  20 |         this.txtErrorMessage=page.locator('.alert.alert-danger.alert-dismissible');
  21 |     }
  22 | 
  23 |     /**
  24 |      * Sets the email address in the email field
  25 |      * @param email - Email address to enter
  26 |      */
  27 |     async setEmail(email: string){
  28 |         await this.txtEmailAddress.fill(email);
  29 |     }
  30 | 
  31 |     /**
  32 |      * Sets the password in the password field
  33 |      * @param pwd - Password to enter
  34 |      */
  35 |     async setPassword(pwd: string) {
  36 |         await this.txtPassword.fill(pwd);
  37 |     }
  38 | 
  39 |     /**
  40 |      * Clicks the login button
  41 |      */
  42 |     async clickLogin(){
> 43 |         await this.btnLogin.click();
     |                             ^ Error: locator.click: Target page, context or browser has been closed
  44 |     }
  45 | 
  46 |     /**
  47 |      * Performs complete login action
  48 |      * @param email - Email address to enter
  49 |      * @param password - Password to enter
  50 |      */
  51 |     async login(email: string, password: string){
  52 |         await this.setEmail(email);
  53 |         await this.setPassword(password);
  54 |         await this.clickLogin();
  55 |     }
  56 | 
  57 |     async getloginErrorMessage():Promise<null | string>{
  58 |        
  59 |         return(this.txtErrorMessage.textContent());
  60 |     }
  61 |     
  62 | }
```