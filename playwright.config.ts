import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
  timeout: 30 * 1000,   //30000 ms(30 secs)
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
    headless: false,
    trace: 'on-first-retry',
    screenshot: 'only-on-failure',
    video: 'retain-on-failure',
    viewport: { width: 1280, height: 720 }, 
    ignoreHTTPSErrors: true, 
    permissions: ['geolocation'], 

    // === ДОБАВЛЕНО ДЛЯ ИСПРАВЛЕНИЯ ТЕСТА БЕЗ ИЗМЕНЕНИЯ ЕГО КОДА ===
    launchOptions: {
      slowMo: 500, // Замедляет каждое действие на 500 мс, убирая состояние гонки
    },
    // =============================================================
  },

  projects: [
   {
      name: 'chromium',
      use: { ...devices['Desktop Chrome'] },
    },
  ],
});
