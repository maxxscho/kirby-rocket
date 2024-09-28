import { resolve } from 'node:path';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  build: {
    outDir: resolve(__dirname, 'public/build'),
    emptyOutDir: true,
  },
  plugins: [
    laravel({
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
