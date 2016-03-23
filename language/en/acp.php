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
	'ACP_POST_LINKS'	=> 'Post links',

	'PL_ENABLE'			=> 'Allow post links',
	'PL_ENABLE_EXPLAIN'	=> 'If allowed, each post will contain copyable links of types allowed bellow.',
	'PL_LINK_ENABLE'	=> 'Allow plain link',
	'PL_BBCODE_ENABLE'	=> 'Allow BBcode link',
	'PL_HTML_ENABLE'	=> 'Allow HTML link',
));
