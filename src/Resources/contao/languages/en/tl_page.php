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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_page']['piwik_legend'] = 'Matomo(Piwik)';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_page']['piwikEnabled'] = array('Include Matomo javascript tag into the site', 'Adds the Matomo javascript tag to the site.');
$GLOBALS['TL_LANG']['tl_page']['piwikCountAdmins'] = array('Include users', 'Include users who are logged in into the TYPOlight backend into the statistic.');
$GLOBALS['TL_LANG']['tl_page']['piwikCountUsers'] = array('Include members', 'Include members who are logged in into the TYPOlight frontend into the statistic.');
$GLOBALS['TL_LANG']['tl_page']['piwikPath'] = array('URL of the Matomo installation', "The absolute URL to Piwik installation, with optional server.");
$GLOBALS['TL_LANG']['tl_page']['piwikSiteID'] = array('Site ID', 'The ID of the site that was created in Matomo.');
$GLOBALS['TL_LANG']['tl_page']['piwikPageName'] = array('Use page title', 'Use the page title instead of the alias in the statistic.');
$GLOBALS['TL_LANG']['tl_page']['piwik404'] = array('Show reference to <em>404 Page not found</em> seperate', 'You have the possibility to show references to <em>404 Page not found</em> in the piwik statistic seperate. So you can find "dead links" easier.');
$GLOBALS['TL_LANG']['tl_page']['piwikTemplate'] = array('Template', 'Here you can select the Matomo template. Important: Please note that the asynchronous template is supported from Matomo version 1.12.');