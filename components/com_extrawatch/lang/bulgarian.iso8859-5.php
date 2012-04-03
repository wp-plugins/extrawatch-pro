<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) @YEAR@ by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/
defined('_JEXEC') or die('Restricted access');

#ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into /components/com_extrawatch/lang/

# Main Menu
DEFINE('_EW_MENU_STATS', "Статистика");
DEFINE('_EW_MENU_GOALS', "Цели");
DEFINE('_EW_MENU_SETTINGS', "Настройки");
DEFINE('_EW_MENU_CREDITS', "Благодарности");
DEFINE('_EW_MENU_FAQ', "Често задавани въпроси");
DEFINE('_EW_MENU_DOCUMENTATION', "Документация");
DEFINE('_EW_MENU_LICENSE', "Лиценз");
DEFINE('_EW_MENU_DONATORS', "Дарители");
DEFINE('_EW_MENU_SUPPORT', "Поддържйте ExtraWatch и рекламите няма да се показват.");

# Left visitors real-time window
DEFINE('_EW_VISITS_VISITORS', "Последни посетители");
DEFINE('_EW_VISITS_BOTS', "Ботове");
DEFINE('_EW_VISITS_CAME_FROM', "Идва от");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Вашият модул JoomlaWach не е публикуван.За това не са записани никакви статистически данни. Отидете в раздел модули и да зададете модул ExtraWatch - да се публикува във всички страници");
DEFINE('_EW_VISITS_PANE_LOADING', "Зареждане...");

# Right stats window
DEFINE('_EW_STATS_TITLE', "Статистика на посещенията през седмицата");
DEFINE('_EW_STATS_WEEK', "Седмица");
DEFINE('_EW_STATS_THIS_WEEK', "Тази седмица");
DEFINE('_EW_STATS_UNIQUE', "Уникални");
DEFINE('_EW_STATS_LOADS', "Зареждания");
DEFINE('_EW_STATS_HITS', "Хитове");
DEFINE('_EW_STATS_TODAY', "Днес");
DEFINE('_EW_STATS_FOR', "за");
DEFINE('_EW_STATS_ALL_TIME', "За целият период");
DEFINE('_EW_STATS_EXPAND', "Подробно");
DEFINE('_EW_STATS_COLLAPSE', "Съкратено");
DEFINE('_EW_STATS_URI', "Страници");
DEFINE('_EW_STATS_COUNTRY', "Държави");
DEFINE('_EW_STATS_USERS', "Потребители");
DEFINE('_EW_STATS_REFERERS', "Препратки");
DEFINE('_EW_STATS_IP', "IP адреси");
DEFINE('_EW_STATS_BROWSER', "Браузер");
DEFINE('_EW_STATS_OS', "ОС");
DEFINE('_EW_STATS_KEYWORDS', "Ключови думи");
DEFINE('_EW_STATS_GOALS', "Цели");
DEFINE('_EW_STATS_TOTAL', "Общо");
DEFINE('_EW_STATS_DAILY', "За определен ден");
DEFINE('_EW_STATS_DAILY_TITLE', "Дневна статистика за");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Обща статистика");
DEFINE('_EW_STATS_LOADING', "Зареждане...");
DEFINE('_EW_STATS_LOADING_WAIT', "Зареждане... моля изчакайте");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "Блокиран IP адрес");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Въведете ръчно IP адреса, който искате да блокирате.");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Напишете IP адреса, който искате да блокирате. (напр. 217.242.11.54 или 217.* или 217.242.* за блокиране на обсега след звездичката)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Превключване на блокирани IP адреси");
DEFINE('_EW_STATS_PANE_LOADING', "Зареждам статистиката...");

# Settings
DEFINE('_EW_SETTINGS_TITLE', "Настройки");
DEFINE('_EW_SETTINGS_DEFAULT', "Стандартни");
DEFINE('_EW_SETTINGS_SAVE', "Запомни");
DEFINE('_EW_SETTINGS_APPEARANCE', "Външен вид");
DEFINE('_EW_SETTINGS_FRONTEND', "Изглед на сайта");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "История и изпълнения");
DEFINE('_EW_SETTINGS_ADVANCED', "Разширения");
DEFINE('_EW_SETTINGS_IGNORE', "Игнориране");
DEFINE('_EW_SETTINGS_BLOCKING', "Блокиране");
DEFINE('_EW_SETTINGS_EXPERT', "Експерт");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Наистина ли искате да изтриете всички данни?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Изчистване на всички данни");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Изчисти всички статистически данни и посетители");
DEFINE('_EW_SETTINGS_LANGUAGE', "Език");
DEFINE('_EW_SETTINGS_SAVED', "Настройките бяха съхранени");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Добавете Вашия IP адрес");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "в списъка.");

