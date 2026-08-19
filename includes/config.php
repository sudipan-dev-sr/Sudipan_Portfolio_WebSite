<?php
if (!defined('BASE_URL')) {
    if (!empty($_SERVER['SCRIPT_NAME'])) {
        $scriptPath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
        $dir = dirname($scriptPath);
        $dir = str_replace('\\', '/', $dir);
        $dir = preg_replace('#/(pages|includes)/?$#', '', $dir);
        $base = '/' . ltrim(rtrim($dir, '/'), '/') . '/';
        if ($base === '//' || $base === '/./') {
            $base = '/';
        }
        define('BASE_URL', $base);
    } else {
        define('BASE_URL', '/Portfolio/Sudipan_Portfolio_WebSite/');
    }
}


