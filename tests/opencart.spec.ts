import { test, expect } from '@playwright/test';
import { OpenCartPage } from '../pages/opencart-page';

test('OpenCart page title and basic elements', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);
  
  // Navigate to OpenCart
  await openCartPage.navigate();
  
  // Check page title
  await expect(page).toHaveTitle('Your Store');
  
  // Check URL
  expect(await openCartPage.getUrl()).toBe('http://localhost/opencart/upload/');
  
  // Check for navigation elements visibility
  await expect(openCartPage.contactLink).toBeVisible();
  await expect(openCartPage.myAccountLink).toBeVisible();
  await expect(openCartPage.wishListLink).toBeVisible();
});

test('Click contact link and verify navigation', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);
  
  await openCartPage.navigate();
  
  // Click the contact link and wait for navigation
  const navigationPromise = page.waitForNavigation();
  await openCartPage.clickContactLink();
  await navigationPromise.catch(() => {}); // Ignore navigation errors
  
  // Check that we're on contact page
  expect(page.url()).toContain('information/contact');
});

test('Click Wish List link and verify navigation', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);
  
  await openCartPage.navigate();
  
  // Click the wish list link and wait for navigation
  const navigationPromise = page.waitForNavigation();
  await openCartPage.clickWishListLink();
  await navigationPromise.catch(() => {}); // Ignore navigation errors
  
  // Check that we're on wish list page (or login page if not authenticated)
  const url = page.url();
  expect(
    url.includes('account/wishlist') || url.includes('account/login')
  ).toBeTruthy();
});

