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
$GLOBALS['TL_LANG']['tl_page']['piwikEnabled'] = array('Matomo-Javascript-Tag in die Seite einbinden', 'Fügt der Website den Matomo-Javascript-Tag hinzu.');
$GLOBALS['TL_LANG']['tl_page']['piwikCountAdmins'] = array('Benutzer zählen', 'Wählen Sie aus, ob Benutzer, die im Backend eingeloggt sind, in der Statistik berücksichtigt werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikCountUsers'] = array('Mitglieder zählen', 'Wählen Sie aus, ob Mitglieder, die im Frontend eingeloggt sind, in der Statistik berücksichtigt werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikPath'] = array('URL der Matomo-Installation', "Bitte geben Sie die absolute URL zur Matomo-Installation mit Protokoll (z.B. <em>http://</em>) ein.");
$GLOBALS['TL_LANG']['tl_page']['piwikSiteID'] = array('Seiten-ID', 'Die ID der Seite, die in Matomo angelegt wurde.');
$GLOBALS['TL_LANG']['tl_page']['piwikPageName'] = array('Seiten-Titel verwenden', 'Lassen Sie sich in der Matomo-Statstik den Seiten-Titel anstatt des Alias anzeigen.');
$GLOBALS['TL_LANG']['tl_page']['piwik404'] = array('404 Seiten gesondert anzeigen', 'Sie haben die Möglichkeit Verweise auf nicht gefundene Seiten (Seitentyp: <em>404 Seite nicht gefunden</em>) sich in der Matomo-Statistik mit den Verweisen auf diese Seiten gesondert anzeigen zu lassen. So können Sie "tote Links" auf Ihrer Website leichter ausfindig zu machen.');
$GLOBALS['TL_LANG']['tl_page']['piwikExtensions'] = array('Dateiendungen für Download-Liste', 'Hier können Sie die kommagetrennte Liste der Dateiendungen anpassen, die in der Matomo-Statistik als Download gewertet werden. Lassen Sie das Feld leer, um die Standard-Endungen wieder herzustellen.');
$GLOBALS['TL_LANG']['tl_page']['piwikVisitorCookieTimeout'] = array('Besucher-Cookie Timeout', 'Hier können Sie Lebenszeit des Besucher-Cookies in Sekunden einstellen. 0 bedeutet, dass der default Wert von Matomo verwendet wird (2 Jahre).');
$GLOBALS['TL_LANG']['tl_page']['piwikDownloadClasses'] = array('Download Klassen', 'Hier können Sie die kommagetrennte Liste der Klassen angeben, die Matomo als Download-Klasse verwenden soll. Ist dieses Feld leer wird der default Wert verwendet ("piwik_download").');
$GLOBALS['TL_LANG']['tl_page']['piwikTemplate'] = array('Template', 'Hier können Sie das Matomotemplate auswählen. Wichtig: Bitte beachten Sie, dass das asynchrone Template erst ab Matomo Version 1.12 unterstützt wird.');