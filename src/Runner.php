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
namespace My\Project\Runner;

use Tightenco\Support\Collection;

/**
 * Its file comment
 * php version 7.4.3
 *
 * @return   \Tightenco\Collect\Support\Collection $collection
 * @package  Biches
 * @author   Alex Chervon <kolyaprogger@gmail.com>
 * @license  hexlet.oi autoload
 * @link     hexlet.oi
 * @category Running
 */
function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}
