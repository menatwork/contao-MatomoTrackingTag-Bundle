<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MatomoTrackingTagBundle
 * @license    GNU/LGPL
 * @filesource
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use MenAtWork\MatomoTrackingTagBundle\Contao\PiwikTrackingTag;

/**
 * Palettes
 */
$palletManipulator = PaletteManipulator::create()
    ->addLegend('piwik_legend', 'publish_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('piwikEnabled', 'piwik_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('root', 'tl_page');

if (isset($GLOBALS['TL_DCA']['tl_page']['palettes']['rootfallback'])) {
    $palletManipulator->applyToPalette('rootfallback', 'tl_page');
}

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][]  = 'piwikEnabled';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['piwikEnabled'] = '';

PaletteManipulator::create()
    ->addField('piwikPath', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikSiteID', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikTemplate', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikVisitorCookieTimeout', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikDownloadClasses', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikExtensions', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikCountAdmins', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikCountUsers', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwikPageName', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->addField('piwik404', 'piwikEnabled', PaletteManipulator::POSITION_APPEND)
    ->applyToSubpalette('piwikEnabled', 'tl_page');

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikEnabled'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikEnabled'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => ['submitOnChange' => true],
    'sql'       => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikPath'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikPath'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => [
        'mandatory'     => true,
        'rgxp'          => 'piwikPath',
        'trailingSlash' => true,
        'tl_class'      => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikSiteID'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikSiteID'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => [
        'mandatory' => true,
        'rgxp'      => 'digit',
        'tl_class'  => 'w50',
        'maxlength' => 4
    ],
    'sql'       => "varchar(4) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikTemplate'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_page']['piwikTemplate'],
    'inputType'        => 'select',
    'exclude'          => true,
    'options_callback' => [PiwikTrackingTag::class, 'findPiwikTemplates'],
    'load_callback'    => [[PiwikTrackingTag::class, 'setDefaultValue']],
    'eval'             => [
        'mandatory'  => true,
        'tl_class'   => 'w50',
        'chosen'     => true,
        'alwaysSave' => true
    ],
    'sql'              => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikExtensions'] = [
    'label'         => &$GLOBALS['TL_LANG']['tl_page']['piwikExtensions'],
    'default'       => $GLOBALS['TL_PIWIK'],
    'inputType'     => 'textarea',
    'exclude'       => true,
    'eval'          => [
        'tl_class'   => 'long clr',
        'style'      => 'height:50px;',
        'alwaysSave' => true
    ],
    'load_callback' => [[PiwikTrackingTag::class, 'gtDefaultExtensions']],
    'save_callback' => [[PiwikTrackingTag::class, 'gtDefaultExtensions']],
    'sql'           => "text NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikCountAdmins'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikCountAdmins'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "char(1) NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikCountUsers'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikCountUsers'],
    'default'   => 1,
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "char(1) NOT NULL default '1'"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikPageName'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikPageName'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "char(1) NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwik404'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwik404'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "char(1) NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikVisitorCookieTimeout'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikVisitorCookieTimeout'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => [
        'rgxp'     => 'digit',
        'tl_class' => 'w50'
    ],
    'sql'       => "int(10) unsigned NOT NULL default '0'"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['piwikDownloadClasses'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikDownloadClasses'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(255) NOT NULL default ''"
];
