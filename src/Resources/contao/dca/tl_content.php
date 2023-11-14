<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MenAtWork\MatomoTrackingTagBundle
 * @license    GNU/LGPL
 * @filesource
 */

use MenAtWork\MatomoTrackingTagBundle\Contao\PiwikTrackingTag;

/*
 * Config
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = [
    PiwikTrackingTag::class,
    'addBackendHint'
];

/*
 * Palette definitions
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'matomo_do_not_track';
$GLOBALS['TL_DCA']['tl_content']['palettes']['matomo_optout']  = '{type_legend},type,headline'
                                                                 . ';{matomo_legend},matomo_btn_activate,matomo_btn_deactivate,matomo_status_activated,matomo_status_deactivated,matomo_do_not_track'
                                                                 . ';{template_legend:hide},customTpl'
                                                                 . ';{protected_legend:hide},protected'
                                                                 . ';{expert_legend:hide},guests,cssID'
                                                                 . ';{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['matomo_trackGoal']  = '{type_legend},type'
                                                                 . ';{matomo_legend},matomo_track_goal_id'
                                                                 . ';{template_legend:hide},customTpl'
                                                                 . ';{protected_legend:hide},protected'
                                                                 . ';{expert_legend:hide},guests,cssID'
                                                                 . ';{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['matomo_do_not_track'] = 'matomo_status_do_not_track';


/*
 * Field definitions
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_btn_activate'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_btn_activate'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'w50'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_btn_deactivate'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_btn_deactivate'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'w50'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_status_activated'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_status_activated'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => ['tl_class' => 'clr long', 'rte' => 'tinyMCE', 'style' => 'height:80px'],
    'sql'       => "mediumtext NULL",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_status_deactivated'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_status_deactivated'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => ['tl_class' => 'clr long', 'rte' => 'tinyMCE', 'style' => 'height:80px'],
    'sql'       => "mediumtext NULL",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_do_not_track'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_do_not_track'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'checkbox',
    'eval'      => ['tl_class' => 'w50', 'submitOnChange' => true],
    'sql'       => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_status_do_not_track'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_status_do_not_track'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => ['tl_class' => 'clr long', 'rte' => 'tinyMCE', 'style' => 'height:80px'],
    'sql'       => "mediumtext NULL",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['matomo_track_goal_id'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['matomo_track_goal_id'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50 clr'],
    'sql'       => "INT UNSIGNED NULL",
];
