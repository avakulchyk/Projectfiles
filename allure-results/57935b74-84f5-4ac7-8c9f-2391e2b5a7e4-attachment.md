# Instructions

- Following Playwright test failed.
- Explain why, be concise, respect Playwright best practices.
- Provide a snippet of code with the fix, if possible.

# Test info

- Name: SearchProduct.spec.ts >> Product search test @master @regression
- Location: tests/SearchProduct.spec.ts:38:5

# Error details

```
Error: locator.fill: Error: Element is not an <input>, <textarea>, <select> or [contenteditable] and does not have a role allowing [aria-readonly]
Call log:
  - waiting for locator('button[class="btn btn-light btn-lg"]')
    - locator resolved to <button type="submit" class="btn btn-light btn-lg">…</button>
    - fill("MacBook")
  - attempting fill action
    - waiting for element to be visible, enabled and editable

```

# Test source

```ts
  1  | import { Page, expect, Locator } from '@playwright/test';
  2  | 
  3  | export class HomePage {
  4  |     private readonly page: Page;
  5  |     
  6  |     // Locators
  7  |     private readonly lnkMyAccount: Locator;
  8  |     private readonly lnkRegister: Locator;
  9  |     private readonly linkLogin: Locator;
  10 |     private readonly txtSearchbox: Locator;
  11 |     private readonly btnSearch: Locator;
  12 | 
  13 |     constructor(page: Page) {
  14 |         this.page = page;
  15 |         
  16 |         // Initialize locators
  17 |         this.lnkMyAccount = page.locator('span:has-text("My Account")');
  18 |         this.lnkRegister = page.locator('a:has-text("Register")');
  19 |         this.linkLogin = page.locator('a:has-text("Login")');
  20 |         this.txtSearchbox = page.locator('button[class="btn btn-light btn-lg"]');
  21 |         this.btnSearch = page.locator('#search button[type="button"]');
  22 |     }
  23 | 
  24 |     // Check if HomePage exists
  25 |     async isHomePageExists(){
  26 |         let title:string = await this.page.title();
  27 |         if(title)
  28 |         {
  29 |             return true;
  30 |         }
  31 |         return false;
  32 |     }
  33 | 
  34 |     // Click "My Account" link
  35 |     async clickMyAccount(){
  36 |         try {
  37 |             await this.lnkMyAccount.click();
  38 |         } catch (error) {
  39 |             console.log(`Exception occurred while clicking 'My Account': ${error}`);
  40 |             throw error;
  41 |         }
  42 |     }
  43 | 
  44 |     // Click "Register" link
  45 |     async clickRegister(){
  46 |         try {
  47 |             await this.lnkRegister.click();
  48 |         } catch (error) {
  49 |             console.log(`Exception occurred while clicking 'Register': ${error}`);
  50 |             throw error;
  51 |         }
  52 |     }
  53 | 
  54 |     // Click "Login" link
  55 |     async clickLogin(){
  56 |         try {
  57 |             await this.linkLogin.click();
  58 |         } catch (error) {
  59 |             console.log(`Exception occurred while clicking 'Login': ${error}`);
  60 |             throw error;
  61 |         }
  62 |     }
  63 | 
  64 |     // Enter product name in the search box
  65 |     async enterProductName(pName: string){
  66 |         try {
> 67 |             await this.txtSearchbox.fill(pName);
     |                                     ^ Error: locator.fill: Error: Element is not an <input>, <textarea>, <select> or [contenteditable] and does not have a role allowing [aria-readonly]
  68 |         } catch (error) {
  69 |             console.log(`Exception occurred while entering product name: ${error}`);
  70 |             throw error;
  71 |         }
  72 |     }
  73 | 
  74 |     // Click the search button
  75 |     async clickSearch(){
  76 |         try {
  77 |             await this.btnSearch.click();
  78 |         } catch (error) {
  79 |             console.log(`Exception occurred while clicking 'Search': ${error}`);
  80 |             throw error;
  81 |         }
  82 |     }
  83 | }
```