# Other / mostly general
DEFINE('_EW_TITLE', "AJAX монитор за Joomla CMS");
DEFINE('_EW_BACK', "Назад");
DEFINE('_EW_ACCESS_DENIED', "Нямате права за достъп");
DEFINE('_EW_LICENSE_AGREE', "Съгласен съм с условията");
DEFINE('_EW_LICENSE_CONTINUE', "Продължи");
DEFINE('_EW_SUCCESS', "Операцията приключи успешно");
DEFINE('_EW_RESET_SUCCESS', "Всички статистически данни и данни за посетителите бяхя изтрити");
DEFINE('_EW_RESET_ERROR', "Данните не бяха изтрити, нещо не се получи");
DEFINE('_EW_CREDITS_TITLE', "Благодарности");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Дневни и седмични статистически данни за:");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX достъп е отхвърлен: Моля, разгледайте статистиката на домейна, който сте посочили в configuration.php на Джумла - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Може би просто сте забравили да въведете WWW. преди името на домейна в браузъра. Javascript търси садържание ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "на");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "това го принуждава да си мисли,че че това е друг домейн.");

# Header
DEFINE('_EW_HEADER_DOWNLOAD', "Вземете най-новия код на това разширение от");
DEFINE('_EW_HEADER_CAST_YOUR', "Изпратете своя");
DEFINE('_EW_HEADER_VOTE', "Глас");

# Tooltips
DEFINE('_EW_TOOLTIP_CLICK', "Кликнете за да отворите tooltip прозореца");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Отидете с мишката на tooltip за да отворите прозореца");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "Увеличение от вчера");
DEFINE('_EW_TOOLTIP_HELP', "Отвари онлайн помощ за");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Затворете този прозорец");
DEFINE('_EW_TOOLTIP_PRINT', "Печат");

# Goals
DEFINE('_EW_GOALS_INSERT', "Добавяне на нова цел");
DEFINE('_EW_GOALS_UPDATE', "Редактиране на цел номер");
DEFINE('_EW_GOALS_ACTION', "Действие");
DEFINE('_EW_GOALS_TITLE', "Нова цел");
DEFINE('_EW_GOALS_NEW', "Нова цел");
DEFINE('_EW_GOALS_RELOAD', "Обновяване");
DEFINE('_EW_GOALS_ADVANCED', "Разширено");
DEFINE('_EW_GOALS_NAME', "Име");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI състояние");
DEFINE('_EW_GOALS_GET_VAR', "GET променлива");
DEFINE('_EW_GOALS_GET_CONDITION', "GET състояние");
DEFINE('_EW_GOALS_POST_VAR', "POST променлива");
DEFINE('_EW_GOALS_POST_CONDITION', "POST състояние");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Title състояние");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Username състояние");
DEFINE('_EW_GOALS_IP_CONDITION', "IP състояние");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "'Идва от адрес..' състояние");
DEFINE('_EW_GOALS_BLOCK', "Блокирай");
DEFINE('_EW_GOALS_REDIRECT', "Пренасочи на URL");
DEFINE('_EW_GOALS_HITS', "Посещения");
DEFINE('_EW_GOALS_ENABLED', "Разрешени");
DEFINE('_EW_GOALS_EDIT', "Редактиране");
DEFINE('_EW_GOALS_DELETE', "Изтриване");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Вие ще загубите всички съществуващи статистически данни за тази цел. Наистина ли искате да изтриете тази цел?");

# Frontend
DEFINE('_EW_FRONTEND_COUNTRIES', "Държава");
DEFINE('_EW_FRONTEND_VISITORS', "Посетители");
DEFINE('_EW_FRONTEND_TODAY', "Днес");
DEFINE('_EW_FRONTEND_YESTERDAY', "Вчера");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Тази седмица");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Миналата седмица");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Този месец");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Миналият месец");
DEFINE('_EW_FRONTEND_TOTAL', "Общо");

