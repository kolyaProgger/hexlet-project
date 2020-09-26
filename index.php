<?php

require __DIR__ . '/vendor/autoload.php';

// Файл не включается на прямую
// Он загрузится автоматически благодаря автозагрузке
use My\Project\Runner;

print_r(Runner\run());
