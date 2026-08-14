/// <reference types="node" />

import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
  timeout: 60 * 1000,

  testDir: './tests',

  fullyParallel: false,

  retries: process.env.CI ? 2 : 0,

  workers: process.env.CI ? 1 : undefined,

  reporter: [
    ['html'],
    ['allure-playwright'],
    ['dot'],
    ['list'],
  ],

  use: {
    baseURL: process.env.BASE_URL || 'http://localhost:8080/',

    // Local: headed
    // CI: headless
    headless: process.env.CI ? true : false,

    trace: 'on-first-retry',

    screenshot: 'only-on-failure',

    video: 'retain-on-failure',

    viewport: {
      width: 1280,
      height: 720,
    },

    ignoreHTTPSErrors: true,

    permissions: ['geolocation'],

    actionTimeout: 15 * 1000,

    launchOptions: {
      slowMo: process.env.CI ? 0 : 500,
    },
  },

  projects: [
    {
      name: 'chromium',
      use: {
        ...devices['Desktop Chrome'],
      },
    },
  ],
});
