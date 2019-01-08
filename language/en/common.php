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
	'PL_LINK'				=> 'Link',
	'PL_BBCODE'				=> 'BBcode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Hide post links',
	'PL_SHOW'				=> 'Show post links',

	'CLICK_TO_COPY_LINK'	=> 'Click to copy post’s link in plain format',
	'CLICK_TO_COPY_BBCODE'	=> 'Click to copy post’s link in BBcode format',
	'CLICK_TO_COPY_HTML'	=> 'Click to copy post’s link in HTML format',
));
