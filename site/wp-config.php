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
define('DB_NAME', 'wordpress_4mm6h6adih');

/** MySQL database username */
define('DB_USER', 'FH2Zk41SkHX7u4t');

/** MySQL database password */
define('DB_PASSWORD', 'IFdklpiLPsqYY0ck');

/** MySQL hostname */
define('DB_HOST', 'somosfelicidadcom.ipagemysql.com');

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
define('AUTH_KEY', ')guWVddlS@WQ|]Hf!Ac/Qbefp}B}EQb!jbXHj%eic!dQth{xSZb/Dfe<v*AbeAThIcR@(&$c*ufcJtJ=SGkvk|>Oe;EcVLCfPs+qz@otKPvn<fI|hZ$*=&{X<xAWk]|k');
define('SECURE_AUTH_KEY', 'EAKnIYJbd&}]PBYIDI];[d{bhKp}BLIHd=V=KMPQ(MrFEW;(Q;Z>xMmh]nxKvvGc@F_a>oDWP$f-zQ(V>]*I/lCuo})%A{kJ;}H|FmptPSSP_T/w|mRv]d^tJ;o<eh{U');
define('LOGGED_IN_KEY', '}grSulQYsF(ZcqTA}k?Fpe&t&Rs)!to*](R/$@;<|{i}CrTa//yzSHX@-XaRF&JsjqsjmAF&t_j(^Nw[?j[<A{>vXvTa-|rCOZ&={fEHPeS+lv$DMA)kG]GL%t}BCoTx');
define('NONCE_KEY', 'cbcri}ggDDpFT<^z|)hAkV(Ij}!!h%)mC?WPbg/wP_QyJ$nqC_Jr(aw>&FaM[<]!e-}FL_|JRZGN_iM?DXPrdlc>bJQvBHQu}egzRhODKg_a;PG/TRpRlUao]ic&=>=[');
define('AUTH_SALT', 'yo?XwCmVRa]>_e>Pp>}f%+u<P]NttUOOdkG%v>Ss;kWdMIswwI;GKLi+wxg&/By(I%)RYwJ[}Cuh]c!cs{pla;RJdy![NylBosinrU/pxSAyUvm[-!WazyGdL=AbiWW_');
define('SECURE_AUTH_SALT', 'pADYsKLIGwwr_dAUi?n$P|XPOg+pH-&zGOSEj$Fm=Vw}?O-_>&C$!XYo-*@G?Q>JRsSWZm)ap@u$ic[WUril[|oYf@NH?r}p<Oe$BZ=syM%aBAa<$rSz-y[zM>nsnI=t');
define('LOGGED_IN_SALT', ']/TC[*_^AeFz_C?uohiB+Di}}N=x}a][EYOMMErNBwpS<ahx{mto-JC>Rs]-PC;O]@&q!hdU;wxROgyfjELo!emz)ejwW+{%?^mIBD(V(^%!)LZLt}Q>F_bU&Mzb*sMj');
define('NONCE_SALT', 'zUSsAz[CU&-LrUMrSiN-ifQvYx-&Pn[yln]HodZwmySbkZ;iQ=TEgU&sC%zCkYO%*jk<NGJJ-+[G+c|FY&<Io+j?/tx&Whqv^Ub<IM|_O]VXv|]wFK<esUAeIG?&N@l<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fema_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
} */