# Settings description - quite long
DEFINE('_EW_DESC_DEBUG', "ExtraWatch е в debug móde. По този начин ще могат да се определят причините за грешки. За да изключите, моля, променете стойността EXTRAWATCH_DEBUG в /components/com_extrawatch/config.php от 1 на 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Максимален брой на редовете на данни след декомпресия в областта на статистиката");
DEFINE('_EW_DESC_STATS_IP_HITS', "Всички IP адреси, които имат по-малко хитове от предишните дни, ще бъдат изтрити от историята на IP адреси.");
DEFINE('_EW_DESC_STATS_URL_HITS', "Всички URL адреси, които са по-малко хитове от предишните дни, ще бъде заличена от историята URL адреси.");
DEFINE('_EW_DESC_IGNORE_IP', "Игнориране на IP адрес в статистиката.Всеки адрес отделно на нов ред. Можете да използвате звездичка. <br/>Например. 192.* ще игнорира 192.168.51.31, 192.168.16.2, итн..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Продължителност на подновяване на посетителите в левия панел, в милисекунди, по подразбиране 2000, бъдете внимателни с тази настройка.За да има ефект, обновете през администрацията интерфейса в ExtraWatch.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Продължителност на подновяване на статистиката в десния панел в милисекунди, стандартно 2000, бъдете внимателни с тази настройка. а да има ефект, обновете през администрацията интерфейса в ExtraWatch.");
DEFINE('_EW_DESC_MAXID_BOTS', "Колко записа да се съхраняват в базата данни.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Колко записа на посетителите да се съхраняват в базата данни.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Колко записа да се видат в левия панел в администраторския интерфейс.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Колко посетителите да се виждат в левия панел в администраторския интерфейс.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Максимум символи, които ще бъдат показани при дълги заглавия и URI адреси");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Максимум символи, които ще да бъдат показани при дълги заглавия в десния статистически панел");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Брой дни през които да се запази общата история на статистическите данни в базата данни. 0 = безкрайност.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Ако сте в различна часова зона от сървъра ви, на който хоствате сайта си.(Въведете положително или отрицателно число, като разликата в часова зона)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Промяната в рамките на седмицата, Timestamp/(3600 * 24 * 7) връща номера на седмицата от 1.1.1970, тази промяна е корекция на седмицата, започваща с понеделник. При нормални случаи, не е необходимо да се променя.");
DEFINE('_EW_DESC_DAY_OFFSET', "Промяната в рамките на деня, Шimestamp/(3600*24) връща датата на деня от 1.1.1970, тази промяна е корекция, за да започва денят от 00:00. При нормални случаи, не е необходимо да се променя");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Заменете логото на ExtraWatch с невидимо лого на сайта");
DEFINE('_EW_DESC_IP_STATS', "Използване на IP адрес в статистиката. В някои страни, IP адреса се счита за лични данни. Използвайте на свой собствен риск.");
DEFINE('_EW_DESC_HIDE_ADS', "This setting hides the ads in the backend, if they really annoy you. By keeping them, you support the further development of this tool. Thank you");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Ако искате да се покажат непроверените  в отделен прозорец  карти и схеми , поставете  курсора върху иконите, вместо да кликнете.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "По подразбиране е тази настройка 'REDIRECT_URL', ако използвате url rewriting, можете да пормените на 'SCRIPT_URL' ако във вашата статистика се показва само index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Собщение, което показва допълнителна информация по някакъв повод, защо са тези потребители блокирани.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Ширина на прозореца в tooltip");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Височина на прозореца в tooltip");
DEFINE('_EW_DESC_TOOLTIP_URL', "Тук можете да напишете всякакъв адрес за визуализиране на посетителския IP адрес.{ip} ще бъде заменен от реалният IP адреса на потребителя. Например: http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "Можете да въведете всякакъв URI, които искате да бъде игнориран от статистика. Можете да използвате заместващи символи (* и ?) тук. Напр. : /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "Посочете името на целта. Това име ще видите в статистиката.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Това, което се намира непосредствено след адреса на вашия домейн. За http://www.codegravity.com/projects/ е URI: /projects/ (Пример: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET променлива е обикновено това, което виждате в URL обикновено след  знака ? или & amp. Например: http://www.codegravity.com/index.php? <u> име </u> u = peter & amp <u> фамилия </u> = smith.Можете също да използвате <u> * </u> в това поле, за всички GET променливи.(Пример: <b>m*no</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Тук можете да определите на какво да се равни променливата в предишното поле.(Пример: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Нещо подобно, но спазваме стойностите, вписани във формуляра. Така, че ако имате на уебсайта си формуляр, който има полето за въвеждане &lt;input type='text' name='<u>регистрация</u>' /&gt;. (Пример: <b>sk*страция</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Стойност, която е равна на променливата в предходното POST поле. Напр. Искаме да видим дали потребителят е направил опит за въвеждане в полето стойност  на Java. (Пример: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Заглавие на страница, която да съответства. (Пример: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Име на влезлияг потребител, за когото целта се прилага. (Пример: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP който идва от адрес. (Пример: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL от които посетителят идва. (Пример: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Ако тези условия са изпълнени, можете за пренасочите потребителя  към адрес по Ваш избор. Има по-висок приоритет, отколкото 'блокиран': (Пример: <b>http://www.codegravity.com/chod-prec.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Колко символа максимум да се показват в таблицата за дълги имена");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Препратката до codegravity.com, можете да промените тази настройка, но оценяваме, ако тя остане.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Преглед на общата статистика в модула на сайта. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Ако искате  да пренаредите реда на Посетители/Държави в модула на страницата. Махнете го, статистиката на Посетителите ще се покаже на първо място,а след това Държави.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Брой на Държавите, които желаете да се показват в модула на сайта");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Преглед на Държавите в модула на сайта. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Време в секунди колко често да се актуализират статистическите данни на Държавите в модула на сайта");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Време в секунди колко често да се актуализира статистиката за посетителите в модула на сайта");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Преглед на посетителите на сайта за: Днес. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Преглед на посетителите на сайта за: Вчера. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Преглед на посетителите на сайта за: Тази седмица. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Преглед на посетителите на сайта за: Миналата седмиа. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Преглед на посетителите на сайта за: Този месец. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Преглед на посетителите на сайта за: Миналият месец. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Преглед на посетителите на сайта Общо след инсталацията на ExtraWatch. Ако промените настройките, трябва да изчакате да изтече времето в CACHE_FRONTEND_  за да настъпят промените.");
DEFINE('_EW_DESC_LANGUAGE', "Езиков файл, който се използва. Езиковите файлове се намират в /components/com_extrawatch/lang/. За да добавите нов език, първо се уверете, че той не е вече на страниците на този проект. Ако там го няма, копирайте english.php и го преименувайте на mojjazyk.php например и го поставете на по-горния адрес. Преведете всички изрази в дясно. Най-добре е да използвате кодировка UTF-8");
DEFINE('_EW_DESC_GOALS', "Целите Ви позволяват да се определят специални параметри. Ако с тези параметри сте съгласни, производителността на брояча се увеличава. По този начин можете да наблюдавате дали един посетител е посещавал специфични URL, дали е изпратил конкретна стойност във формуляра, има специфично име или идва от някой адрес. Можете да блокирате такъв посетител или да го пренасочете към специален URL адрес.");
DEFINE('_EW_DESC_GOALS_INSERT', "Във всички полета осен имена може да използвате символите * и ?. Например: ?ear (комбинира: near, tear, ..),  p*r (комбинира: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "Настройте на 1, ако искате да блокирате даден посетител, който отговаря на критериите. Няма да виждате останалата част от съдържанието на сайта, само съобщение за неговото блокиране - без пренасочване, и неговия IP адрес ще бъде добавен към списъка на блокираните в статистиката. (Пример: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Country изисквания ");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "Двубуквеният код на дадена държава (Напр.: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "Нека продължим страницата");
DEFINE('_EW_STATS_FROM', "От");
DEFINE('_EW_STATS_TO', "До");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Добави цел");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Добави цел за тази държава");
DEFINE('_EW_MENU_REPORT_BUG', "Напиши за грешки или дай предложение");
DEFINE('_EW_GOALS_COUNTRY', "Държава");

/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Ако искате имената на Държавите да са изписани с главни букви на сайта (Напр.: GERMANY, UNITED KINGDOM вместо Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Време в секунди колко често да се актуализират статистическите данни на потребителите в сайта");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Първоначална стойност 'Общо:' на сайта. Полезно, ако сте преминали от друг статистически инструмент. (Напр. 20000). Ако не искате да използвате тази функция попълнете 0.");
DEFINE('_EW_DESC_IGNORE_USER', "Игнорирай потребитилите от този textbox. Потребителско име он-лайн. (Напр.: myself {нов ред} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Най-активните потребители към днешна дата от общият брой");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Включва блокиране на изброените спам думи, показани по-долу?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "Най-използваните спам думи, използвани в спам ботове. Можете да използвате * и ?. (Напр.: ph?rmac*).Ако в настройките по-горе е разрешено, ExtraWatch ще провери дали атакуващия изпратен формуляр ( HTTP POST заявка) към сайта Ви съвпада с една от тези думи. (Прилага се само за сайт под Joomla – форуми, коментари, това е доста ефективен начин за премахване на спам ботове, които се опитват да изпращат всякакви възможни формуляри.");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "Линка, намиращ се в лицевия потребителски модул Ви позволява да посочите специфичен URL,който е отворен, когато потребителят кликне върху потребителското си име.  Трябва да съдържа низа {user}, ойто ще бъде заменен с истинското име на потребителя. (Напр. index.php?option=com_comprofiler&task=userProfile&user={user}) ");
/* translations 1.2.10 */
DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "Включете тази настройка, ако искате да направите връзка на логото с атрибута rel='nofollow'");


