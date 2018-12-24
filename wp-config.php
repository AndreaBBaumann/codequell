<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'cq_codequell');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8mb4');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '04l19!LqCH~g0`|P&f!A}:Pi$%!ZhIxo5}i;Bq+Ay:@N+M0Bc[F!Ewe@aA T8=a;');
define('SECURE_AUTH_KEY',  'XL:)nRE)EQ^q6Z>,z5n]/C(YH9Z]C%xBv,%O%>WT7IIr4Z-2M(R:B2D5deEA3z~S');
define('LOGGED_IN_KEY',    'x>q)7tq46&NJM}VXXquO6!.7O}I;#dpRaQi&{x{+0+#J@.>~sg,fEDe]g:c;k(`Y');
define('NONCE_KEY',        'Y779sNwvB&azHJR3Hdwu-7)JP2) iCCxvp%r.1wJf=H9aBAi3pe,f{WpEBRl}|JO');
define('AUTH_SALT',        'E44Wji`N>lWh,ktdU[F6)U=_E4h0,Pug00O&0/:09Q5C)!UXWIE=N2^RHByol8i;');
define('SECURE_AUTH_SALT', ' DMM}&Tzu*Eq|G~kMn9dO:#p.>X<VikUj9.w+}Z!8m&e_keJFekGZ)h6{OvT ,K ');
define('LOGGED_IN_SALT',   '8:.7r`E(|}n%L$!N$6O#iM(`dqGT8l$&{d=psU$g UQ0U1vM%0Yy]LWrx:X^uQfd');
define('NONCE_SALT',       '(<^tq*blWe,On/Z&$J`f5R%Vrz$i; mfa[bm0tup)lgV3rIgK<y`YJ|d|*{S 0qA');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'cq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
