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

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "©tatistika");
DEFINE('_EW_MENU_GOALS', "Ciele");
DEFINE('_EW_MENU_SETTINGS', "Nastavenia");
DEFINE('_EW_MENU_CREDITS', "Poïakovanie");
DEFINE('_EW_MENU_FAQ', "Èasté otázky");
DEFINE('_EW_MENU_DOCUMENTATION', "Dokumentácia");
DEFINE('_EW_MENU_LICENSE', "Licencia");
DEFINE('_EW_MENU_DONATORS', "Podporovatelia");
DEFINE('_EW_MENU_SUPPORT', "Podporte ExtraWatch a reklamy sa Vám nebudú zobrazova».");

// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "Poslední náv¹tevníci");
DEFINE('_EW_VISITS_BOTS', "Roboti");
DEFINE('_EW_VISITS_CAME_FROM', "Pri¹iel z");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Vá¹ JoomlaWach modul nie je publikovaný. ®iadne ¹tatistiky sa preto nezaznamenávajú. Choïte do sekcie modulov a nastavte pre modul ExtraWatch - publikova» na v¹etkých stránkach");
DEFINE('_EW_VISITS_PANE_LOADING', "Naèítavam...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "©tatistiky náv¹tev pre tý¾deò");
DEFINE('_EW_STATS_WEEK', "Tý¾deò");
DEFINE('_EW_STATS_THIS_WEEK', "tento tý¾deò");
DEFINE('_EW_STATS_UNIQUE', "jedineèné");
DEFINE('_EW_STATS_LOADS', "naèítaní");
DEFINE('_EW_STATS_HITS', "hits");
DEFINE('_EW_STATS_TODAY', "dnes");
DEFINE('_EW_STATS_FOR', "pre");
DEFINE('_EW_STATS_ALL_TIME', "Celé obdobie");
DEFINE('_EW_STATS_EXPAND', "rozbaµ");
DEFINE('_EW_STATS_COLLAPSE', "zabaµ");
DEFINE('_EW_STATS_URI', "Stránky");
DEFINE('_EW_STATS_COUNTRY', "Krajiny");
DEFINE('_EW_STATS_USERS', "Pou¾ívatelia");
DEFINE('_EW_STATS_REFERERS', "Odkazovatelia");
DEFINE('_EW_STATS_IP', "IP adresy");
DEFINE('_EW_STATS_BROWSER', "Prehliadaèe");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "Kµúèové slová");
DEFINE('_EW_STATS_GOALS', "Ciele");
DEFINE('_EW_STATS_TOTAL', "Celkovo");
DEFINE('_EW_STATS_DAILY', "Denne");
DEFINE('_EW_STATS_DAILY_TITLE', "Denné ¹tatistiky");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Celkové ¹tatistiky");
DEFINE('_EW_STATS_LOADING', "naèítavam...");
DEFINE('_EW_STATS_LOADING_WAIT', "naèítavam... prosím èakajte");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "Blokovanie IP adries");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Vlo¾te manuálne IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Vlo¾te IP adresu, ktorú chcete zablokova». (napr. 217.242.11.54 or 217.* alebo 217.242.* pre zablokovanie rozsahu hviezdièkou)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Skutoène prepnú» blokovanie IP");
DEFINE('_EW_STATS_PANE_LOADING', "Naèítavam ¹tatistiky...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "Nastavenia");
DEFINE('_EW_SETTINGS_DEFAULT', "©tandardne");
DEFINE('_EW_SETTINGS_SAVE', "Ulo¾");
DEFINE('_EW_SETTINGS_APPEARANCE', "Vzhµad");
DEFINE('_EW_SETTINGS_FRONTEND', "Vzhµad na stránke");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "História a Výkonnos»");
DEFINE('_EW_SETTINGS_ADVANCED', "Roz¹írené");
DEFINE('_EW_SETTINGS_IGNORE', "Ignorovanie");
DEFINE('_EW_SETTINGS_BLOCKING', "Blokovanie");
DEFINE('_EW_SETTINGS_EXPERT', "Expert");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Skutoène chcete vymaza» v¹etky údaje?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Vyma¾ v¹etky údaje");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Vyma¾ v¹etky ¹tatistické a náv¹tevnícke údaje");
DEFINE('_EW_SETTINGS_LANGUAGE', "Jazyk");
DEFINE('_EW_SETTINGS_SAVED', "Nastavenia boli ulo¾ené");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Pridajte va¹u IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "do zoznamu.");

