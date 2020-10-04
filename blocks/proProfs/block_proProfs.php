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
 * Form for editing ProProfs block instances.
 *
 * @package   block_proProfs
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_proProfs extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_proProfs');
    }

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->text = 'this is the text';
        $this->footer = 'this is the footer';

        return $this->content;
    }
}
