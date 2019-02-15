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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_lovefood');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '5<e-1_/MH~Rp,=},^X`m~$Z>m[e]25, ;5_CyH*;4Gl7yN-6wGuF$oqK-qGpGgg/');
define('SECURE_AUTH_KEY',  '3pU;!`UV8]D|B<b.qrDlN7Xa4nKZs7+^HVhtV!c& k9xs0X|pC?73Jyax=6Zk+}~');
define('LOGGED_IN_KEY',    'jV5vPc?Ds]OH_1w${rEk/6G#R.0Q8$uV&[yPPI4>%w&vqIb^x_+aKp@%q+smk7UK');
define('NONCE_KEY',        'J}A~/1g<x{iw{B_=DW$C1Ag`D,LA?]Gg1%]gSlI$$X#!})P#zL#=Iu`~Y]=3@1Gr');
define('AUTH_SALT',        ':;[X-oVoj$POMtJu]v&LYUsvCAt,+pD2=.bcr=eb6~rx!d=yRbNe>]g%2mrh^^hf');
define('SECURE_AUTH_SALT', '*$t+lfF(0~;V5M@>.;<KFb$W]-w?`ko=BR/&#A&a99DbHUbE[tUr6P0kZ,2fOIG{');
define('LOGGED_IN_SALT',   '}oY6Eu2|6E|9|VrzJB7geRaP^(<`6|:mnjg]GOV,`5G^R*E9achLA]`;X*jen!f,');
define('NONCE_SALT',       'Z+ZkQp{&=w4OZajx)Aa(]};}Gt#j6gW1?<VHN}C;9l<4qI|*#k|3uCY9/Cj[{P`m');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
