import { Page, Locator } from '@playwright/test';

export class OpenCartPage {
  readonly page: Page;
  readonly contactLink: Locator;
  readonly myAccountLink: Locator;
  readonly wishListLink: Locator;

  constructor(page: Page) {
    this.page = page;
    this.contactLink = page.getByRole('link', { name: /123456789/ });
    this.myAccountLink = page.getByRole('link', { name: 'My Account', exact: true });
    this.wishListLink = page.getByRole('link', { name: 'Wish List', exact: true });
  }

  async navigate() {
    await this.page.goto('http://localhost/opencart/upload/');
  }

  async getTitle(): Promise<string> {
    return this.page.title();
  }

  async getUrl(): Promise<string> {
    return this.page.url();
  }

  async isContactLinkVisible(): Promise<boolean> {
    return this.contactLink.isVisible();
  }

  async isMyAccountLinkVisible(): Promise<boolean> {
    return this.myAccountLink.isVisible();
  }

  async isWishListLinkVisible(): Promise<boolean> {
    return this.wishListLink.isVisible();
  }

  async clickContactLink() {
    await this.contactLink.click();
  }

  async clickMyAccountLink() {
    await this.myAccountLink.click();
  }

  async clickWishListLink() {
    await this.wishListLink.click();
  }
}
