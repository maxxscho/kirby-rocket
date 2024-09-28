<?php

use Kirby\CMS\App;

$base = dirname(__DIR__);

require $base . '/kirby/bootstrap.php';

/**
 * Since this index.php file is in public folder
 * a few roots need to be set.
 */
echo (new App([
    'roots' => [
        'base' => $base,
        'index' => __DIR__,
        'assets' => $base . '/assets',
        'content' => $base . '/content',
        'media' => $base . '/media',
        'site' => $base . '/site',
    ],
]))->render();
