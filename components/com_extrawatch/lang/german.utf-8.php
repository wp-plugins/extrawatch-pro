<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) @YEAR@ by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');


// Main Menu.

DEFINE('_EW_MENU_STATS', "Statistiken");

DEFINE('_EW_MENU_GOALS', "Ziele");

DEFINE('_EW_MENU_SETTINGS', "Einstellungen");

DEFINE('_EW_MENU_CREDITS', "Credits");

DEFINE('_EW_MENU_FAQ', "FAQ");

DEFINE('_EW_MENU_DOCUMENTATION', "Dokumentation");

DEFINE('_EW_MENU_LICENSE', "Werbefreie Lizenz");

DEFINE('_EW_MENU_DONATORS', "Spender");

DEFINE('_EW_MENU_SUPPORT', "Unterstützen Sie ExtraWatch und erhalten Sie einen Backend-Bereich ohne Werbeeinblendungen.");


// Left visitors real-time window.

DEFINE('_EW_VISITS_VISITORS', "Neue Besucher");

DEFINE('_EW_VISITS_BOTS', "Bots");

DEFINE('_EW_VISITS_CAME_FROM', "Herkunft");

DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Ihr ExtraWatch Modul ist nicht aktiviert! Es werden keine neuen Statistiken aufgezeichnet. Um Ihr ExtraWatch Modul zu aktivieren, wechseln Sie in den Modul-Bereich und aktivieren Sie das Modul auf allen Seiten.");

DEFINE('_EW_VISITS_PANE_LOADING', "Lade Visits...");


// Right stats window.

DEFINE('_EW_STATS_TITLE', "wöchentliche Statistik");

DEFINE('_EW_STATS_WEEK', "Woche");

DEFINE('_EW_STATS_THIS_WEEK', "Diese Woche");

DEFINE('_EW_STATS_UNIQUE', "Einmalig");

DEFINE('_EW_STATS_LOADS', "Ladevorgänge");

DEFINE('_EW_STATS_HITS', "Besuche");

DEFINE('_EW_STATS_TODAY', "Heute");

DEFINE('_EW_STATS_FOR', "am");

DEFINE('_EW_STATS_ALL_TIME', "Gesamtstatistik");

DEFINE('_EW_STATS_EXPAND', "ausklappen");

DEFINE('_EW_STATS_COLLAPSE', "zuklappen");

DEFINE('_EW_STATS_URI', "Seiten");

DEFINE('_EW_STATS_COUNTRY', "Länder");

DEFINE('_EW_STATS_USERS', "Benutzer");

DEFINE('_EW_STATS_REFERERS', "verweisende Websites");

DEFINE('_EW_STATS_IP', "IPs");

DEFINE('_EW_STATS_BROWSER', "Browsers");

DEFINE('_EW_STATS_OS', "Betriebssysteme");

DEFINE('_EW_STATS_KEYWORDS', "Schlüsselbegriffe");

DEFINE('_EW_STATS_GOALS', "Ziele");

DEFINE('_EW_STATS_TOTAL', "Total");

DEFINE('_EW_STATS_DAILY', "Tagesstatistik");

DEFINE('_EW_STATS_DAILY_TITLE', "Tagesstatistik");

DEFINE('_EW_STATS_ALL_TIME_TITLE', "Gesamtstatistik");

DEFINE('_EW_STATS_LOADING', "Ladevorgang...");

DEFINE('_EW_STATS_LOADING_WAIT', "Ladevorgang... Bitte warten");

DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IP-Blockierung");

DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "IP manuell eingeben");

DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Geben Sie die zu blockierende IP-Adresse ein (z.B. 217.242.11.54 oder 217.* oder 217.242.* um alle IPs, die mit dem Platzhalter übereinstimmen, zu blockieren).");

DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Wollen Sie diese IP wirklich blockieren ");

DEFINE('_EW_STATS_PANE_LOADING', "Lade Statistiken...");


// Settings.

DEFINE('_EW_SETTINGS_TITLE', "Einstellungen");

DEFINE('_EW_SETTINGS_DEFAULT', "Standard");

DEFINE('_EW_SETTINGS_SAVE', "Speichern");

DEFINE('_EW_SETTINGS_APPEARANCE', "Erscheinungsbild");

DEFINE('_EW_SETTINGS_FRONTEND', "Frontend");

DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "Chronik & Leistung");

DEFINE('_EW_SETTINGS_ADVANCED', "Fortgeschritten");

DEFINE('_EW_SETTINGS_IGNORE', "Ignorieren");

DEFINE('_EW_SETTINGS_BLOCKING', "Blockieren");

DEFINE('_EW_SETTINGS_EXPERT', "Experteneinstellung");

DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Wollen Sie wirklich alle Statistiken und Besucherdaten zurücksetzen?");

DEFINE('_EW_SETTINGS_RESET_ALL', "Alles zurücksetzen");

DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Alle Statistiken & Besucherdaten zurücksetzen");

DEFINE('_EW_SETTINGS_LANGUAGE', "Sprache");

DEFINE('_EW_SETTINGS_SAVED', "Einstellungen wurden gespeichert");

DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Fügen Sie ihre IP");

DEFINE('_EW_SETTINGS_TO_THE_LIST', "zur Liste hinzu.");


// Other / mostly general.

DEFINE('_EW_TITLE', "Ein Echtzeit AJAX-Joomla-Monitor");

DEFINE('_EW_BACK', "zurück");

DEFINE('_EW_ACCESS_DENIED', "Sie haben nicht die erforderlichen Zugriffsrechte !");

