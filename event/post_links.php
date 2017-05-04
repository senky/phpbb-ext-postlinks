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
			'core.viewtopic_modify_page_title'	=> 'load_language_and_template',
			'core.viewtopic_modify_post_row'	=> 'add_long_url_link',
		);
	}

	/** @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/** @var string */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config		$config		Config object
	 * @param \phpbb\template\template	$template	Template object
	 * @param \phpbb\user				$user		User object
	 * @param string					$php_ext	phpEx
	 * @access public
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, $php_ext)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
		$this->php_ext = $php_ext;
	}

	public function load_language_and_template()
	{
		$this->user->add_lang_ext('senky/postlinks', 'common');

		$this->template->assign_vars(array(
			'S_LINKS_ENABLED'	=> $this->config['pl_enable'],
			'S_LINKS_LINK_ENABLED'	=> $this->config['pl_link'],
			'S_LINKS_BBCODE_ENABLED'	=> $this->config['pl_bbcode'],
			'S_LINKS_HTML_ENABLED'	=> $this->config['pl_html'],
		));
	}

	public function add_long_url_link($event)
	{
		$post_row = $event['post_row'];

		// do not use append_sid, since those are general links
		$post_row['U_POST_LINK'] = generate_board_url() . '/viewtopic.' . $this->php_ext . '?p=' . $event['row']['post_id'] . '#p' . $event['row']['post_id'];
		// custom post subject (to resolve conflict with Topic Solved)
		$post_row['POSTLINKS_POST_SUBJECT'] = $event['row']['post_subject'];

		$event['post_row'] = $post_row;
	}
}