/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Keyphrases");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Maximum values in history tab (Example: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "In visits show only last page visited, not all");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "In visits hide repetitive sitename in visited page title");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Maximum nuber of visitors to keep in database for Visit History. Be careful with this setting, if you have high traffic, it can grow really fast. Always check how much data the history table contains in Status");
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

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Keywords");

DEFINE('_EW_BLOCKING_UNBLOCK', "unblock");
DEFINE('_EW_STATS_KEYPHRASE ', "Keyphrase");
DEFINE('_EW_STATUS_DATABASE', "Database status");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "table name");
DEFINE('_EW_STATUS_DATABASE_ROWS', "rows");
DEFINE('_EW_STATUS_DATABASE_DATA', "data");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "total");

DEFINE('_EW_EMAIL_REPORTS', "Email Reports");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Generated filtered email report from yesterday");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Email Value Filters");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "value");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "percent");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-day change");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-day change");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-day change");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch has blocked %d spammer hits today, total: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Blocked IP Adresses");
DEFINE('_EW_ANTISPAM_SETTINGS', "Anti-Spam Settings");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX updates traffic");


DEFINE('_EW_HISTORY_PREVIOUS', "previous");
DEFINE('_EW_HISTORY_NEXT', "next");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Number of columns of countries");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Number of rows of countries");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Display country names or not");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Display flags first, then percents");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET инверсно състояние");
DEFINE('_EW_GOALS_POST_INVERSED', "POST инверсно състояние");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Title inversed condition");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Username inversed condition");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Came from inversed condition");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "BAD REQUEST: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Submitted form fields:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL parameters:");
DEFINE('_EW_VISIT_ADD_PAGE', " Add page as goal");
DEFINE('_EW_VISIT_BLOCK_IP', " Block this IP Address");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Add this submitted form variable as goal");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Add this URL parameter as goal");