DEFINE('_EW_LICENSE_AGREE', "Ich erkläre mich mit den obigen terms & conditions einverstanden");

DEFINE('_EW_LICENSE_CONTINUE', "weiter");

DEFINE('_EW_SUCCESS', "Operation erfolgreich");

DEFINE('_EW_RESET_SUCCESS', "Alle Statistiken und Besucherdaten wurden erfolgreich gelöscht");

DEFINE('_EW_RESET_ERROR', "Daten wurden NICHT erfolgreich gelöscht. Es ist ein Fehler aufgetreten.");

DEFINE('_EW_CREDITS_TITLE', "Credits");

DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Tages- und Wochenstatistik von");

DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX Zugriff verweigert: Bitte betrachten Sie die Statistiken von ihrer in der configuration.php eingestellten Domain - ");

DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Vielleicht haben Sie einfach nur vergessen das www. vor den Domainnamen zu setzen. Ihr Javascript versucht zuzugreifen auf");

DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "von");

DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "was dafür sorgt, dass angenommen wird, es handle sich um eine andere Domain.");


// Header.

DEFINE('_EW_HEADER_DOWNLOAD', "Für die neueste Version, besuchen Sie");

DEFINE('_EW_HEADER_CAST_YOUR', "Geben Sie Ihre");

DEFINE('_EW_HEADER_VOTE', "Stimme hier ab");


// Tooltips.

DEFINE('_EW_TOOLTIP_CLICK', "Klicken, um Tooltip zu öffnen");

DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Maus hierher bewegen, um Tooltip zu öffnen");

DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "yesterday's increase");

DEFINE('_EW_TOOLTIP_HELP', "Öffnet die Online-Hilfe für den Bereich");

DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Dieses Fenster schließen");

DEFINE('_EW_TOOLTIP_PRINT', "Drucken");


// Goals.

DEFINE('_EW_GOALS_INSERT', "Ziel einfügen");

DEFINE('_EW_GOALS_UPDATE', "bearbeite Ziel:");

DEFINE('_EW_GOALS_ACTION', "Zielaktionen");

DEFINE('_EW_GOALS_TITLE', "neues Ziel");

DEFINE('_EW_GOALS_NEW', "neues Ziel");

DEFINE('_EW_GOALS_RELOAD', "neu laden");

DEFINE('_EW_GOALS_ADVANCED', "Fortgeschritten");

DEFINE('_EW_GOALS_NAME', "Name");

DEFINE('_EW_GOALS_ID', "ID");

DEFINE('_EW_GOALS_URI_CONDITION', "URI-Bedingung");

DEFINE('_EW_GOALS_GET_VAR', "GET-Variable");

DEFINE('_EW_GOALS_GET_CONDITION', "GET-Bedingung");

DEFINE('_EW_GOALS_POST_VAR', "POST-Variable");

DEFINE('_EW_GOALS_POST_CONDITION', "POST-Bedingung");

DEFINE('_EW_GOALS_TITLE_CONDITION', "Titel-Bedingung");

DEFINE('_EW_GOALS_USERNAME_CONDITION', "Username-Bedingung");

DEFINE('_EW_GOALS_IP_CONDITION', "IP-Bedingung");

DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Herkunfts-Bedingung");

DEFINE('_EW_GOALS_BLOCK', "IP-Blockierung");

DEFINE('_EW_GOALS_REDIRECT', "URL-Weiterleitung");

DEFINE('_EW_GOALS_HITS', "Treffer");

DEFINE('_EW_GOALS_ENABLED', "aktivieren");

DEFINE('_EW_GOALS_EDIT', "bearbeiten");

DEFINE('_EW_GOALS_DELETE', "löschen");

DEFINE('_EW_GOALS_DELETE_CONFIRM', "Sie werden alle bisherigen Statistikdaten für dieses Ziel verlieren. Wollen Sie wirklich die Löschung bestätigen für das Ziel mit der ID-Nr.");


// Frontend.

DEFINE('_EW_FRONTEND_COUNTRIES', "Länder");

DEFINE('_EW_FRONTEND_VISITORS', "Besucher");

DEFINE('_EW_FRONTEND_TODAY', "heute");

DEFINE('_EW_FRONTEND_YESTERDAY', "gestern");

DEFINE('_EW_FRONTEND_THIS_WEEK', "diese Woche");

DEFINE('_EW_FRONTEND_LAST_WEEK', "letzte Woche");

DEFINE('_EW_FRONTEND_THIS_MONTH', "dieser Monat");

DEFINE('_EW_FRONTEND_LAST_MONTH', "letzter Monat");

DEFINE('_EW_FRONTEND_TOTAL', "Total");


// Settings description - quite long.

DEFINE('_EW_DESC_DEBUG', "ExtraWatch befindet sich im Fehlersuchmodus. Auf diesem Wege können Sie Fehlerquellen aufspüren. Um diesen Modus zu deaktivieren, ändern Sie bitte den Wert EXTRAWATCH_DEBUG in /components/com_extrawatch/config.php von 1 auf 0");

DEFINE('_EW_DESC_STATS_MAX_ROWS', "Maximale Anzahl an Zeilen, die dargestellt werden, wenn die Statitiken im erweiterten Modus angezeigt werden.");

DEFINE('_EW_DESC_STATS_IP_HITS', "Alle IP-Adressen, die weniger Aufrufe als diesen Wert in den letzten Tagen hatten, werden aus der IP-Chronik gelöscht.");

