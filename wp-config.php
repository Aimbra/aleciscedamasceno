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
define('DB_NAME', 'alenice');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'alenice');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'alenice2018');

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
define('AUTH_KEY',         '3TtA}=DaU/R@}_|T/?n/}?LJPgtiF9@o:~Qf^!k>Mthwnk?X!#aV8S/7RuWrajAh');
define('SECURE_AUTH_KEY',  'gN<P^86QPgEb6UGHVr76TCyCr/+~+TWqA;<.iNgDG:.>foN;/0N`sy }H[`8A<C.');
define('LOGGED_IN_KEY',    ';Da)~N!OEVN-?rTppI++V.V]))CAr]lJL9Ds)DnS3Re@I$MbOb6TX*0[2sqk^ wR');
define('NONCE_KEY',        'K0FCVsS3xP^8&X#/rhy%D$q-Rlh..vK7~cQ-Gv}.Qb,qLS;<@R6DemJ[qn5Cu$B|');
define('AUTH_SALT',        'DQ#G!ZhK|vtL*i8m}7(VL!@&feWXh#60&Y Q7yjWGKtM9_seyT4daAm6DE6W#TK?');
define('SECURE_AUTH_SALT', 'Lcw[JLw>o `4/2feDJBQ}b@GvRH;jky`A):,}D]L7+&|I7}xYB>Uaq|(+5rAQ*o=');
define('LOGGED_IN_SALT',   'pbwP1]3f,[dwMi]W8l$J;UCiX)P`ReU~dA&Y9A?p$}6$VRu6Dr,n)&9<$C42>wGo');
define('NONCE_SALT',       '}>,$*}/)t&98m_!`}Qd^|8oC|OW7scWPCNIAT)J]`TC<SPQvOHH r?&e]eZ~XL8Z');

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
