<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'paraiso_tour');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'n;D_13a5E|^B=o!4UwoOMzF;SMj$^qxT_]/qDTFc-w$lguL7_g^Y7r>p/p`%c> 8');
define('SECURE_AUTH_KEY', 'y{CW}t^SJ1ru>Mg?K|b2kc,#-M}1Q!bJ,g@Je%ItxhqnzcSD(iZ<AgFRMjNpqrCr');
define('LOGGED_IN_KEY', 'eLM.LU1^-Ye08J:GN*FZg%-4$e,GGCx(:fwg@z<ua^*u~,6m6BzM!CX)C+=2zShs');
define('NONCE_KEY', 'm%z2bgLfc?*3V=o#j?f!_s2V%gObhqAlC(CG38Xd2W#S0&pB%}Gil$yBr9_.Iqf:');
define('AUTH_SALT', 'W!@49f+rDh4Q|cJzO&xc%bNRg6mTzfc=_B+iH!?iM>Q9rXSWE(|as+39{h7@Uh#b');
define('SECURE_AUTH_SALT', '/P&/I:54RL:s[0uB<+HVbf]<|$aI,{ I`B.&,h#oz6`Xshe(w!KOaHxD*DYia/{Z');
define('LOGGED_IN_SALT', 'vyv3j*g|uN$EZ~OL(8(V:^(j^b<.:}8IwYW!4KSITp57(AXZiYL2V<xJefbix!A^');
define('NONCE_SALT', 's53{LQ,@_/5*QUe0y[JH.&0Ae.`}8R!QDJ99{OhXMCn1D6b3`wPxa|:oP[k_9I,7');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


