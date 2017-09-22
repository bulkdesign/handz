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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'handz');

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
define('AUTH_KEY',         'EH+]Y`UZMx^k9(q)iZK1ePVzFg3WB_r72SpU_mK:5|boT}-#%KO=WShaTIkDq,`o');
define('SECURE_AUTH_KEY',  '8Gs{4=>p4Hkwj[c8RSX$s1+_vEn.:p;<+*MorZNmnD,jZiC*}S~Nd5u -wcP9u~+');
define('LOGGED_IN_KEY',    'VysrKtj!{3,mPW,6|$7sm5&!sdyO61o7qod{5ZX:+aHq<zv(0h))Kt8ES>.emY5+');
define('NONCE_KEY',        '6G~SNFl<RIi:Q}W[4hZnZWo|w12mboW(ufD!XFi<*zymDl6!J+a*>v7DZ:5vNs<^');
define('AUTH_SALT',        'd!K8c?@gL)NOC&kSYKB?_G 5&nt#D>,l,<tP?T~i3^@?n#VzksG*id-3k2^*y*a)');
define('SECURE_AUTH_SALT', ';+KL2.Qjgkl B.cw<!E<,#NY7/p:u~#tYwnQMOXix{l?M1IX`o0DI5F3R}U1YcH!');
define('LOGGED_IN_SALT',   '#y2Q)L/Aa~n!n*1YWZvswE=Mt&s4K|]*m7/Su-Fu7igCkBCZ>ha~M@M2bc~q,yT^');
define('NONCE_SALT',       'y#kK,{%{=pCf9K|LF7dMg(:A^75Y*&RzwQ5gn?vlK`y1gM.wMx,5flLub>zlk`KE');

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
