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

defined('_JEXEC') or die('Restricted access');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "Štatistika");
DEFINE('_EW_MENU_GOALS', "Ciele");
DEFINE('_EW_MENU_SETTINGS', "Nastavenia");
DEFINE('_EW_MENU_CREDITS', "Po�?akovanie");
DEFINE('_EW_MENU_FAQ', "Časté otázky");
DEFINE('_EW_MENU_DOCUMENTATION', "Dokumentácia");
DEFINE('_EW_MENU_LICENSE', "Licencia");
DEFINE('_EW_MENU_DONATORS', "Podporovatelia");
DEFINE('_EW_MENU_SUPPORT', "Podporte ExtraWatch a reklamy sa Vám nebudú zobrazovať.");

// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "Poslední návštevníci");
DEFINE('_EW_VISITS_BOTS', "Roboti");
DEFINE('_EW_VISITS_CAME_FROM', "Prišiel z");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Váš JoomlaWach modul nie je publikovaný. Žiadne štatistiky sa preto nezaznamenávajú. Cho�?te do sekcie modulov a nastavte pre modul ExtraWatch - publikovať na všetkých stránkach");
DEFINE('_EW_VISITS_PANE_LOADING', "Na�?ítavam...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "Štatistiky návštev pre týždeň");
DEFINE('_EW_STATS_WEEK', "Týždeň");
DEFINE('_EW_STATS_THIS_WEEK', "tento týždeň");
DEFINE('_EW_STATS_UNIQUE', "jedine�?né");
DEFINE('_EW_STATS_LOADS', "na�?ítaní");
DEFINE('_EW_STATS_HITS', "hits");
DEFINE('_EW_STATS_TODAY', "dnes");
DEFINE('_EW_STATS_FOR', "pre");
DEFINE('_EW_STATS_ALL_TIME', "Celé obdobie");
DEFINE('_EW_STATS_EXPAND', "rozbaľ");
DEFINE('_EW_STATS_COLLAPSE', "zabaľ");
DEFINE('_EW_STATS_URI', "Stránky");
DEFINE('_EW_STATS_COUNTRY', "Krajiny");
DEFINE('_EW_STATS_USERS', "Používatelia");
DEFINE('_EW_STATS_REFERERS', "Odkazovatelia");
DEFINE('_EW_STATS_IP', "IP adresy");
DEFINE('_EW_STATS_BROWSER', "Prehliada�?e");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "Kľú�?ové slová");
DEFINE('_EW_STATS_GOALS', "Ciele");
DEFINE('_EW_STATS_TOTAL', "Celkovo");
DEFINE('_EW_STATS_DAILY', "Denne");
DEFINE('_EW_STATS_DAILY_TITLE', "Denné štatistiky");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Celkové štatistiky");
DEFINE('_EW_STATS_LOADING', "na�?ítavam...");
DEFINE('_EW_STATS_LOADING_WAIT', "na�?ítavam... prosím �?akajte");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "Blokovanie IP adries");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Vložte manuálne IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Vložte IP adresu, ktorú chcete zablokovať. (napr. 217.242.11.54 or 217.* alebo 217.242.* pre zablokovanie rozsahu hviezdi�?kou)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Skuto�?ne prepnúť blokovanie IP");
DEFINE('_EW_STATS_PANE_LOADING', "Na�?ítavam štatistiky...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "Nastavenia");
DEFINE('_EW_SETTINGS_DEFAULT', "Štandardne");
DEFINE('_EW_SETTINGS_SAVE', "Ulož");
DEFINE('_EW_SETTINGS_APPEARANCE', "Vzhľad");
DEFINE('_EW_SETTINGS_FRONTEND', "Vzhľad na stránke");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "História a Výkonnosť");
DEFINE('_EW_SETTINGS_ADVANCED', "Rozšírené");
DEFINE('_EW_SETTINGS_IGNORE', "Ignorovanie");
DEFINE('_EW_SETTINGS_BLOCKING', "Blokovanie");
DEFINE('_EW_SETTINGS_EXPERT', "Expert");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Skuto�?ne chcete vymazať všetky údaje?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Vymaž všetky údaje");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Vymaž všetky štatistické a návštevnícke údaje");
DEFINE('_EW_SETTINGS_LANGUAGE', "Jazyk");
DEFINE('_EW_SETTINGS_SAVED', "Nastavenia boli uložené");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Pridajte vašu IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "do zoznamu.");

