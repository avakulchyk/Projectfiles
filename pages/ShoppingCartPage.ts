import { Page, Locator, expect } from '@playwright/test';
import { CheckoutPage } from './CheckoutPage';

export class ShoppingCartPage {

    private readonly page: Page;
    private readonly lblTotalPrice: Locator;
    private readonly btnCheckout: Locator;


    constructor(page: Page) {

        this.page = page;

        this.lblTotalPrice = page.locator(
            "//tfoot[@id='checkout-total']//tr[last()]/td[@class='text-end'][2]"
        );

        this.btnCheckout = page.locator(
            "a[class='btn btn-primary']"
        );
    }


    async expectTotalPrice(expectedPrice: string): Promise<void> {

        await expect(this.lblTotalPrice)
            .toHaveText(expectedPrice);

    }


    async clickOnCheckout(): Promise<CheckoutPage> {

        await this.btnCheckout.click();

        return new CheckoutPage(this.page);
    }

}