DEFINE('_EW_DESC_STATS_URL_HITS', "Alle URLs, die weniger Aufrufe als diesen Wert in den letzten Tagen hatten, werden aus der IP-Chronik gelöscht.");

DEFINE('_EW_DESC_IGNORE_IP', "Bestimmte IP-Adressen von der Statistik ausschließen. Als Trenner muss eine neue Zeile eingefügt werden. <br/> Sie können Blatzhalter benutzen. Bei 192.* werden z.B. die IP-Adressen 192.168.51.31, 192.168.16.2, ... (und so weiter) ignoriert.");

DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Besucher-Aktualisierungszeit in Millisekunden. Die Standard-Einstellung ist <b>2000</b>. Seien Sie bitte vorsichtig mit dieser Funktion. Nach einer Änderung müssen Sie das ExtraWatch-Backend neu laden.");

DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Statistik-Aktualisierungszeit in Millisekunden. Die Standard-Einstellung ist <b>4000</b>. Seien Sie bitte vorsichtig mit dieser Funktion. Nach einer Änderung müssen Sie das ExtraWatch-Backend neu laden.");

DEFINE('_EW_DESC_MAXID_BOTS', "Anzahl der Bots, die maximal in der Datenbank gespeichert werden sollen.");

DEFINE('_EW_DESC_MAXID_VISITORS', "Anzahl der realen Besucher, die maximal in der Datenbank gespeichert werden sollen.");

DEFINE('_EW_DESC_LIMIT_BOTS', "Anzahl der Bots, die im Backend angezeigt werden sollen.");

DEFINE('_EW_DESC_LIMIT_VISITORS', "Anzahl der realen Besucher, die im Backend angezeigt werden sollen.");

DEFINE('_EW_DESC_TRUNCATE_VISITS', "Maximale Anzahl an Buchstaben, die bei langen Titeln und URIs angezeigt werden soll.");

DEFINE('_EW_DESC_TRUNCATE_STATS', "Maximale Anzahl an Buchstaben, die rechts vom Bereich der Statistiken angezeigt werden soll.");

DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Anzahl der Tage, welche die Statistiken in der Datenbank behalten werden sollen (<b>0 = unendlich</b>).");

DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Wenn Sie sich in einer anderen Zeitzone als ihr Server befinden (positive oder negative Werte in Stunden).");

DEFINE('_EW_DESC_WEEK_OFFSET', "Verschiebung des Wochenbeginns. Die Zeitmarke/(3600*24*7) gibt die Wochennummer gerechnet vom 1.1.1970 an. Mittels einer entsprechenden Korrektur dieser Berechnung können Sie den Wochenbeginn auf Montag setzen.");

DEFINE('_EW_DESC_DAY_OFFSET', "Verschiebung des Tagesbeginns. Die Zeitmarke/(3600*24) gibt die Tagesnummer gerechnet vom 1.1.1970 an. Mittels einer entsprechenden Korrektur dieser Berechnung können Sie den jeweiligen Tag um 00:00 Uhr beginnen lassen.");

DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Ein durchsichtiges 1x1px Icon im Frontend benutzen.");

DEFINE('_EW_DESC_IP_STATS', "IP-Adress-Statistik aktivieren. Bitte beachten Sie: In manchen Ländern ist es verboten, IP-Adressen über einen längeren Zeitraum in einer Datenbank zu speichern. Benutzung auf eigene Gefahr!");

DEFINE('_EW_DESC_HIDE_ADS', "Werbung im Backend ausblenden, falls diese Sie wirklich ärgert. Sollten Sie die Werbung weiter eingeblendet lassen, so unterstützen Sie die zukünftige Entwicklung dieses Tools. Vielen Dank.");

DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Entfernen Sie dieses Häckchen, falls Sie den Tooltip bereits anzeigen lassen wollen, sobald sich die Maus über dem entsprechenden Symbol befindet. Bei aktiviertem Häckchen wird der Tooltip erst nach einem Mausklick angezeigt.");

DEFINE('_EW_DESC_SERVER_URI_KEY', "Standard ist '<b>REDIRECT_URL</b>', wenn Sie URL-Rewriting betreiben. Kann auf '<b>SCRIPT_URL</b>' gesetzt werden, wenn nur die index.php überwacht werden soll.");

DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Nachricht, die geblockten Benutzern gezeigt wird, oder weitere Informationen, warum Sie diese Benutzer blocken.");

DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Breite des Tooltips");

DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Höhe des Tooltips");

DEFINE('_EW_DESC_TOOLTIP_URL', "Sie können hier jede URL einfügen, um die IP des Besuchers zu visualisieren. Der Platzhalter {ip} wird durch die IP des Besuchers ersetzt. <br>Beispiel: http://somewebsite.com/query?iplookup={ip}");


DEFINE('_EW_DESC_IGNORE_URI', "Sie können hier jede beliebige URI einfügen, die in der Statistik ignoriert werden soll. Die Nutzung von Platzhaltern (?) und Wildcards (*) ist möglich (Beispiel: /freel?n*).");

DEFINE('_EW_DESC_GOALS_NAME', "Legen Sie einen Namen für das Ziel fest. Dieser Name wird später in der Statistik angezeigt.");

DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Unter einer URI versteht man all das, was hinter Ihrem Domain-Namen steht. <br> (Beispiel: Die URL lautet http://www.codegravity.com/projects/, dann lautet die URI /projects/. Tragen Sie in diesem Fall z.B. folgenden Wert ein: <b>/projects*</b>");

DEFINE('_EW_DESC_GOALS_GET_VAR', "Die sog. GET-Variable ist eine Variable, die Sie in einer URL gewöhnlich hinter einem <b>?</b> oder einem <b>&</b>-Zeichen sehen <br> (Beispiel: http://www.codegravity.com/index.php?<u>name</u>=peter&<u>surname</u>=smith). <br> Sie können in diesem Feld auch Wildcards <b>*</b> einsetzen, um mehrere GET-Variablen zu erfassen <br> (Beispiel: <b>n*me</b>");

DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Geben Sie hier den Wert ein, der mit dem Wert aus der vorgenannten GET-Variable übereinstimmen muss. <br> (Beispiel: <b>p?t*r</b> erfasst die Werte peter, pater,...) ");

DEFINE('_EW_DESC_GOALS_POST_VAR', "Diese Funktion ist vergleichbar mit der vorstehenden GET-Funktion. Allerdings werden hier Werte überprüft, die ein User in Webformulare einträgt. <br> (Beispiel: Sollten Sie ein Formular auf ihrer Webseite einsetzen, welches ein Feld &lt;input type='text' name='<u>experiences</u>' /&gt; besitzt, so können Sie hier folgenden Wert eintragen:<b>exper*ces</b>");

DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Geben Sie hier den Wert ein, der mit dem Wert aus der vorgenannten POST-Variable übereinstimmen muss. <br> So können Sie beispielsweise die Eingabe von Java-Befehlen protokollieren (Beispiel: <b>*java*</b>.");

DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Seitentitel, der mit der Bedingung übereinstimmen muss. <br> (Beispiel: <b>*freelance programmers*</b>");

DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Name eines eingeloggten Besuchers. <br> (Beispiel: <b>psmith*</b>");

DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP, von welcher der Benutzer kommt. <br> (Beispiel: <b>201.9?.*.*</b>.");

DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL, von welcher der Benutzer kommt. <br> (Beispiel: <b>*www.google.*</b>.");

DEFINE('_EW_DESC_GOALS_REDIRECT', "Geben Sie ein bestimmte URL an, zu welcher der Benutzer im Falle des Bedingungseintritts weitergeleitet werden soll. <br> (Beispiel: <b>http://www.codegravity.com/goaway.html</b>. <br> Beachte: Die URL-Weiterleitung geht der IP-Blockierung vor.");

DEFINE('_EW_DESC_TRUNCATE_GOALS', "Maximale Anzahl der Zeichen, auf die ein Eintrag in der Ziele-Tabelle gekürzt werden soll");

DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Backlink zu codegravity.com. Sie können diesen abschalten, wir wären Ihnen aber sehr dankbar, wenn Sie den Link belassen würde. Vielen Dank");

DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Frontend-Anzeige der Länder-Statistik. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Falls Sie die Reihenfolge von Besucher- und Länderanzeige im Frontend-Modul ändern wollen: Bei Entfernen des Häckchens werden die Besucher zuerst angezeigt.");

DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Anzahl der Länder, die im Fontend angezeigt werden sollen.");

DEFINE('_EW_DESC_FRONTEND_VISITORS', "Frontend-Anzeige der Besucher pro Land. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Zeit in Sekunden to cache fetching of countries total in frontend");

DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Zeit in Sekunden to cache fetching of visitors in frontend");

DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Anzeige der Besucher im Frontend für: heute. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Frontend-Anzeige der Besucher für: gestern. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Frontend-Anzeige der Besucher für: diese Woche. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Frontend-Anzeige der Besucher für: letzte Woche. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Frontend-Anzeige der Besucher für: diesen Monat. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Frontend-Anzeige der Besucher für: letzten Monat. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Frontend-Anzeige aller Besucher seit der Installation von ExtraWatch. Eine Änderung wird im Frontend erst wirksam nach Ablauf der für das CACHE_FRONTEND_ festgelegten Zeitspanne...");

DEFINE('_EW_DESC_LANGUAGE', "Auswahl der Sprachdatei. Diese Datei finden Sie unter <b>/components/com_extrawatch/lang/</b>. Sollten Sie die Absicht haben, eine neue Sprachdatei zu erstellen, so prüfen Sie bitte erst, ob sich nicht auf der Projekt-Homepage bereits eine solche Sprachversion befindet. Sollten Sie für ihre Sprache keine Datei finden, müssen Sie die Sprachdatei 'english.php' kopieren und umbenennen (z.B. in 'german.php'). Dann müssen Sie in dieser Datei alle Key-Werte auf der rechten Seite übersetzen.");

DEFINE('_EW_DESC_GOALS', "Die Einrichtung eines Ziels erlaubt es Ihnen, spezifische Parameter festzulegen. Erfüllt ein Besucher diese Parameter, so wird sein Besuch als <b>Treffer</b> gezählt. Auf diesem Wege können Sie beispielsweise nachverfolgen, ob ein User eine spezifische URL aufgesucht hat, einen bestimmten Wert abgefragt hat, einen bestimmten Benutzernamen besitzt oder von einer bestimmten Adresse gekommen ist. Sie können Besucher, die einen der spezifizierten Parameter erfüllen, auch blockieren oder an eine bestimmte URL weiterleiten.");

DEFINE('_EW_DESC_GOALS_INSERT', "In den nachstehenden Felden (mit Ausnahme des Namens-Feldes) können Wildcards (<b>*</b> und Platzhalter (<b>?</b> verwendet werden. Beispiel: ?ear (entspricht: near, tear,...), p*r (entspricht: pr, peer, pear,...) ");

DEFINE('_EW_DESC_GOALS_BLOCK', "Gegen Sie eine <b>1</b> ein, falls Sie den Besucher blocken wollen. Der Besucher wird den Inhalt ihrer Seite nicht sehen. Er wird vielmehr - ohne weitergeleitet zu werden - lediglich die Nachricht erhalten, dass seine IP geblocket wurde. Ferner wird die entsprechende IP in die Statistik 'IP-Blockierung' aufgenommen. <br> (Beispielwert:<b>1</b>.");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Landeseinstellungen");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "Landeskürzel in zwei Großbuchstaben (z.B.: <b>DE</b>)");
DEFINE('_EW_STATS_INTERNAL', "Intern");
DEFINE('_EW_STATS_FROM', "Von");
DEFINE('_EW_STATS_TO', "Bis");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Als Ziel hinzufügen");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Ziel für dieses Land hinzufügen");
DEFINE('_EW_MENU_REPORT_BUG', "Fehlerbericht senden");
DEFINE('_EW_GOALS_COUNTRY', "Land");

/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Falls Sie die Namen der Länder in Großbuchstaben im Uppercase angezeigt haben wollen (Zum Beispiel: GERMANY, UNITED KINGDOM anstatt Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Time in seconds to cache fetching of users in frontend");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Initial value shown in Total: in frontend. Nützlich, wenn Sie von einem anderen Statistik-Tool kommen. (Beispielsweise.: 20000). Sentzen Sie diesen Wert auf 0 zurück, falls Sie dieses Eigenschaft nicht nutzen wollen.");
DEFINE('_EW_DESC_IGNORE_USER', "Ignore users listed in this textbox. One per line. (Eg.: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Most active users today from total of");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Enable the bans based on the words from the spamword list below ?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "Most common spam words used by spam bots. You can use the wildcards here, (Eg.: ph?rmac*). If the setting above is enabled, ExtraWatch will check whether the attacker submitted a form (the HTTP POST request) on your website with some of these spam words. (Applies if the form loads the Joomla-based website only - forum, comments, but is quite effective to block spam bots which try to submit every possible form)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "A link in the frontend Users module - allows you to specify an URL, which is open when the user clicks the user name. Must contain the string {user}, which will be replaced by the actual user name. (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Keyphrases");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Maximaler Wert des Besuchsverlaufs (Beispiel: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "Besucher zeigt nur die letzten Seiten-Besucher, nicht alle");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "In visits hide repetitive sitename in visited page title");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Maximale Besuchersanzahl, die in der Datenbasis des Besuchsverlaufs gespeichert werden. Seien Sie vorsichtig mit dieser Einstellung, falls Sie viel Zugriffe haben, kann die Datenbank schnell go werden. Überprüfen Sie immer, wieviel Daten der Verlauf enthält in Status!");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Keep Database Tables on uninstall. Check this option before uninstall if you are doing an upgrade and want to keep your data.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "You'll receive nightly emails with reports for previous day, which you can read in the morning");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Email address to which you'll receive these reports");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Only include rows in email reports where percentage is higher than {value}. Set to 0 if you don't want to use this feature <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Only include <b>positive one day</b> change values in email reports higher than {value} percent. Set to 0 if you don't want to use this feature <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Only include <b>negative one day</b> change values in email reports lower than {value} percent. Set to 0 if you don't want to use this feature <i>(example: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Only include <b>positive seven day</b> change values in email reports higher than {value} percent. Set to 0 if you don't want to use this feature <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Only include <b>negative seven day</b> change values in email reports lower than {value} percent. Set to 0 if you don't want to use this feature <i>(example: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Only include <b>positive thirty day</b> change values in email reports higher than {value} percent. Set to 0 if you don't want to use this feature <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Only include <b>negative thirty day</b> change values in email reports lower than {value} percent. Set to 0 if you don't want to use this feature <i>(example: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(functional in PRO version)</b> Enable this setting if you want to make the logo link rendered with attribute rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Maximum characters of email row name. Change this if your email client message window is too small");

DEFINE('_EW_MENU_HISTORY', "History");
DEFINE('_EW_MENU_EMAILS', "Emails");
DEFINE('_EW_MENU_STATUS', "Status");
DEFINE('_EW_DESC_BLOCKED', "These IPs were blocked by anti-spam");


DEFINE('_EW_HISTORY_VISITORS', "Visitors History");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Showing only %d last records.
                To change this value, go to Settings -&gt; History &amp; Performance -&gt; HISTORY_MAX_DB_RECORDS . Be careful, this setting affects load times of the data below.  ");
DEFINE('_EW_MENU_BUG', "Report Bug");
DEFINE('_EW_MENU_FEATURE', "Request Feature");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Schlüsselwörter");

DEFINE('_EW_BLOCKING_UNBLOCK', "nicht blockiert");
DEFINE('_EW_STATS_KEYPHRASE ', "Keyphrase");
DEFINE('_EW_STATUS_DATABASE', "Status der Datenbasis");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "Tabellenname");
DEFINE('_EW_STATUS_DATABASE_ROWS', "Reihe");
DEFINE('_EW_STATUS_DATABASE_DATA', "Daten");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "Gesamt");

DEFINE('_EW_EMAIL_REPORTS', "Email Berichte");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Erzeugter, gefilterter Email Bericht von gestern");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Email Value Filters");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "Wert");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "Prozent");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-Tages Änderung");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-Tages Änderung");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-Tages Änderung");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch hat heute %d Spammer-Hits blockiert, gesamt: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Blockierte IP Adresse");
DEFINE('_EW_ANTISPAM_SETTINGS', "Anti-Spam Einstellungen");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX updates traffic");


