
import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
  timeout: 30 * 1000, // Maximum test execution time: 30 seconds
  testDir: './tests',

  fullyParallel: true, // Run tests in parallel when possible
  retries: 1, // Retry failed tests once
  workers: 1, // Use a single worker in CI to avoid test conflicts

  reporter: [
    ['html'], // Generate HTML test report
    ['allure-playwright'], // Generate Allure report
    ['dot'], // Show minimal test progress
    ['list'] // Show detailed test execution list
  ],

  use: {
    headless: true, // Run browser without UI (required for GitHub Actions/Linux CI)
    trace: 'on-first-retry', // Collect trace only when test fails on retry
    screenshot: 'only-on-failure', // Take screenshots only for failed tests
    video: 'retain-on-failure', // Keep videos for failed tests
    viewport: { width: 1280, height: 720 }, // Browser window size
    ignoreHTTPSErrors: true, // Ignore HTTPS certificate errors
    permissions: ['geolocation'], // Allow geolocation permissions
  },

  projects: [
    {
      name: 'chromium',
      use: { ...devices['Desktop Chrome'] }, // Run tests on Chromium browser
    },
  ],
});

