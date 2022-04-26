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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'area27' );

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
define( 'AUTH_KEY',         '5Ze f[Aizn:}o]Fq@j f0=CJ`}R{$FbKm5+:h?J,>Ko/~MXu99r7;O^~E[2)1i&L' );
define( 'SECURE_AUTH_KEY',  '{,J%ot#{kdecVOty/(EEMY5]3qL3a|06>LCk8;5R3h]t{y(PTS9#2xq%(F=G)Rog' );
define( 'LOGGED_IN_KEY',    '2g$uzhZhPLwJBO?BzI4wLJyja?e<LLU:o&w5N{0]Xg@Lb(msvV1<6}c |EJ_vH>J' );
define( 'NONCE_KEY',        'Xtm3HZ#r]`+wM7b|F{2OhJF>D(&QXhRiE?=e=Ux;<&O=~~#8Bl;ixC%q,]RQX6 ^' );
define( 'AUTH_SALT',        'Mr(D=~UaFn5R@*oHXfN:9(`E>yy>>#Y91A*t?H:L04&]8~M4s3KVl,6IjP20@9lQ' );
define( 'SECURE_AUTH_SALT', 'J^-*/Xx{E*_A@kcSKXrf^X-Z ;I8{9j%PYZ]gJdk3O_)x,K%@FJmvbm2|*E* _iv' );
define( 'LOGGED_IN_SALT',   'x7YDBPz`V@f>sbnW2b-TYrc7PJ,`7ZcPTmS2LX,,2!bKa_s[o#[|{gIdjdB(SQLB' );
define( 'NONCE_SALT',       'vo6RBn%ORq1$Q?dfUmgGe-_gc^3WEW_x7:(P?iK8ID:GZ1UGlC_o.F-^x%;++2=;' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
