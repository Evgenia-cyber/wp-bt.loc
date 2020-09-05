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
define( 'DB_NAME', 'wp-bt' );

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
define( 'AUTH_KEY',         '-Siu]c($Wk0!(GYQ&^.W1~uxNKGGzN,nXh(~fDsU~o_$HR+Kv9jE`m[{(rnC/1/]' );
define( 'SECURE_AUTH_KEY',  'V+zJ6bQk)T!a/>Mnd^*lPX~n/LR8H.|6Z!Qwo)db^&hKjv%l]!LwbUW+<GL3oN@T' );
define( 'LOGGED_IN_KEY',    'ze7eipr^];P>Dj7e(naX[oL?|dzj;U{J3,mly,6#hLV<1@Jtj&x+~;,vA8yR6@fq' );
define( 'NONCE_KEY',        'Z/N`Ib!})h?BlzwEB1@)i}w>hYMM9L[Fy.Lu!EU{D+.&CW`f!L`YoHZe<s.#No;Y' );
define( 'AUTH_SALT',        'oHKe&-b4%]luc{U3V<!McKny|$`P,c%0M:S{Ne?b)M~`{Xv,T.y@(8PZ1P~M%tUB' );
define( 'SECURE_AUTH_SALT', '{ J53J%+JC `=DP`R%({Uv1dT#XtG*}]sQ<Xl#hM<>lyq6LwkLIz8xU*A4y<R3Y!' );
define( 'LOGGED_IN_SALT',   '~ly$@j-,_#UfGGfhA@(7K4o0Xdf^e9QY;LbgHvNZ30[f1.)[f6qAuxzff|e#2h(?' );
define( 'NONCE_SALT',       '#r#QV(-I*z#B;v]lf=ino,i5_>L>nw^D_)<2#kgt$/zzHOdN*r54n[2.6l0}4``(' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
