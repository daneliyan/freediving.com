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
define( 'DB_NAME', 'freediving_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'yy;cx(AEf({U;ZL_*Rf.n~MQA;}{-}F=n{!=V0_`7U3]GBC-0*8e)iO55U[f~FAF' );
define( 'SECURE_AUTH_KEY',  'jdn7|KX~AAZ|#Jg(kGnQ*aZ__ZnUdFa.lY %}V_+h8j>!Y:_<~nA-X1I /s|.V?<' );
define( 'LOGGED_IN_KEY',    ']zKW#)tbo,);K)wLdT9qt#AuB<&XAm]<~Mvgq,[VhsU<>F3;>[XLl%-0>Pjsoy.>' );
define( 'NONCE_KEY',        '<W8S{rNl}Y:uwN^p=J=0bje)W@2B0,5{+V}|&eg]CK:be4vEr*(:ABIh/80HIf$y' );
define( 'AUTH_SALT',        ']$le~D*S&u-^g8-0sDNIQbSyDU,P.IDO&RLSP2*T/At3O:CJEg=<HTG`xnwL;@|2' );
define( 'SECURE_AUTH_SALT', 'r=9+cm[~2UtJ,>hl^)!SOlI.FrK8@SU>, 2jh6>RW/,8bs{CHPgDqrVZ.)1@K-Vi' );
define( 'LOGGED_IN_SALT',   'u|+$O<5?Q],z]f&8y$=@JC(}6$(VN%/Hco%8`b[JjP|U[VF1.DIg8SyD]D2L-v9S' );
define( 'NONCE_SALT',       'tN~Z>UkqY<g)zkfH~otd$`Gc=#:W&wa3LyJupB1e$!O?)w=r>rA<c|eks=H9=}4n' );

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
