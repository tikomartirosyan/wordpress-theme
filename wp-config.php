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
define('DB_NAME', 'final');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vd/Lo)8DW%_(`UezGd9~n8SzS!h;e)Q>^L7d}Yk!Z:;v&!l[ze.^98$xuIX)zV~b');
define('SECURE_AUTH_KEY',  '{oDM+^DBR_Xl$toR|-VelYR4[7__U2AY1zRBDsG<Gl-ZY}H5GC3@WMu? cdP5vCa');
define('LOGGED_IN_KEY',    '/{;>y=Uj1 fa(tF4ZMJ,tIN9po$(u8/$n@}lGD6nzS}LuZ,`D}W114,NI&B$4bp}');
define('NONCE_KEY',        'g)V9WwJ.9@-e>D,C>]0&`kF,YG1:NTR633@Bjr._EG4K}B[1C4^CrGO-(s!>}M:^');
define('AUTH_SALT',        'vtqDet<Wq*|/WNqL$$% t$/798Ep8LDD+FL%nDMtX/LDy5QA<O%H _dZ^@3$kF4C');
define('SECURE_AUTH_SALT', 'fP=rP+>sf{&.IY-.ZuS0`n&mh72`?D83#&r(s*!_LAl<@4 *<Vn@l4rmpKG&XNoH');
define('LOGGED_IN_SALT',   '1>VW1z_`gA5/%JTONlt+6T$rs64f*5?!6jhK)u;H>K7:BlM%[*R#$oef]Y6xWQ]s');
define('NONCE_SALT',       'ny_&CtcK$ UFrH(1aa5!LQTi+O[CWaO&C`}ghAvMWbb~x@wLlIcGIT<<d4(<Gr:y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
