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
 * Saylor config.
 *
 * @package   theme_saylorremui
 * @copyright 2024 Saylor Academy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'saylorremui';
$THEME->parents = ['remui'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->javascripts_footer = [];
$THEME->editor_scss = ['editor'];
$THEME->usefallback = true;
$THEME->hidefromselector = false;
$THEME->scss = function ($theme) {
    return theme_saylorremui_get_main_scss_content($theme);
};
$THEME->supportscssoptimisation = false;

$THEME->layouts = [
    // Layout definitions, inherited from parent unless overridden
    'base' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
];

$THEME->enable_dock = false;
$THEME->extrascsscallback = 'theme_saylorremui_get_extra_scss';
$THEME->prescsscallback = 'theme_saylorremui_get_pre_scss';
$THEME->precompiledcsscallback = 'theme_saylorremui_get_precompiled_css';
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->yuicssmodules = array();
$THEME->csspostprocess = 'theme_saylorremui_process_css';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
