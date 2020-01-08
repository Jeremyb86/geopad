<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'geopad' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'geopad' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'geopad4949!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db4free.net' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MM*uQ&IFeWce~lA=Qt04)b$f%y:QDzjFE4s@_R)@NRgE_Dn`jJZi6sfY~Ax7a5yt' );
define( 'SECURE_AUTH_KEY',  'yT}=~/4[ct;n=R>MS[kv;-*A$Hu]&}.$0gZoaAosGB[SG(jmW=f9e(N>>fOZL&*h' );
define( 'LOGGED_IN_KEY',    'x;x/NC^H/pg?IVOgWs)5o(-GPW_6gp50%s}+i1=GBG[`dp({)Q>k0@5-hZlh{&hi' );
define( 'NONCE_KEY',        'Pt.S89)Z|>A-~qQ B!1Jd<mie%zA$A94DY-g*ZzUDe7jzZ9cA)qki(Hf{buqB6dp' );
define( 'AUTH_SALT',        ',`y{)wx<M8=6-*:h-2IP>c~:=u%P-)oQc^4JtS:3zU7~X4)Huv=28P|bFRE@c6V(' );
define( 'SECURE_AUTH_SALT', 'aj/UM4va1Q$lR<+*MA)I&cFq^WjGk[l!Nn5L.u>;`wEi^(ZU(w(rjwd;SKF:!pA[' );
define( 'LOGGED_IN_SALT',   'hLJE,dV$Uzi;yeZN`nc1>(6k%1*vfH5q>q|Au%$/[V_b)EQt`//I7pd8|5f/8kIr' );
define( 'NONCE_SALT',       'x=tEzTy}=>l,:pR7HPzNjt=P*e8+RX,s+s|{fLb!s&G[OX{*ki}TaAVf+9lF4ms4' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'gp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
