<?php

/**
 * Its file comment
 * php version 7.4.3
 *
 * @category Running
 * @package  Biches
 * @author   Alex Chervon <kolyaprogger@gmail.com>
 * @license  hexlet.oi autoload
 * @link     hexlet.oi
 */
require __DIR__ . '/vendor/autoload.php';

// Файл не включается на прямую
// Он загрузится автоматически благодаря автозагрузке
use My\Project\Runner;

print_r(Runner\run());
