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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '3864fdb53a');

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
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '}k@BcBNMuFn>M/wMe?Ty>C|YKjuMvUvnv@(o)Or;=thX{c-wSy<)*Aa[QaHo^o?NtO^B(@z{i}WkgRw$JV-MERkm;bfrRpN=a[oIdRs!wN/OLkpFX?IN{vEpgIqREx{o');
define('SECURE_AUTH_KEY', 'rk%EfXn={>;ZeqqHIVAe*wkHk/gktn*x+m^$EV@Y+kf;gGyxoxB/qj>D@zJXVp+JOFdLB^@])xZx-a?UnCebdFc}elD)@iiQmpN_DULBLMOZkbnOW>@c@Du<w(WJv(pp');
define('LOGGED_IN_KEY', 'y&!qJzXaeM!g>>q=*DFbw@!mV!{-C{CTx!e^sW@B&^FBidvMoCvlnW^})pfLLl/==GP@^}Wrz;FCxk*I$PJOseN(-ScMf;VVm*wm=GlpvUjGrGLmQfje;sTOw+JSb!Gj');
define('NONCE_KEY', ']OBWCSp]LZ$FZ+qA{lIefnMMS<uccWS_P&w!VE)GM&*ASWCfR/]-;D%E|q*uUQnf_+FCkXDvEL+PjXZakdxLx}+k]K?iyKHAm%!tWU^m%MMPV(!zl$/d;Fcn&$yD/{Q*');
define('AUTH_SALT', 'BZHn)bZI?Gnkq!&r}q@BnB&@-QAwi(|&m&gp}!qdf;ieZG%OZzz!i^?FY/KlZUXuZ(K+g-tj];vMs+zYfe;$ODu}I<qmH>RPo?RH*d-sC%@y]/}Kfn/[aSG_>y|umGU^');
define('SECURE_AUTH_SALT', 'Pud/MhYyu;+bX)s(ki+kOZCIs;f>nK@]ZlZaIKJl/)^Jtdk-VPJ}oSY{-NwgmQ=ipUn+VMqb%O<($$;VewTQ)?/HBbzDJWE%Vs$]/<aO=p@/nt[spFiT(vr)Z-OhbV)I');
define('LOGGED_IN_SALT', 'HkfZCr;=%Hk%?k$]u+<nNM$wkH?p@IgRcWsL>oeKQJEQvE;+Tjm?uTz%&uo$]PU&fC=l|$bo&]{}LrdZfj@tc[VXJ](W>-*$bDTUWmpdKG!{Seubff)=m?B;Rp@AF<)d');
define('NONCE_SALT', ']F=lMQdjs+DEzRjJ>$Bqk=}gLohktKr=T;j/J-xY%H*Gt?ur|])_c-qN&Z&uL(E>[vFvn?<{bc_}ro<k/bA%NHT/GYR/pEn]sRjt)MCQZLW&XtIzMNG<-^AYot?hrIpx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tiht_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
