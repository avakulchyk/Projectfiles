/// <reference types="node" />
import { defineConfig, devices } from '@playwright/test';

const isCI = !!process.env.CI;

export default defineConfig({
  timeout: 30 * 1000,
  testDir: './tests',
  
  // В CI лучше выключать fullyParallel, если тесты используют одну БД / общих пользователей
  fullyParallel: !isCI,
  
  // Если тесты не атомарны и меняют состояние пользователей в БД, retries в CI нужно аккуратно контролировать
  retries: isCI ? 1 : 0,
  workers: isCI ? 1 : undefined,

  reporter: [
    ['html', { open: 'never' }],
    ['allure-playwright'],
    ['list']
  ],

  use: {
    headless: isCI,

    // Сохраняем трейсы при ретраях для отладки
    trace: 'on-first-retry',
    screenshot: 'only-on-failure',
    video: 'retain-on-failure',

    viewport: {
      width: 1280,
      height: 720
    },

    ignoreHTTPSErrors: true,
    permissions: ['geolocation'],

    // slowMo нужен только локально для визуального контроля
    launchOptions: isCI ? {} : { slowMo: 500 },
  },

  projects: [
    {
      name: 'chromium',
      use: { ...devices['Desktop Chrome'] },
    },
  ],
});