<?php
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
 * Version info
 *
 * @package    local_course_reminder
 * @copyright  2023 UNICAF LTD <info@unicaf.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = [
    [    //Assingment User override created
        'eventname' => '\mod_assign\event\user_override_created',
        'callback' => '\local_course_reminder\event_handler::assign_user_override_created',
    ],
    [  //Assignment User  override Updated
        'eventname' => '\mod_assign\event\user_override_updated',
        'callback' => '\local_course_reminder\event_handler::assign_user_override_updated',
    ],
    [
        //Assignment User override deleted
        'eventname' => '\mod_assign\event\user_override_deleted',
        'callback' => '\local_course_reminder\event_handler::assign_user_override_deleted',
    ],
    [   //Quiz override created
        'eventname' => '\mod_quiz\event\user_override_created',
        'callback' => '\local_course_reminder\event_handler::quiz_user_override_created',
    ],
    [   //Quiz override updated
        'eventname' => '\mod_quiz\event\user_override_updated',
        'callback' => '\local_course_reminder\event_handler::quiz_user_override_updated'
    ],
    [ //Quiz override deleted
        'eventname' => '\mod_quiz\event\user_override_deleted',
        'callback' => '\local_course_reminder\event_handler::quiz_user_override_deleted'
    ]
];
