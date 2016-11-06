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
define('DB_NAME', 'firstwp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lBC.8Z<ps>Zs>N^z(a! (F#N$;@#[YC R@f^w=`)KH&~>L/ ,U)xib0L`ojB1pVj');
define('SECURE_AUTH_KEY',  's++en_ldHhcjV?h|e:dRI{ujuWzWWof;>C7!CdaQ>Y{{jTs<A.h(jaW@& PaA))^');
define('LOGGED_IN_KEY',    'T$wrDu?9cSj:=Br:78B8 ?DdWT&5L?11@oN=DYK]Hj~w*9N^h`i/)I<Mv/t+CpO)');
define('NONCE_KEY',        'T<k _m>u@DX?PoU*ks7jN4&H9Y)p^xvi3GFhCZT50A:a)vp|3{NbM4:_2]S3L>b`');
define('AUTH_SALT',        '+Mr#dqeMe|&FaPs.6z{!e&|R&y(MR,zL~I&-%8s!~O[,(+P5NvglK=aPHvP.AOm)');
define('SECURE_AUTH_SALT', '9?W*:@jVN6:=HEn#5q3mQq|T,Z]`Ma,os>Kba&JNz$%VBk/|/GIFe|!J1Dso%oLB');
define('LOGGED_IN_SALT',   'mvR7e5?QUf:/D<-{`p%%QhSb[FIvGG0^,(.Q?E$Tl{n]sH 8x/!=vssUuesLq.`/');
define('NONCE_SALT',       '|JMihp:H<0<,H/VJrvf:vn[#Lf+.C.<|EmWu.*5bNuG:r:%l.VIz#;DDb?s,myHv');

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
