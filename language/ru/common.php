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
	'PL_BBCODE'				=> 'BBcode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Скрыть ссылки на пост',
	'PL_SHOW'				=> 'Показать ссылки на пост',

	'CLICK_TO_COPY_LINK'	=> 'Нажмите, чтобы выбрать ссылку на пост в текстовом формате',
	'CLICK_TO_COPY_BBCODE'	=> 'Нажмите, чтобы выбрать ссылку на пост в BBcode формате',
	'CLICK_TO_COPY_HTML'	=> 'Нажмите, чтобы выбрать ссылку на пост в HTML формате',
));
