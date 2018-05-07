<?php
/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'presentation');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY', '5{!v)ha5bzeSjr)&[Sz-wfC9<+A`-ZUNIk7klU6yQr!obcSF_G|ypGN?S*@po1U1');
define('SECURE_AUTH_KEY', '(+2rSx,+,%urGRGA8$nJBdr03g;xF[9=TULbRrqwd&;<|SitwhE[!F|ijh{_z=[D');
define('LOGGED_IN_KEY', 'kH*`dlbEvRlZOtYgX{4G!Fgg+<BVV-G_-25$$xwxHb&CLZD*;n:Q|~>G?QJc+LI4');
define('NONCE_KEY', 'T|fz20` ti%&7+wyANG`3barDWDya5nn!g-K|h1gwwa1w6bZC1W%0,TpLJ3!m@Vz');
define('AUTH_SALT', 'XU~kRwIOdg<Ef_C;h-&D#@UQ(TJ,C}?qmA@+Fe|^ws*^QfKB*YR]B*$d:zmBLtGX');
define('SECURE_AUTH_SALT', 'QzC.[q)iJO[u9[(gilZSPO r[-uPf|sw8B.OMY+4,oP+[^%oB(qn 5|Yfi_Da;^3');
define('LOGGED_IN_SALT', 'r&%5TllG@%H$@#{0cQVFQ5`<qr &*Ir:KW= bKq!2At~|7jXb^`1^=[|GJqCG*-&');
define('NONCE_SALT', 'NZ[hTKKEKiq)kfm+/aD3<v%hI{4+].tml/<Oz; vXHH]LR|(NS[URJS}.2~MEKx|');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de.mo to wp-content/languages and set WPLANG to 'de' to enable German
* language support.
*/
define ('WPLANG', '');

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