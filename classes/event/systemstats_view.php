<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin event classes are defined here.
 *
 * @package     local_systemstats
 * @copyright   2020 Chandra Kishor <developerck@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_systemstats\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The view event class.
 *
 * @package    local_systemstats
 * @copyright  2020 Chandra Kishor <developerck@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class systemstats_view extends \core\event\base {

    // For more information about the Events API, please visit:
    // https://docs.moodle.org/dev/Event_2.
    /**
     * Init method.
     */
    protected function init() {
        $this->data['objecttable'] = 'local_systemstats';
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    /**
     * Returns localised general event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('event_systemstats_view', 'local_systemstats');
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '{$this->userid}' has vieewed the System Stats Report. Other info : " .
               var_export($this->other, 1);
    }
}
