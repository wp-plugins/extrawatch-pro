<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('PiekÄ¼uve liegta');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "Statistika");
DEFINE('_EW_MENU_GOALS', "MÄ“rÄ·i");
DEFINE('_EW_MENU_SETTINGS', "UzstÄ?dÄ«jumi");
DEFINE('_EW_MENU_CREDITS', "IzstrÄ?dÄ?tÄ?ji");
DEFINE('_EW_MENU_FAQ', "BUJ");
DEFINE('_EW_MENU_DOCUMENTATION', "DokumentÄ?cija");
DEFINE('_EW_MENU_LICENSE', "No reklÄ?mÄ?m brÄ«va licence");
DEFINE('_EW_MENU_DONATORS', "ZiedotÄ?ji");
DEFINE('_EW_MENU_SUPPORT', "Atbalstiet ExtraWatch un reklÄ?mas no administrÄ?cijas paneÄ¼a tiks noÅ†emtas.");

// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "JaunÄ?kie apmeklÄ“tÄ?ji");
DEFINE('_EW_VISITS_BOTS', "Boti");
DEFINE('_EW_VISITS_CAME_FROM', "NÄ?ca no");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "JÅ«su ExtraWatch modulis nav publicÄ“ts! Jauna statistika netiek uzskaitÄ«ta. Lai to publicÄ“tu, ejiet uz ModuÄ¼u sekciju un publicÄ“jiet to visÄ?m lapÄ?m");
DEFINE('_EW_VISITS_PANE_LOADING', "IelÄ?dÄ“ apmeklÄ“jumus...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "ApmeklÄ“jumi par nedÄ“Ä¼u");
DEFINE('_EW_STATS_WEEK', "NedÄ“Ä¼a");
DEFINE('_EW_STATS_THIS_WEEK', "Å¡onedÄ“Ä¼");
DEFINE('_EW_STATS_UNIQUE', "unikÄ?li");
DEFINE('_EW_STATS_LOADS', "ielÄ?des");
DEFINE('_EW_STATS_HITS', "hiti");
DEFINE('_EW_STATS_TODAY', "Å¡odien");
DEFINE('_EW_STATS_FOR', "par");
DEFINE('_EW_STATS_ALL_TIME', "Visa laika");
DEFINE('_EW_STATS_EXPAND', "izvÄ“rst");
DEFINE('_EW_STATS_COLLAPSE', "sakÄ¼aut");
DEFINE('_EW_STATS_URI', "Lapas");
DEFINE('_EW_STATS_COUNTRY', "Valstis");
DEFINE('_EW_STATS_USERS', "LietotÄ?ji");
DEFINE('_EW_STATS_REFERERS', "NorÄ?dÄ«tÄ?ji");
DEFINE('_EW_STATS_IP', "IP");
DEFINE('_EW_STATS_BROWSER', "PÄ?rlÅ«ki");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "atslÄ“gas vÄ?rdi");
DEFINE('_EW_STATS_GOALS', "MÄ“rÄ·i");
DEFINE('_EW_STATS_TOTAL', "KopÄ?");
DEFINE('_EW_STATS_DAILY', "Ikdienas");
DEFINE('_EW_STATS_DAILY_TITLE', "Ikdienas statistika");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Visa laika statistika");
DEFINE('_EW_STATS_LOADING', "ielÄ?dÄ“...");
DEFINE('_EW_STATS_LOADING_WAIT', "ielÄ?dÄ“... lÅ«dzu uzgaidiet");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IP BloÄ·Ä“Å¡ana");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "IevadÄ«t IP manuÄ?li");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "IevadÄ«t IP adresi, kuru vÄ“laties bloÄ·Ä“t. (piemÄ“ram, 217.242.11.54 vai 217.* vai 217.242.* lai bloÄ·Ä“tu visas IP, kuras atbilst adreses norÄ?dÄ«tajai daÄ¼ai)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "PatieÅ¡Ä?m bloÄ·Ä“t ");
DEFINE('_EW_STATS_PANE_LOADING', "IelÄ?dÄ“ statistiku...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "UzstÄ?dÄ«jumi");
DEFINE('_EW_SETTINGS_DEFAULT', "NoklusÄ“jums");
DEFINE('_EW_SETTINGS_SAVE', "SaglabÄ?t");
DEFINE('_EW_SETTINGS_APPEARANCE', "Izskats");
DEFINE('_EW_SETTINGS_FRONTEND', "Lapas priekÅ¡puse");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "VÄ“sture un attÄ«stÄ«ba");
DEFINE('_EW_SETTINGS_ADVANCED', "PadziÄ¼inÄ?ti");
DEFINE('_EW_SETTINGS_IGNORE', "IgnorÄ“t");
DEFINE('_EW_SETTINGS_BLOCKING', "BloÄ·Ä“Å¡ana");
DEFINE('_EW_SETTINGS_EXPERT', "Eksperts");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Vai JÅ«s patieÅ¡Ä?m vÄ“laties dzÄ“st visu esoÅ¡o statistiku un atsÄ?kt uzskaiti no nulles?");
DEFINE('_EW_SETTINGS_RESET_ALL', "NullÄ“t visu");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "NullÄ“t visu statistikas un un apmeklÄ“tÄ?ju datus");
DEFINE('_EW_SETTINGS_LANGUAGE', "Valoda");
DEFINE('_EW_SETTINGS_SAVED', "UzstÄ?dÄ«jumi saglabÄ?ti");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Pievienot savu IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "sarakstam.");

