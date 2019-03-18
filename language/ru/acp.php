<?php
/**
*
* @package phpBB Extension - Senky Post Links
* Russian translation by HD321kbps
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
	'ACP_POST_LINKS'	=> 'Ссылки на сообщения',

	'PL_ENABLE'			=> 'Включить ссылки на сообщения',
	'PL_ENABLE_EXPLAIN'	=> 'Если включено, каждое сообщение будет содержать ссылки разрешённых ниже типов.',
	'PL_LINK_ENABLE'	=> 'Разрешить ссылку в виде текста',
	'PL_BBCODE_ENABLE'	=> 'Разрешить ссылку в формате BBCode',
	'PL_HTML_ENABLE'	=> 'Разрешить ссылку в формате HTML',
));
