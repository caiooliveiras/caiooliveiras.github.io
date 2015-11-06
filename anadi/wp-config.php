<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'elaineoliveira2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'elaineoliveira2');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'novaera123');

/** nome do host do MySQL */
define('DB_HOST', 'mysql03.elaineoliveira.hospedagemdesites.ws');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XQ mf~xtrwLbetdb!=? #f5B9HWPg+g1y/fC]oi;UtJ[,zVbP$<Wh/3Zt9/wedcp');
define('SECURE_AUTH_KEY',  'K+.M(<,F|QQQ>138Ct[Lr@|*(3r:R$tV~okKutaHCV&ZT|nu>}D!~Iu;BRhhhH(P');
define('LOGGED_IN_KEY',    '^-lH!P7}hq+Z@~pNMqpg{[VI_E]Qz.y^*$KXbESs#OZ3F<Lof2-idJ|BfXaVr19e');
define('NONCE_KEY',        'wyhO1+vUDzS-lt-[OsEkSl^F8tpca{p,AaCHOSN4V+?c7-~c/(VC-zMVT*GO*7Wf');
define('AUTH_SALT',        '@FbW+x&C&}=0N)>-/APa6wG1FG._3v)RLJ4f1aDh-G*d3spyEarl[4&qDyUvkm$D');
define('SECURE_AUTH_SALT', 'U,_7,BR.Thx29|rCTAM96+!gp,8xx>@B/%gX;9yPYmcrg.umtHML<%-}@>AGKJEL');
define('LOGGED_IN_SALT',   'BN]fT^+VkzO9(<)m<4I elzuUK7p:>w%7Rg7}p-|NLRpD8=km,Lb<^Vx25Kty`u.');
define('NONCE_SALT',       '+Hoyf+d8Zr+HHc<tCS]N.PA(c62FN<I,~xw.nQzFU1g:%*!Vdx^}[Pf}0 ]rg2%q');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'anadi_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
