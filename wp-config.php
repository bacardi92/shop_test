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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wpstore');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T)CJL0^;4)TYAJ}cd):/o=-VS1+8Z 5q-IWY:r0qA3};dF 3{XH^pMGZO~5 {n@6');
define('SECURE_AUTH_KEY',  'v!JZylhAT22X/1/K^BG!K92E(?r6`La#39S:9H5Y{- Etq+XZ.z$Nl4*_m#qUx.%');
define('LOGGED_IN_KEY',    'HJ`.XKWOE$v efeyhL{s2A8_U=kfGXg6@Ky&s=x78syqS^r<h!G5s]HW/6{y,wI:');
define('NONCE_KEY',        'KE8fX<1vy{3RW^=1pAV)<jw7D*#h|OFhoS|b*mrm9.%<8T=984|kL`2M`~_}=={h');
define('AUTH_SALT',        ']ax 0:8jE;+V[_,8`;ge&97&asQo@,IgC:m&^zx,``gi<Q!.1IQ/jE.pEpd92tuK');
define('SECURE_AUTH_SALT', '@=2p$Od^dSQ4PPfUnJ|QF?dBsabAt?a&_kfq0&Y`H=Mt0c#64}f.RL|j?vjY~m9w');
define('LOGGED_IN_SALT',   '=BZwC-s>dvDYU`>u]uxavz0Ulkwj{T-jz3SsqAozMa*!`Eb(@b,Gk:WZSil(Tg$w');
define('NONCE_SALT',       '.;`x<$^MLV$nXo62p*M7%FFv#+~9(h>tWaggUsy;`r{/y,&=vCNfV``Ydfj3($+E');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
