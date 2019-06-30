<?php

    define("DB_HOST","mysql");
    define("DB_NAME","berrytube");
    define("DB_USER","berrytube");
    define("DB_PASS",getenv('MYSQL_PASSWORD') ? getenv('MYSQL_PASSWORD') : 'berrytube');
    define('ORIGIN', 'https://' . getenv('DOMAIN') . ((getenv('HTTPS_PORT') === '443') ? '' : (':' . getenv('HTTPS_PORT'))));
    
    if (getenv("SOCKET_ORIGIN")) {
        define("SOCKET_ORIGIN", getenv("SOCKET_ORIGIN"));
    } else {
        define('SOCKET_ORIGIN', 'https://socket.' . getenv('DOMAIN') . ((getenv('HTTPS_PORT') === '443') ? '' : (':' . getenv('HTTPS_PORT'))));
    }
    
    if (getenv("CDN_ORIGIN")) {
        define("CDN_ORIGIN", getenv("CDN_ORIGIN"));
    } else {
        define('CDN_ORIGIN', 'https://cdn.' . getenv('DOMAIN') . ((getenv('HTTPS_PORT') === '443') ? '' : (':' . getenv('HTTPS_PORT'))));
    }

    define('NO_CDN', getenv('NO_CDN') === 'true');
    define('NO_MINIFIED', getenv('NO_MINIFIED') === 'true');
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        define('CLIENT_IP', $_SERVER['HTTP_X_FORWARDED_FOR']);
    } else {
        define('CLIENT_IP', $_SERVER['REMOTE_ADDR']);
    }
    /* CUT AFTER ME FOR ANY CHANGES. */
    define("PATH","/");
