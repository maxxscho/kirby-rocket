import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  build: {
    emptyOutDir: true,
  },
  plugins: [
    tailwindcss(),
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