// Other / mostly general.
DEFINE('_EW_TITLE', "AJAX monitor pre Joomla CMS");
DEFINE('_EW_BACK', "Naspä»");
DEFINE('_EW_ACCESS_DENIED', "Nemáte ¾iadne práva na tento obsah");
DEFINE('_EW_LICENSE_AGREE', "Súhlasím s podmienkami");
DEFINE('_EW_LICENSE_CONTINUE', "Pokraèova»");
DEFINE('_EW_SUCCESS', "Operácia prebehla úspe¹ne");
DEFINE('_EW_RESET_SUCCESS', "V¹etky ¹tatistické údaje a údaje o náv¹tevníkoch boli vymazané");
DEFINE('_EW_RESET_ERROR', "Údaje neboli vymazané, nieèo nevy¹lo");
DEFINE('_EW_CREDITS_TITLE', "Poïakovanie");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Denné a tý¾denné ¹tatistiky pre údaj:");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX prístup odmietnutý: Prosím prezerajte tieto ¹tatistiky z domény, ktorú ste ¹pecifikovali v configuration.php systému joomla - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Mo¾no ste len zabudli zada» www. pred názvom va¹ej domény v prehliadaèi. Javascript skú¹a získa» obsah ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "z");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "èo ho núti myslie» si, ¾e je to iná doména.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "Získajte najnov¹í kód tohto roz¹írenia z");
DEFINE('_EW_HEADER_CAST_YOUR', "Za¹lite svoj");
DEFINE('_EW_HEADER_VOTE', "Hlas");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Kliknite pre otvorenie tooltip okna");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Prejdite my¹ou pre otvorenie tooltip okna");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "vèeraj¹í prírastok");
DEFINE('_EW_TOOLTIP_HELP', "Otvorí online externý help pre");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Zatvor toto okno");
DEFINE('_EW_TOOLTIP_PRINT', "Tlaè");

