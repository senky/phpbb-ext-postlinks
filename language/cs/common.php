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
	'PL_LINK'				=> 'Odkaz',
	'PL_BBCODE'				=> 'BBcode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Skrýt odkazy příspěvku',
	'PL_SHOW'				=> 'Zobrazit odkazy příspěvku',

	'CLICK_TO_COPY_LINK'	=> 'Klikněte pro vybrání prosté formy odkazu tohoto příspěvku',
	'CLICK_TO_COPY_BBCODE'	=> 'Klikněte pro vybrání BBcode formy odkazu tohoto příspěvku',
	'CLICK_TO_COPY_HTML'	=> 'Klikněte pro vybrání HTML formy odkazu tohoto příspěvku',
));
