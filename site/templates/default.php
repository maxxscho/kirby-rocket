<!doctype html>
<html lang="<?= kirby()->language()?->code() ?? 'en' ?>">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/svg+xml" href="<?= url('rocket.svg') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
    <?= vite([
      'src/css/app.css',
      'src/js/app.js',
    ]) ?>
  </head>
  <body>
    <h1><?= $page->title() ?></h1>
  </body>
</html>