// Other / mostly general.
DEFINE('_EW_TITLE', "AJAX monitor pre Joomla CMS");
DEFINE('_EW_BACK', "Naspäť");
DEFINE('_EW_ACCESS_DENIED', "Nemáte žiadne práva na tento obsah");
DEFINE('_EW_LICENSE_AGREE', "Súhlasím s podmienkami");
DEFINE('_EW_LICENSE_CONTINUE', "Pokra�?ovať");
DEFINE('_EW_SUCCESS', "Operácia prebehla úspešne");
DEFINE('_EW_RESET_SUCCESS', "Všetky štatistické údaje a údaje o návštevníkoch boli vymazané");
DEFINE('_EW_RESET_ERROR', "Údaje neboli vymazané, nie�?o nevyšlo");
DEFINE('_EW_CREDITS_TITLE', "Po�?akovanie");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Denné a týždenné štatistiky pre údaj:");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX prístup odmietnutý: Prosím prezerajte tieto štatistiky z domény, ktorú ste špecifikovali v configuration.php systému joomla - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Možno ste len zabudli zadať www. pred názvom vašej domény v prehliada�?i. Javascript skúša získať obsah ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "z");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "�?o ho núti myslieť si, že je to iná doména.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "Získajte najnovší kód tohto rozšírenia z");
DEFINE('_EW_HEADER_CAST_YOUR', "Zašlite svoj");
DEFINE('_EW_HEADER_VOTE', "Hlas");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Kliknite pre otvorenie tooltip okna");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Prejdite myšou pre otvorenie tooltip okna");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "v�?erajší prírastok");
DEFINE('_EW_TOOLTIP_HELP', "Otvorí online externý help pre");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Zatvor toto okno");
DEFINE('_EW_TOOLTIP_PRINT', "Tla�?");

