# Instructions

- Following Playwright test failed.
- Explain why, be concise, respect Playwright best practices.
- Provide a snippet of code with the fix, if possible.

# Test info

- Name: Login.spec.ts >> User login test @master @sanity @regression
- Location: tests/Login.spec.ts:41:5

# Error details

```
Error: expect(locator).toBeVisible() failed

Locator: locator('input[type="submit"][value="Login"]')
Expected: visible
Timeout: 5000ms
Error: element(s) not found

Call log:
  - Expect "toBeVisible" with timeout 5000ms
  - waiting for locator('input[type="submit"][value="Login"]')

```

```yaml
- navigation:
  - list:
    - listitem:
      - link "$ Currency ":
        - /url: "#"
        - strong: $
        - text: Currency 
    - listitem
  - list:
    - listitem:
      - link " 123456789":
        - /url: http://localhost/opencart/upload/index.php?route=information/contact&language=en-gb
    - listitem:
      - link " My Account ":
        - /url: "#"
    - listitem:
      - link " Wish List (0)":
        - /url: http://localhost/opencart/upload/index.php?route=account/wishlist&language=en-gb
    - listitem:
      - link " Shopping Cart":
        - /url: http://localhost/opencart/upload/index.php?route=checkout/cart&language=en-gb
    - listitem:
      - link " Checkout":
        - /url: http://localhost/opencart/upload/index.php?route=checkout/checkout&language=en-gb
- banner:
  - link "Your Store":
    - /url: http://localhost/opencart/upload/index.php?route=common/home&language=en-gb
    - img "Your Store"
  - textbox "Search"
  - button ""
  - button " 0 item(s) - $0.00"
- main:
  - navigation:
    - list:
      - listitem:
        - link "Desktops":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=20
      - listitem:
        - link "Laptops & Notebooks":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=18
      - listitem:
        - link "Components":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=25
      - listitem:
        - link "Tablets":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=57
      - listitem:
        - link "Software":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=17
      - listitem:
        - link "Phones & PDAs":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=24
      - listitem:
        - link "Cameras":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=33
      - listitem:
        - link "MP3 Players":
          - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=34
  - list:
    - listitem:
      - link "":
        - /url: http://localhost/opencart/upload/index.php?route=common/home&language=en-gb
    - listitem:
      - link "Account":
        - /url: http://localhost/opencart/upload/index.php?route=account/account&language=en-gb
    - listitem:
      - link "Login":
        - /url: http://localhost/opencart/upload/index.php?route=account/login&language=en-gb
  - heading "New Customer" [level=2]
  - paragraph:
    - strong: Register Account
  - paragraph: By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
  - link "Continue":
    - /url: http://localhost/opencart/upload/index.php?route=account/register&language=en-gb
  - heading "Returning Customer" [level=2]
  - paragraph:
    - strong: I am a returning customer
  - text: E-Mail Address
  - textbox "E-Mail Address": pavanol@abc.com
  - text: Password
  - textbox "Password": test@123
  - link "Forgotten Password":
    - /url: http://localhost/opencart/upload/index.php?route=account/forgotten&language=en-gb
  - button "Login"
  - complementary:
    - link "Login":
      - /url: http://localhost/opencart/upload/index.php?route=account/login&language=en-gb
    - link "Register":
      - /url: http://localhost/opencart/upload/index.php?route=account/register&language=en-gb
    - link "Forgotten Password":
      - /url: http://localhost/opencart/upload/index.php?route=account/forgotten&language=en-gb
    - link "My Account":
      - /url: http://localhost/opencart/upload/index.php?route=account/account&language=en-gb
    - link "Payment Methods":
      - /url: http://localhost/opencart/upload/index.php?route=account/payment_method&language=en-gb
    - link "Address Book":
      - /url: http://localhost/opencart/upload/index.php?route=account/address&language=en-gb
    - link "Wish List":
      - /url: http://localhost/opencart/upload/index.php?route=account/wishlist&language=en-gb
    - link "Order History":
      - /url: http://localhost/opencart/upload/index.php?route=account/order&language=en-gb
    - link "Downloads":
      - /url: http://localhost/opencart/upload/index.php?route=account/download&language=en-gb
    - link "Subscriptions":
      - /url: http://localhost/opencart/upload/index.php?route=account/subscription&language=en-gb
    - link "Reward Points":
      - /url: http://localhost/opencart/upload/index.php?route=account/reward&language=en-gb
    - link "Returns":
      - /url: http://localhost/opencart/upload/index.php?route=account/returns&language=en-gb
    - link "Transactions":
      - /url: http://localhost/opencart/upload/index.php?route=account/transaction&language=en-gb
    - link "Newsletter":
      - /url: http://localhost/opencart/upload/index.php?route=account/newsletter&language=en-gb
- contentinfo:
  - heading "Information" [level=5]
  - list:
    - listitem:
      - link "Terms & Conditions":
        - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=2
    - listitem:
      - link "Delivery Information":
        - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=4
    - listitem:
      - link "About Us":
        - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=1
    - listitem:
      - link "Privacy Policy":
        - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=3
  - heading "Customer Service" [level=5]
  - list:
    - listitem:
      - link "Contact Us":
        - /url: http://localhost/opencart/upload/index.php?route=information/contact&language=en-gb
    - listitem:
      - link "Returns":
        - /url: http://localhost/opencart/upload/index.php?route=account/returns.add&language=en-gb
    - listitem:
      - link "Site Map":
        - /url: http://localhost/opencart/upload/index.php?route=information/sitemap&language=en-gb
  - heading "Extras" [level=5]
  - list:
    - listitem:
      - link "Brands":
        - /url: http://localhost/opencart/upload/index.php?route=product/manufacturer&language=en-gb
    - listitem:
      - link "Affiliate":
        - /url: http://localhost/opencart/upload/index.php?route=account/affiliate&language=en-gb
    - listitem:
      - link "Specials":
        - /url: http://localhost/opencart/upload/index.php?route=product/special&language=en-gb
  - heading "My Account" [level=5]
  - list:
    - listitem:
      - link "My Account":
        - /url: http://localhost/opencart/upload/index.php?route=account/account&language=en-gb
    - listitem:
      - link "Order History":
        - /url: http://localhost/opencart/upload/index.php?route=account/order&language=en-gb
    - listitem:
      - link "Wish List":
        - /url: http://localhost/opencart/upload/index.php?route=account/wishlist&language=en-gb
    - listitem:
      - link "Newsletter":
        - /url: http://localhost/opencart/upload/index.php?route=account/newsletter&language=en-gb
  - separator
  - paragraph:
    - text: Powered By
    - link "OpenCart":
      - /url: https://www.opencart.com
    - text: Your Store © 2026
```