// Goals.
DEFINE('_EW_GOALS_INSERT', "Pridaj nový cieµ");
DEFINE('_EW_GOALS_UPDATE', "Uprav cieµ èíslo");
DEFINE('_EW_GOALS_ACTION', "Akcia");
DEFINE('_EW_GOALS_TITLE', "Nový cieµ");
DEFINE('_EW_GOALS_NEW', "Nový cieµ");
DEFINE('_EW_GOALS_RELOAD', "Obnov");
DEFINE('_EW_GOALS_ADVANCED', "Roz¹írené");
DEFINE('_EW_GOALS_NAME', "Meno");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI podmienka");
DEFINE('_EW_GOALS_GET_VAR', "GET premenná");
DEFINE('_EW_GOALS_GET_CONDITION', "GET podmienka");
DEFINE('_EW_GOALS_POST_VAR', "POST premenná");
DEFINE('_EW_GOALS_POST_CONDITION', "POST podmienka");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Title podmienka");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Username podmienka");
DEFINE('_EW_GOALS_IP_CONDITION', "IP podmienka");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "'Pri¹iel z adresy..' podmienka");
DEFINE('_EW_GOALS_BLOCK', "Blokuj");
DEFINE('_EW_GOALS_REDIRECT', "Presmeruj na URL");
DEFINE('_EW_GOALS_HITS', "Hits");
DEFINE('_EW_GOALS_ENABLED', "Povolené");
DEFINE('_EW_GOALS_EDIT', "Uprav");
DEFINE('_EW_GOALS_DELETE', "Vyma¾");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Stratíte v¹etky doteraj¹ie ¹tatistické dáta pre tento cieµ. Chcete naozaj vymaza» cieµ èíslo ");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Krajiny");
DEFINE('_EW_FRONTEND_VISITORS', "Náv¹tevníci");
DEFINE('_EW_FRONTEND_TODAY', "Dnes");
DEFINE('_EW_FRONTEND_YESTERDAY', "Vèera");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Tento tý¾deò");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Minulý tý¾deò");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Tento mesiac");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Minulý mesiac");
DEFINE('_EW_FRONTEND_TOTAL', "Celkovo");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch je v debug móde. Touto cestou viete zisti» príèiny chýb. Pre vypnutie, zmeòte prosím hodnotu EXTRAWATCH_DEBUG v /components/com_extrawatch/config.php z 1 na 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Maximálny poèet riadkov údajov po rozbalení v ¹tatistike");
DEFINE('_EW_DESC_STATS_IP_HITS', "V¹etky IP adresy, ktoré majú menej hitov predchádzajúci deò ako daná hodnota budú vymazané z histórie IP adries.");
DEFINE('_EW_DESC_STATS_URL_HITS', "V¹etky URL, ktoré majú menej hitov predchádzajúci deò ako daná hodnota budú vymazané z histórie URL.");
DEFINE('_EW_DESC_IGNORE_IP', "Ignoruj dané IP adresy v ¹tatistike. Oddeµte novým riadkom. Mô¾te pou¾i» hviezdièky. <br/>Napríklad. 192.* bude ignorova» 192.168.51.31, 192.168.16.2, atï..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Doba obnovovania náv¹tevníkov v µavom paneli v milisekundách, ¹tandardne 2000, buïte opatrní s týmto nastavením. Pre prejavenie úèinku, znovu naèítajte administraèné rozhranie ExtraWatch-u.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Doba obnovovania ¹tatistík v pravom paneli v milisekundách, ¹tandardne 2000, buïte opatrní s týmto nastavením. Pre prejavenie úèinku, znovu naèítajte administraèné rozhranie ExtraWatch-u.");
DEFINE('_EW_DESC_MAXID_BOTS', "Koµko záznamov robotov uchováva» v databáze.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Koµko záznamov náv¹tevníkov uchováva» v databáze.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Koµko záznamov robotov uvidíte v µavom paneli v administraènom rozhraní.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Koµko záznamov reálnych náv¹tevníkov uvidíte v µavom paneli v administraènom rozhraní.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Maximum znakov ktoré budú zobrazené pre dlhé titulky a URI adresy");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Maximum znakov ktoré budú zobrazené pre dlhé titulky v pravom ¹tatistickom paneli");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Poèet dní, za ktoré uchováva» celkovú históriu ¹tatistík v databáze. 0 = nekoneèno.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Ak ste v inom èasovom pásme ako vá¹ server na ktorom hostujete stránky. (Zadajte kladné alebo záporné èíslo ako rozdiel èasového pásma)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Posun vrámci tý¾dòa, timestamp/(3600*24*7) vracia èíslo tý¾dòa od 1.1.1970, tento posun je korekcia, aby tý¾deò zaèínal pondelkom. V normálnych prípadoch nie je potrebné meni».");
DEFINE('_EW_DESC_DAY_OFFSET', "Posun vrámci dòa, timestamp/(3600*24) vracia èíslo dòa od 1.1.1970, tento posun je korekcia, aby deò zaèínal o 00:00. V normálnych prípadoch nie je potrebné meni».");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Pre nahradenie loga ExtraWatch neviditeµným logom na stránkach");
DEFINE('_EW_DESC_IP_STATS', "Pou¾íva» aj IP adresy v ¹tatistikách. V niektorých krajinách sa IP adresa pova¾uje za osobný údaj. Pou¾ívajte na vlastné riziko.");
DEFINE('_EW_DESC_HIDE_ADS', "This setting hides the ads in the backend, if they really annoy you. By keeping them, you support the further development of this tool. Thank you");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Nastavte na neza¹krtnuté, ak chcete zobrazova» okná grafov a máp po prejdení kurzorom nad danými ikonkami, namiesto kliknutia.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "©tandardne je toto nastavenie 'REDIRECT_URL', ak pou¾ívate url rewriting, mô¾te nastavi» aj na 'SCRIPT_URL' ak sa vo va¹ich ¹tatistikách zobrazuje len index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Správa, ktorá je zobrazená zablokovaným pou¾ívateµom, alebo ïal¹ie informácie z akého dôvodu ste daných pou¾ívateµov zablokovali.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "©írka tooltip okna");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Vý¹ka tooltip okna");
DEFINE('_EW_DESC_TOOLTIP_URL', "Mo¾te tu da» µubovoµnú adresu, pre vizualizáciu IP adresy náv¹tevníka. {ip} bude nahradené aktuálnou IP adresou pou¾ívateµa. Príklad: http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "You can type any URI you want to be ignored from stats. You can use wildcards (* and ?) here. Napr. : /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "©pecifikujte meno cieµa. Toto meno následne uvidíte v ¹tatistikách.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "To, èo sa nachádza hneï za adresou va¹ej domény. Pre http://www.codegravity.com/projects/ je URI: /projects/ (Príklad: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET premenná je zvyèajne to, èo vidíte v URL zvyèajne za znakom ? alebo &amp; znakom. Napr: http://www.codegravity.com/index.php?<u>meno</u>=peter&amp;<u>priezvisko</u>=smith. Mô¾te tie¾ pou¾i» <u>*</u> v tomto políèku pre prejdenie v¹etkých get premenných. (Príklad: <b>m*no</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Tu mô¾te ¹pecifikova» èomu sa má rovna» premenná z predchádzajúceho poµa. (Príklad: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Celkom podobne, ale zis»ujeme hodnoty zadané do formulárov. Teda, ak máte na stránke formulár, ktorý má vstupné pole &lt;input type='text' name='<u>skusenosti</u>' /&gt;. (Príklad: <b>sk*enosti</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Hodnota, ktorej sa má rovna» premenná z predch. POST poµa. Napr. Chceme zisti», èí pou¾ívateµ do formulára zadal v poli skusenosti hodnotu java. (Príklad: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Titulok stránky ktorý sa má zhodova». (Príklad: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Meno prihláseného pou¾ívateµa, na ktorého sa cieµ vz»ahuje. (Príklad: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP ktorá pochádza z adresy: (Príklad: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL adresa z ktorej pri¹iel daný náv¹tevník. (Príklad: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Ak sú naplnené horeuvedené podmienky, mô¾ete pou¾ívateµa presmerova» danú vami zvolenú adresu. Má vy¹¹iu prioritu ako 'blokovanie': (Príklad: <b>http://www.codegravity.com/chod-prec.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Koµko znakov maximálne ukazova» v tabuµke cieµov pre dlhé názvy");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Spätný odkaz na codegravity.com, mô¾ete toto nastavenie zmeni», no budeme vïaèní ak ho ponecháte.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Zobraz celkové ¹tatistiky v module na stránka. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Ak chcete prehodi» poradie Náv¹tevníci/Krajiny v module na stránke. Od¹krtnite to, a ¹tatistika Náv¹tevníci sa bude zobrazova» ako prvá, za òou Krajiny.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Poèet krajín ktoré si prajete ukazova» v module na stránkach");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Zobraz krajiny vmodule na stránkach. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Èas v sekundách ako èasto sa majú obnovova» ¹tatistiky krajín v module na stránkach");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Èas v sekundách ako èasto sa majú obnovova» ¹tatistiky náv¹tevníkov v module na stránkach");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Zobraz náv¹tevníkov na stránke pre: dnes. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Zobraz náv¹tevníkov na stránke pre: vèera. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Zobraz náv¹tevníkov na stránke pre: tento vý¾deò. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Zobraz náv¹tevníkov na stránke pre: minulý tý¾deò. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Zobraz náv¹tevníkov na stránke pre: tento mesiac. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Zobraz náv¹tevníkov na stránke pre: minulý mesiac. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Zobraz náv¹tevníkov celkovo od in¹talácie ExtraWatch. Ak nastavenie zmeníte, musíte poèka» èas uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_LANGUAGE', "Jazykový súbor ktorý sa pou¾ije. Jazykové súbory sú umiestnené v /components/com_extrawatch/lang/. Ak chcete prida» nový jazyk, najprv sa presvedète èi sa u¾ nenachádza na stránkach tohto projektu. Ak tam nie je, skopírujte ¹tandardný english.php napríklad na mojjazyk.php a umiestnite do daného adresára. Následne prelo¾te v¹etky názvy vpravo. Najle¹ie keï pou¾ijete kódovanie UTF-8");
DEFINE('_EW_DESC_GOALS', "Ciele vám umo¾òujú zada» ¹peciálne parametre. Ak tieto parametre súhlasia, poèítadlo daného cieµa je zvý¹ené. Týmto spôsobom mô¾te monitorovaè, èi náv¹tevník nav¹tívil ¹pecifickú URI, poslal ¹pecifickú hodnotu vo formulári, má ¹pecifické pou¾ívateµské meno, alebo pri¹iel z niektorej adresy. Mô¾ete takéhoto náv¹tevníka zablokova», alebo presmerova» na ¹peciálnu URL adresu.");
DEFINE('_EW_DESC_GOALS_INSERT', "Vo v¹etkých poliach okrem mena mô¾ete pou¾íva» znaky * a ?. Napríklad: ?ear (obsiahne: near, tear, ..),  p*r (obsiahne: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "Nastavte na 1, ak si ¾eláte aby bol náv¹tevník ktorý vyhovuje kritériám blokovaný. Nebude vidie» zbytok obsahu stránok, iba správu o jeho blokovaní - bez presmerovania, a jeho IP adresa bude pridaná do zoznamu blokovaných adries v ¹tatistike (Príklad: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Country podmienka");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "Dvojpísmenový kód krajiny (Napr.: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "Pohyb na stránke");
DEFINE('_EW_STATS_FROM', "Z");
DEFINE('_EW_STATS_TO', "Do");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Pridaj ku gólom");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Pridaj gól pre túto krajinu");
DEFINE('_EW_MENU_REPORT_BUG', "Ohlás chybu alebo návrh");
DEFINE('_EW_GOALS_COUNTRY', "Krajina");

/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Ak chcete, aby sa názvy krajín zobrazovali na stránkach s v¹etkými veµkými písmenami (Napr.: GERMANY, UNITED KINGDOM namiesto Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Èas v sekundách ako èasto sa majú obnovova» ¹tatistiky pou¾ívateµov v module na stránkach");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Poèiatoèná hodnota 'Celkovo:' na stránkach. U¾itoèné, keï ste migrovali z iného ¹tatistického nástroja. (Napr.: 20000). Nastavte naspä» na 0 ak nechcete pou¾íva» túto vlastnos».");
DEFINE('_EW_DESC_IGNORE_USER', "Ignoruj pou¾ívateµov z tohto textbox-u. Pou¾ívateµské meno na riadok. (Napr.: myself {nový riadok} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Najaktívnej¹í pou¾ívatelia za dnes z celkového poètu");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Povoli» blokovanie na základe listu spam slov zobrazeného ni¾¹ie?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "Najpou¾ívatej¹ie spam slové pou¾ívané spam robotmi. Mô¾te pou¾i» * a ?. (Napr.: ph?rmac*). Ak nastavenie hore je povolené, ExtraWatch bude zis»ova», èi útoèník odoslal formulár (HTTP POST po¾iadavka) na va¹ej stránke s niektorým z týchto slov. (Vz»ahuje sa len na Joomla stránky - fórum, komentáre, no je to celkom efektívny spôsob eliminova» spam robotov, ktorí skú¹ajú odosla» ka¾dý mo¾ný formulár)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "A link in the frontend Users module - allows you to specify an URL, which is open when the user clicks the user name. Must contain the string {user}, which will be replaced by the actual user name. (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Kµúèové slová");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Maximum poèet náv¹tev v histórii(Príklad: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "V náv¹tevách, uká¾ v¾dy iba poslednú stránku, nie v¹etky");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "V náv¹tevách, skry opakujúci sa titulok stránky");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Maximum poètu náv¹tev, ktoré dr¾a» v databáze pre zálo¾ku História. Buïte opatrní s týmto nastavením, ak máte veµmi nav¹tevovanú stránku.");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Necháva» dáta v tabuµkách pri odin¹talovaní. Za¹krtnite túto mo¾nos», ak robíte napríklad prechod na vy¹¹iu verziu a nechcete prís» o svoje dáta.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Dostanete noèné emailové reporty za predchádzajúci deò, ktoré si mô¾ete preèíta» ráno");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Emailová adresa na ktorú zasiela» tieto emailové reporty");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Do emailových reportov zahrnú» iba riadky, kde percentuálna hodnota je vy¹¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Do emailových reportov zahrnú» iba riadky, kde pozitívna percentuálna hodnota pre jednodòovú zmenu je vy¹¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Do emailových reportov zahrnú» iba riadky, kde negatívna percentuálna hodnota pre jednodòovú zmenu je ni¾¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: -5)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Do emailových reportov zahrnú» iba riadky, kde pozitívna percentuálna hodnota pre sedemdòovú zmenu je vy¹¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Do emailových reportov zahrnú» iba riadky, kde negatívna percentuálna hodnota pre sedemdòovú zmenu je ni¾¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: -5)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Do emailových reportov zahrnú» iba riadky, kde pozitívna percentuálna hodnota pre dvadsa»osemdòovú zmenu je vy¹¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Do emailových reportov zahrnú» iba riadky, kde negatívna percentuálna hodnota pre dvadsa»osemdòovú zmenu je ni¾¹ia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazova» v¹etky záznamy <i>(Príklad: -5)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(funkèné v PRO verzii)</b> Povoµte, ak chcete vidie» logo ExtraWatch na va¹ich stránkach s atribútom rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Maximum znakov riadku pre emailový report. Zmeòte toto nastavenie, ak okno vá¹ho emailového klienta je príli¹ úzke");

