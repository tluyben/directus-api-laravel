<?php

use WebKenth\Directus\Directus;

if (! function_exists('directus')) {
    function directus(?string $connection = null)
    {
        return resolve('directus', ['connection' => $connection]);
    }
}
