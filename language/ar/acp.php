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
	'ACP_POST_LINKS'	=> 'روابط المُشاركة',

	'PL_ENABLE'			=> 'السماح بروابط المُشاركة ',
	'PL_ENABLE_EXPLAIN'	=> 'اختيارك "نعم" يعني أن المُشاركات ستحتوي على روابط يُمكن نسخها للأنواع المسموحة بالأسفل.',
	'PL_LINK_ENABLE'	=> 'السماح بروابط مُباشرة ',
	'PL_BBCODE_ENABLE'	=> 'السماح بروابط BBcode ',
	'PL_HTML_ENABLE'	=> 'السماح بروابط HTML ',
));
