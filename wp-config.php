<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basegims' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')Q@cBC9r@X:l_ra/3 ]gp+U1z5.0D4?v[.Nt@5n#I[ ~(beQA|64oJr;eURux_5N' );
define( 'SECURE_AUTH_KEY',  ' MQx)rK_ P|4t=Rat!e-dX,z(kA81I,pr%sBTee$qZ=ec<JC3HDY3aRilWVohYus' );
define( 'LOGGED_IN_KEY',    'fzELZ`)4)34c%15F#ZOUu8!+=;*0_;K4vJ-9vk< YQ#9H??svR:;]){bD0W:JWdL' );
define( 'NONCE_KEY',        'q{&Ea-G#OYiO=-Hj@O%>VBC=x&*Rf];bg$nX+dit;(^f=ek^Sw7{ftQVIZI?1<in' );
define( 'AUTH_SALT',        '8 PKH c$ZqEMn3D|jv<Iv4C3:yNYt&vEl>T~G9ap9q8u,@hk>d[I9:E?AF5otNg7' );
define( 'SECURE_AUTH_SALT', '5y*MMR(oTP Dt<(T*VX*|:lpQ#hpvykObM,[cYUt_J%rrBw]s%Tnm.3RZ|:lDw}:' );
define( 'LOGGED_IN_SALT',   '1^=E*VV[{1T5m<cX#O%78e&}8AeD%w=2t0%Wa-o!Q{j+]&+`~30_MK~ZD9%xa9vN' );
define( 'NONCE_SALT',       'vW-{YB.6khR!(7Y2!).-o>)+=Fq[p:f_Fd[%4ebyTN&fW$~u}X[fzL@kQ9l.@pkI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