// Other / mostly general.
DEFINE('_EW_TITLE', "ReÄ?lÄ? laika AJAX joomla uzraudzÄ«ba");
DEFINE('_EW_BACK', "AtpakaÄ¼");
DEFINE('_EW_ACCESS_DENIED', "Jums nav nepiecieÅ¡amo atÄ¼auju, lai apskatÄ«tu Å¡o !");
DEFINE('_EW_LICENSE_AGREE', "Es piekrÄ«tu augstÄ?k redzamajiem nosacÄ«jumiem");
DEFINE('_EW_LICENSE_CONTINUE', "TurpinÄ?t");
DEFINE('_EW_SUCCESS', "OperÄ?cija veiksmÄ«ga");
DEFINE('_EW_RESET_SUCCESS', "Visi statistikas un apmeklÄ“jumu dati veiksmÄ«gi dzÄ“sti");
DEFINE('_EW_RESET_ERROR', "Dati NETIKA veiksmÄ«gi dzÄ“sti, radusies kÄ¼Å«da");
DEFINE('_EW_CREDITS_TITLE', "IzstrÄ?dÄ?tÄ?ji");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Ikdienas un iknedÄ“Ä¼as statistika par");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX atÄ¼aujas liegtas: LÅ«dzu apskatiet statistiku no domÄ“na, kuru norÄ?dÄ«jÄ?t Joomla configuration.php failÄ? - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "IespÄ“jams JÅ«s esiet aizmirsis norÄ?dÄ«t www. JÅ«su domÄ“na priekÅ¡Ä?. JÅ«su javascript cenÅ¡as piekÄ¼Å«t ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "no");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "kas liek domÄ?t, ka tas ir cits domÄ“ns.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "IegÅ«stiet jaunÄ?ko atjauninÄ?juma kodu no");
DEFINE('_EW_HEADER_CAST_YOUR', "Atdod savu");
DEFINE('_EW_HEADER_VOTE', "Balsi");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "UzklikÅ¡Ä·iniet, lai aplÅ«kotu padomu");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Virziet pÄ?ri peles kursoru, lai redzÄ“tu padomu");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "vakardienas pieaugums");
DEFINE('_EW_TOOLTIP_HELP', "Atver tieÅ¡saistes Ä?rÄ“jo palÄ«dzÄ«bu priekÅ¡");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "AizvÄ“rt Å¡o logu");
DEFINE('_EW_TOOLTIP_PRINT', "PrintÄ“t");