DEFINE('_EW_TREND_EMPTY', "Empty");

DEFINE('_EW_NOT_NUMBER', " WARNING: The value you entered is not a number. ExtraWatch will not work properly!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; This is a 15-day Evaluation Version. Days Left: <b>%d</b>. Please purchase the lifetime <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch license for your domain</a> for this and upcoming versions.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Your trial version has expired. Please purchase ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "License activated successfully. Thank you");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Error: the license key and your domain don't match.</b><br/>Did you enter the same domain name into activation form as one you see below? Please contact: info@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "If you are seeing the message above for too long, your live site may be wrong.
                    Open the components/com_extrawatch/config.php
                    uncomment, and set your actual live site. Eg.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Warning: site in your browser and live site in configuration: %s and %s don't match.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Set live site to: %s and continue...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Remove Backlink");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Knowledge Base");
DEFINE('_EW_ADMINHEADER_FLOW', "Flow");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Graphs");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Components");
DEFINE('_EW_ADMINHEADER_REVIEW', "Review");
DEFINE('_EW_ADMINHEADER_WRITE', "Write a ");

DEFINE('_EW_FLOW_TRAFFIC', "Traffic Flow");
DEFINE('_EW_FLOW_SELECT_PAGE', "Select page:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Root outgoing links count:");
DEFINE('_EW_FLOW_NESTING', "Nesting level:");
DEFINE('_EW_FLOW_SCALE', "Scale:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Ad-free version");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Thank you very much for your donation!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Registration key for your domain %s is: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Now you can remove backlink or hide ExtraWatch logo in frontend from Settings ");


