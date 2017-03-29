<?php
/**
 * Eliasis WordPress plugin skeleton
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Eliasis-Framework/WordPress-Plugin.git
 * @since      1.0.0
 */

namespace EliasisWordPress\Model\Admin\Page;

use Eliasis\Model\Model,
	Eliasis\App\App,
	Josantonius\Json\Json;

/**
 * Model class.
 *
 * @since 1.0.0
 */
class Options extends Model {

	protected function __construct() {

		$this->filepath = App::path('json') . App::file('settings');
	}

    /** 
     * Get settings.
     * 
     * @since 1.0.0
     *
     * @return array → settings
     */
    public function getSettings() { 

        return Json::fileToArray($this->filepath);
    }

    /** 
     * Set settings.
     * 
     * @since 1.0.0
     *
     * @return boolean
     */
    public function setSettings($data) { 

        return Json::arrayToFile($data, $this->filepath);
    }
}