// Goals.
DEFINE('_EW_GOALS_INSERT', "Ievietot jaunu mÄ“rÄ·i");
DEFINE('_EW_GOALS_UPDATE', "Atjaunot mÄ“rÄ·i nr.");
DEFINE('_EW_GOALS_ACTION', "DarbÄ«ba");
DEFINE('_EW_GOALS_TITLE', "Jauns mÄ“rÄ·is");
DEFINE('_EW_GOALS_NEW', "Jauns mÄ“rÄ·is");
DEFINE('_EW_GOALS_RELOAD', "PÄ?rlÄ?dÄ“t");
DEFINE('_EW_GOALS_ADVANCED', "PadziÄ¼inÄ?ti");
DEFINE('_EW_GOALS_NAME', "Nosaukums");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI nosacÄ«jums");
DEFINE('_EW_GOALS_GET_VAR', "GET mainÄ«gais");
DEFINE('_EW_GOALS_GET_CONDITION', "GET nosacÄ«jums");
DEFINE('_EW_GOALS_POST_VAR', "POST MainÄ«gais");
DEFINE('_EW_GOALS_POST_CONDITION', "POST NosacÄ«jums");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Virsraksta nosacÄ«jums");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "LietotÄ?jvÄ?rda nosacÄ«jums");
DEFINE('_EW_GOALS_IP_CONDITION', "IP NosacÄ«jums");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "NÄ?ca no nosacÄ«jums");
DEFINE('_EW_GOALS_BLOCK', "BloÄ·Ä“Å¡ana");
DEFINE('_EW_GOALS_REDIRECT', "PÄ?rsÅ«tÄ«t uz URL");
DEFINE('_EW_GOALS_HITS', "Hiti");
DEFINE('_EW_GOALS_ENABLED', "IeslÄ“gts");
DEFINE('_EW_GOALS_EDIT', "Labot");
DEFINE('_EW_GOALS_DELETE', "DzÄ“st");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "JÅ«s zaudÄ“siet visu pÄ“dÄ“jo statistiku, kas attiecÄ?s uz Å¡o mÄ“rÄ·i. JÅ«s tieÅ¡Ä?m vÄ“laties dzÄ“st mÄ“rÄ·i nr.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Valstis");
DEFINE('_EW_FRONTEND_VISITORS', "ApmeklÄ“tÄ?ji");
DEFINE('_EW_FRONTEND_TODAY', "Å odien");
DEFINE('_EW_FRONTEND_YESTERDAY', "Vakardien");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Å onedÄ“Ä¼");
DEFINE('_EW_FRONTEND_LAST_WEEK', "PagÄ?juÅ¡onedÄ“Ä¼");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Å omÄ“nes");
DEFINE('_EW_FRONTEND_LAST_MONTH', "PagÄ?juÅ¡o mÄ“nes");
DEFINE('_EW_FRONTEND_TOTAL', "KopÄ?");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch ir atkÄ¼Å«doÅ¡anas reÅ¾Ä«mÄ?. Å¡Ä?di JÅ«s variet atklÄ?t kÄ¼Å«du cÄ“loÅ†us. Lai atslÄ“gtu Å¡o reÅ¾Ä«mu nomainiet EXTRAWATCH_DEBUG vÄ“rtÄ«bu /components/com_extrawatch/config.php failÄ? no 1 uz 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "MaksimÄ?lais attÄ“lojamo rindiÅ†u skaits, kad statistika tiek rÄ?dÄ«ta izvÄ“rstÄ? reÅ¾Ä«mÄ?.");
DEFINE('_EW_DESC_STATS_IP_HITS', "Visas IP adreses, kuras iepriekÅ¡Ä“jÄ?s dienÄ?s ir apmeklÄ“juÅ¡as lapu mazÄ?k reiÅ¾u nekÄ? norÄ?dÄ«tÄ? vÄ“rtÄ«ba, tiks dzÄ“stas no IP adreÅ¡u vÄ“stures.");
DEFINE('_EW_DESC_STATS_URL_HITS', "Visi URL, kuri iepriekÅ¡Ä“jÄ?s dienÄ?s ir apmeklÄ“ti mazÄ?k reiÅ¾u nekÄ? norÄ?dÄ«tÄ? vÄ“rtÄ«ba, tiks dzÄ“sti no IP adreÅ¡u vÄ“stures.");
DEFINE('_EW_DESC_IGNORE_IP', "NeiekÄ¼aut atseviÅ¡Ä·as IP adreses statistikÄ?. Katru rakstiet jaunÄ? rindiÅ†Ä?. JÅ«s variet izmantot daÄ¼Ä“jas IP adreses (wildcards), lai norÄ?dÄ«tu lielÄ?ku adreÅ¡u apgabalu. <br/>PiemÄ“ram, 192.* neiekÄ¼aus adreses 192.168.51.31, 192.168.16.2, utt..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "ApmeklÄ“tÄ?ju statistikas atjaunoÅ¡anas intervÄ?ls milisekundÄ“s, noklusÄ“jums ir 2000, esiet uzmanÄ«gs ar Å¡o vÄ“rtÄ«bu. Tad pÄ?rlÄ?dÄ“jiet ExtraWatch komponenta lappusi.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Statistikas atjaunoÅ¡anas intervÄ?ls milisekundÄ“s, noklusÄ“jums ir 4000, esiet uzmanÄ«gs ar Å¡o vÄ“rtÄ«bu. Tad pÄ?rlÄ?dÄ“jiet ExtraWatch komponenta lappusi");
DEFINE('_EW_DESC_MAXID_BOTS', "Cik botu apmeklÄ“jumus glabÄ?t datubÄ?zÄ“.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Cik daudz reÄ?lo apmeklÄ“jumu glabÄ?t datubÄ?zÄ“.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Cik daudz botu JÅ«s redzÄ“siet administrÄ?cijas panelÄ«.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Cik daudz reÄ?lu apmeklÄ“jumu JÅ«s redzÄ“siet administrÄ?cijas panelÄ«.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "MaksimÄ?lais simbolu skaits, kuru rÄ?dÄ«t nosaukumos un adresÄ“s.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "MaksimÄ?lais simbolu skaits, kuru rÄ?dÄ«t labajÄ? statistikas panelÄ«.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Cik dienas glabÄ?t statistiku datubÄ?zÄ“, 0 = bezgalÄ«gi ilgi.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Kad JÅ«s atrodieties citÄ? laika joslÄ? kÄ? JÅ«su serveris. (pozitÄ«va vai negatÄ«va vÄ“rtÄ«ba stundÄ?s)");
DEFINE('_EW_DESC_WEEK_OFFSET', "NedÄ“Ä¼as kompensÄ?cija, laika Å¡ablons/(3600*24*7) sÄ?kas ar nedÄ“Ä¼u 1.1.1970, Å¡Ä« kompensÄ?cija veic korekciju, lai nedÄ“Ä¼a sÄ?ktos ar pirmdienu");
DEFINE('_EW_DESC_DAY_OFFSET', "Dienas kompensÄ?cija, laika Å¡ablons/(3600*24) sÄ?kas ar dienu 1.1.1970, Å¡Ä« kompensÄ?cija veic korekciju, lai diena sÄ?ktos ar 00:00");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Lai izmantotu tukÅ¡u 1x1px ikonu mÄ?jaslapÄ?");
DEFINE('_EW_DESC_IP_STATS', "Lai ieslÄ“gtu IP adreÅ¡u statistiku. DaÅ¾Ä?s valstÄ«s ilgu laiku turÄ“t IP adreses datubÄ?zÄ“s ir aizliegts ar likumu. Izmantojiet uz savu atbildÄ«bu.");
DEFINE('_EW_DESC_HIDE_ADS', "Å is uzstÄ?dÄ«jums noslÄ“pj administrÄ?cijas panelÄ« redzamÄ?s reklÄ?mas, ja tÄ?s krÄ«t Jums uz nerviem. AtstÄ?jot tÄ?s, JÅ«s atbalstiet turpmÄ?ku Å¡Ä« rÄ«ka izstrÄ?di. Paldies Jums.");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "IzÄ·eksÄ“jiet, ja JÅ«s padomus vÄ“laties apskatÄ«t pÄ?rvietojot tiem pÄ?ri peles kursoru, nevis spieÅ¾ot uz tiem.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "NoklusÄ“jums ir 'REDIRECT_URL', kurÅ¡ ir standarts, ja JÅ«s izmantojiet url pÄ?rrakstÄ«Å¡anu, to var uzstÄ?dÄ«t arÄ« kÄ? 'SCRIPT_URL', ja tas veido statistiku tikai par index.php lapas apmeklÄ“jumiem");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "ZiÅ†a, kura tiek rÄ?dÄ«ta bloÄ·Ä“tajiem lietotÄ?jiem, kÄ? arÄ« iemesls, kÄ?pÄ“c Å¡is konkrÄ“tais lietotÄ?js ir ticis bloÄ·Ä“ts.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Padomu loga platums");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Padomu loga augstums");
DEFINE('_EW_DESC_TOOLTIP_URL', "Å eit JÅ«s variet ievietot jebkÄ?du URL, lai vizualizÄ“tu apmeklÄ“tÄ?ja IP. {ip} tiks aizvietots ar apmeklÄ“tÄ?ja IP. PiemÄ“ram, http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "JÅ«s variet ievadÄ«t jebkÄ?du URI, kuru vÄ“laties neiekÄ¼aut kopÄ“jÄ? statistikÄ?. JÅ«s variet izmantot daÄ¼Ä“jos apzÄ«mÄ“jumus (wildcards) (* un ?). PiemÄ“ram: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "NorÄ?diet MÄ“rÄ·a nosaukumu. Å¡o nosaukumu JÅ«s redzÄ“siet statistikÄ?.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Viss, kas atrodas aiz JÅ«su domÄ“na nosaukuma. PriekÅ¡ http://www.codegravity.com/projects/ URI ir: /projects/ (PiemÄ“ram izmantojiet: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET mainÄ«gais ir mainÄ«gais, kuru JÅ«s parasti variet redzÄ“t URL pÄ“c ? zÄ«mes vai &amp; zÄ«mes. PiemÄ“ram, http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. Å ajÄ? laukÄ? JÅ«s variet izmantot arÄ« <u>*</u> lai skanÄ“tu visas GET vÄ“rtÄ«bas. (PiemÄ“ram, izmantojiet: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Å eit Jums jÄ?norÄ?da atbilstÄ«ba kÄ?dai no iepriekÅ¡Ä“jÄ? laukÄ? redzamajÄ?m vÄ“rtÄ«bÄ?m. (PiemÄ“ram, izmantojiet: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Diezgan lÄ«dzÄ«gi, taÄ?u mÄ“s pÄ?rbaudÄ?m no formÄ?m iesÅ«tÄ«tÄ?s vÄ“rtÄ«bas. TÄ?pÄ“c, ja JÅ«su mÄ?jaslapÄ? ir forma, kurai ir lauks &lt;input type='text' name='<u>experiences</u>' /&gt;. (PiemÄ“ram, izmantojiet: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "AtbilstÄ«ba POST lauka vÄ“rtÄ«bai. PiemÄ“ram, mÄ“s vÄ“lamies pÄ?rbaudÄ«t, vai lietotÄ?jam ir bijusi saskarsme ar JAVA. (PiemÄ“ram, izmantojiet: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Lapas nosaukums, kuram jÄ?atbilst. (PiemÄ“ram, izmantojiet: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "LietotÄ?ja vÄ?rds, kurÅ¡ ir pieslÄ“dzies. (PiemÄ“ram, izmantojiet: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP adrese no kurienes lietotÄ?js nÄ?k: (PiemÄ“ram, izmantojiet: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL no kurienes lietotÄ?js nÄ?k. (PiemÄ“ram, izmantojiet: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "LietotÄ?js ir pÄ?rvietots uz URL pÄ“c JÅ«su norÄ?dÄ«jumiem. Ir augstÄ?ka prioritÄ?te kÄ? 'blocking': (PiemÄ“ram, izmantojiet: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Cik daudz simbolu ievietot MÄ“rÄ·u tabulÄ?");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Saite uz codegravity.com, JÅ«s variet to atslÄ“gt, taÄ?u mÄ“s bÅ«sim pateicÄ«gi, ja JÅ«s to atstÄ?siet. Paldies");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "AttÄ“lot valstu kopÄ“jo statistiku mÄ?jaslapas modulÄ«. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Ja JÅ«s vÄ“laties mainÄ«t ApmeklÄ“tÄ?ji/Valstis attÄ“loÅ¡anas kÄ?rtÄ«bu mÄ?jaslapÄ?. IzÄ·eksÄ“jiet un ApmeklÄ“tÄ?ji tiks rÄ?dÄ«ti kÄ? pirmie sarakstÄ?.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "AttÄ“lojamo valstu skaits mÄ?jaslapÄ?");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "AttÄ“lot valstu apmeklÄ“tÄ?jus mÄ?jaslapÄ?. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Laiks sekundÄ“s, pÄ“c kura tiks saglabÄ?ts un mÄ?jaslapÄ? attÄ“lots Valstu apmeklÄ“jumu kopskaits");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Laiks sekundÄ“s, pÄ“c kura tiks saglabÄ?ts un mÄ?jaslapÄ? attÄ“lots ApmeklÄ“tÄ?ju kopskaits");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Lai rÄ?dÄ«tu mÄ?jaslapÄ? apmeklÄ“tÄ?jus par: Å¡odienu. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Lai rÄ?dÄ«tu mÄ?jaslapÄ? apmeklÄ“tÄ?jus par: vakardienu. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Lai rÄ?dÄ«tu mÄ?jaslapÄ? apmeklÄ“tÄ?jus par: Å¡onedÄ“Ä¼u. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Lai rÄ?dÄ«tu mÄ?jaslapÄ? apmeklÄ“tÄ?jus par: pagÄ?juÅ¡o nedÄ“Ä¼u. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Lai rÄ?dÄ«tu mÄ?jaslapÄ? apmeklÄ“tÄ?jus par: Å¡o mÄ“nesi. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Lai rÄ?dÄ«tu mÄ?jaslapÄ? apmeklÄ“tÄ?jus par: pagÄ?juÅ¡o mÄ“nesi. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Lai rÄ?dÄ«tu kopÄ“jo apmeklÄ“tÄ?ju skaitu kopÅ¡ ExtraWatch instalÄ?cijas. Ja mainÄ«ts, Å¡is uzstÄ?dÄ«jums mainÄ«sies pÄ“c norÄ?dÄ«tÄ? laika posma uzstÄ?dÄ«jumÄ? CACHE_FRONTEND_...");
DEFINE('_EW_DESC_LANGUAGE', "Izmantojamais valodas fails. Tie atrodas /components/com_extrawatch/lang/. Ja JÅ«s vÄ“laties izveidot jaunu valodas failu, pirmkÄ?rt, pÄ?rbaudiet projekta mÄ?jaslapu, un, ja tur nav Jums nepiecieÅ¡amÄ? tulkojuma, vienkÄ?rÅ¡i nokopÄ“jiet english.php failu un pÄ?rsauciet to savas tulkojamÄ?s valodas nosaukumÄ?, piemÄ“ram, latvian.php un ievietojiet to valodas failu mapÄ“. PÄ“c tam pÄ?rtulkojiet visas labajÄ? pusÄ“ esoÅ¡Ä?s vÄ“rtÄ«bas Å¡ajÄ? failÄ?.");
DEFINE('_EW_DESC_GOALS', "MÄ“rÄ·i Ä¼auj Jums norÄ?dÄ«t specifiskus parametrus. Kad Å¡ie parametri atbilst, mÄ“rÄ·a skaitÄ«tÄ?js tiek palielinÄ?ts. Å Ä?di JÅ«s variet pÄ?rbaudÄ«t, vai lietotÄ?js ir apmeklÄ“jis specifisku URL, izmantojis specifisku vÄ“rtÄ«bu adresÄ“, tam ir specifisks lietotÄ?ja vÄ?rds vai arÄ« tas ir nÄ?cis no specifiskas adreses. Å os lietotÄ?jus JÅ«s variet arÄ« bloÄ·Ä“t vai pÄ?rsÅ«tÄ«t uz specifisku URL.");
DEFINE('_EW_DESC_GOALS_INSERT', "Visos laukos izÅ†emot vÄ?rdu JÅ«s variet izmantot * un ? kÄ? daÄ¼Ä“ju vÄ“rtÄ«bu (wildcards) norÄ?dÄ«tÄ?jus. PiemÄ“ram: ?upa (atbildÄ«s: zupa, pupa, ..),  l*s (atbildÄ«s: ls, lats, lops ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "UzstÄ?diet kÄ? 1, ja JÅ«s vÄ“laties apmeklÄ“tÄ?ju bloÄ·Ä“t. ViÅ†Å¡ neredzÄ“s pÄ?rÄ“jo saturu, tikai ziÅ†u, ka ir bloÄ·Ä“ts - viÅ†Å¡ netiks pÄ?rsÅ«tÄ«ts, bet pievienots 'blocked' statistikai (PiemÄ“ram, izmantojiet: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Valsts nosacÄ«jums");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "2 burtu valsts simbols ar lielajiem burtiem (PiemÄ“ram: <b>LV</b>)");
DEFINE('_EW_STATS_INTERNAL', "IekÅ¡Ä“jÄ?");
DEFINE('_EW_STATS_FROM', "No");
DEFINE('_EW_STATS_TO', "LÄ«dz");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Pievienot mÄ“rÄ·iem");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Pievienot mÄ“rÄ·i Å¡ai valstij");
DEFINE('_EW_MENU_REPORT_BUG', "ZiÅ†ot par kÄ¼Å«du vai jautÄ?t pÄ“c uzlabojuma");
DEFINE('_EW_GOALS_COUNTRY', "Valsts");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Ja JÅ«s vÄ“laties, lai mÄ?jaslapÄ? vastu nosaukumi tiktu attÄ“loti ar lielajiem burtiem (PiemÄ“ram: LATVIJA, LIELBRITÄ€NIJA nevis Latvija, LielbritÄ?nija)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Laiks sekundÄ“s, pÄ“c kura tiks saglabÄ?ts un mÄ?jaslapÄ? attÄ“lots lietotÄ?ju kopskaits");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Kopskaita sÄ?kotnÄ“jÄ? vÄ“rtÄ«ba mÄ?jaslapÄ?. NoderÄ«gi, Ja JÅ«s migrÄ“jiet no cita statistikas rÄ«ka. (piemÄ“ram: 20000). UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju.");
DEFINE('_EW_DESC_IGNORE_USER', "IgnorÄ“t Å¡eit uzrÄ?dÄ«tos lietotÄ?jus. KatrÄ? rindÄ? tikai viens. (PiemÄ“ram: janis {line break} juris_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Å odienas paÅ¡i aktÄ«vÄ?kie lietotÄ?ji no kopÄ“jiem ");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "IeslÄ“gt bloÄ·Ä“Å¡anu pamatojoties uz zemÄ?k redzamo atslÄ“gas vÄ?rdu izmantoÅ¡anu ?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "PaÅ¡i izplatÄ«tÄ?kie SPAMa vÄ?rdi, kurus izmanto boti. JÅ«s variet izmantot nepilnos vÄ?rdus (wildcard) Å¡eit, (PiemÄ“ram: ph?rmac*). Ja Å¡Ä« iespÄ“ja ir ieslÄ“gta, ExtraWatch pÄ?rbaudÄ«s vai potenciÄ?lais uzbrucÄ“js bÅ«s pievienojis mÄ?jaslapai kÄ?du no Å¡iem vÄ?rdiem izmantojot formas ( HTTP POST pieprasÄ«jums). (Darbojas tikai tad, ja forma ielÄ?dÄ“ Joomla-bÄ?zÄ“tu mÄ?jaslapu - forumu, komentÄ?rus, taÄ?u ir Ä¼oti efektÄ«va botu bloÄ·Ä“tÄ?ja, jo tie mÄ“Ä£ina izmantot ikvienu pieejamo formu)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spams");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "Adrese mÄ?jaslapas LietotÄ?ju sadaÄ¼Ä? - Ä¼auj Jums norÄ?dÄ«t URL, kurÅ¡ tiks atvÄ“rts, kad lietotÄ?js spiedÄ«s uz lietotÄ?ja vÄ?rda. JÄ?satur rindiÅ†a {user}, kura tiks aizvietota ar reÄ?lo lietotÄ?ja vÄ?rdu. (PiemÄ“ram, index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "AtslÄ“gas vÄ?rdi");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "MaksimÄ?lo vÄ“rtÄ«bu skaits vÄ“stures sadaÄ¼Ä? (PiemÄ“ram: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "ApmeklÄ“jumu sadaÄ¼Ä? rÄ?dÄ«t tikai pÄ“dÄ“jo apmeklÄ“to lapu nevis visas");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "ApmeklÄ“jumu sadaÄ¼Ä? paslÄ“pt atkÄ?rtojoÅ¡os lappuÅ¡u nosaukumus");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "MaksimÄ?lais apmeklÄ“tÄ?ju skaits, kuru glabÄ?t datubÄ?zÄ“ priekÅ¡ AmeklÄ“jumu VÄ“stures. Esiet uzmanÄ«gi ar Å¡o iestatÄ«jumu, ja Jums ir augsts apmeklÄ“tÄ?ju skaits, Å¡is skaitlis var augt Ä¼oti Ä?tri. VienmÄ“r pÄ?rbaudiet vÄ“stures tabulas izmÄ“ru Statusa sadaÄ¼Ä?");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "PaturÄ“t datubÄ?zes tabulas pÄ“c atinstalÄ“Å¡anas. AtzÄ«mÄ“jiet Å¡o iespÄ“ju, ja JÅ«s veicat versijas atjauninÄ?Å¡anu un vÄ“laties saglabÄ?t iepriekÅ¡Ä“jos datus.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Katru nakti JÅ«s saÅ†emsiet e-pastu ar atskaiti par iepriekÅ¡Ä“jo dienu, kuru varÄ“siet no rÄ«ta izlasÄ«t.");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "E-pasta adrese, uz kuru atskaites nosÅ«tÄ«t");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "E-pasta atskaitÄ“ iekÄ¼aut tikai tÄ?s rindas, kuras ir procentuÄ?li lielÄ?kas par {value}. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "IekÄ¼aut tikai <b>vienas pozitÄ«vas dienas</b> izmaiÅ†as e-pasta atskaitÄ“, kuras augstÄ?kas par {value} procentiem. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "IekÄ¼aut tikai <b>vienas negatÄ«vas dienas</b> izmaiÅ†as e-pasta atskaitÄ“, kuras zemÄ?kas par {value} procentiem. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "IekÄ¼aut tikai <b>septiÅ†u pozitÄ«vu dienu</b> izmaiÅ†as e-pasta atskaitÄ“, kuras augstÄ?kas par {value} procentiem. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "IekÄ¼aut tikai <b>septiÅ†u negatÄ«vu dienu</b> izmaiÅ†as e-pasta atskaitÄ“, kuras zemÄ?kas par {value} procentiem. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "IekÄ¼aut tikai <b>trÄ«sdesmit pozitÄ«vu dienu</b> izmaiÅ†as e-pasta atskaitÄ“, kuras augstÄ?kas par {value} procentiem. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "IekÄ¼aut tikai <b>trÄ«sdesmit negatÄ«vu dienu</b> izmaiÅ†as e-pasta atskaitÄ“, kuras zemÄ?kas par {value} procentiem. UzstÄ?diet 0, ja nevÄ“laties izmantot Å¡o iespÄ“ju <i>(piemÄ“ram: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(funkcionÄ“joÅ¡s PRO versijÄ?)</b> IeslÄ“gt Å¡o iespÄ“ju, ja vÄ“laties, lai logo adrese tiktu renderÄ“ta ar atribÅ«tu rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "MaksimÄ?lais simbolu skaits e-pasta rindas nosaukumÄ?. Izmainiet Å¡o, ja JÅ«su e-pasta klienta ziÅ†ojuma logs ir pÄ?rÄ?k mazs");

DEFINE('_EW_MENU_HISTORY', "VÄ“sture");
DEFINE('_EW_MENU_EMAILS', "E-pasti");
DEFINE('_EW_MENU_STATUS', "Statuss");
DEFINE('_EW_DESC_BLOCKED', "Å Ä«s IP adreses ir bloÄ·Ä“jis anti-spams");


DEFINE('_EW_HISTORY_VISITORS', "ApmeklÄ“tÄ?ju VÄ“sture");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "RÄ?da tikai pÄ“dÄ“jos %d ierakstus.
                Lai mainÄ«tu Å¡o vÄ“rtÄ«bu, ejiet uz UzstÄ?dÄ«jumiem -&gt; VÄ“sture &amp; DarbÄ«da -&gt; HISTORY_MAX_DB_RECORDS . Esiet uzmanÄ«gi, Å¡is iestatÄ«jums ir atbildÄ«gs par attÄ“lojamo datu ielÄ?dÄ“Å¡anas Ä?trumu.  ");
DEFINE('_EW_MENU_BUG', "ZiÅ†ot par kÄ¼Å«du");
DEFINE('_EW_MENU_FEATURE', "PieprasÄ«t papildus iespÄ“ju");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "AtslÄ“gas vÄ?rdi");

DEFINE('_EW_BLOCKING_UNBLOCK', "atbloÄ·Ä“t");
DEFINE('_EW_STATS_KEYPHRASE ', "AtslÄ“gas frÄ?ze");
DEFINE('_EW_STATUS_DATABASE', "DatubÄ?zes statuss");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "tabulas nosaukums");
DEFINE('_EW_STATUS_DATABASE_ROWS', "rindas");
DEFINE('_EW_STATUS_DATABASE_DATA', "dati");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "kopÄ?");

