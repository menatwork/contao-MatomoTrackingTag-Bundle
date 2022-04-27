<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MatomoTrackingTagBundle
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{piwik_legend:hide},piwik_blacklist,piwik_ip_blacklist';

$GLOBALS['TL_DCA']['tl_settings']['fields']['piwik_blacklist'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_settings']['piwikBlacklist'],
    'exclude'   => true,
    'inputType' => 'multiColumnWizard',
    'eval'      => [
        'columnFields' => [
            'url' => [
                'label'     => &$GLOBALS['TL_LANG']['tl_settings']['piwikUrl'],
                'inputType' => 'text',
                'eval'      => [
                    'style'         => 'width:600px',
                    'rgxp'          => 'absoluteUrl',
                    'trailingSlash' => false
                ]
            ],
        ]
    ]
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['piwik_ip_blacklist'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_settings']['piwikIpBlacklist'],
    'exclude'   => true,
    'inputType' => 'multiColumnWizard',
    'eval'      => [
        'columnFields' => [
            'url' => [
                'label'     => &$GLOBALS['TL_LANG']['tl_settings']['piwikIP'],
                'inputType' => 'text',
                'eval'      => [
                    'style' => 'width:600px',
                    'rgxp'  => 'IP'
                ]
            ],
        ]
    ]
];
