<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=.cIGga(A&/pA[9*6{~D1]gadyZH|sVVLK_9F7n,OF6U0oc5RV6*Y$ La]hJ(ULc' );
define( 'SECURE_AUTH_KEY',  '/z(sZmFv8O^EL(v;*^3!OHe}s9wv}pI(99G~/wVFo$qReJ>6AXYQ wiiLw`%R)~m' );
define( 'LOGGED_IN_KEY',    'nAc{x;>ZO7}lgo2@F^:2:(j99h%Ev;o!MaI@L%.1-a3N8r*q!?;[IT$9kDiXjOe7' );
define( 'NONCE_KEY',        'peQnNKG}u@#ADv]wWM7u,yrL]rGBo[`(L]h.v#9[_+Wd]}{_kR5RS#=(Mo/J5?bH' );
define( 'AUTH_SALT',        '4q*Q>/j(I8A9zWciaQ=aD4CymRje;LgF!.KMzD4ecs5FcQD#/o-fPG$-3pcXt3yv' );
define( 'SECURE_AUTH_SALT', 'aT[,1ln2r8sr 5d(6S=j/,SVSAv]F:wS)Hi=[!ug,YYsxRzUj3dg9}$)?#p|[jf.' );
define( 'LOGGED_IN_SALT',   '1i:HmD{x*e,tM;t&|zImnE5>rn.J +@9F=FJaKw/L: G33_<[rmhwtXG{-M#qNSA' );
define( 'NONCE_SALT',       'D> {}Gffn=atyY#@{Wzc6=:^+Xz?W.l3yV+ES6?DrMYd,%7o23[@o=D7rejatqb#' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'lf_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
