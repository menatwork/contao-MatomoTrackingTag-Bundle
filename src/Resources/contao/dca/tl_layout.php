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
$GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'][] = 'piwikEnabled';
 
foreach($GLOBALS['TL_DCA']['tl_layout']['palettes'] as $k => $v) 
{
	if($k != '__selector__') 
	{
		if(strstr($v, '{expert_legend'))
		{
			$GLOBALS['TL_DCA']['tl_layout']['palettes'][$k] = str_replace('{expert_legend', '{piwik_legend},piwikEnabled;{expert_legend', $v);
		}
		elseif(strstr($v, 'urchinId;'))
		{
			$GLOBALS['TL_DCA']['tl_layout']['palettes'][$k] = str_replace('urchinId;', 'urchinId;piwikEnabled;', $v);
		}
		else
		{
			$GLOBALS['TL_DCA']['tl_layout']['palettes'][$k] = str_replace('urchinId,', 'urchinId;piwikEnabled;', $v);
		}
	}
}


/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['piwikEnabled'] = 'piwikPath,piwikSiteID,piwikTemplate,piwikVisitorCookieTimeout,piwikDownloadClasses,piwikExtensions,piwikCountAdmins,piwikCountUsers,piwikPageName,piwik404';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikEnabled'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwikEnabled'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('submitOnChange' => true),
    'sql'       => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikPath'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwikPath'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array
    (
        'mandatory' => true,
        'rgxp' => 'piwikPath',
        'trailingSlash' => true,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikSiteID'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_layout']['piwikSiteID'],
    'inputType'     => 'text',
    'exclude'       => true,
    'eval'          => array
    (
        'mandatory' => true,
        'rgxp' => 'digit',
        'tl_class' => 'w50',
        'maxlength' => 4
    ),
    'sql'           => "varchar(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikTemplate'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_layout']['piwikTemplate'],
    'inputType'         => 'select',
    'exclude'           => true,
    'options_callback'  => array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'findPiwikTemplates'),
    'load_callback'     => array
    (
        array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'setDefaultValue')
    ),
    'eval'              => array
    (
        'mandatory' => true,
        'tl_class' => 'w50',
        'chosen'=> true,
        'alwaysSave' => true
    ),
    'sql'           => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikExtensions'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_layout']['piwikExtensions'],
    'default'           => $GLOBALS['TL_PIWIK'],
    'inputType'         => 'textarea',
    'exclude'           => true,
    'eval'              => array
    (
        'tl_class'      => 'long clr',
        'style'         => 'height:50px;',
        'alwaysSave'    => true
    ),
    'load_callback'	    => array
    (
        array('tl_layout_PiwikTrackingTag', 'extensions')
    ),
    'save_callback'	    => array
    (
        array('tl_layout_PiwikTrackingTag', 'extensions')
    ),
    'sql'               => "text NULL"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikCountAdmins'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwikCountAdmins'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikCountUsers'] = array
(
    'label'	    => &$GLOBALS['TL_LANG']['tl_layout']['piwikCountUsers'],
    'default'   => 1,
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '1'"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikPageName'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwikPageName'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwik404'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwik404'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikVisitorCookieTimeout'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwikVisitorCookieTimeout'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array
    (
        'rgxp' => 'digit',
        'tl_class' => 'w50'
    ),
    'sql'       => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['piwikDownloadClasses'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['piwikDownloadClasses'],
    'inputType' => 'text',
    'exclude'   => true,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);


class tl_layout_PiwikTrackingTag extends Backend
{

	public function extensions($value)
	{
		if (trim($value) == '')
		{
			return $GLOBALS['TL_DCA']['tl_layout']['fields']['piwikExtensions']['default'];
		}
		else
		{
			return $value;
		}
	}

}