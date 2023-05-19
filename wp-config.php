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
define( 'DB_NAME', 'lalla' );

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
define( 'AUTH_KEY',         'lpAPlm]ObCpRiZ}VF<_8vSr)Y(zh-tBUk|U:F=H[b@MTG|VrE2IR8!5!d(?}AP(x' );
define( 'SECURE_AUTH_KEY',  '5&MjhXJ6j+h#&#F%8*+E6`kRQ8EOMftE<Pme3},wV$ 3a|[&Of~(][*xSs>0}iux' );
define( 'LOGGED_IN_KEY',    '#kUaGU?e]]@F;ys>n0!M=i<B{y*_BW$%EAv[fcq /|c_92f]`5?*!tP{xUkAam+b' );
define( 'NONCE_KEY',        'pXHv*Nvu1wM0g5UkoT=jzhT+(nfMkXNLtQJ A/i _i=hhbk,aB9mAx-r+L&{*X?O' );
define( 'AUTH_SALT',        '5>}NvYj56l`f}sk,@1L7AHb+^4uDf+-^ -F{Q}8ZH iGAD9}T:qXdx;A/DL+U5N2' );
define( 'SECURE_AUTH_SALT', '*RVPX0s]C+Yku-T@IL@s__7RvdQIa<;2$Ls}7Cx2{N#$TS21CEcn9+$?pLebKDT!' );
define( 'LOGGED_IN_SALT',   'm7X6b 4V(Lw0_A@njX46]x;O`fE-LevPCgZIu|?4<=y,(nc:;~H|NuyrSjcw:q=F' );
define( 'NONCE_SALT',       '&j*FX.qO:dh58FB_aoM3l/2sLF([&8(E7>@<[3KL}C[5lO?SdwQ?9SQne[}F)/KC' );

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