DEFINE('_EW_HISTORY_PREVIOUS', "vorige");
DEFINE('_EW_HISTORY_NEXT', "nächste");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Anzahl der Spalten von Ländern");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Anzahl der Zeilen/Reihen von Ländern");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Zeigt Ländernamen an oder nicht");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Zeige zurst Flagge und dann Prozent");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET/bekomme umgekehrte Bedingungen");
DEFINE('_EW_GOALS_POST_INVERSED', "POST/schreibe umgekehrte Bedingungen");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Überschrift umgekehrte Bedingungen");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Benutzername umgekehrte Bedingungen");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Came from/Komme von umgekehrten Bedingungen");

DEFINE('_EW_STATS_MAP', "letzter Besuch der Karte");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Bitte drücken Sie <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> eine Taste, um die Karte der letzten Besucher anzuzeigen:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "Speichere Taste");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Bitte geben Sie einen gültigen ipinfodb key ein, den Sie von: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> bekommen");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "BAD REQUEST/Falsche Anfrage: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Formular absenden:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL Parameter:");
DEFINE('_EW_VISIT_ADD_PAGE', " Add page as goal/Füge Seite als Ziel hinzu");
DEFINE('_EW_VISIT_BLOCK_IP', " Blockiere diese IP Adresse");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Füge dieses übertragene Formular als Ziel hinzu");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Füge diese URL Parameter als Ziel hinzu");

