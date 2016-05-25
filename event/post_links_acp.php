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
class post_links_acp implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=> 'add_options',
		);
	}

	/* @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\user	$user	User object
	 * @access public
	 */
	public function __construct(\phpbb\user $user)
	{
		$this->user = $user;
	}

	public function add_options($event)
	{
		$this->user->add_lang_ext('senky/postlinks', 'acp');

		$display_vars = $event['display_vars'];

		if ($event['mode'] == 'post')
		{
			$display_vars['vars']['legend3'] = 'ACP_POST_LINKS';
			$display_vars['vars']['pl_enable'] = array(
				'lang'	=> 'PL_ENABLE',
				'validate'	=> 'bool',
				'type'	=> 'radio:yes_no',
				'explain'	=> 1,
			);
			$display_vars['vars']['pl_link'] = array(
				'lang'	=> 'PL_LINK_ENABLE',
				'validate'	=> 'bool',
				'type'	=> 'radio:yes_no',
				'explain'	=> 0,
			);
			$display_vars['vars']['pl_bbcode'] = array(
				'lang'	=> 'PL_BBCODE_ENABLE',
				'validate'	=> 'bool',
				'type'	=> 'radio:yes_no',
				'explain'	=> 0,
			);
			$display_vars['vars']['pl_html'] = array(
				'lang'	=> 'PL_HTML_ENABLE',
				'validate'	=> 'bool',
				'type'	=> 'radio:yes_no',
				'explain'	=> 0,
			);
			$display_vars['vars']['legend4'] = 'ACP_SUBMIT_CHANGES';
		}

		$event['display_vars'] = $display_vars;
	}
}
