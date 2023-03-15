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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'NanoBalzam' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'O.PnL<PZ=Wo!V6%UOg`S7gs/i@*/&|Z8`f3RaB.EI=Yndfg+a/VavU}_#y5|YYq4' );
define( 'SECURE_AUTH_KEY',  'yaRc)oisA>~Q1aLmoGV0q[>QTXOuLo_K]jB;5D`4P.Ecb<RQaP&nBaL3pw!g|3!?' );
define( 'LOGGED_IN_KEY',    'A.RF-,`wkF|XRDt$gRMn+unDJ;f%zTk8Z?/}4^|<3Qs?&A1X*e>|lQ#b2/R/mA>H' );
define( 'NONCE_KEY',        ']F2y~O_)_koTxNw%:A3f0<ZR%K8QMHK6%N3V{lSVK,-3TD^R&ch01&,K2x.rW#@U' );
define( 'AUTH_SALT',        '$_sfUf|Y?,lDDzC2^WMs:kJc|h(2Z^_N=4+qdsD5bq[U[FLuZiWn[!e&H#0>yw.$' );
define( 'SECURE_AUTH_SALT', 'zVxuTPKlbN@1{@nf[gx,iy1#O>TFBe*e}ne3^anbT*ks:#1qr|RQFS6 &|h&E#4Q' );
define( 'LOGGED_IN_SALT',   '}<7>zQ=$+%5%Iyj-=i;Fj%2%ETPN9( )Dzinl0|TjIW>yaM%~PdFDd6Waf_Y]9yo' );
define( 'NONCE_SALT',       'tya!1z7VBokpk/R[[6dR>|5H4v.?9:4Mc^ti@#]}+)<nj2_k_lly)hYu#U7W2+P:' );

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
