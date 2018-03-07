<?php //define('WP_DEBUG', true);?>
<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'spcom_renew');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'spcom');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'spcom2018');

/** MySQL のホスト名 */
//define('DB_HOST', '192.168.0.207');
define('DB_HOST', 'mysql713.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6smaf,3x)@Kc]3.TTUUN$b9+.L`gF[?v] I)L.LBwlo)L-:^cx@2)3h~ax+wb.fi');
define('SECURE_AUTH_KEY',  '|)dG$c}K5b!1>L&uj&~7  %Xe|k{g+vQp6`%zSk{o$+t9g|Z>}e~xt{Rc&>}L<Oh');
define('LOGGED_IN_KEY',    'uJIUU*RFd+}l7dE^.+mO`HLwn02e-H@&gXr+XVXBYTP9?yU=t2P:.#8eLV(`Rm0+');
define('NONCE_KEY',        'o~Yk;C/*V-g!@.@Hn=qItA[pd16-M%0Y2`8cKmUAGb][bY-Sj1wGdjB&IuQWnA<(');
define('AUTH_SALT',        'G&6?(hA~?-j?kWhlltE>`$jS4t174}5@c2lRpuNde259_.mzlb[bdPVs[45r^gxZ');
define('SECURE_AUTH_SALT', 'UY(5y?uupF}E12Bcyd!&YM{*g2kF,MhCE}gTcMm!RSchR<1abos>FKfIX`|y=-ae');
define('LOGGED_IN_SALT',   '%@,g!R2:*Z<*@fS]w0p[Y_gZyz#f3c+-LKLKk_507RFfK5tW)R3p&Y|;lncdx=)l');
define('NONCE_SALT',       ' 4Z8y{D[l(-a#9M1{(oZn@,!{9#6,qveHs}?HO;+v-d65OXJXo]`V:LI,G5$S3QV');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