DEFINE('_EW_EMAIL_REPORTS', "E-pasta Atskaites");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Ä¢enerÄ“tÄ?s, filtrÄ“tÄ?s vakardienas e-pasta atsklaites");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "E-pasta VÄ“rtÄ«bu Filtri");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "vÄ“rtÄ«bas");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "procenti");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-dienas izmaiÅ†as");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-dienu izmaiÅ†as");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-dienu izmaiÅ†as");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch Å¡odien ir bloÄ·Ä“jusi %d spameru piekÄ¼uves mÄ“Ä£inÄ?jumus, pavisam: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "BloÄ·Ä“tÄ?s IP Adreses");
DEFINE('_EW_ANTISPAM_SETTINGS', "Anti-Spama UzstÄ?dÄ«jumi");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX atjauninÄ?jumu plÅ«sma");


DEFINE('_EW_HISTORY_PREVIOUS', "ipriekÅ¡Ä“jais");
DEFINE('_EW_HISTORY_NEXT', "nÄ?kamais");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Valstu kolonnu skaits");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Valstu rindu skaits");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "AttÄ“lot vai neattÄ“lot valstu nosaukumus");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "AttÄ“lot karogus vispirms, tad procentus");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET invesais stÄ?voklis");
DEFINE('_EW_GOALS_POST_INVERSED', "POST invesais stÄ?voklis");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Nosaukuma invesais stÄ?voklis");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "LietotÄ?ja vÄ?rda invesais stÄ?voklis");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "NÄ?ca no invesais stÄ?voklis ");

