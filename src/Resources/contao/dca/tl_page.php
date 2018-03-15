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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace('{publish_legend', '{piwik_legend},piwikEnabled;{publish_legend', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'piwikEnabled';

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['piwikEnabled'] = 'piwikPath,piwikSiteID,piwikTemplate,piwikVisitorCookieTimeout,piwikDownloadClasses,piwikExtensions,piwikCountAdmins,piwikCountUsers,piwikPageName,piwik404';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikEnabled'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikEnabled'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('submitOnChange' => true),
    'sql'       => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikPath'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikPath'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array
    (
        'mandatory' => true,
        'rgxp'      => 'piwikPath',
        'trailingSlash' => true,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikSiteID'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikSiteID'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array
    (
        'mandatory' => true,
        'rgxp' => 'digit',
        'tl_class' => 'w50',
        'maxlength' => 4
    ),
    'sql'       => "varchar(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikTemplate'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikTemplate'],
    'inputType' => 'select',
    'exclude'   => true,
    'options_callback'  => array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'findPiwikTemplates'),
    'load_callback'      => array
    (
        array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'setDefaultValue')
    ),
    'eval'      => array(
        'mandatory' => true,
        'tl_class' => 'w50',
        'chosen'=> true,
        'alwaysSave' => true
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikExtensions'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikExtensions'],
    'default'   => $GLOBALS['TL_PIWIK'],
    'inputType' => 'textarea',
    'exclude'   => true,
    'eval'      => array
    (
        'tl_class'  => 'long clr',
        'style'     => 'height:50px;',
        'alwaysSave' => true
    ),
    'load_callback'	=> array
    (
        array('tl_page_PiwikTrackingTag', 'extensions')
    ),
    'save_callback'	=> array
    (
        array('tl_page_PiwikTrackingTag', 'extensions')
    ),
    'sql'       => "text NULL"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikCountAdmins'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikCountAdmins'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikCountUsers'] = array
(
    'label'	    => &$GLOBALS['TL_LANG']['tl_page']['piwikCountUsers'],
    'default'   => 1,
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '1'"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikPageName'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikPageName'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwik404'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwik404'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikVisitorCookieTimeout'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikVisitorCookieTimeout'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array
    (
        'rgxp'      => 'digit',
        'tl_class'  => 'w50'
    ),
    'sql'       => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['piwikDownloadClasses'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['piwikDownloadClasses'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);


class tl_page_PiwikTrackingTag extends Backend
{

	public function extensions($value)
	{
		if (trim($value) == '')
		{
			return $GLOBALS['TL_DCA']['tl_page']['fields']['piwikExtensions']['default'];
		}
		else
		{
			return $value;
		}
	}

}