DEFINE('_EW_TREND_EMPTY', "Leer");

DEFINE('_EW_NOT_NUMBER', " WARNUNG: Der Wert, den Sie hinzufügen ist nicht gültig. ExtraWatch wird nicht sauber arbeiten!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Das ist eine 15-Tage -day Evaluierungs-Version. Noch zur Verfügung stehende Tage: <b>%d</b>. Bitte erwerben Sie eine Lizenz auf Lebeszeit <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch license for your domain</a> für diese und weitere Versionen.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Ihre Evaluierungs-Version ist abgelaufen. Bitte kaufen Sie ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Aktivierung der Lizenz erfolgreich. Vielen Dank!");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Error: Der Lizenzschlüssel und Ihre Domain stimmen nicht überein.</b><br/>Haben Sie den selben Domain namen in das Aktivierungsformular eingegeben, wie den, den sie unten sehen [as one you see below]? Dann kontaktieren Sie mich bitte: info@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "If you are seeing the message above for too long, your live site may be wrong.
                    Open the components/com_extrawatch/config.php
                    uncomment, and set your actual live site. Eg.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Warning: site in your browser and live site in configuration: %s and %s don't match.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Set live site to: %s and continue...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Entferne Backlink");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Wissensbasis");
DEFINE('_EW_ADMINHEADER_FLOW', "Flow/Ablauf");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Graphen");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Kommentare");
DEFINE('_EW_ADMINHEADER_REVIEW', "Rückblick");
DEFINE('_EW_ADMINHEADER_WRITE', "Schreiben Sie ein ");

DEFINE('_EW_FLOW_TRAFFIC', "Traffic Flow/Belasungsplan");
DEFINE('_EW_FLOW_SELECT_PAGE', "Wähle Seite aus:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Root outgoing links count:");
DEFINE('_EW_FLOW_NESTING', "Verschachtelungsstufe:");
DEFINE('_EW_FLOW_SCALE', "Skala:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Ad-free version");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Ich danke Ihnen sehr für Ihre Spende!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Der Registrierungsschlüssel für Ihre Domain %s ist: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Nun können Sie den backlink oder das ExtraWatch Logo im Frontend entfernen ");


DEFINE('_EW_SIZES_LAST_CHECK', "Die Letzte Prüfung würde durchgeführt am:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Größe der Komponenten/Module im /Administrator Verzeichnis");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Komponente");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Gesamt:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Größe");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Aktuallisiere alles");

DEFINE('_EW_SIZEDATABASE_TABLE', "Tabelle");
DEFINE('_EW_SIZEDATABASE_SIZE', "Größe");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-Tages Änderunge");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-Tages Änderung");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-Tages Änderung");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "keine Daten");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Gesamt:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Aktuallisiere alles");
DEFINE('_EW_SIZEMODULES_TOTAL', "Gesamt:");
DEFINE('_EW_SIZEMODULES_MODULE', "Module");
DEFINE('_EW_SIZEMODULES_SIZE', "Größe");

