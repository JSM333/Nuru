<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lr0wfcFBq1gPBAX8JT+vwdU7t9T+GA4EypxfochPk17ZCoZdLQMjlhj+IkwB//Vqk5cAJdH9192uS2y+OTviqQ==');
define('SECURE_AUTH_KEY',  'htQmZOONnJSqGHu8sl/a2mY32mWaUN8ccoloVEcVM3a/i/TqRZLv+xfMhu3xMYJXmRnxdD5uDYRYWwuwAtUb+g==');
define('LOGGED_IN_KEY',    'K/rf6/vAts+zyF3EhlCQBjyCmq3M8qU8iWOS8DBkyr0g9G/5XfD8xQah9fxYZoXkhjgUgd2B9ZMtmmUdUthE5Q==');
define('NONCE_KEY',        '1qoDcHeN8zJVS5Wq5yY669ZmWnRS6Gpk0/Xs5B3BCLJ3HENJn3Lnbmy+sGxlZEnILh67Zrt8/IZBNBExkraSmA==');
define('AUTH_SALT',        'cwYub2RHpSoVWPZi1/uO4nlpEJXhLOxsGf+XoAElBJzxv54SpSeN4JMnp7WLkMPiaS3uo8e333JX7gwxUOr9lQ==');
define('SECURE_AUTH_SALT', 'xBsnENk1ZyFfuhmMK/g0yioK5nnxh5+ox4nPRvSiUXn4GBPKq8k+Qe+nBOkdpsjGFs86Y1JcDYUIZGZPn+BOjg==');
define('LOGGED_IN_SALT',   'cfQAUF4xkIBlH72LsgXkPCj9cRl5/u7nOd4hGfokzWGneWEn2JFjqt9njpTY1VzbNfzYcy9fzNyOYLXAIVD2Mg==');
define('NONCE_SALT',       '2APhy+FsZeSQaUOv0L4RMx9wuwicHzNEm5QZEeY9QWZB6mDedpLjYf5v0IlbNllhlsFfqbl8wITQotU13jkwXQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