// Goals.
DEFINE('_EW_GOALS_INSERT', "Pridaj nový cieľ");
DEFINE('_EW_GOALS_UPDATE', "Uprav cieľ �?íslo");
DEFINE('_EW_GOALS_ACTION', "Akcia");
DEFINE('_EW_GOALS_TITLE', "Nový cieľ");
DEFINE('_EW_GOALS_NEW', "Nový cieľ");
DEFINE('_EW_GOALS_RELOAD', "Obnov");
DEFINE('_EW_GOALS_ADVANCED', "Rozšírené");
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
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "'Prišiel z adresy..' podmienka");
DEFINE('_EW_GOALS_BLOCK', "Blokuj");
DEFINE('_EW_GOALS_REDIRECT', "Presmeruj na URL");
DEFINE('_EW_GOALS_HITS', "Hits");
DEFINE('_EW_GOALS_ENABLED', "Povolené");
DEFINE('_EW_GOALS_EDIT', "Uprav");
DEFINE('_EW_GOALS_DELETE', "Vymaž");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Stratíte všetky doterajšie štatistické dáta pre tento cieľ. Chcete naozaj vymazať cieľ �?íslo ");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Krajiny");
DEFINE('_EW_FRONTEND_VISITORS', "Návštevníci");
DEFINE('_EW_FRONTEND_TODAY', "Dnes");
DEFINE('_EW_FRONTEND_YESTERDAY', "V�?era");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Tento týždeň");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Minulý týždeň");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Tento mesiac");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Minulý mesiac");
DEFINE('_EW_FRONTEND_TOTAL', "Celkovo");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch je v debug móde. Touto cestou viete zistiť prí�?iny chýb. Pre vypnutie, zmeňte prosím hodnotu EXTRAWATCH_DEBUG v /components/com_extrawatch/config.php z 1 na 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Maximálny po�?et riadkov údajov po rozbalení v štatistike");
DEFINE('_EW_DESC_STATS_IP_HITS', "Všetky IP adresy, ktoré majú menej hitov predchádzajúci deň ako daná hodnota budú vymazané z histórie IP adries.");
DEFINE('_EW_DESC_STATS_URL_HITS', "Všetky URL, ktoré majú menej hitov predchádzajúci deň ako daná hodnota budú vymazané z histórie URL.");
DEFINE('_EW_DESC_IGNORE_IP', "Ignoruj dané IP adresy v štatistike. Oddeľte novým riadkom. Môžte použiť hviezdi�?ky. <br/>Napríklad. 192.* bude ignorovať 192.168.51.31, 192.168.16.2, at�?..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Doba obnovovania návštevníkov v ľavom paneli v milisekundách, štandardne 2000, bu�?te opatrní s týmto nastavením. Pre prejavenie ú�?inku, znovu na�?ítajte administra�?né rozhranie ExtraWatch-u.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Doba obnovovania štatistík v pravom paneli v milisekundách, štandardne 2000, bu�?te opatrní s týmto nastavením. Pre prejavenie ú�?inku, znovu na�?ítajte administra�?né rozhranie ExtraWatch-u.");
DEFINE('_EW_DESC_MAXID_BOTS', "Koľko záznamov robotov uchovávať v databáze.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Koľko záznamov návštevníkov uchovávať v databáze.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Koľko záznamov robotov uvidíte v ľavom paneli v administra�?nom rozhraní.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Koľko záznamov reálnych návštevníkov uvidíte v ľavom paneli v administra�?nom rozhraní.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Maximum znakov ktoré budú zobrazené pre dlhé titulky a URI adresy");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Maximum znakov ktoré budú zobrazené pre dlhé titulky v pravom štatistickom paneli");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Po�?et dní, za ktoré uchovávať celkovú históriu štatistík v databáze. 0 = nekone�?no.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Ak ste v inom �?asovom pásme ako váš server na ktorom hostujete stránky. (Zadajte kladné alebo záporné �?íslo ako rozdiel �?asového pásma)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Posun vrámci týždňa, timestamp/(3600*24*7) vracia �?íslo týždňa od 1.1.1970, tento posun je korekcia, aby týždeň za�?ínal pondelkom. V normálnych prípadoch nie je potrebné meniť.");
DEFINE('_EW_DESC_DAY_OFFSET', "Posun vrámci dňa, timestamp/(3600*24) vracia �?íslo dňa od 1.1.1970, tento posun je korekcia, aby deň za�?ínal o 00:00. V normálnych prípadoch nie je potrebné meniť.");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Pre nahradenie loga ExtraWatch neviditeľným logom na stránkach");
DEFINE('_EW_DESC_IP_STATS', "Používať aj IP adresy v štatistikách. V niektorých krajinách sa IP adresa považuje za osobný údaj. Používajte na vlastné riziko.");
DEFINE('_EW_DESC_HIDE_ADS', "This setting hides the ads in the backend, if they really annoy you. By keeping them, you support the further development of this tool. Thank you");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Nastavte na nezaškrtnuté, ak chcete zobrazovať okná grafov a máp po prejdení kurzorom nad danými ikonkami, namiesto kliknutia.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "Štandardne je toto nastavenie 'REDIRECT_URL', ak používate url rewriting, môžte nastaviť aj na 'SCRIPT_URL' ak sa vo vašich štatistikách zobrazuje len index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Správa, ktorá je zobrazená zablokovaným používateľom, alebo �?alšie informácie z akého dôvodu ste daných používateľov zablokovali.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Šírka tooltip okna");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Výška tooltip okna");
DEFINE('_EW_DESC_TOOLTIP_URL', "Možte tu dať ľubovoľnú adresu, pre vizualizáciu IP adresy návštevníka. {ip} bude nahradené aktuálnou IP adresou používateľa. Príklad: http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "You can type any URI you want to be ignored from stats. You can use wildcards (* and ?) here. Napr. : /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "Špecifikujte meno cieľa. Toto meno následne uvidíte v štatistikách.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "To, �?o sa nachádza hne�? za adresou vašej domény. Pre http://www.codegravity.com/projects/ je URI: /projects/ (Príklad: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET premenná je zvy�?ajne to, �?o vidíte v URL zvy�?ajne za znakom ? alebo &amp; znakom. Napr: http://www.codegravity.com/index.php?<u>meno</u>=peter&amp;<u>priezvisko</u>=smith. Môžte tiež použiť <u>*</u> v tomto polí�?ku pre prejdenie všetkých get premenných. (Príklad: <b>m*no</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Tu môžte špecifikovať �?omu sa má rovnať premenná z predchádzajúceho poľa. (Príklad: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Celkom podobne, ale zisťujeme hodnoty zadané do formulárov. Teda, ak máte na stránke formulár, ktorý má vstupné pole &lt;input type='text' name='<u>skusenosti</u>' /&gt;. (Príklad: <b>sk*enosti</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Hodnota, ktorej sa má rovnať premenná z predch. POST poľa. Napr. Chceme zistiť, �?í používateľ do formulára zadal v poli skusenosti hodnotu java. (Príklad: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Titulok stránky ktorý sa má zhodovať. (Príklad: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Meno prihláseného používateľa, na ktorého sa cieľ vzťahuje. (Príklad: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP ktorá pochádza z adresy: (Príklad: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL adresa z ktorej prišiel daný návštevník. (Príklad: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Ak sú naplnené horeuvedené podmienky, môžete používateľa presmerovať danú vami zvolenú adresu. Má vyššiu prioritu ako 'blokovanie': (Príklad: <b>http://www.codegravity.com/chod-prec.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Koľko znakov maximálne ukazovať v tabuľke cieľov pre dlhé názvy");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Spätný odkaz na codegravity.com, môžete toto nastavenie zmeniť, no budeme v�?a�?ní ak ho ponecháte.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Zobraz celkové štatistiky v module na stránka. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Ak chcete prehodiť poradie Návštevníci/Krajiny v module na stránke. Odškrtnite to, a štatistika Návštevníci sa bude zobrazovať ako prvá, za ňou Krajiny.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Po�?et krajín ktoré si prajete ukazovať v module na stránkach");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Zobraz krajiny vmodule na stránkach. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Čas v sekundách ako �?asto sa majú obnovovať štatistiky krajín v module na stránkach");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Čas v sekundách ako �?asto sa majú obnovovať štatistiky návštevníkov v module na stránkach");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Zobraz návštevníkov na stránke pre: dnes. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Zobraz návštevníkov na stránke pre: v�?era. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Zobraz návštevníkov na stránke pre: tento výždeň. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Zobraz návštevníkov na stránke pre: minulý týždeň. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Zobraz návštevníkov na stránke pre: tento mesiac. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Zobraz návštevníkov na stránke pre: minulý mesiac. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Zobraz návštevníkov celkovo od inštalácie ExtraWatch. Ak nastavenie zmeníte, musíte po�?kať �?as uvedený v CACHE_FRONTEND_ aby sa zmeny prejavili");
DEFINE('_EW_DESC_LANGUAGE', "Jazykový súbor ktorý sa použije. Jazykové súbory sú umiestnené v /components/com_extrawatch/lang/. Ak chcete pridať nový jazyk, najprv sa presved�?te �?i sa už nenachádza na stránkach tohto projektu. Ak tam nie je, skopírujte štandardný english.php napríklad na mojjazyk.php a umiestnite do daného adresára. Následne preložte všetky názvy vpravo. Najlešie ke�? použijete kódovanie UTF-8");
DEFINE('_EW_DESC_GOALS', "Ciele vám umožňujú zadať špeciálne parametre. Ak tieto parametre súhlasia, po�?ítadlo daného cieľa je zvýšené. Týmto spôsobom môžte monitorova�?, �?i návštevník navštívil špecifickú URI, poslal špecifickú hodnotu vo formulári, má špecifické používateľské meno, alebo prišiel z niektorej adresy. Môžete takéhoto návštevníka zablokovať, alebo presmerovať na špeciálnu URL adresu.");
DEFINE('_EW_DESC_GOALS_INSERT', "Vo všetkých poliach okrem mena môžete používať znaky * a ?. Napríklad: ?ear (obsiahne: near, tear, ..),  p*r (obsiahne: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "Nastavte na 1, ak si želáte aby bol návštevník ktorý vyhovuje kritériám blokovaný. Nebude vidieť zbytok obsahu stránok, iba správu o jeho blokovaní - bez presmerovania, a jeho IP adresa bude pridaná do zoznamu blokovaných adries v štatistike (Príklad: <b>1</b>)");

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
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Ak chcete, aby sa názvy krajín zobrazovali na stránkach s všetkými veľkými písmenami (Napr.: GERMANY, UNITED KINGDOM namiesto Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Čas v sekundách ako �?asto sa majú obnovovať štatistiky používateľov v module na stránkach");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Po�?iato�?ná hodnota 'Celkovo:' na stránkach. Užito�?né, ke�? ste migrovali z iného štatistického nástroja. (Napr.: 20000). Nastavte naspäť na 0 ak nechcete používať túto vlastnosť.");
DEFINE('_EW_DESC_IGNORE_USER', "Ignoruj používateľov z tohto textbox-u. Používateľské meno na riadok. (Napr.: myself {nový riadok} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Najaktívnejší používatelia za dnes z celkového po�?tu");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Povoliť blokovanie na základe listu spam slov zobrazeného nižšie?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "Najpoužívatejšie spam slové používané spam robotmi. Môžte použiť * a ?. (Napr.: ph?rmac*). Ak nastavenie hore je povolené, ExtraWatch bude zisťovať, �?i úto�?ník odoslal formulár (HTTP POST požiadavka) na vašej stránke s niektorým z týchto slov. (Vzťahuje sa len na Joomla stránky - fórum, komentáre, no je to celkom efektívny spôsob eliminovať spam robotov, ktorí skúšajú odoslať každý možný formulár)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "A link in the frontend Users module - allows you to specify an URL, which is open when the user clicks the user name. Must contain the string {user}, which will be replaced by the actual user name. (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Kľú�?ové slová");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Maximum po�?et návštev v histórii(Príklad: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "V návštevách, ukáž vždy iba poslednú stránku, nie všetky");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "V návštevách, skry opakujúci sa titulok stránky");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Maximum po�?tu návštev, ktoré držať v databáze pre záložku História. Bu�?te opatrní s týmto nastavením, ak máte veľmi navštevovanú stránku.");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Nechávať dáta v tabuľkách pri odinštalovaní. Zaškrtnite túto možnosť, ak robíte napríklad prechod na vyššiu verziu a nechcete prísť o svoje dáta.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Dostanete no�?né emailové reporty za predchádzajúci deň, ktoré si môžete pre�?ítať ráno");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Emailová adresa na ktorú zasielať tieto emailové reporty");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Do emailových reportov zahrnúť iba riadky, kde percentuálna hodnota je vyššia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Do emailových reportov zahrnúť iba riadky, kde pozitívna percentuálna hodnota pre jednodňovú zmenu je vyššia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Do emailových reportov zahrnúť iba riadky, kde negatívna percentuálna hodnota pre jednodňovú zmenu je nižšia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: -5)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Do emailových reportov zahrnúť iba riadky, kde pozitívna percentuálna hodnota pre sedemdňovú zmenu je vyššia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Do emailových reportov zahrnúť iba riadky, kde negatívna percentuálna hodnota pre sedemdňovú zmenu je nižšia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: -5)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Do emailových reportov zahrnúť iba riadky, kde pozitívna percentuálna hodnota pre dvadsaťosemdňovú zmenu je vyššia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: 5)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Do emailových reportov zahrnúť iba riadky, kde negatívna percentuálna hodnota pre dvadsaťosemdňovú zmenu je nižšia ako {vami zadaná hodnota}. Nastavte na 0, ak chcete zobrazovať všetky záznamy <i>(Príklad: -5)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(funk�?né v PRO verzii)</b> Povoľte, ak chcete vidieť logo ExtraWatch na vašich stránkach s atribútom rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Maximum znakov riadku pre emailový report. Zmeňte toto nastavenie, ak okno vášho emailového klienta je príliš úzke");

