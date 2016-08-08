<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated by phpBBeesti.net - Mikk; <et.translations@phpbbeesti.net>
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
	'PL_BBCODE'				=> 'BBkood',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Peida postituse lingid',
	'PL_SHOW'				=> 'Näita postituse linke',

	'CLICK_TO_COPY_LINK'	=> 'Vajuta, et valida postituse link tavalise URL lingi formaadis',
	'CLICK_TO_COPY_BBCODE'	=> 'Vajuta, et valida postituse link BBkoodi formaadis',
	'CLICK_TO_COPY_HTML'	=> 'Vajuta, et valida postituse link HTML koodi formaadis',
));
