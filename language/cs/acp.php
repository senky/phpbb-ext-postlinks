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
	'ACP_POST_LINKS'	=> 'Odkazy příspěvků',

	'PL_ENABLE'			=> 'Povolit odkazy příspěvků',
	'PL_ENABLE_EXPLAIN'	=> 'Pokud je zapnuto, každý příspěvek bude obsahovat ke zkopírování níže uvedené typy odkazů.',
	'PL_LINK_ENABLE'	=> 'Povolit prostý odkaz',
	'PL_BBCODE_ENABLE'	=> 'Povolit BBcode odkaz',
	'PL_HTML_ENABLE'	=> 'Povolit HTML odkaz',
));
