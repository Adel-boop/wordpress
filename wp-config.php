<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test_lamis' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Im>vXTDP}1LJNe?^!SwK<#Tj2Nf&!vmKMX<8CgH4+g&PN3IQ1n3Z[m;9iHK7)v(i' );
define( 'SECURE_AUTH_KEY',  'Pi?F(J%{h@R>GY#$wT@K.8-T?)ZtGL*+u%ReJa`bS3N;<He*yvf_(uvr#o6(_Fpt' );
define( 'LOGGED_IN_KEY',    '^]I.ordEw<nXS+zw>**F?g9$qnS##n:N*t[zV izr/!k1WE/.%~fhL;!WxbQv7,%' );
define( 'NONCE_KEY',        'w`B@@wE@Nvs6$&4C_ S81|,[jiLyBvaY~qn<V3Sonrmi2-16n*4~dlQZ!E%fVQA6' );
define( 'AUTH_SALT',        'A:4_b|w10_<(]hP0 %WuO9wA>9#b<E;57amu|6JRmy~NUonEE+:^QIP5A~YG!!c3' );
define( 'SECURE_AUTH_SALT', '8YqZf2!_K_n8H|yeaQK{v^];~g4k:So7uQFb2(>lD$T;od5b;MaE$`=fcQs)5_S0' );
define( 'LOGGED_IN_SALT',   '/OO^!WJ(9+BZoT#i~BB8UAYB4wgehOORHgIUF6#s:NLtr#oT#6dw(Tey:Reo>8W[' );
define( 'NONCE_SALT',       '3i,>2M6H/G#2%(m~8K7RkqyzlY*3J?lD^<W.5AIf<@&y~_nZ[v(g7tY@!=.vZ R2' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
