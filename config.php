<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Ветеринарная клиника',
        'nav_menu' => [
            '' => 'Главная',
            'about-us' => 'О нас',
            'news' => 'Новости',
            'contact' => 'Контакты',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v1.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
