<?php
/**
 *
 * Post Links. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_POST_LINKS'	=> 'Liens des messages',

	'PL_ENABLE'			=> 'Afficher les liens des messages',
	'PL_ENABLE_EXPLAIN'	=> 'Permet d’activer l’affichage des liens vers chaque message du forum. Chaque message contiendra les différents types de liens utiles à leur partage (HTML, BBCode et brut).<br />Un simple clic dessus permet de sélectionner le lien complet pour le copier et l’utiliser en vue de le partager.<br />Ces liens sont affichés en dessous de chaque message au moyen du bouton pourtant la mention : « Afficher les liens de partage du message ».',
	'PL_LINK_ENABLE'	=> 'Afficher les liens bruts',
	'PL_BBCODE_ENABLE'	=> 'Afficher les liens formatés en BBCode',
	'PL_HTML_ENABLE'	=> 'Afficher les liens formatés en HTML',
));
