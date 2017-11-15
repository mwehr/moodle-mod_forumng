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

defined('MOODLE_INTERNAL') || die();

/**
 * Forum services declarations.
 *
 * @package mod_forumng
 * @copyright 2014 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$services = array(
        'Forum list service' => array(
                'shortname' => 'forumlist',
                'functions' => array ('mod_forumng_get_forum_list'),
                'requiredcapability' => '',
                'restrictedusers' => 0,
                'enabled' => 1
        ),
        'Get posts' => array(
                'shortname' => 'getposts',
                'functions' => array ('mod_forumng_get_posts'),
                'requiredcapability' => '',
                'restrictedusers' => 0,
                'enabled' => 1
        ),
        'Expand post' => array(
                'shortname' => 'expandpost',
                'functions' => array ('mod_forumng_expand_post'),
                'requiredcapability' => '',
                'restrictedusers' => 0,
                'enabled' => 1
        )
);

$functions = array(
        'mod_forumng_get_forum_list' => array(
                'classname'   => 'mod_forumng_external',
                'methodname'  => 'get_forum_list',
                'classpath'   => 'mod/forumng/externallib.php',
                'description' => 'Lists forums for user on course',
                'type'        => 'read'
        ),
        'mod_forumng_get_posts' => array(
                'classname'   => 'mod_forumng\local\external\get_posts',
                'methodname'  => 'get_posts',
                'description' => 'Get posts belong to discussion',
                'type'        => 'read',
                'ajax'        => true
        ),
        'mod_forumng_expand_post' => array(
                'classname'   => 'mod_forumng\local\external\expand_post',
                'methodname'  => 'expand_post',
                'description' => 'Get information if post and its replies',
                'type'        => 'read',
                'ajax'        => true
        ),
);
