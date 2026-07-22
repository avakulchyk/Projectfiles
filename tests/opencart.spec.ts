import { test, expect } from '@playwright/test';
import { OpenCartPage } from '../pages/opencart-page';
import { Logger } from '../utils/Logger';

test('OpenCart page title and basic elements', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);
  
  Logger.info('Navigating to OpenCart home page');
  await openCartPage.navigate();
  
  Logger.info('Verifying page title');
  await expect(page).toHaveTitle('Your Store');
  
  Logger.info('Verifying page URL');
  expect(await openCartPage.getUrl()).toBe('http://localhost/opencart/upload/');
  
  Logger.info('Checking visibility of header navigation elements (Contact, My Account, Wish List)');
  await expect(openCartPage.contactLink).toBeVisible();
  await expect(openCartPage.myAccountLink).toBeVisible();
  await expect(openCartPage.wishListLink).toBeVisible();
});

test('Click contact link and verify navigation', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);
  
  Logger.info('Navigating to OpenCart home page');
  await openCartPage.navigate();
  
  Logger.info('Clicking Contact Us link and waiting for navigation');
  const navigationPromise = page.waitForNavigation();
  await openCartPage.clickContactLink();
  await navigationPromise.catch(() => {}); // Ignore navigation errors
  
  Logger.info('Verifying URL redirection to Contact Us page');
  expect(page.url()).toContain('information/contact');
});

test('Click Wish List link and verify navigation', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);
  
  Logger.info('Navigating to OpenCart home page');
  await openCartPage.navigate();
  
  Logger.info('Clicking Wish List link and waiting for navigation');
  const navigationPromise = page.waitForNavigation();
  await openCartPage.clickWishListLink();
  await navigationPromise.catch(() => {}); // Ignore navigation errors
  
  Logger.info('Verifying URL redirection to Wish List or Login page');
  const url = page.url();
  expect(
    url.includes('account/wishlist') || url.includes('account/login')
  ).toBeTruthy();
});