# Test source

```ts
  1  | import { Page, Locator, expect } from '@playwright/test';
  2  | 
  3  | export class LoginPage {
  4  |   private readonly page: Page;
  5  |   private readonly txtEmailAddress: Locator;
  6  |   private readonly txtPassword: Locator;
  7  |   private readonly btnLogin: Locator;
  8  |   private readonly txtErrorMessage: Locator;
  9  | 
  10 |   constructor(page: Page) {
  11 |     this.page = page;
  12 | 
  13 |     this.txtEmailAddress = page.locator('#input-email');
  14 |     this.txtPassword = page.locator('#input-password');
  15 |     this.btnLogin = page.locator('input[type="submit"][value="Login"]');
  16 |     this.txtErrorMessage = page.locator('.alert.alert-danger');
  17 |   }
  18 | 
  19 |   async open() {
  20 |     await this.page.goto('https://tutorialsninja.com/demo/index.php?route=account/login');
  21 |   }
  22 | 
  23 |   async setEmail(email: string) {
  24 |     await expect(this.txtEmailAddress).toBeVisible();
  25 |     await this.txtEmailAddress.fill(email);
  26 |   }
  27 | 
  28 |   async setPassword(pwd: string) {
  29 |     await expect(this.txtPassword).toBeVisible();
  30 |     await this.txtPassword.fill(pwd);
  31 |   }
  32 | 
  33 |   async clickLogin() {
> 34 |     await expect(this.btnLogin).toBeVisible();
     |                                 ^ Error: expect(locator).toBeVisible() failed
  35 |     await expect(this.btnLogin).toBeEnabled();
  36 |     await this.btnLogin.click();
  37 |   }
  38 | 
  39 |   async login(email: string, password: string) {
  40 |     await this.setEmail(email);
  41 |     await this.setPassword(password);
  42 |     await this.clickLogin();
  43 |   }
  44 | 
  45 |   async getLoginErrorMessage(): Promise<string> {
  46 |     await expect(this.txtErrorMessage).toBeVisible();
  47 |     return (await this.txtErrorMessage.textContent())?.trim() ?? '';
  48 |   }
  49 | }
```