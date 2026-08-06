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
  await expect(page).toHaveURL('http://localhost:8080/');

  Logger.info('Checking visibility of header navigation elements');
  await expect(openCartPage.contactLink).toBeVisible();
  await expect(openCartPage.myAccountLink).toBeVisible();
  await expect(openCartPage.wishListLink).toBeVisible();
});


test('Click contact link and verify navigation', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);

  Logger.info('Navigating to OpenCart home page');
  await openCartPage.navigate();

  Logger.info('Clicking Contact Us link');

  await openCartPage.clickContactLink();

  await expect(page).toHaveURL(/information\/contact/);
});


test('Click Wish List link and verify navigation', async ({ page }) => {
  const openCartPage = new OpenCartPage(page);

  Logger.info('Navigating to OpenCart home page');
  await openCartPage.navigate();

  Logger.info('Clicking Wish List link');

  await openCartPage.clickWishListLink();

  await expect(page).toHaveURL(
    /account\/wishlist|account\/login/
  );
});