DEFINE('_EW_MENU_HISTORY', "História");
DEFINE('_EW_MENU_EMAILS', "Emaily");
DEFINE('_EW_MENU_STATUS', "Status");
DEFINE('_EW_DESC_BLOCKED', "Tieto IP adresy boli blokované anti-spamom");


DEFINE('_EW_HISTORY_VISITORS', "História náv¹tev");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Ukáza» len %d záznamov.
                Pre zmenenie tejto hodnoty, choïte do nastavení -&gt; História &amp; Výkonnos» -&gt; 'Maximum poètu náv¹tev'. Toto nastavenie má vplyv na rýchlos» naèítavania dát.");
DEFINE('_EW_MENU_BUG', "Vyreportujte chybu");
DEFINE('_EW_MENU_FEATURE', "Navrhnite novú funkcionalitu");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Kåúèové slová");

DEFINE('_EW_BLOCKING_UNBLOCK', "odblokuj");
DEFINE('_EW_STATS_KEYPHRASE ', "Kåúèové slová");
DEFINE('_EW_STATUS_DATABASE', "Status databázy");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "názov tabuµky");
DEFINE('_EW_STATUS_DATABASE_ROWS', "riadky");
DEFINE('_EW_STATUS_DATABASE_DATA', "dáta");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "celkovo");

