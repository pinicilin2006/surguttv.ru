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
define('DB_NAME', 'surguttv_ru');

/** Имя пользователя MySQL */
define('DB_USER', 'surguttv.ru');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'aq1sw2de3');

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
define('AUTH_KEY',         'rS!*Ij{?3[,SULQ=1%x,Ie2sW6air*m`yoONtV:<QOI-e5 :noJJ9J9r}|K vTEp');
define('SECURE_AUTH_KEY',  'Ua=/hleGr 5PWLT{x`R/bGy#yogDX4QBlVF&0aDG,e%2,VS:4*s}s^EVN(==BlAI');
define('LOGGED_IN_KEY',    'v30?8)HMw!j<cGf$PR2nmZQBK>UCV+A/+CBBG}2_3j**vM[~WSz_sgQHpyri^2@!');
define('NONCE_KEY',        '%;<Df%%|AxL29w 1W=:U^d(!avtjQ08G)RJH9~>>sO5P]#j<+<w ?N2JZ_JbP(wv');
define('AUTH_SALT',        '{:e/`x Y1x@q!ExlX@tJb(#gf<3U!Osq}B]v=h8oLQkTOrjVaa7tl|$IVV2J6En=');
define('SECURE_AUTH_SALT', 'K!U3PQpR5Qi^T-WB}ZW;HdD7=kATkpfk&u,-YIzEt&,wKlC^J;xLB=:XthFj5Dk{');
define('LOGGED_IN_SALT',   '.;k$->34GY=r)?Hwz.Rp-Ip2p3]]Q3(tU~aMUO1Y#*Vly(LD/9>9z/p8w^IT;0Y>');
define('NONCE_SALT',       'T8j>X6a NDnpNyf3},,uSMGyXu/UH!%fQ4NzL&CFKBmOGT%@SE3Bhx0d}uD-?X.6');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = '0603_14_';

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
