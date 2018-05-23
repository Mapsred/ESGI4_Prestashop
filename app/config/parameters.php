<?php
$params = [
        'database_prefix' => 'ps_',
        'database_engine' => 'InnoDB',
        'mailer_transport' => 'smtp',
        'mailer_host' => '127.0.0.1',
        'mailer_user' => null,
        'mailer_password' => null,
        'secret' => 'JSTZtswuv2kOdb441n8wkt6QpSN4fLtrUOACfo8aChT3JuRtzQVjkuPT',
        'ps_caching' => 'CacheMemcache',
        'ps_cache_enable' => false,
        'ps_creation_date' => '2018-02-27',
        'locale' => 'fr-FR',
        'cookie_key' => 'crwkVMSjaXO1sDaPDNJ65aGFBJ5dj8zZuuczbPRIYGiRBM0JsIvnXG4u',
        'cookie_iv' => 'kQS7Mwr0',
        'new_cookie_key' => 'def00000c959dd66cbe61045c43c02c164f211dbcaf55155bd64c9e5fbe53786e944a9e046e46c0dcd2453ab352f8d74b8a694425bc4d5c9795f290b004d40d47a2ac8ea',
    ];

$parameters['parameters'] = array_merge($params, include(__DIR__."/database.php"));

return $parameters;