DEFINE('_EW_SIZES_LAST_CHECK', "Last check was performed on:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Size of component/module in /administrator directory");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Component");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Total:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Size");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Refresh All");

DEFINE('_EW_SIZEDATABASE_TABLE', "Table");
DEFINE('_EW_SIZEDATABASE_SIZE', "Size");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-Day Change");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-Day Change");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-Day Change");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "no data");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Total:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Refresh All");
DEFINE('_EW_SIZEMODULES_TOTAL', "Total:");
DEFINE('_EW_SIZEMODULES_MODULE', "Module");
DEFINE('_EW_SIZEMODULES_SIZE', "Size");

DEFINE('_EW_SIZES_FILES', "Files &amp; Directories");
DEFINE('_EW_SIZES_BYTES', "bytes");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Refresh");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-@YEAR@ by Matej Koval");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Last visit map ipinfodb.com key from: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Force Timezone Offset");

/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Update");
DEFINE('_EW_MENU_UPDATE_TITLE', "Backup & Upgrade");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Not available in free version, please check the license tab");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Spam Words Ban Enable");
DEFINE('_EW_SPAMWORD_LIST', "Spam Words List");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Hide Repetitive Title");
DEFINE('_EW_TRUNCATE_VISITS', "Truncate Visits");
DEFINE('_EW_TRUNCATE_STATS', "Truncate Stats");
DEFINE('_EW_TRUNCATE_GOALS', "Truncate Goals");
DEFINE('_EW_LIMIT_BOTS', "Limit Bots");
DEFINE('_EW_LIMIT_VISITORS', "Limit Visitors");
DEFINE('_EW_TOOLTIP_WIDTH', "Tooltip Width");
DEFINE('_EW_TOOLTIP_HEIGHT', "Tooltip Height");
DEFINE('_EW_TOOLTIP_URL', "Tooltip URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "Tooltip OnClick");
DEFINE('_EW_IP_STATS', "IP stats");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB key ");
DEFINE('_EW_ONLY_LAST_URI', "Only Last URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Front End Hide Logo ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Front End No Follow");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Front End no Back Link");
DEFINE('_EW_FRONTEND_USER_LINK', "Front User links");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Front End countries first");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Front End Countries Name");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Front End Countreis Upper case");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Front End Countries Flag First ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Front End Countries Num");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Front End Countries Max Colums");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Front End Countries Max Rows");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "Front End Visitors Today ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "Front End Visitors Yesterday ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "Front End Visitors This week ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "Front End Visitors Last week ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "Front End Visitors This Month ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "Front End Visitors Last Month");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Front End Hide Visitors Total");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "Front End Total Initial");
DEFINE('_EW_HISTORY_MAX_VALUES', "History Max Values");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "History Max records");
DEFINE('_EW_UPDATE_TIME_VISITS', "Update Time Visits");
DEFINE('_EW_UPDATE_TIME_STATS', "Update Time stats");
DEFINE('_EW_STATS_MAX_ROWS', "Stats Max rows");
DEFINE('_EW_STATS_IP_HITS', "Stats IP hits");
DEFINE('_EW_MAXID_BOTS', "Max ID bots");
DEFINE('_EW_MAXID_VISITORS', "Maxid Visitors");
DEFINE('_EW_STATS_KEEP_DAYS', "Stats Keep days ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Cache Front End Countries ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Cache Front End Visitors ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Uninstall Keep Data ");
DEFINE('_EW_IGNORE_IP', "Ignore IP");
DEFINE('_EW_IGNORE_URI', "Ignore URI");
DEFINE('_EW_IGNORE_USER', "Ignore User");
DEFINE('_EW_BLOCKING_MESSAGE', "Blocking Message");
DEFINE('_EW_SERVER_URI_KEY', "Server URI key");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Front End Visitors Total Initial");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Records");
/***********EDITs******************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " To make the blocking effective, you need to publish ExtraWatch agent BEFORE any content or forms. Eg. on left side in your template.
                    <br/>
                    Go to Module Manager -> ExtraWatch agent -> select position as left");

DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Reports");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO Nightly email reports enabled");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Watch installation demo");

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

?>