DEFINE('_EW_STATS_MAP', "PÄ“dÄ“jÄ? ApmeklÄ“juma Karte");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "LÅ«dzu ievadiet <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> atslÄ“gu, lai attÄ“lotu pÄ“dÄ“jÄ? apmeklÄ“juma karti:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "uzglabÄ?t atslÄ“gu");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "LÅ«dzu ievadiet derÄ«gu ipinfodb atslÄ“gu, kuru ieguvÄ?t no: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "NEDERÄªGS PIEPRASÄªJUMS: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "SÅ«tÄ«ts no lauki:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL parametri:");
DEFINE('_EW_VISIT_ADD_PAGE', " Pievienot mÄ“rÄ·a lapu");
DEFINE('_EW_VISIT_BLOCK_IP', " BloÄ·Ä“t Å¡o IP Adresi");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Pievienot Å¡o formas  iesÅ«tÄ«to mainÄ«go kÄ? mÄ“rÄ·i");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Pievienot Å¡o URL parametru kÄ? mÄ“rÄ·i");

DEFINE('_EW_TREND_EMPTY', "TukÅ¡s");

DEFINE('_EW_NOT_NUMBER', " UZMANÄªBU: JÅ«su ievadÄ«tÄ? vÄ“rtÄ«ba nav skaitlis. ExtraWatch nespÄ“s pareizi darboties!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Å Ä« ir 15-dienu izmÄ“Ä£inÄ?juma versija. AtlikuÅ¡as: <b>%d</b> dienas. PÄ“rciet pilno <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch versiju savam domÄ“nam</a> kurÄ? iekÄ¼auti arÄ« turpmÄ?kie atjauninÄ?jumi.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " JÅ«su izmÄ“Ä£inÄ?juma versijas ir beigusies. LÅ«dzu iegÄ?dÄ?jieties ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Licence sekmÄ«gi aktivizÄ“ta. Paldies");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>KÄ¼Å«da: licences atslÄ“ga un JÅ«su domÄ“ns nav atbilstoÅ¡i.</b><br/>Vai JÅ«s ievadÄ«jÄ?t to paÅ¡u domÄ“nu aktivizÄ?cijas formÄ?, kuru redziet Å¡eit zemÄ?k? LÅ«dzu sazinieties ar mums: support@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Ja JÅ«s redziet Å¡o paziÅ†ojumu pÄ?rÄ?k ilgi, tad JÅ«su norÄ?dÄ«tÄ? mÄ?jaslapas adrese var bÅ«t nepareiza.
                    Atveriet components/com_extrawatch/config.php
                    noÅ†emiet komentÄ?ru, un iestÄ?diet savu reÄ?lo majaslapas adresi. PiemÄ“ram:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "UZMANÄªBU: mÄ?jaslapa JÅ«su pÄ?rlÅ«kÄ? un lapa konfigurÄ?cijÄ?: %s un %s nesakrÄ«t.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "UzstÄ?diet reÄ?lo majaslapas adresi kÄ?: %s un turpiniet...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "NoÅ†emt zemadresi");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "InformaÄ?ijas sadaÄ¼a");
