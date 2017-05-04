<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Swedish translation by/
* Svensk översättning av: Tage Strandell, Webmaster vulcanriders-sweden.org
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
	'ACP_POST_LINKS'	=> 'Post links',

	'PL_ENABLE'			=> 'Tillåt inläggslänkar',
	'PL_ENABLE_EXPLAIN'	=> 'Om tillåtna, varje länk kommer att innehålla kopierbara av de typer som tillåts nedan.',
	'PL_LINK_ENABLE'	=> 'Tillåt normallänk',
	'PL_BBCODE_ENABLE'	=> 'Tillåt BB-kodlänk',
	'PL_HTML_ENABLE'	=> 'Tillåt HTML-länk',
));
