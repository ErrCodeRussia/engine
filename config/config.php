<?php

$database = require __DIR__ . "/database.php";

return [
    /** Название проекта */
    'name' => 'ErrCode Base Project',

    /** Относительные ссылки на главную страницу и страницу авторизации */
    'homeUrl' => '/',
    'authUrl' => '/auth/',

    'database' => $database,

    /** Названия файлов стилей из public_html/css/, которые нужно подключить */
    'styles' => [
        'main.css',
        'fonts.css'
    ],

    /** Названия скриптовых файлов из public_html/js/, которые нужно подключить */
    'scripts' => [

    ],

    /** Ссылка на favicon относительно public_html/ */
    'favicon' => '',

    'errors' => [
        404 => 'errors/404'
    ],
];