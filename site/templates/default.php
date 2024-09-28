<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
    <?= vite([
      'src/css/app.css',
      'src/js/app.js',
    ]) ?>
  </head>
  <body>
    <h1><?= $page->title() ?></h1>
  </body>
</html>
