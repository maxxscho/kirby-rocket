# Kirby Rocket

A starter kit for the great [Kirby CMS](https://getkirby.com/), based on [Kirby Plainkit](https://github.com/getkirby/plainkit), pre-configured with the following tools to start quickly:

- [TailwindCSS](https://tailwindcss.com/)
- [AlpineJS](https://alpinejs.dev/)
- [ViteJS](https://vite.dev/)
- [ESLint](https://eslint.org/)
- [Prettier](https://prettier.io/)

## Requirements

- PHP 8.1+
- NodeJS 18+

## Usage

The easiest way to install the project is with `composer create-project`.

```bash
composer create-project maxxscho/kirby-rocket your-project-directory
```

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

## Different directory structure

The `index.php` entry point of kirby has been moved into a `public` folder to keep all built assets and the entry point itself separated from Kirby.
Another reason for this change was to be more Vite-like.