DEFINE('_EW_MENU_HISTORY', "História");
DEFINE('_EW_MENU_EMAILS', "Emaily");
DEFINE('_EW_MENU_STATUS', "Status");
DEFINE('_EW_DESC_BLOCKED', "Tieto IP adresy boli blokované anti-spamom");


DEFINE('_EW_HISTORY_VISITORS', "História návštev");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Ukázať len %d záznamov.
                Pre zmenenie tejto hodnoty, cho�?te do nastavení -&gt; História &amp; Výkonnosť -&gt; 'Maximum po�?tu návštev'. Toto nastavenie má vplyv na rýchlosť na�?ítavania dát.");
DEFINE('_EW_MENU_BUG', "Vyreportujte chybu");
DEFINE('_EW_MENU_FEATURE', "Navrhnite novú funkcionalitu");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Kĺú�?ové slová");

DEFINE('_EW_BLOCKING_UNBLOCK', "odblokuj");
DEFINE('_EW_STATS_KEYPHRASE ', "Kĺú�?ové slová");
DEFINE('_EW_STATUS_DATABASE', "Status databázy");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "názov tabuľky");
DEFINE('_EW_STATUS_DATABASE_ROWS', "riadky");
DEFINE('_EW_STATUS_DATABASE_DATA', "dáta");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "celkovo");

