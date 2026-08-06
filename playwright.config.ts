/// <reference types="node" />
import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
  timeout: 30 * 1000,
  testDir: './tests',
  fullyParallel: true,
  retries: 1,
  workers: 1,

  reporter: [
    ['html'],
    ['allure-playwright'],
    ['dot'],
    ['list']
  ],

  use: {
    // Local: headed browser
    // GitHub Actions: headless browser
    headless: process.env.CI ? true : false,

    trace: 'on-first-retry',
    screenshot: 'only-on-failure',
    video: 'retain-on-failure',

    viewport: {
      width: 1280,
      height: 720
    },

    ignoreHTTPSErrors: true,
    permissions: ['geolocation'],

    launchOptions: {
      slowMo: 500,
    },
  },

  projects: [
    {
      name: 'chromium',
      use: { ...devices['Desktop Chrome'] },
    },
  ],
});