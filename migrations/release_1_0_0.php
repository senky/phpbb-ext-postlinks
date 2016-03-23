<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace senky\postlinks\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['pl_enable']) && isset($this->config['pl_link']) && isset($this->config['pl_bbcode']) && isset($this->config['pl_html']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('pl_enable', 1)),
			array('config.add', array('pl_link', 1)),
			array('config.add', array('pl_bbcode', 1)),
			array('config.add', array('pl_html', 1)),
		);
	}
}
