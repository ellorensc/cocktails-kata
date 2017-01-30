<?php

define('APPLICATION_DIR', dirname(__DIR__));

define('VIEWS_DIR', '/engine/views/');
define('COCKTAILS_DIR', APPLICATION_DIR . '/engine/cocktail/');
define('COMMON_CLASSES_DIR', APPLICATION_DIR . '/engine/common/');
define('INGREDIENTS_DIR', APPLICATION_DIR . '/engine/ingredient/');
define('APP_DIR', APPLICATION_DIR . '/engine/app/');

function __autoload($className)
{
    if (is_readable(COCKTAILS_DIR . "{$className}.php")) {
        require_once COCKTAILS_DIR . "{$className}.php";
    } elseif (is_readable(COMMON_CLASSES_DIR . "{$className}.php")) {
        require_once COMMON_CLASSES_DIR . "{$className}.php";
    } elseif (is_readable(INGREDIENTS_DIR . "{$className}.php")) {
        require_once INGREDIENTS_DIR . "{$className}.php";
    } elseif (is_readable(APP_DIR . "{$className}.php")) {
        require_once APP_DIR . "{$className}.php";
    }
}

CocktailKata::run();
