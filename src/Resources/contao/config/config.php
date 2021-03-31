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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'initializeSettings');
$GLOBALS['TL_HOOKS']['generatePage'][] = array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'generatePage');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'validatePath');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'validateUrl');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('MenAtWork\\MatomoTrackingTagBundle\\Contao\\PiwikTrackingTag', 'validateIP');

/**
 * Download extensions
 */
$GLOBALS['TL_PIWIK'] = '7z,aac,arc,arj,asf,asx,avi,bin,csv,doc,exe,flv,gif,gz,gzip,hqx,jar,jpe,jpeg,js,mp2,mp3,mp4,mpe,mpeg,mov,movie,msi,msp,pdf,phps,png,ppt,qtm,ram,rar,sea,sit,tar,tgz,orrent,txt,wav,wma,wmv,wpd,xls,xml,z,zip';

/*
 * Content elements
 */
$GLOBALS['TL_CTE']['matomo']['matomo_optout'] = \MenAtWork\MatomoTrackingTagBundle\Contao\MatomoOptoutElement::class;
