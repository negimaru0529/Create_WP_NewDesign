<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress_lp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q}asry!{3_n`VqmqHRvb$04NT=<39OWkN,Zzy,|8`uR)lpJ8(Il[(cADA9#<o~K=' );
define( 'SECURE_AUTH_KEY',  'U]rW]lOgTtcKU+Q64^!~.8w3n`(G_Ri^VW+XR>wpY]>Cd,Y7gw?zy^+CR1MOtrbt' );
define( 'LOGGED_IN_KEY',    'MNra}_<mT6pBr!>wPfNN]6/i8}nLHX?GWB$j(Np+Z5-Zc>ypvWr92> {,)ZayUgo' );
define( 'NONCE_KEY',        ';R^o$t3rzM@LL&93:i9i}jG#JmQF(xi2;(pB9l-OB}k=PJvmkEEx?@sn@fy_8tn~' );
define( 'AUTH_SALT',        'K3a:@J>`D)XcqGVGH!,`w$61TbQO$LwI6`QkBTK&R?1n&L#en,N%##j${!5|SD$E' );
define( 'SECURE_AUTH_SALT', ' tFHvuQ#j8~3}FW-n*WLp!`d]SN7*}/fDiONrNdLx>yC(.S:.>IBi9~]sRVg1Yc%' );
define( 'LOGGED_IN_SALT',   '^>ZmDbL!+p.q_N{I~g?Auu%s][{N ;XL|8=1gRyR:iUN8Sqcz8f`ue]Fpu2<h+|9' );
define( 'NONCE_SALT',       '^7m9Osx}A&,Y b{zAMdDdh*<n&U1:Oq|i74l-m(U1IN7</XT2)4*EcZeZSB^k(tY' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
