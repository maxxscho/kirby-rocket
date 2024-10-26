# Kirby Rocket

A version of [Kirby Plainkit](https://github.com/getkirby/plainkit), extended with [TailwindCSS](https://tailwindcss.com/), [AlpineJS](https://alpinejs.dev/) to have a headstart on the frontend and [ViteJS](https://vite.dev/) for the tooling.

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
