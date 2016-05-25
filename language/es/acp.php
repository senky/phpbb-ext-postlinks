<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_POST_LINKS'	=> 'Enlaces a Mensajes',

	'PL_ENABLE'			=> 'Permitir enlaces a los mensajes',
	'PL_ENABLE_EXPLAIN'	=> 'Si está permitido, debajo de cada mensaje contendrá enlaces copiables de tipos permitidos.',
	'PL_LINK_ENABLE'	=> 'Permitir enlace plano',
	'PL_BBCODE_ENABLE'	=> 'Permitir enlace BBCode',
	'PL_HTML_ENABLE'	=> 'Permitir enlace HTML',
));