DEFINE('_EW_SIZES_FILES', "Files &amp; Ordner");
DEFINE('_EW_SIZES_BYTES', "Bytes");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Aktuallisiere");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-@YEAR@ by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Karte der letzten Besucher ipinfodb.com key from: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Beinflusse Zeitzonen-Offset");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Update");
DEFINE('_EW_MENU_UPDATE_TITLE', "Backup & Upgrade");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Nicht in der freien Version verfügbar, bitte schauen Sie beim license tab nach");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Spam Words Ban aktivieren");
DEFINE('_EW_SPAMWORD_LIST', "Spam Words List");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Blende sich wiederholende Überschriften aus");
DEFINE('_EW_TRUNCATE_VISITS', "Truncate Visits");
DEFINE('_EW_TRUNCATE_STATS', "Truncate Stats");
DEFINE('_EW_TRUNCATE_GOALS', "Truncate Goals");
DEFINE('_EW_LIMIT_BOTS', "Limit Bots");
DEFINE('_EW_LIMIT_VISITORS', "Limit Besucher");
DEFINE('_EW_TOOLTIP_WIDTH', "Tooltip Breite");
DEFINE('_EW_TOOLTIP_HEIGHT', "Tooltip Höhe");
DEFINE('_EW_TOOLTIP_URL', "Tooltip URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "Tooltip OnClick");
DEFINE('_EW_IP_STATS', "IP Statistik");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB Schlüssel ");
DEFINE('_EW_ONLY_LAST_URI', "Nur letzte URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Front End: Logo ausblenden ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Front End: kein Follow");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Front End kein Back Link");
DEFINE('_EW_FRONTEND_USER_LINK', "Front Benutzer links");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Front End Länder zuerst");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Front End Länder Name");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Front End Länder Großbuchstaben");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Front End Länder Flag zuerst");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Front End Länder Nummer");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Front End Länder Maximale Spalten");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Front End Länder Max Reihen/Zeilen");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "Front End Benutzer heute");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "Front End Benutzer gestern");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "Front End Benutzer diese Woche ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "Front End Benutzer letzte Woche ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "Front End Benutzer diesen Monat ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "Front End Benutzer letzen Monat");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Front End ausgeblendete Benutzer gesamt");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "Front End gesamt Initial");
DEFINE('_EW_HISTORY_MAX_VALUES', "History Maximale Werte");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "History Max Aufzeichnung");
DEFINE('_EW_UPDATE_TIME_VISITS', "Update Zeit Besucher");
DEFINE('_EW_UPDATE_TIME_STATS', "Update Zeit Statistik");
DEFINE('_EW_STATS_MAX_ROWS', "Statistik maximale Reihe");
DEFINE('_EW_STATS_IP_HITS', "Statistik IP hits");
DEFINE('_EW_MAXID_BOTS', "Max ID bots");
DEFINE('_EW_MAXID_VISITORS', "Max id Visitors");
DEFINE('_EW_STATS_KEEP_DAYS', "Statistik Tage speichern");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Speicher Front End Länder");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Speicher Front End Besucher");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "deinstalliere Behalte Werte ");
DEFINE('_EW_IGNORE_IP', "Ignoriere IP");
DEFINE('_EW_IGNORE_URI', "Ignoriere URI");
DEFINE('_EW_IGNORE_USER', "Ignoriere Benutzer");
DEFINE('_EW_BLOCKING_MESSAGE', "Blockiere Nachricht");
DEFINE('_EW_SERVER_URI_KEY', "Server URI Schlüssel");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Front End Visitors Gesamt Initial");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Records/Aufzeichnungen");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " To make the blocking effective, you need to publish ExtraWatch agent BEFORE any content or forms. Eg. on left side in your template.
                    <br/>
                    Go to Module Manager -> ExtraWatch agent -> select position as left");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Bericht");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO Nightly Email Bericht aktivieren");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Installationsdemo ansehen");


/** JW 1.2.18 */
DEFINE('_EW_ADMINHEADER_HEATMAP', "Heatmap");
DEFINE('_EW_HEATMAP_CLICKS', "clicks");
DEFINE('_EW_HEATMAP_TITLE', "title");
DEFINE('_EW_HEATMAP_CLICK_OPEN', "Click to open heatmap");
DEFINE('_EW_NO_DATA', "This section contains no data yet ...");
DEFINE('_EW_POSITION', "Search result num.");
DEFINE('_EW_BLOCKING_REASON', 'reason');
DEFINE('_EW_BLOCKING_UNAUTHORIZED_ACCESS', 'Unauthorized Access');
DEFINE('_EW_BLOCKING_BLOCKED_MANUALLY', 'Blocked manually');
DEFINE('_EW_BLOCKING_BAD_WORD', "bad word");
DEFINE('_EW_HEATMAP_OF', "of");
DEFINE('_EW_URI', "uri");
DEFINE('_EW_COUNT', "count");
DEFINE('_EW_SEO_REPORT_FOR', "SEO report for");
DEFINE('_EW_SEO_MOST_DYNAMIC_KEYPHRASES', "Most dynamic keyphrases");
DEFINE('_EW_SEO_MIN_POSITION', "min position");
DEFINE('_EW_SEO_AVG_POSITION', "average position");
DEFINE('_EW_SEO_MAX_POSITION', "max position");
DEFINE('_EW_SEO_CHANGE', "change");
DEFINE('_EW_SEO_DATE_OF_LAST_CHANGE', "date of last change");
DEFINE('_EW_SEO_TOTAL_VISITS_FROM_SEARCH_ENGINES', "Total visits by keyphrase from search engines");
DEFINE('_EW_GOAL_ADD_SUBMITTED_VALUE', "Add submitted variable as goal");
DEFINE('_EW_RENDERED_IN', "Rendered in");
DEFINE('_EW_DESC_SEO_RENDER_ONLY_CHANGED', "Render only values which were already used in previous days (have some percentage in change column)");
DEFINE('_EW_SEO_REPORT_SETTINGS', "SEO Report Settings");


