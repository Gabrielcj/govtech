<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'govtech_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yZ?FtR=W?7BaE, -1Do0yB0 ^5N@)/1<MqdM[B0W!H?t*goke nI*(itx5|%Fpr#' );
define( 'SECURE_AUTH_KEY',  '(H9Y#H^071{yW2T(S{@VCrzN AJ25sep}Awb7%]Y+@4Ts]ebUw[xz%UoNqxCw=4.' );
define( 'LOGGED_IN_KEY',    '[DrMT!5~02d6^zt`1r#>L*tbQx^Fs-(C^:}Px3|r;V>ipCaF~<]{4&.dm-5L>^)`' );
define( 'NONCE_KEY',        '${m`l6y{GOJ:>o>yO3Wi[,yso9AvzRfr7S@@OjdmZozCF>xAV:MZ 5ynRD>9bF/4' );
define( 'AUTH_SALT',        'cMh;;@H8!d(8D7#Z]VaUVva?uZl;@-/ca9-}0c~CGZQo{[Hc2>zg[)T`!hZ#}A,=' );
define( 'SECURE_AUTH_SALT', '&>;w#xgld2r26)J9IQDro}pOWFNIXpoUdnl7rG+BgEjM~7L@Xq*Pi>bEXwrY-q>P' );
define( 'LOGGED_IN_SALT',   'l!BRtsRt<F1u`jvhxeOWV.^-DZ6S3U=7g>|TQLoV} ?T2e)]F6XCa3r;Zsc,c/PO' );
define( 'NONCE_SALT',       'nvd+Cc?ZSzIjzlKl`~gy=sBID-2E5SZ0A8XQ]?$xw^50P&+vczDV,o5dleI=N2A~' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