DEFINE('_EW_EMAIL_REPORTS', "Emailové reporty");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Generovaná filtrované email reporty zo v¹eraj¹ka");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Filtre v emailových adresách");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "hodnota");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "percento");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-dòová zmena");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-dòová zmena");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-dòová zmena");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch zaoblokoval %d spam pokusov dnes, celkovo: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Zablokované IP adresy");
DEFINE('_EW_ANTISPAM_SETTINGS', "Anti-Spam nastavenia");
DEFINE('_EW_TRAFFIC_AJAX', "dáta prenesené AJAX updatmi");


DEFINE('_EW_HISTORY_PREVIOUS', "predchádzajúce");
DEFINE('_EW_HISTORY_NEXT', "nasledujúce");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Poèet ståpcov vlajok krajín na stránke");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Poèet riadkov vlajok krajín na stránke");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Zobrazova» mená flajok krajín");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Zobraz vlajky krajín ako prvé, a¾ tak percentá");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "negácia podmienky parametru z premenných poslaných cez HTTP GET");
DEFINE('_EW_GOALS_POST_INVERSED', "negácia podmienky parametru z premenných poslaných cez HTTP POST");
DEFINE('_EW_GOALS_TITLE_INVERSED', "negácia podmienky Názov stránky");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "negácia podmienky Pou¾ívateµské meno");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "negácia podmienky Pri¹iel z ...");

