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
	'ACP_POST_LINKS'	=> 'Postituse lingid',

	'PL_ENABLE'			=> 'Aktiveeri postituse lingid',
	'PL_ENABLE_EXPLAIN'	=> 'Kui aktiveeritud, siis postitus sisaldab kopeeritavaid linkide tüüpe, mis on lubatud all.',
	'PL_LINK_ENABLE'	=> 'Aktiveeri tavaline URL',
	'PL_BBCODE_ENABLE'	=> 'Aktiveeri BBkoodiga link',
	'PL_HTML_ENABLE'	=> 'Aktiveeri HTML koodiga link',
));
