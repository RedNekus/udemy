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
define( 'DB_NAME', 'udemy' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'udemy' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12raksha' );

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
define( 'AUTH_KEY',         '7%0gYqnP@1],?AjR1Tsb(sg :W?[d~]j0Gpf2f%^W*SyrDI96_e0O|N<w`2W%E3[' );
define( 'SECURE_AUTH_KEY',  '<*KIJm*DvS_%g*&f/LZqm$]^KmIsm (1u3I:.4[P_6P 8]x[vm=p/QT4}r1#R{cj' );
define( 'LOGGED_IN_KEY',    '/c.4!%V}6+(Bxg5fLv#=f=PLl|@<D,7Dm}+B|78.L~~+lZeX-S#3UZtu$KdJfJ3v' );
define( 'NONCE_KEY',        'L-g7RSQN1^Q4lbqnkKZMw1AI<}>#~z`z6./k/BR[)[@)ihIMjXd0|zUC2T 2ht_K' );
define( 'AUTH_SALT',        '%.|N3yHxk(z}|M|,a[U~HRi39<s~mL6.MQ]`LRxU[J~ vl1UEaiosj^_(mHuPrQU' );
define( 'SECURE_AUTH_SALT', '?>[#*L&Z[w^7gN3*0nK}A*~8}4.V,@%s;N&B.$;r;5g8J5=fT-cS{pTl^%2k+A:3' );
define( 'LOGGED_IN_SALT',   '0aV~U9f}x<5$G>!:F j^|RWM!AbSD>H.fg*EiKwT?l1l2Ub~1:0`KKiEpek6HX(O' );
define( 'NONCE_SALT',       'HzpH8)hBk$Zw]N1B6cZ!EU[yl@J<S7ca)_I7L0Jr bU/CIQ34vuKH%Od3CBSM`L`' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