DEFINE('_EW_ADMINHEADER_FLOW', "PlÅ«sma");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Grafiki");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Komponenti");
DEFINE('_EW_ADMINHEADER_REVIEW', "ApskatÄ«t");
DEFINE('_EW_ADMINHEADER_WRITE', "RakstÄ«t ");

DEFINE('_EW_FLOW_TRAFFIC', "Trafika plÅ«sma");
DEFINE('_EW_FLOW_SELECT_PAGE', "IzvÄ“lÄ“ties lapu:");
DEFINE('_EW_FLOW_OUTG_LINKS', "IzejoÅ¡o bÄ?zes saiÅ¡u skaits:");
DEFINE('_EW_FLOW_NESTING', "lÄ«menis:");
DEFINE('_EW_FLOW_SCALE', "IzmÄ“rs:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Bez-reklÄ?mu versija");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Paldies par JÅ«su ziedojumu!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "JÅ«su domÄ“na %s reÄ£istrÄ?cijas atslÄ“ga: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Tagad JÅ«s variet noÅ†emt zemadresi vai pilnÄ«bÄ? paslÄ“pt ExtraWatch logo no UzstÄ?dÄ«jumiem");


DEFINE('_EW_SIZES_LAST_CHECK', "PÄ“dÄ“jÄ? pÄ?rbaude tika veikta:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Komponenta/moduÄ¼a izmÄ“rs /administratora direktorijÄ?");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Komponents");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "KopÄ?:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "IzmÄ“rs");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "AtjauninÄ?t Visu");