DEFINE('_EW_STATS_MAP', "Mapa poslednej náv¹tevy");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Prosím vlo¾te <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> aktivaèný kµúè pre zobrazenie mapy:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "ulo¾");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Prosím zadajte platný ipinfodb kµúè, ktorý ste získali z: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "ZLÁ PO®IADAVKA: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Dáta poslané z formulára:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL parametre:");
DEFINE('_EW_VISIT_ADD_PAGE', " Pridaj stránku ako cieµ");
DEFINE('_EW_VISIT_BLOCK_IP', " Blokuj túto IP adresu");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Pridaj túto hodnotu poslanú z formulára ako cieµ");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Pridaj tento URL parameter ako cieµ");

DEFINE('_EW_TREND_EMPTY', "Prázdne");

DEFINE('_EW_NOT_NUMBER', " UPOZORNENIE: Hodnota ktorú ste zadali, nie je èíslo. ExtraWatch nebude fungova» korektne!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Toto je 15-dòová skú¹obná verzia. Poèet dní do konca: <b>%d</b>. Prosím objednajte si celo¾ivotnú licenciu na <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch licencia pre va¹u doménu</a> pre túto a nasledujúce verzie.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Va¹a trial verzia expirovala. Prosím kúpte si licenciu");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Licencia aktivovaná úspe¹ne. Ïakujeme");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Chyba: licenèné kµúè a va¹a doména sa nezhodujú.</b><br/>
Naozaj ste vlo¾ili správny názov domény do aktivaèného dialógu? Prosím kontaktujte: info@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Ak vidíte túto správu príli¹ dlho, nastavenie va¹ej domény mô¾e by» nesprávne.
                    Otvorte components/com_extrawatch/config.php
                    odkomentujte, a zmeòte názov va¹ej domény. Eg.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Upozornenie: stránka vo va¹om browseri %s a v konfigurácii %s sa nezohodujú.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Nastavte doménu na: %s a pokraèujte...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Odstráni» spätný odkaz");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Báza znalostí");
