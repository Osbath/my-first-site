import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',   // Add your SCSS here
        'resources/css/app.css',     // Keep if you still use CSS file
        'resources/js/app.js',
      ],
      refresh: true,
    }),
    vue(),
  ],
});