DEFINE('_EW_SIZEDATABASE_TABLE', "Tabula");
DEFINE('_EW_SIZEDATABASE_SIZE', "IzmÄ“rs");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-Dienas IzmaiÅ†as");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-Dienu IzmaiÅ†as");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-Dienu IzmaiÅ†as");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "datu nav");
DEFINE('_EW_SIZEDATABASE_TOTAL', "KopÄ?:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "AtjauninÄ?t visu");
DEFINE('_EW_SIZEMODULES_TOTAL', "KopÄ?:");
DEFINE('_EW_SIZEMODULES_MODULE', "Modulis");
DEFINE('_EW_SIZEMODULES_SIZE', "IzmÄ“rs");

DEFINE('_EW_SIZES_FILES', "Faili &amp; Direktorijas");
DEFINE('_EW_SIZES_BYTES', "baiti");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "AtjauninÄ?t");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &cautortiesÄ«bas;2006-2013 CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "PÄ“dÄ“jÄ? apmeklÄ“juma ipinfodb.com kartes atslÄ“ga: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Force Laika zonas NobÄ«de");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "AtjauninÄ?t");
DEFINE('_EW_MENU_UPDATE_TITLE', "Izveidot rezerves kopiju un AtjauninÄ?t");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Nav pieejams bezmaksas versijÄ?, lÅ«dzu izlasiet licences sadaÄ¼u");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "IeslÄ“gt Spama VÄ?rdu Banu");
DEFINE('_EW_SPAMWORD_LIST', "Spama VÄ?rdu Saraksts");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "PaslÄ“pt AtkÄ?rtojoÅ¡os Nosaukumu");
DEFINE('_EW_TRUNCATE_VISITS', "SaÄ«sinÄ?t ApmeklÄ“jumus");
DEFINE('_EW_TRUNCATE_STATS', "SamazinÄ?t Statistiku");
DEFINE('_EW_TRUNCATE_GOALS', "SamazinÄ?t mÄ“rÄ·us");
DEFINE('_EW_LIMIT_BOTS', "LimitÄ“t Botus");
DEFINE('_EW_LIMIT_VISITORS', "LimitÄ“t ApmeklÄ“tÄ?jus");
DEFINE('_EW_TOOLTIP_WIDTH', "Padoma loga platums");
DEFINE('_EW_TOOLTIP_HEIGHT', "Padoma loga augstums");
DEFINE('_EW_TOOLTIP_URL', "Padoma loga URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "Padoma loga OnClick");
DEFINE('_EW_IP_STATS', "IP statistika");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB atslÄ“ga ");
DEFINE('_EW_ONLY_LAST_URI', "Tikai pÄ“dÄ“jais URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "PaslÄ“pt logo mÄ?jaslapÄ? ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "AtslÄ“gt sekoÅ¡anu mÄ?jaslapÄ?");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "AtslÄ“gt programmas linku mÄ?jaslapÄ?");
DEFINE('_EW_FRONTEND_USER_LINK', "MÄ?jaslapas lietotÄ?ju adreses");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "MÄ?jaslapÄ? pirmÄ?s rÄ?dÄ«t valstis");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Majaslapas valstu naosaukumi");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "MÄ?jaslapas valstu nosaukumus ar lielajiem burtiem");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "MÄ?jaslapÄ? pirmos rÄ?dÄ«t valstu karogus ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "MÄ?jaslapas valstu numuri");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "MÄ?jaslapas valstu maksimÄ?lÄ?s kolonnas");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "MÄ?jaslapas valstu maksimÄ?lÄ?s rindas");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "MÄ?jaslapas Å¡odienas apmeklÄ“tÄ?ji ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "MÄ?jaslapas vakardienas apmeklÄ“tÄ?ji ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "MÄ?jaslapas Å¡Ä«s nedÄ“Ä¼as apmeklÄ“tÄ?ji ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "MÄ?jaslapas pagÄ?juÅ¡Ä?s nedÄ“Ä¼as apmeklÄ“tÄ?ji ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "MÄ?jaslapas Å¡Ä« mÄ“neÅ¡a apmeklÄ“tÄ?ji ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "MÄ?jaslapas pagÄ?juÅ¡Ä? mÄ“neÅ¡a apmeklÄ“tÄ?ji");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "PaslÄ“pt kopÄ“jo mÄ?jaslapu apmeklÄ“tÄ?ju skaitu");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "MÄ?jaslapas kopÄ“jais sÄ?kotnÄ“jais apmeklÄ“tÄ?ju skaits");
DEFINE('_EW_HISTORY_MAX_VALUES', "MaksimÄ?lÄ?s vÄ“stures vÄ“rtÄ«bas");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "VÄ“stures maksimÄ?lie ieraksti");
DEFINE('_EW_UPDATE_TIME_VISITS', "Atjaunot laika apmeklÄ“jumus");
DEFINE('_EW_UPDATE_TIME_STATS', "Atjaunot lika statistiku");
DEFINE('_EW_STATS_MAX_ROWS', "Statistikas maksimÄ?lÄ?s rindas");
DEFINE('_EW_STATS_IP_HITS', "Statistikas IP klikÅ¡Ä·u skaits");
DEFINE('_EW_MAXID_BOTS', "MaksimÄ?lie ID boti");
DEFINE('_EW_MAXID_VISITORS', "Maxid ApmeklÄ“tÄ?ji");
DEFINE('_EW_STATS_KEEP_DAYS', "Statistikas glabÄ?Å¡anas dienu skaits ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "KeÅ¡ot mÄ?jaslapas valstis ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "KeÅ¡ot mÄ?jaslapas apmeklÄ“tÄ?jus ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "AtinstalÄ“t saglabÄ?tos datus ");
DEFINE('_EW_IGNORE_IP', "IgnorÄ“t IP");
DEFINE('_EW_IGNORE_URI', "IgnorÄ“t URI");
DEFINE('_EW_IGNORE_USER', "IgnorÄ“t LietotÄ?ju");
DEFINE('_EW_BLOCKING_MESSAGE', "BloÄ·Ä“Å¡sanas PaziÅ†ojums");
DEFINE('_EW_SERVER_URI_KEY', "Servera URI atslÄ“ga");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "MÄ?jaslapas kopÄ“jais sÄ?kotnÄ“jais apmeklÄ“tÄ?ju skaits");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Ieraksti");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " Lai padarÄ«tu bloÄ·Ä“Å¡anu efektÄ«vÄ?ku, Jums ir jÄ?publicÄ“ ExtraWatch aÄ£ents PIRMS jebkÄ?da satura vai formu publicÄ“Å¡anas. PiemÄ“ram, JÅ«s majaslapas sagataves kreisajÄ? pusÄ“.
                    <br/>
                    Ejiet uz Module Manager -> ExtraWatch agent -> izvÄ“lieties kreisÄ?s puses novietojuma pozÄ«ciju");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Atskaites");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO iknakts e-pasta askaites ieslÄ“gtas");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "NoskatÄ«ties instalÄ?cijas demo");


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

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_WORDPRESS',"Warning: No visits are being recorded. You must go to Appearance->Widgets section, <br/>find ExtraWatchAgent widget and drag&drop it to some of the containers on the right side. <br/>You can publish also other ExtraWatch modules this way. <br/><br/>Check the demonstration video:<br/><br/><iframe id='video-player' width='800' height='468' src='http://www.youtube.com/embed/uu_luBKJ8jI?enablejsapi=1&autoplay=1&rel=0&modestbranding=1&showinfo=0&showsearch=0&vq=hd1080' frameborder='0' allowfullscreen></iframe><br/><br/>In case of any questions about installation or problems, you can take advantage of our support on <a href='http://www.extrawatch.com' target='_blank'>http://www.extrawatch.com</a>");


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
DEFINE('_EW_DOWNLOADS_INCOMPLETE', "The required Information is incomplete");

