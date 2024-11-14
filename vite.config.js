import { resolve } from 'node:path';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  build: {
    emptyOutDir: true,
  },
  plugins: [
    laravel({
      publicDirectory: '.',
      buildDirectory: 'build',
      input: [
        'src/css/app.css',
        'src/js/app.js'
      ],
      refresh: [
        'site/templates/**/*',
        'site/snippets/**/*',
      ]
    })
  ]
});