DEFINE('_EW_ADMINHEADER_FLOW', "Tok náv¹tev");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Grafy");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Komponenty");
DEFINE('_EW_ADMINHEADER_REVIEW', "Posudok");
DEFINE('_EW_ADMINHEADER_WRITE', "Napí¹te ");

DEFINE('_EW_FLOW_TRAFFIC', "Tok náv¹tev");
DEFINE('_EW_FLOW_SELECT_PAGE', "Zvoµte stránku:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Max. poèet liniek z ka¾dej stránky:");
DEFINE('_EW_FLOW_NESTING', "Level vnorenia:");
DEFINE('_EW_FLOW_SCALE', "©kála:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Verzia bez reklám");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Ïakujeme vám za vá¹ príspevok!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Registraèný kµúè pre va¹u doménu %s je: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Teraz mô¾te skry» ExtraWatch logo na stránke z nastavení");

DEFINE('_EW_SIZES_LAST_CHECK', "Posledná kontrola bola vykonaná:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Veµkos» komponentu/modulu v /administrator adresári");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Komponent");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Celkovo:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Veµkos»");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Obnovi» v¹etko");

DEFINE('_EW_SIZEDATABASE_TABLE', "Tabuµka");
DEFINE('_EW_SIZEDATABASE_SIZE', "Veµkos»");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-dòová zmena");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-dòová zmena");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-dòová zmena");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "¾iadne dáta");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Celkovo:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Obnovi» v¹etko");
DEFINE('_EW_SIZEMODULES_TOTAL', "Celkovo:");
DEFINE('_EW_SIZEMODULES_MODULE', "Modul");
DEFINE('_EW_SIZEMODULES_SIZE', "Veµkos»");

DEFINE('_EW_SIZES_FILES', "Súbory a adresáre");
DEFINE('_EW_SIZES_BYTES', "bajty");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Obnovi»");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-@YEAR@ by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Aktivaèný kµúè pre mapu poslednej náv¹tevy z : <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Nastav nasilu rozdiel èasových pásiem");