DEFINE('_EW_HTTP500_ERROR', "Could not initialize ExtraWatch javascript functions! Browser could not load: \\n%s, because it returned HTTP 500 internal server error.  \\nThis usually of security restrictions by other components/plugins. Please check your .htaccess file in your root Joomla directory.  \\nIf you use Akeeba Admin tools, you need to go \ 'Akeeba htaccess maker\ ' -> \ 'Server Protection\ ' -> \ 'Exceptions\ ' -> \ 'Allow direct access to these files\ ', and add: \\n/components/com_joomlawatch/block.php \\n/components/com_joomlawatch/img.php \\n/components/com_joomlawatch/last.php \\n/components/com_joomlawatch/lastvisit.php \\n/components/com_joomlawatch/sizequery.php \\n/components/com_joomlawatch/sizequerytotal.php \\n/components/com_joomlawatch/stats.php \\n/components/com_joomlawatch/timezone.php \\n/components/com_joomlawatch/tooltip.php \\n/components/com_joomlawatch/trendtooltip.php \\n/components/com_joomlawatch/vars.php \\n/components/com_joomlawatch/visits.php \\n/components/com_joomlawatch/js/joomlawatch.js.php \\n/components/com_joomlawatch/js/maps.js.php ");

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_JOOMLA',"Warning: No visits are currently being recorded. Your ExtraWatch Agent module is published, but most probably in position which does not exist in your template.
                <br/><br/>
                To fix this: <br/>
                1. go to Modules section -&gt; ExtraWatch Agent <br/>
                2. change the Position to 'left' or 'footer' (or some other position).<br/>
                3. check if new visits are being recorded
                <br/><br/>
                If this won't help, you can also: <br/>
                1. set 'Show Title' to 'Yes' in  Modules section -&gt; ExtraWatch Agent <br/>
                2. try to use some other positions of ExtraWatch agent module<br/>
                3. save<br/>
                4. after reload of your main page look for 'ExtraWatch Agent' text.<br/>
                5. this way you'll make sure the Agent module is published.<br/>
                6. after that you can set 'Show Title' back to 'No'.
                ");
/** Goals/Import IP */
DEFINE('_EW_GOALS', "Goals");
DEFINE('_EW_GOALS_IMPORT', "Import goals");
DEFINE('_EW_GOALS_IMPORT_XML', "Import XML");
DEFINE('_EW_GOALS_EXPORT', "Export goals");
DEFINE('_EW_GOALS_FILENAME', "Select goals previously exported as XML");
DEFINE('_EW_ANTISPAM_IMPORT_CSV', "import anti-spam ip csv");

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_WORDPRESS',"Warning: No visits are being recorded. You must go to Appearance->Widgets section, <br/>find ExtraWatchAgent widget and drag&drop it to some of the containers on the right side. <br/>You can publish also other ExtraWatch modules this way.");


/** 2.1 */
DEFINE('_EW_MENU_DOWNLOADS', "Downloads");
DEFINE('_EW_DOWNLOADS_FILE_NOT_FOUND', "FILE NOT FOUND");
DEFINE('_EW_DOWNLOADS_HTACCESS_NOT_WRITABLE', "Your .htaccess is not Writable.");
DEFINE('_EW_DOWNLOADS_HTACCESS_COULD_NOT_BE_CREATED', ".htaccess could not be created, Please create your own.");
DEFINE('_EW_DOWNLOADS_ADD_EXTENSION', "Add Extension");
DEFINE('_EW_DOWNLOADS_EXTENSION_NAME', "Extension Name");
DEFINE('_EW_DOWNLOADS_WARNING', "<b>Warning:</b> always backup your .htaccess file before adding new extension or path! Do not add 'php' as monitored extension. <br/>Be also careful with adding png/jpg, the download count will be increased once someone opens your page which contains images with this extension.");
DEFINE('_EW_DOWNLOADS_ADD_FILE_PATH', "Add File/Path");
DEFINE('_EW_DOWNLOADS_FILE_PATH_NAME', "File/Path Name");
DEFINE('_EW_DOWNLOADS_DOWNLOAD_MONITOR', "Download Monitor");
DEFINE('_EW_DOWNLOADS_EXTENSIONS_BEING_MONITORED', "Extensions Being Monitored");
DEFINE('_EW_DOWNLOADS_FILES_PATHS_BEING_MONITORED', "Files/Paths Being Monitored");
DEFINE('_EW_DOWNLOADS_EDIT_EXTENSION', "Edit Extension");
DEFINE('_EW_DOWNLOADS_EDIT_FILE_PATH', "Edit File/Path");
DEFINE('_EW_DOWNLOADS_EXTENSION', "Extension");
DEFINE('_EW_DOWNLOADS_ACTION', "Action");
DEFINE('_EW_DOWNLOADS_PATH', "Path");
DEFINE('_EW_DOWNLOADS_TODAY', "Today");
DEFINE('_EW_DOWNLOADS_YESTERDAY', "Yesterday");
DEFINE('_EW_DOWNLOADS_THIS_WEEK', "This Week");
DEFINE('_EW_DOWNLOADS_LAST_WEEK', "Last Week");
DEFINE('_EW_DOWNLOADS_THIS_MONTH', "This Month");
DEFINE('_EW_DOWNLOADS_LAST_MONTH', "Last Month");
DEFINE('_EW_DOWNLOADS_TOTAL', "Total");
DEFINE('_EW_DOWNLOADS_INCOMPLETE', "The required Information is incomplete");

DEFINE('_EW_STATS_SOCIAL_MEDIA', "Social Media");
DEFINE('_EW_MENU_AVAILABLE_IN_PRO',"Available in PRO version");
DEFINE('_EW_DOWNLOADS_TOTAL',"Total Downloads");


/** 3.0 - hosted version */
DEFINE('_EW_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");
DEFINE('_EW_DESC_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");

DEFINE('_EW_STATS_DEVICES', "Mobile Devices");

DEFINE('_EW_BLOCKED_BASED_ON_GOAL',"Blocked based on goal no. %s");

