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
define('DB_NAME', 'wp_loc');

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
define('AUTH_KEY',         'C,kW2K62=p[Oj9$a?Q5?D{VqG9%Hu1*]6v{Tq/xP[(,$^vtLYRmSGdIu8vz7s$Pk');
define('SECURE_AUTH_KEY',  'eHsKnLuH7V7|K5jlXm9S`{y;@,[P~tZP{J/^*uc<T1U 3USG$`BZ?BW])lAp%hdg');
define('LOGGED_IN_KEY',    'o#ldmpW]#;XixpqFU:$,o2E_ lCkAgP?kf5bUG Avj:E;QI1>}C+43o(=vD|^G{4');
define('NONCE_KEY',        '9X7RL .ph+cM0v=3bN7:x_Nk[up0>-{z;(mT$cK{Htz@FwCF@QNw$9Y]#Mf>g(!G');
define('AUTH_SALT',        'D_w?>MEM;,I`o$d,vrjub?^AO&)b=`MxL_;<zYdTs2LdV4C,0 *NQ-;kko@xr/|v');
define('SECURE_AUTH_SALT', 'H}}S&>mP@jt3r@<>CJv2D9(]9H(c%3h(C^Thbsw,vaV~U=%=2.X:UXZ#:pJ#G4x0');
define('LOGGED_IN_SALT',   '6u}ROb4]PqS(Yspr[kf%w`v:x$x,IC5xV&r-r)zvh>;q((AgSuN)n;!^o<C6U{P|');
define('NONCE_SALT',       'r5hXf]=hL]upCMwi3)%DF#tT;N=HFi]cAguWs)ggqGatv{nj,iHmWe*7NrU4o9{4');

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
