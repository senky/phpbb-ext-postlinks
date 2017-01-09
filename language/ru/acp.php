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
	'ACP_POST_LINKS'	=> 'Ссылки на посты',

	'PL_ENABLE'			=> 'Включить ссылки на посты',
	'PL_ENABLE_EXPLAIN'	=> 'Если включены, каждое сообщение будет содержать ссылки, типов включенных ниже.',
	'PL_LINK_ENABLE'	=> 'Включить ссылку в виде текста',
	'PL_BBCODE_ENABLE'	=> 'Включить BBcode ссылку',
	'PL_HTML_ENABLE'	=> 'Включить HTML ссылку',
));
