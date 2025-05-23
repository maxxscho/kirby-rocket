# Kirby Rocket

A starter kit for the great [Kirby CMS](https://getkirby.com/), based on [Kirby Plainkit](https://github.com/getkirby/plainkit), pre-configured with the following tools to start quickly:

- [TailwindCSS](https://tailwindcss.com/)
- [AlpineJS](https://alpinejs.dev/)
- [ViteJS](https://vite.dev/)
- [ESLint](https://eslint.org/)
- [Prettier](https://prettier.io/)

## Requirements

- PHP 8.1+
- NodeJS (with NPM) 18+

## Usage

The easiest way to install the project is with `composer create-project`.

```bash
composer create-project maxxscho/kirby-rocket your-project-directory
```

Node modules are installed and built automatically after project creation.   
To run everything manually:

In your project root install the node modules.

```bash
npm install
````

Start the dev server...

```bash
npm run dev
```

or build the assets.

```bash
npm run build
```

### Error when opening the site for the first time

If you open the site the first time and you get an error it's most likely because you didn't start the Dev-Server with `npm run dev` or didn't run the build with `npm run build`. Therefore the Vite Helper doesn't find the `manifest.json`.
