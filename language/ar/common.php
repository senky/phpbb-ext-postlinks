<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'PL_LINK'				=> 'رابط مُباشر ',
	'PL_BBCODE'				=> 'رابط BBcode ',
	'PL_HTML'				=> 'رابط HTML ',

	'PL_HIDE'				=> 'إخفاء روابط المُشاركة',
	'PL_SHOW'				=> 'إظهار روابط المُشاركة',

	'CLICK_TO_COPY_LINK'	=> 'انقر هنا لتحديد رابط المُشاركة بصيغة مُباشرة',
	'CLICK_TO_COPY_BBCODE'	=> 'انقر هنا لتحديد رابط المُشاركة بصيغة BBcode',
	'CLICK_TO_COPY_HTML'	=> 'انقر هنا لتحديد رابط المُشاركة بصيغة عادية HTML',
));
