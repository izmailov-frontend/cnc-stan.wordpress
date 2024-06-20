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
define( 'DB_NAME', 'wp_' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'J4tVT[+#.@b/t,-CBE#w!}Cn>(}gwXr}4{S.S+Vs-52LU/.r>9uuETjs36Jr<#8~' );
define( 'SECURE_AUTH_KEY',  'a#O76a!qo]^{i}>4)jYXKMz $U9bVK-Q>~4g0be:wz_39l:bHtgp,tPOI^jutj>C' );
define( 'LOGGED_IN_KEY',    'geBlGe-f^!p4d {~).!xT-uO`2B[:STtt.tzIv+t$]WeJXD>z.bC693Xv]-{CNSk' );
define( 'NONCE_KEY',        '*EgR@WMEWFY t4aDW95c{WdpMssNT.gN)B0=6}bHV>G9#~pdRag{kHxpYfi^1=l:' );
define( 'AUTH_SALT',        'PZuQn/(TQd&JmLX.Zo|M9^@O5FP1P)#~A_I4vzP7CZh?E & Ezg?,bamLbp>P}&4' );
define( 'SECURE_AUTH_SALT', '(:?FUU!Mv}pU1xz<!CBVwu?(esCX/unW j,>A4DS/3 CEQh#0^Y~IjEk+>v;QPqK' );
define( 'LOGGED_IN_SALT',   '<[E?^5>vhdxD|0cT{j:-Pz~whv5(ga8HeH?[A|D{m!iW)T=j4e9&A%gp{SH#>,b9' );
define( 'NONCE_SALT',       'VT7Yx[UJ>7Csf.W*<R8jYU!P0A6{/e40{D)EO!_3]xLE)Efq~adgz ZV!^zP0s?W' );

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
