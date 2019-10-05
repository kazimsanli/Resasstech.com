<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'resasstech' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',/$vgY)@(X1vNK}7<+ds<)L6Z-yMzyv`]|@1&~ZYTIAN#*>K}.~1(5NK+NIBRE3!' );
define( 'SECURE_AUTH_KEY',  'jTzk8:%uE&-=R_>Z{SDq8s0pf+s~Ab/{7fqc/ ~p%!S)sN#<t^XL.%+atTEkfA>Z' );
define( 'LOGGED_IN_KEY',    'p{:.+>NWv2PoVUX}6@pZSG/50!N{P}4dzI%mT_@#{]RdKeYa(4g{Na{%6`FlsHI.' );
define( 'NONCE_KEY',        'X(.,C[!1K?..m;u9m@Hu&I].NxFa#RIl_l-:+^?>R!D/3o^_Vp^&U-W?^$_Vc+Bl' );
define( 'AUTH_SALT',        ')@{0~MiBzHs&!QJz{aL!:X4C|hC]OeP)~Y;7y&x^AV61UY5v/QE`8K-EH|(,YG$t' );
define( 'SECURE_AUTH_SALT', 'b&4srnc+kBc=6NamF(|rF?H@s>JksuoQguvH~,hh3I^sC$tL66$<cGt1xyr^Fi3x' );
define( 'LOGGED_IN_SALT',   'y.4n2a#gq5GkN8D,&UTnT>)&wwqMt5^O:OS^1&9DHUDj|jv8l<?V~|b0T;A4b%54' );
define( 'NONCE_SALT',       'r{1nTb{>=fGJHSZfqpxkUd<Kbg:|f B2Fe+]$bZw@OEL-,CqPDbBy/Utp34|FhO ' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
