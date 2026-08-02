# Instructions

- Following Playwright test failed.
- Explain why, be concise, respect Playwright best practices.
- Provide a snippet of code with the fix, if possible.

# Test info

- Name: LoginDataDriven.spec.ts >> Login Test with CSV Data: Invalid login @datadriven
- Location: tests/LoginDataDriven.spec.ts:55:8

# Error details

```
TimeoutError: page.waitForURL: Timeout 10000ms exceeded.
=========================== logs ===========================
waiting for navigation until "load"
============================================================
```

# Page snapshot

```yaml
- generic [ref=e1]:
  - navigation [ref=e2]:
    - generic [ref=e4]:
      - list [ref=e6]:
        - listitem [ref=e7]:
          - link "$ Currency " [ref=e10] [cursor=pointer]:
            - /url: "#"
            - strong [ref=e11]: $
            - text: Currency
            - generic [ref=e12]: 
        - listitem
      - list [ref=e14]:
        - listitem [ref=e15]:
          - link " 123456789" [ref=e16] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=information/contact&language=en-gb
            - generic [ref=e17]: 
            - text: "123456789"
        - listitem [ref=e18]:
          - link " My Account " [ref=e20] [cursor=pointer]:
            - /url: "#"
            - generic [ref=e21]: 
            - text: My Account
            - generic [ref=e22]: 
        - listitem [ref=e23]:
          - link " Wish List (0)" [ref=e24] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=account/wishlist&language=en-gb
            - generic [ref=e25]: 
            - text: Wish List (0)
        - listitem [ref=e26]:
          - link " Shopping Cart" [ref=e27] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=checkout/cart&language=en-gb
            - generic [ref=e28]: 
            - text: Shopping Cart
        - listitem [ref=e29]:
          - link " Checkout" [ref=e30] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=checkout/checkout&language=en-gb
            - generic [ref=e31]: 
            - text: Checkout
  - banner [ref=e32]:
    - generic [ref=e34]:
      - link "Your Store" [ref=e37] [cursor=pointer]:
        - /url: http://localhost/opencart/upload/index.php?route=common/home&language=en-gb
        - img "Your Store" [ref=e38]
      - generic [ref=e40]:
        - textbox "Search" [ref=e41]
        - button "" [ref=e42] [cursor=pointer]:
          - generic [ref=e43]: 
      - button " 0 item(s) - $0.00" [ref=e46] [cursor=pointer]:
        - generic [ref=e47]: 
        - text: 0 item(s) - $0.00
  - main [ref=e48]:
    - navigation [ref=e50]:
      - text: 
      - list [ref=e52]:
        - listitem [ref=e53]:
          - link "Desktops" [ref=e54] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=20
        - listitem [ref=e55]:
          - link "Laptops & Notebooks" [ref=e56] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=18
        - listitem [ref=e57]:
          - link "Components" [ref=e58] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=25
        - listitem [ref=e59]:
          - link "Tablets" [ref=e60] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=57
        - listitem [ref=e61]:
          - link "Software" [ref=e62] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=17
        - listitem [ref=e63]:
          - link "Phones & PDAs" [ref=e64] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=24
        - listitem [ref=e65]:
          - link "Cameras" [ref=e66] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=33
        - listitem [ref=e67]:
          - link "MP3 Players" [ref=e68] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=product/category&language=en-gb&path=34
    - generic [ref=e69]:
      - list [ref=e70]:
        - listitem [ref=e71]:
          - link "" [ref=e72] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=common/home&language=en-gb
            - generic [ref=e73]: 
        - listitem [ref=e74]:
          - link "Account" [ref=e75] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=account/account&language=en-gb
        - listitem [ref=e76]:
          - link "Login" [ref=e77] [cursor=pointer]:
            - /url: http://localhost/opencart/upload/index.php?route=account/login&language=en-gb
      - generic [ref=e78]:
        - generic [ref=e80]:
          - generic [ref=e82]:
            - heading "New Customer" [level=2] [ref=e83]
            - paragraph [ref=e84]:
              - strong [ref=e85]: Register Account
            - paragraph [ref=e86]: By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
            - link "Continue" [ref=e88] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/register&language=en-gb
          - generic [ref=e91]:
            - heading "Returning Customer" [level=2] [ref=e92]
            - paragraph [ref=e93]:
              - strong [ref=e94]: I am a returning customer
            - generic [ref=e95]:
              - generic [ref=e96]: E-Mail Address
              - textbox "E-Mail Address" [ref=e97]: abcxyz@xyz.com
            - generic [ref=e98]:
              - generic [ref=e99]: Password
              - textbox "Password" [ref=e100]: abcxyx
              - link "Forgotten Password" [ref=e101] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/forgotten&language=en-gb
            - button "Login" [ref=e103] [cursor=pointer]
        - complementary [ref=e104]:
          - generic [ref=e105]:
            - link "Login" [ref=e106] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/login&language=en-gb
            - link "Register" [ref=e107] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/register&language=en-gb
            - link "Forgotten Password" [ref=e108] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/forgotten&language=en-gb
            - link "My Account" [ref=e109] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/account&language=en-gb
            - link "Payment Methods" [ref=e110] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/payment_method&language=en-gb
            - link "Address Book" [ref=e111] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/address&language=en-gb
            - link "Wish List" [ref=e112] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/wishlist&language=en-gb
            - link "Order History" [ref=e113] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/order&language=en-gb
            - link "Downloads" [ref=e114] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/download&language=en-gb
            - link "Subscriptions" [ref=e115] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/subscription&language=en-gb
            - link "Reward Points" [ref=e116] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/reward&language=en-gb
            - link "Returns" [ref=e117] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/returns&language=en-gb
            - link "Transactions" [ref=e118] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/transaction&language=en-gb
            - link "Newsletter" [ref=e119] [cursor=pointer]:
              - /url: http://localhost/opencart/upload/index.php?route=account/newsletter&language=en-gb
  - contentinfo [ref=e120]:
    - generic [ref=e121]:
      - generic [ref=e122]:
        - generic [ref=e123]:
          - heading "Information" [level=5] [ref=e124]
          - list [ref=e125]:
            - listitem [ref=e126]:
              - link "Terms & Conditions" [ref=e127] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=2
            - listitem [ref=e128]:
              - link "Delivery Information" [ref=e129] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=4
            - listitem [ref=e130]:
              - link "About Us" [ref=e131] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=1
            - listitem [ref=e132]:
              - link "Privacy Policy" [ref=e133] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=information/information&language=en-gb&information_id=3
        - generic [ref=e134]:
          - heading "Customer Service" [level=5] [ref=e135]
          - list [ref=e136]:
            - listitem [ref=e137]:
              - link "Contact Us" [ref=e138] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=information/contact&language=en-gb
            - listitem [ref=e139]:
              - link "Returns" [ref=e140] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/returns.add&language=en-gb
            - listitem [ref=e141]:
              - link "Site Map" [ref=e142] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=information/sitemap&language=en-gb
        - generic [ref=e143]:
          - heading "Extras" [level=5] [ref=e144]
          - list [ref=e145]:
            - listitem [ref=e146]:
              - link "Brands" [ref=e147] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=product/manufacturer&language=en-gb
            - listitem [ref=e148]:
              - link "Affiliate" [ref=e149] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/affiliate&language=en-gb
            - listitem [ref=e150]:
              - link "Specials" [ref=e151] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=product/special&language=en-gb
        - generic [ref=e152]:
          - heading "My Account" [level=5] [ref=e153]
          - list [ref=e154]:
            - listitem [ref=e155]:
              - link "My Account" [ref=e156] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/account&language=en-gb
            - listitem [ref=e157]:
              - link "Order History" [ref=e158] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/order&language=en-gb
            - listitem [ref=e159]:
              - link "Wish List" [ref=e160] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/wishlist&language=en-gb
            - listitem [ref=e161]:
              - link "Newsletter" [ref=e162] [cursor=pointer]:
                - /url: http://localhost/opencart/upload/index.php?route=account/newsletter&language=en-gb
      - separator [ref=e163]
      - paragraph [ref=e164]:
        - text: Powered By
        - link "OpenCart" [ref=e165] [cursor=pointer]:
          - /url: https://www.opencart.com
        - text: Your Store © 2026
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
  19 |         this.btnLogin = page.locator("button.btn.btn-primary");
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
  43 |         await Promise.all([
> 44 |         this.page.waitForURL(/route=account\/account/, { timeout: 10000 }),
     |                   ^ TimeoutError: page.waitForURL: Timeout 10000ms exceeded.
  45 |         this.btnLogin.click()
  46 |     ]);
  47 | }
  48 | 
  49 |     /**
  50 |      * Performs complete login action
  51 |      * @param email - Email address to enter
  52 |      * @param password - Password to enter
  53 |      */
  54 |     async login(email: string, password: string){
  55 |         await this.setEmail(email);
  56 |         await this.setPassword(password);
  57 |         await this.clickLogin();
  58 |     }
  59 | 
  60 |     async getloginErrorMessage():Promise<null | string>{
  61 |        
  62 |         return(this.txtErrorMessage.textContent());
  63 |     }
  64 |     
  65 | }
```