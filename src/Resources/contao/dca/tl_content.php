<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MenAtWork\MatomoTrackingTagBundle
 * @license    GNU/LGPL
 * @filesource
 */

/*
 * Palette definitions
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['matomo_optout'] = '{type_legend},type,headline'
    . ';{matomo_legend},matomo_btn_activate,matomo_btn_deactivate,matomo_status_activated,matomo_status_deactivated'
    . ';{template_legend:hide},customTpl'
    . ';{protected_legend:hide},protected'
    . ';{expert_legend:hide},guests,cssID'
    . ';{invisible_legend:hide},invisible,start,stop';


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
