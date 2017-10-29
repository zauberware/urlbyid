<?php namespace Craft;

/**
 * UrlById Plugin.
 *
 * Plugin to redirect to an entry, found by given id -> /entries/find?id={id}
 *
 * @author    Simon Franzen <simon@zauberware.com>
 * @copyright Copyright (c) 2017, Simon Franzen @ zauberware technologies
 * @license   http://buildwithcraft.com/license Craft License Agreement
 *
 * @link      http://github.com/....
 * @since     1.0
 */
class UrlByIdPlugin extends BasePlugin
{
	public function getName() { return 'Url by id'; }
	public function getVersion() { return '1.0.0'; }
	public function getDeveloper() { return 'zauberware technologies'; }
	public function getDeveloperUrl() { return 'https://www.zauberware.com'; }
	
	public function registerSiteRoutes()
	{
		return array(
			'entries/find' => array('action' => 'urlById/find'),
		);
	}
}