/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Aktualizuj");
DEFINE('_EW_MENU_UPDATE_TITLE', "Zálohuj a obnov");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Nefunkèné vo free verzii, prosím pozrite si zálo¾ku licencií");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Blokuj na základe nevhodných slov");
DEFINE('_EW_SPAMWORD_LIST', "Zoznam nevhodných slov");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Skry opakujúce s titulky stránok");
DEFINE('_EW_TRUNCATE_VISITS', "Skracuj slová ná¹tev");
DEFINE('_EW_TRUNCATE_STATS', "Skracuj slová ¹tatistiky");
DEFINE('_EW_TRUNCATE_GOALS', "Skracuj ciele");
DEFINE('_EW_LIMIT_BOTS', "Max. poèet robotov");
DEFINE('_EW_LIMIT_VISITORS', "Max. poèet náv¹tev");
DEFINE('_EW_TOOLTIP_WIDTH', "©írka vyskakujúceho okna");
DEFINE('_EW_TOOLTIP_HEIGHT', "Vý¹ka vyskakujúceho okna");
DEFINE('_EW_TOOLTIP_URL', "URL Adresa vyskakovacieho okna");
DEFINE('_EW_TOOLTIP_ONCLICK', "Otvori» vyskakovacie okno pri kliku");
DEFINE('_EW_IP_STATS', "¹tatistiky IP adries");
DEFINE('_EW_IPINFODB_KEY', "Kµúè z ipinfodb.com");
DEFINE('_EW_ONLY_LAST_URI', "Iba posledné URI");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Skry logo na stránkach ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "No Follow pre linku na stránkach");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "®iadny spätný odkaz na stránkach");
DEFINE('_EW_FRONTEND_USER_LINK', "Linka na detail pou¾ívateµa z modulu registrovaných pou¾ívateµov");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "vlajky krajín ako prvé");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "zobrazova» mená vlajok krajín");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "mená vlajok krajín veµkými písmenami");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "vlajky krajín ako prvé");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "poèet vlajok krajín");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "maximálny poèet ståpcov vlajok krajín");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "maximálny poèet riadkov vlajok krajín");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "poèet náv¹tevníkov dnes ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "poèet náv¹tevníkov vèera ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "poèet náv¹tevníkov tento tý¾deò ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "poèet náv¹tevníkov minulý tý¾deò ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "poèet náv¹tevníkov tento mesiac");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "poèet náv¹tevníkov minulý mesiac");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "poèet náv¹tevníkov celkovo");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "poèet náv¹tevníkov - úvodné èíslo");
DEFINE('_EW_HISTORY_MAX_VALUES', "Max. hodnoty v histórii");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "Max. poèet záznamov v histórii");
DEFINE('_EW_UPDATE_TIME_VISITS', "Poèet sekúnd obnovovania náv¹tev v reálnom èase");
DEFINE('_EW_UPDATE_TIME_STATS', "Poèet sekúnd obnovovania ¹tatistík v reálnom èase");
DEFINE('_EW_STATS_MAX_ROWS', "Max. poèet riadkov v ¹tatistike");
DEFINE('_EW_STATS_IP_HITS', "Zobrazova» IP adresy v ¹tatistike");
DEFINE('_EW_MAXID_BOTS', "Max. poèet robotov");
DEFINE('_EW_MAXID_VISITORS', "Max. poèet náv¹tevníkov");
DEFINE('_EW_STATS_KEEP_DAYS', "Max. poèet dní pre ktoré uchováva» ¹tatistiky");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Poèet sekúnd pre ke¹ovanie vlajok krajín na stránkach");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Poèet sekúnd pre ke¹ovanie náv¹tevníkov na stránkach");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Ponecha» dáta po odin¹talovaní");
DEFINE('_EW_IGNORE_IP', "Ignoruj IP adresu");
DEFINE('_EW_IGNORE_URI', "Ignoruj URI (stránku)");
DEFINE('_EW_IGNORE_USER', "Ignoruj pou¾ívateµa");
DEFINE('_EW_BLOCKING_MESSAGE', "Správa zobrazená keï je pou¾ívateµ zablokovaný");
DEFINE('_EW_SERVER_URI_KEY', "parameter PHP premennej SERVER odkiaµ sa berie adresa URI");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "poèet náv¹tevníkov - úvodné èíslo");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Záznamy");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " Aby blokovanie fungovalo, musíte ExtraWatch agent modul umiestni» do pozície pred va¹ím obsahom.
Napríklad na µavej strane va¹ej ¹ablóny
                    <br/>
                    Choïte do Module Manager -> ExtraWatch agent -> zvoµte pozíciu left");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Reporty");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO Noèné emaily povolené");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Pozrite si in¹talaèné demo");

/** JW 1.2.18 */
DEFINE('_EW_ADMINHEADER_HEATMAP', "Clicks");
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

