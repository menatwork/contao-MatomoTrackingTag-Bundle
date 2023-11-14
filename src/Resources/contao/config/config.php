<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MatomoTrackingTagBundle
 * @license    GNU/LGPL
 * @filesource
 */

use MenAtWork\MatomoTrackingTagBundle\Contao\MatomoOptoutElement;
use MenAtWork\MatomoTrackingTagBundle\Contao\MatomoTrackGoalElement;
use MenAtWork\MatomoTrackingTagBundle\Contao\PiwikTrackingTag;

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['getPageLayout'][]   = array(PiwikTrackingTag::class, 'initializeSettings');
$GLOBALS['TL_HOOKS']['generatePage'][]    = array(PiwikTrackingTag::class, 'generatePage');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array(PiwikTrackingTag::class, 'validatePath');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array(PiwikTrackingTag::class, 'validateUrl');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array(PiwikTrackingTag::class, 'validateIP');

/**
 * Download extensions
 */
$GLOBALS['TL_PIWIK'] = '7z,aac,arc,arj,asf,asx,avi,bin,csv,doc,exe,flv,gif,gz,gzip,hqx,jar,jpe,jpeg,js,mp2,mp3,mp4,mpe,mpeg,mov,movie,msi,msp,pdf,phps,png,ppt,qtm,ram,rar,sea,sit,tar,tgz,orrent,txt,wav,wma,wmv,wpd,xls,xml,z,zip';

/*
 * Content elements
 */
$GLOBALS['TL_CTE']['matomo']['matomo_optout']    = MatomoOptoutElement::class;
$GLOBALS['TL_CTE']['matomo']['matomo_trackGoal'] = MatomoTrackGoalElement::class;