DEFINE('_EW_EMAIL_REPORTS', "Emailové reporty");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Generovaná filtrované email reporty zo všerajška");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Filtre v emailových adresách");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "hodnota");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "percento");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-dňová zmena");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-dňová zmena");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-dňová zmena");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch zaoblokoval %d spam pokusov dnes, celkovo: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Zablokované IP adresy");
DEFINE('_EW_ANTISPAM_SETTINGS', "Anti-Spam nastavenia");
DEFINE('_EW_TRAFFIC_AJAX', "dáta prenesené AJAX updatmi");


DEFINE('_EW_HISTORY_PREVIOUS', "predchádzajúce");
DEFINE('_EW_HISTORY_NEXT', "nasledujúce");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Po�?et stĺpcov vlajok krajín na stránke");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Po�?et riadkov vlajok krajín na stránke");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Zobrazovať mená flajok krajín");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Zobraz vlajky krajín ako prvé, až tak percentá");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "negácia podmienky parametru z premenných poslaných cez HTTP GET");
DEFINE('_EW_GOALS_POST_INVERSED', "negácia podmienky parametru z premenných poslaných cez HTTP POST");
DEFINE('_EW_GOALS_TITLE_INVERSED', "negácia podmienky Názov stránky");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "negácia podmienky Používateľské meno");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "negácia podmienky Prišiel z ...");

