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
	'PL_LINK'				=> 'Ссылка',
	'PL_BBCODE'				=> 'BBCode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Скрыть ссылки на сообщение',
	'PL_SHOW'				=> 'Показать ссылки на сообщение',

	'CLICK_TO_COPY_LINK'	=> 'Щёлкните, чтобы скопировать ссылку на сообщение в текстовом формате',
	'CLICK_TO_COPY_BBCODE'	=> 'Щёлкните, чтобы скопировать ссылку на сообщение в формате BBCode',
	'CLICK_TO_COPY_HTML'	=> 'Щёлкните, чтобы скопировать ссылку на сообщение в формате HTML',
));