DEFINE('_EW_STATS_SOCIAL_MEDIA', "Media");
DEFINE('_EW_MENU_AVAILABLE_IN_PRO',"Available in PRO version");
DEFINE('_EW_DOWNLOADS_TOTAL',"Total Downloads");


/** 3.0 - hosted version */
DEFINE('_EW_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");
DEFINE('_EW_DESC_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");

DEFINE('_EW_STATS_DEVICES', "Mobile Devices");

DEFINE('_EW_BLOCKED_BASED_ON_GOAL',"Blocked based on goal no. %s");


DEFINE('_EW_TIME_BETWEEN_VISITS',"Total time spent");
DEFINE('_EW_LEFT_WEBSITE',"Left website");
DEFINE('_EW_MENU_USERS',"Users");
DEFINE('_EW_USERS_BLOCK_IP_CONFIRM',"Do you really want to block this IP address?");
DEFINE('_EW_USERS_SHARING_HEADER',"Users sharing same login");
DEFINE('_EW_USERS_SHARING_DESC',"Contains users who accessed the website from different IP addresses and/or from different country but with same login. This might be a warning for you, that they're sharing their account with someone else.");
DEFINE('_EW_USERS_ACTIVITY_HEADER',"Latest user activity");
define('_EW_DESC_SEO_LIST_ENCRYPTED_KEYWORDS', "Google hides passing particular keywords from google search to websites. This will reveal the keyword's position,<br/> but not the keyword itself. Enable this option if you want to see also position of these encrypted keywords in stats.");

DEFINE('_EW_SEO_MOST_POPULAR_KEYPHRASES',"Most popular keyphrases");
DEFINE('_EW_SEO_MOST_POPULAR_KEYPHRASES_DESC',"These are the keyphrases by which was your website found. You can copy this list and use it with some 3rd party service, which will give you an overview of SERP (Search Engine Rank Position). You can then optimize your website using SEO techniques,	and watch the increase of traffic in right upper side of main dashboard - displayed as a cyan bar");

DEFINE('_EW_USERS_ALERT_EMAIL_SUBJECT',"Alert - user '%s' uses different IP address: '%s'");
DEFINE('_EW_USERS_ALERT_EMAIL_CONTENT',"You can block this user from ExtraWatch Users section");
DEFINE('_EW_MAX_RECORDS',"Displaying max. %d records");

DEFINE('_EW_DESC_USERS_SEND_ALERT_EMAILS',"If checked, you'll get an email once user uses different IP. This can help you to detect immediately, which user shares his login with someone else. Useful, if you're using paid accounts.");
DEFINE('_EW_DESC_SEO_SHOW_ALL_TIME_REPORT', "Do not filter by particular dates, show all time SEO report");

DEFINE('_EW_DOWNLOADS_ALLOW_ONLY_REFERRER', "Allow only when referred from: ");
DEFINE('_EW_DOWNLOADS_ALLOWED_REFERRER', "Allowed Referrer");
DEFINE('_EW_DOWNLOADS_NOT_ALLOWED',"File download restricted by ExtraWatch rule. Please contact: %s");

DEFINE('_EW_DOWNLOADS_EMAIL_RESTRICTED_SUBJECT',"Download restricted for IP: %s");
DEFINE('_EW_DOWNLOADS_EMAIL_RESTRICTED_BODY',"Someone from IP: %s attempted to download file: %s referred from %s, but it's restricted by ExtraWatch download referrer check");

DEFINE('_EW_ADMINHEADER_CLICK_AREAS', "Click Areas");
DEFINE('_EW_NO_TITLE','No Title');
DEFINE('_EW_CLICK_HEATMAP_FOR','Click Heatmap for ');
DEFINE('_EW_CLICK_AREAS_FOR','Clicks Areas for ');

DEFINE('_EW_GOALS_SEND_EMAIL','Send an email');
DEFINE('_EW_DESC_GOALS_SEND_EMAIL','You will get an email everytime the goal has been reached. Email address is taken from "Emails" section.');
DEFINE('_EW_GOAL_EMAIL_SUBJECT', "Goal '%s' was achieved, count: %d");
DEFINE('_EW_VISITS_GOAL_REACHED', " Goal '%s' was reached");

DEFINE('_EW_DOWNLOADS_TOTAL_WEEKLY', "Total weekly");
DEFINE('_EW_ACTIVE', "active");
DEFINE('_EW_DOWNLOAD_PRO', "Download PRO version");
DEFINE('_EW_VISITS_HEATMAP_CLICK_COUNT', "Total clicks today: %d");
DEFINE('_EW_HEATMAP_LOADING','Loading Heatmap table ...');
DEFINE('_EW_ANTISPAM_INVALID_EXTENSION', "Invalid extension type, .csv expected"); 
DEFINE('_EW_ANTISPAM_NUM_IP_FROM_CSV_IMPORTED', "Imported %d IP addresses from .csv file"); 