DEFINE('_EW_STATS_MAP', "Mapa poslednej návštevy");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Prosím vložte <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> aktiva�?ný kľú�? pre zobrazenie mapy:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "ulož");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Prosím zadajte platný ipinfodb kľú�?, ktorý ste získali z: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "ZL�? POŽIADAVKA: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Dáta poslané z formulára:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL parametre:");
DEFINE('_EW_VISIT_ADD_PAGE', " Pridaj stránku ako cieľ");
DEFINE('_EW_VISIT_BLOCK_IP', " Blokuj túto IP adresu");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Pridaj túto hodnotu poslanú z formulára ako cieľ");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Pridaj tento URL parameter ako cieľ");

DEFINE('_EW_TREND_EMPTY', "Prázdne");

DEFINE('_EW_NOT_NUMBER', " UPOZORNENIE: Hodnota ktorú ste zadali, nie je �?íslo. ExtraWatch nebude fungovať korektne!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Toto je 15-dňová skúšobná verzia. Po�?et dní do konca: <b>%d</b>. Prosím objednajte si celoživotnú licenciu na <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch licencia pre vašu doménu</a> pre túto a nasledujúce verzie.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Vaša trial verzia expirovala. Prosím kúpte si licenciu");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Licencia aktivovaná úspešne. Ďakujeme");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Chyba: licen�?né kľú�? a vaša doména sa nezhodujú.</b><br/>
Naozaj ste vložili správny názov domény do aktiva�?ného dialógu? Prosím kontaktujte: support@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Ak vidíte túto správu príliš dlho, nastavenie vašej domény môže byť nesprávne.
                    Otvorte components/com_extrawatch/config.php
                    odkomentujte, a zmeňte názov vašej domény. Eg.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Upozornenie: stránka vo vašom browseri %s a v konfigurácii %s sa nezohodujú.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Nastavte doménu na: %s a pokra�?ujte...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Odstrániť spätný odkaz");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Báza znalostí");
