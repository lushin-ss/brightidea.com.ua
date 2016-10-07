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
define('DB_NAME', 'WP_brightidea');

/** Имя пользователя MySQL */
define('DB_USER', 'brightidea');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ftdmoq16');

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
define('AUTH_KEY',         'BrmPBQ#yO`wL3!HE%Wh3|5b9}{y1Z6;D%H)QaY<yXP>s_9mRRV,eo14UZ]BGGBaw');
define('SECURE_AUTH_KEY',  'lU?A1? rYnrJE.p6F`N-u-.jVTo^+ eCwQi9fv-zB5ozK}!e8w;+;njZ;8NutQlR');
define('LOGGED_IN_KEY',    'H0#F(r!%sF7F-k8KhiC$w9<y#d8ycu:w}/8Ao`:B>2u`~Do &[:l_-~[2!cV<n}z');
define('NONCE_KEY',        '9k&35s`]<hQ<JbX~}YZ$,FPxCpY<`?J8HS-HGfB[{e!jh/2H3lJ8NN8l3(KBy4?G');
define('AUTH_SALT',        'za-qG_IxhwHS^K/*%dPT;kH7T]g>FtH9rZ88%MAyb#HGyCD1,N4oqF>:G,[yVVQj');
define('SECURE_AUTH_SALT', '<Y5HW#J 1$..[SaKhsjCJkFCTwpLCQ3}gT$]h}`v:>##F*nB]Y;9DAjx/2/?`=(?');
define('LOGGED_IN_SALT',   'hAjv~y3zW)@.2Bd|F9lf*a:J}In12A[|=^ ^S2v2P0jHc2SMeYL3Mks(8F#)@0{@');
define('NONCE_SALT',       ')r//B+;4bU;uEKof)(zfW~3*E5Ox+epzQceif$~sz_/t?y=0VWyfNdY#3o^lUX69');

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
