<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace senky\postlinks\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class post_links implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
			'core.viewtopic_modify_post_row'		=> 'add_long_url_link',
		);
	}

	/** @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\template\template */
	protected $template;

		/** @var string */
	protected $php_ext;

	/**
	* Constructor
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, $php_ext)
	{
		$this->config = $config;
		$this->template = $template;
		$this->php_ext = $php_ext;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'senky/postlinks',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_long_url_link($event)
	{
		$post_row = $event['post_row'];

		$post_row['U_POST_LINK'] = append_sid(generate_board_url() . '/viewtopic.' . $this->php_ext, 'p=' . $event['row']['post_id']) . '#p' . $event['row']['post_id'];

		$event['post_row'] = $post_row;

		$this->template->assign_vars(array(
			'S_LINKS_ENABLED'	=> $this->config['pl_enable'],
			'S_LINKS_LINK_ENABLED'	=> $this->config['pl_link'],
			'S_LINKS_BBCODE_ENABLED'	=> $this->config['pl_bbcode'],
			'S_LINKS_HTML_ENABLED'	=> $this->config['pl_html'],
		));
	}
}