DEFINE('_EW_ADMINHEADER_FLOW', "Tok návštev");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Grafy");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Komponenty");
DEFINE('_EW_ADMINHEADER_REVIEW', "Posudok");
DEFINE('_EW_ADMINHEADER_WRITE', "Napíšte ");

DEFINE('_EW_FLOW_TRAFFIC', "Tok návštev");
DEFINE('_EW_FLOW_SELECT_PAGE', "Zvoľte stránku:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Max. po�?et liniek z každej stránky:");
DEFINE('_EW_FLOW_NESTING', "Level vnorenia:");
DEFINE('_EW_FLOW_SCALE', "Škála:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Verzia bez reklám");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Ďakujeme vám za váš príspevok!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Registra�?ný kľú�? pre vašu doménu %s je: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Teraz môžte skryť ExtraWatch logo na stránke z nastavení");

DEFINE('_EW_SIZES_LAST_CHECK', "Posledná kontrola bola vykonaná:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Veľkosť komponentu/modulu v /administrator adresári");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Komponent");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Celkovo:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Veľkosť");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Obnoviť všetko");

DEFINE('_EW_SIZEDATABASE_TABLE', "Tabuľka");
DEFINE('_EW_SIZEDATABASE_SIZE', "Veľkosť");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-dňová zmena");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-dňová zmena");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-dňová zmena");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "žiadne dáta");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Celkovo:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Obnoviť všetko");
DEFINE('_EW_SIZEMODULES_TOTAL', "Celkovo:");
DEFINE('_EW_SIZEMODULES_MODULE', "Modul");
DEFINE('_EW_SIZEMODULES_SIZE', "Veľkosť");

DEFINE('_EW_SIZES_FILES', "Súbory a adresáre");
DEFINE('_EW_SIZES_BYTES', "bajty");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Obnoviť");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Aktiva�?ný kľú�? pre mapu poslednej návštevy z : <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Nastav nasilu rozdiel �?asových pásiem");

