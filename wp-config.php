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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't12#9@mb/`aK}t{([U{k>TJv8td+p3|j[Otz-*XR6^<ouwo42n^6ETGQPG`{lxY/');
define('SECURE_AUTH_KEY',  '6CY9N!ehRM@U%r>Bsyf)|Ik#%R:`}p?lDt3+U5fxeZL`&>Jp+xj&+4YQQVA/s}_=');
define('LOGGED_IN_KEY',    'QIe-<$qcf!q,UQkUMT0jpt=aSa6|LT98YOmD]HLb):%ns2<zdO:r Lf+[q6sU|eb');
define('NONCE_KEY',        '*:SXuyjB[X*> ^OzvC1s:6qXU*}]t|3|49;g&0UFhd<(i&%*C$MLfd51pchuvMKV');
define('AUTH_SALT',        '8U*th[Hk[fm98E+.Q)P DwV!nRFWRO^,=#@u,yXfd}+5ZR#Bpk8F-Twcgg-`04o?');
define('SECURE_AUTH_SALT', '(ya-VIlZX4%FaqGb=2%p8AJ hM+)=tQN_--| -J|7i]t]@Jna[O.C3-9pbNW5vfe');
define('LOGGED_IN_SALT',   'mqake.rX 8m@OP[s}-YEW60#7NFdw}I>M?Xw0;)JZ;<oFQLU.^x_Eerk^B%h^J>P');
define('NONCE_SALT',       'Sq)Har(~QtFq*TnXi$XB,O^#UtN++u/kjw8`n@XyAr=p<r9lcvTXn2PfuC>LKzpr');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('WPLANG',"en_GB");
require_once ABSPATH . "./envs/index.php";

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
