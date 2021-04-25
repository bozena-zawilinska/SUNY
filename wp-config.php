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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         '5wdJBX7BA/uMJGMalD/xDtkoFfG/LpQUzWEDdbz6zN6EP2dRXLmi0VAprUrq8MasP4+rkcrEvAzXiYz42ztBCg==');
define('SECURE_AUTH_KEY',  '1DLHPGBypxBtoPZjyNq3SplApfuwnXg9B01iE6tcD5DtFIWPf4vbscBk8hErQqF4jInUviMlsWJgqcHAR18dWQ==');
define('LOGGED_IN_KEY',    'CfgHFYU8y7+ajYa+3RfGnpBNpIIOpuEur8NgWvC2bzIRdF2dl+mJCC6eMjBItx4TmbEj/YX3xnGAtTptkuzUbQ==');
define('NONCE_KEY',        '+X4H9pwTehwHXwjtmzpkvogegDiPkpHQiTYqwuVj1cFJcq/izT6Y2ct8Cd2Z2RohM7iI9GbyJo764m5bEssPHg==');
define('AUTH_SALT',        '4yZF67byMPfNMADXSsdKaJRd6ryaDFVkfxTK5nKS3zUtD19ePUxkv+3+2ytyzVJ9l2XtRjlV3BjoYpjU9R+nbQ==');
define('SECURE_AUTH_SALT', 'S/2//6EkQQbrlrdM2SfT7Hlj4hzDcsTpzMn7nWycE4lhjvWjLrRx2ZPVlpSWg9BP3/7DUqiOHEqN/lOkHQGlhA==');
define('LOGGED_IN_SALT',   'RirTF0e9raWha5fgTHQH4kBQp51YW52z+4CyylkIpLyInbJ8MQZ7wr2yaZoK1jBy/6GaMQtnBqMxOPmhYbct2Q==');
define('NONCE_SALT',       'xBHvOzo1RO/8qLMweKtEvi+S525QxbhFqScg5oXPtP3w7QEAmdM38iDHU2zX9JZkiGvdLU48NGDYmh9Oh+c8Yg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