/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Aktualizuj");
DEFINE('_EW_MENU_UPDATE_TITLE', "Zálohuj a obnov");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Nefunk�?né vo free verzii, prosím pozrite si záložku licencií");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Blokuj na základe nevhodných slov");
DEFINE('_EW_SPAMWORD_LIST', "Zoznam nevhodných slov");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Skry opakujúce s titulky stránok");
DEFINE('_EW_TRUNCATE_VISITS', "Skracuj slová náštev");
DEFINE('_EW_TRUNCATE_STATS', "Skracuj slová štatistiky");
DEFINE('_EW_TRUNCATE_GOALS', "Skracuj ciele");
DEFINE('_EW_LIMIT_BOTS', "Max. po�?et robotov");
DEFINE('_EW_LIMIT_VISITORS', "Max. po�?et návštev");
DEFINE('_EW_TOOLTIP_WIDTH', "Šírka vyskakujúceho okna");
DEFINE('_EW_TOOLTIP_HEIGHT', "Výška vyskakujúceho okna");
DEFINE('_EW_TOOLTIP_URL', "URL Adresa vyskakovacieho okna");
DEFINE('_EW_TOOLTIP_ONCLICK', "Otvoriť vyskakovacie okno pri kliku");
DEFINE('_EW_IP_STATS', "štatistiky IP adries");
DEFINE('_EW_IPINFODB_KEY', "Kľú�? z ipinfodb.com");
DEFINE('_EW_ONLY_LAST_URI', "Iba posledné URI");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Skry logo na stránkach ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "No Follow pre linku na stránkach");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Žiadny spätný odkaz na stránkach");
DEFINE('_EW_FRONTEND_USER_LINK', "Linka na detail používateľa z modulu registrovaných používateľov");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "vlajky krajín ako prvé");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "zobrazovať mená vlajok krajín");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "mená vlajok krajín veľkými písmenami");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "vlajky krajín ako prvé");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "po�?et vlajok krajín");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "maximálny po�?et stĺpcov vlajok krajín");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "maximálny po�?et riadkov vlajok krajín");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "po�?et návštevníkov dnes ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "po�?et návštevníkov v�?era ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "po�?et návštevníkov tento týždeň ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "po�?et návštevníkov minulý týždeň ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "po�?et návštevníkov tento mesiac");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "po�?et návštevníkov minulý mesiac");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "po�?et návštevníkov celkovo");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "po�?et návštevníkov - úvodné �?íslo");
DEFINE('_EW_HISTORY_MAX_VALUES', "Max. hodnoty v histórii");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "Max. po�?et záznamov v histórii");
DEFINE('_EW_UPDATE_TIME_VISITS', "Po�?et sekúnd obnovovania návštev v reálnom �?ase");
DEFINE('_EW_UPDATE_TIME_STATS', "Po�?et sekúnd obnovovania štatistík v reálnom �?ase");
DEFINE('_EW_STATS_MAX_ROWS', "Max. po�?et riadkov v štatistike");
DEFINE('_EW_STATS_IP_HITS', "Zobrazovať IP adresy v štatistike");
DEFINE('_EW_MAXID_BOTS', "Max. po�?et robotov");
DEFINE('_EW_MAXID_VISITORS', "Max. po�?et návštevníkov");
DEFINE('_EW_STATS_KEEP_DAYS', "Max. po�?et dní pre ktoré uchovávať štatistiky");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Po�?et sekúnd pre kešovanie vlajok krajín na stránkach");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Po�?et sekúnd pre kešovanie návštevníkov na stránkach");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Ponechať dáta po odinštalovaní");
DEFINE('_EW_IGNORE_IP', "Ignoruj IP adresu");
DEFINE('_EW_IGNORE_URI', "Ignoruj URI (stránku)");
DEFINE('_EW_IGNORE_USER', "Ignoruj používateľa");
DEFINE('_EW_BLOCKING_MESSAGE', "Správa zobrazená ke�? je používateľ zablokovaný");
DEFINE('_EW_SERVER_URI_KEY', "parameter PHP premennej SERVER odkiaľ sa berie adresa URI");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "po�?et návštevníkov - úvodné �?íslo");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Záznamy");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " Aby blokovanie fungovalo, musíte ExtraWatch agent modul umiestniť do pozície pred vaším obsahom.
Napríklad na ľavej strane vašej šablóny
                    <br/>
                    Cho�?te do Module Manager -> ExtraWatch agent -> zvoľte pozíciu left");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Reporty");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO No�?né emaily povolené");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Pozrite si inštala�?né demo");

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