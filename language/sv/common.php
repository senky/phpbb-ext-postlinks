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
	'PL_LINK'				=> 'Länk',
	'PL_BBCODE'				=> 'BB-kod',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Dölj inläggslänk',
	'PL_SHOW'				=> 'Visa inläggslänk',

	'CLICK_TO_COPY_LINK'	=> 'Klicka för att välja inläggets länk i normalformat',
	'CLICK_TO_COPY_BBCODE'	=> 'Klicka för att välja inläggets länk i BB-kodformat',
	'CLICK_TO_COPY_HTML'	=> 'Klicka för att välja inläggets länk i HTML-format',
));
