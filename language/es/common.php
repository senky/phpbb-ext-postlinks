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
	'PL_LINK'				=> 'Enlace',
	'PL_BBCODE'				=> 'BBCode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Ocultar enlaces al mensaje',
	'PL_SHOW'				=> 'Mostrar enlaces al mensaje',

	'CLICK_TO_COPY_LINK'	=> 'Clic para seleccionar el formato de enlace plano al mensaje',
	'CLICK_TO_COPY_BBCODE'	=> 'Clic para seleccionar el formato de enlace BBCode al mensaje',
	'CLICK_TO_COPY_HTML'	=> 'Clic para seleccionar el formato de enlace HTML al mensaje',
));
