<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "實時統計");
DEFINE('_EW_MENU_GOALS', "目標");
DEFINE('_EW_MENU_SETTINGS', "設置");
DEFINE('_EW_MENU_CREDITS', "�?分");
DEFINE('_EW_MENU_FAQ', "常見�?題");
DEFINE('_EW_MENU_DOCUMENTATION', "文件");
DEFINE('_EW_MENU_LICENSE', "許�?�證");
DEFINE('_EW_MENU_DONATORS', "支�?者");
DEFINE('_EW_MENU_SUPPORT', "支�?ExtraWatch以便從後�?�刪除ExtraWatch 的廣告.");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "最新訪客");
DEFINE('_EW_VISITS_BOTS', "機器人");
DEFINE('_EW_VISITS_CAME_FROM', "來自");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "你的ExtraWatch模塊沒有發布�?沒有新的統計信�?�被記錄下來.發布它,去模塊部分並把其在所有網�?上發布");
DEFINE('_EW_VISITS_PANE_LOADING', "載入訪�?...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "一周訪�?統計");
DEFINE('_EW_STATS_WEEK', "週");
DEFINE('_EW_STATS_THIS_WEEK', "本週");
DEFINE('_EW_STATS_UNIQUE', "�?�特");
DEFINE('_EW_STATS_LOADS', "負載");
DEFINE('_EW_STATS_HITS', "點擊");
DEFINE('_EW_STATS_TODAY', "今天");
DEFINE('_EW_STATS_FOR', "為");
DEFINE('_EW_STATS_ALL_TIME', "所有時間");
DEFINE('_EW_STATS_EXPAND', "擴大");
DEFINE('_EW_STATS_COLLAPSE', "崩潰");
DEFINE('_EW_STATS_URI', "�?");
DEFINE('_EW_STATS_COUNTRY', "國家");
DEFINE('_EW_STATS_USERS', "用戶");
DEFINE('_EW_STATS_REFERERS', "查閱情�?");
DEFINE('_EW_STATS_IP', "IPs");
DEFINE('_EW_STATS_BROWSER', "�?覽器");
DEFINE('_EW_STATS_OS', "�?作系統");
DEFINE('_EW_STATS_KEYWORDS', "關�?�詞");
DEFINE('_EW_STATS_GOALS', "目標");
DEFINE('_EW_STATS_TOTAL', "共有");
DEFINE('_EW_STATS_DAILY', "日報");
DEFINE('_EW_STATS_DAILY_TITLE', "�?日統計");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "所有時間統計");
DEFINE('_EW_STATS_LOADING', "加載...");
DEFINE('_EW_STATS_LOADING_WAIT', "載入中...請等待");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', " IP阻塞");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "手動輸入IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "輸入你�?阻止IP地�?�. (如217.242.11.54或217 * 217.242 *阻止所有IP地�?�匹�?的通�?符)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "實時阻塞切�?�");
DEFINE('_EW_STATS_PANE_LOADING', "載入統計...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "設置");
DEFINE('_EW_SETTINGS_DEFAULT', "默�?");
DEFINE('_EW_SETTINGS_SAVE', "�?存");
DEFINE('_EW_SETTINGS_APPEARANCE', "外觀");
DEFINE('_EW_SETTINGS_FRONTEND', "�?�?�");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "歷�?�與性能");
DEFINE('_EW_SETTINGS_ADVANCED', "高級");
DEFINE('_EW_SETTINGS_IGNORE', "忽略");
DEFINE('_EW_SETTINGS_BLOCKING', "阻止");
DEFINE('_EW_SETTINGS_EXPERT', "專家");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "你真的�?�?置所有統計和訪�?者數據?");
DEFINE('_EW_SETTINGS_RESET_ALL', "�?置所有");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "�?置所有統計訪�?者數據");
DEFINE('_EW_SETTINGS_LANGUAGE', "語言");
DEFINE('_EW_SETTINGS_SAVED', "設置被�?存");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "添加您的IP ");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "到列表.");

// Other / mostly general.
DEFINE('_EW_TITLE', "一個實時的AJAX joomla監控");
DEFINE('_EW_BACK', "返回");
DEFINE('_EW_ACCESS_DENIED', "您沒有權�?查看此!");
DEFINE('_EW_LICENSE_AGREE', "我�?��?以上的�?款與�?件");
DEFINE('_EW_LICENSE_CONTINUE', "繼續");
DEFINE('_EW_SUCCESS', "�?作�?功");
DEFINE('_EW_RESET_SUCCESS', "所有統計和訪客數據擦除�?功");
DEFINE('_EW_RESET_ERROR', "數據沒有被�?功擦除,出�?�異常");
DEFINE('_EW_CREDITS_TITLE', "�?分");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "�?日和�?週的統計");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', " AJAX權�?被拒絕: 請從你在Joomla的configuration.php中指定的域訪�?這些統計數據");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "也許你�?�是忘記了在您的域�??�?�?�添加www.您的JavaScript試圖訪�?");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "從");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "什麼使得它�?為這是一個�?�?�的域.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "從�?��?�最新的擴展的代碼");
DEFINE('_EW_HEADER_CAST_YOUR', "請投下您的");
DEFINE('_EW_HEADER_VOTE', "投票");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "單擊顯示幫助�??示");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "懸�?�鼠標顯示幫助�??示");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "昨日增加");
DEFINE('_EW_TOOLTIP_HELP', "打開外部網上幫助");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "關閉此窗�?�");
DEFINE('_EW_TOOLTIP_PRINT', "打�?�");

// Goals.
DEFINE('_EW_GOALS_INSERT', "�?�入一個新的目標");
DEFINE('_EW_GOALS_UPDATE', "更新的目標編號.");
DEFINE('_EW_GOALS_ACTION', "行動");
DEFINE('_EW_GOALS_TITLE', "新目標");
DEFINE('_EW_GOALS_NEW', "新目標");
DEFINE('_EW_GOALS_RELOAD', "刷新");
DEFINE('_EW_GOALS_ADVANCED', "高級");
DEFINE('_EW_GOALS_NAME', "�??");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', " URI的�?件");
DEFINE('_EW_GOALS_URI_INVERSED', " URI的�??演�?件");
DEFINE('_EW_GOALS_GET_VAR', "GET變�? ");
DEFINE('_EW_GOALS_GET_CONDITION', "GET�?件");
DEFINE('_EW_GOALS_POST_VAR', "POST變�?");
DEFINE('_EW_GOALS_POST_CONDITION', " POST�?件");
DEFINE('_EW_GOALS_TITLE_CONDITION', "標題�?件");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "用戶�??�?件");
DEFINE('_EW_GOALS_IP_CONDITION', " IP�?件");
DEFINE('_EW_GOALS_IP_INVERSED', "IP�??演�?件");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "來自�?件");
DEFINE('_EW_GOALS_BLOCK', "阻止");
DEFINE('_EW_GOALS_REDIRECT', "�?定�?�到URL ");
DEFINE('_EW_GOALS_HITS', "點擊");
DEFINE('_EW_GOALS_ENABLED', "啟用");
DEFINE('_EW_GOALS_EDIT', "編輯");
DEFINE('_EW_GOALS_DELETE', "刪除");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "你將失去所有這一目標最近的統計數據.你真的�?刪除這個目標編號.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "國家");
DEFINE('_EW_FRONTEND_VISITORS', "訪客");
DEFINE('_EW_FRONTEND_TODAY', "今天");
DEFINE('_EW_FRONTEND_YESTERDAY', "昨天");
DEFINE('_EW_FRONTEND_THIS_WEEK', "本週");
DEFINE('_EW_FRONTEND_LAST_WEEK', "上週");
DEFINE('_EW_FRONTEND_THIS_MONTH', "本月");
DEFINE('_EW_FRONTEND_LAST_MONTH', "上個月");
DEFINE('_EW_FRONTEND_TOTAL', "總計");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch�?�行在調試模�?.通�?�這種方�?,你�?�以發�?�錯誤的原因.�?關閉它,請更改EXTRAWATCH_DEBUG 的值/components/com_extrawatch/config.php 從1到0 ");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "當統計在擴展模�?時顯示的最大行數.");
DEFINE('_EW_DESC_STATS_IP_HITS', "�?�去幾天中少於這個點擊數值的所有IP地�?�將被從IP歷�?�列表中刪除.");
DEFINE('_EW_DESC_STATS_URL_HITS', "�?�去幾天中少於這個點擊數值的所有URL將被從IP歷�?�列表中刪除.");
DEFINE('_EW_DESC_IGNORE_IP', "從統計中排除�?些IP.用一個新行分開.這裡您�?�以使用通�?符. <br/>例如: 192 .*會忽略192.168.51.31,192.168.16.2等.");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "訪客刷新時間以毫秒為單�?,默�?是2000,�?用隨�?修改此值.修改後請�?新載入ExtraWatch後�?�.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "統計刷新時間以毫秒為單�?,默�?是4000,�?用隨�?修改此值.修改後請�?新載入ExtraWatch後�?�.");
DEFINE('_EW_DESC_MAXID_BOTS', "多少機器人訪�?�?�?在一個數據庫中.");
DEFINE('_EW_DESC_MAXID_VISITORS', "多少真正的訪�?�?�?在一個數據庫中.");
DEFINE('_EW_DESC_LIMIT_BOTS', "在後�?�顯示多少機器人.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "在後�?�顯示多少真正的訪客.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "在長標題和URI中顯示的最多字符數.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "在�?��?�統計�?��?�中顯示的最多字符數.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "在數據庫中�?存的統計信�?�的天數,0 =無�?.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "當你和您的�?務器處在�?�?�的時�?�(正, 負多少�?時)");
DEFINE('_EW_DESC_WEEK_OFFSET', "週�??移,時間戳/(3600 * 24 * 7)從1.1.1970週數,這個�??移是一種修正,使其從星期一開始");
DEFINE('_EW_DESC_DAY_OFFSET', "日�??移,時間戳/(3600 * 24)給天數從1.1.1970,這個�??移校正在00:00開始");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(專業版功能)</b>�?使用�?�?�1x1px的一個空白圖標");
DEFINE('_EW_DESC_IP_STATS', "啟用IP地�?�統計.在一些國家�?�?較長時間的IP數據庫是被法律�?止的.使用者風險自負.");
DEFINE('_EW_DESC_HIDE_ADS', "如果後�?�廣告惹惱了你, 通�?�此設置�?�以隱�?.多�?你的�?�解,通�?�這些廣告的收入�?�以支�?該軟件的進一步發展");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "�?�消�?�中,如果你�?顯示的幫助�??示, �?�以懸�?�鼠標顯示幫助�??示.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "默�?為'REDIRECT_URL',這是標準的,如果你使用URL�?寫,�?�以設置為'SCRIPT_URL',如果它僅記錄index.php ");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "消�?�顯示被阻止的用戶或進一步的信�?�,你為什麼阻止這些用戶.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "幫助�??示寬度");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "說明文字高度");
DEFINE('_EW_DESC_TOOLTIP_URL', "在此處輸入URL,�?�以查看�?應的IP. {IP}訪�?者的IP地�?�將被替�?�.例如: http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "您�?�以輸入想從統計中忽略的URI. 在這裡, 您�?�以使用通�?符(*和？). 例如: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "在這裡指定一​​個目標�??字.這個�??字,你會在統計看到.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "域�??後的其他內容. 例如http://www.codegravity.com/projects/ the URI 是: /projects/ (例如: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', " GET變�?是一個你�?�以在URL的?或者&後�?�看到的符號.例如: http://www.codegravity.com/index.php?<u>name</u>= peter&amp;<u>surname</u>=smith. 你也�?�以使用<u>*</u> 來掃�??所有的GET變�?. (例如: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "在這裡你必須指定一個匹�?�?�?�字段的值. (例如:<b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "頗為相似,但我們檢查從表單�??​​交的值.因此,當您在您的網站有一個表單,有一個字段&lt;input type='text' name='< u>experiences</u>' /&gt;. (例如: <b> exper * CES </b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "一個匹�?POST字段中的值.例如:我們�?檢查用戶是�?�有Java經驗. (例如: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "相匹�?的�?�?�標題. (例如:<b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "一個登錄用戶�??. (例如:<b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', " IP用戶來自: (例如:<b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "用戶來自於的URL. (例如:<b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "用戶�?定�?�到您指定的URL.有一個比'blocking'更高的優先級: (例如:<b>http://www.codegravity.com/goaway.html</b >)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "多少個字符將被截斷的目標表");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(專業版功能)</b>�?�接至codegravity.com,你�?�以�?用它,但我們會感激您�?留它.�?�?");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "在�?�?�模塊顯示國家總的統計.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "如果你想交�?�觀眾/國家在�?�?�的順�?.�?�消�?�中它,訪客將首先出�?�.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "在�?�?�顯示國家的數�?");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "顯示國家的訪客在�?�?�模塊.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "多久緩存�?�?��?��?�的全部國家, 單�?為秒");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "多久緩存�?�?��?��?�的全部訪客, 單�?為秒");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "顯示在�?�?�的訪客: 今天.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "顯示在�?�?�的訪客: 昨天.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "顯示在�?�?�的訪客: 這個星期.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "顯示在�?�?�的訪客: 上週.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "顯示在�?�?�的訪客: 這個月.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "顯示在�?�?�的旅客: 上個月.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "顯示自ExtraWatch安�?後的全部訪客.此設置更改後在�?�?�生效的時間由後�?�變�?確定CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_LANGUAGE', "使用的語言文件.它們被放置在/components/com_extrawatch/lang/.如果你想創建一個全新的語言文件,首先檢查extrawatch 項目的主�?,如果語言文件�?然是�?存在的,�?��?復制默�?的english.php 到你�?翻譯的語言, 如. german.php �?存在�?�一個目錄.然後翻譯其中的所有�?�值.");
DEFINE('_EW_DESC_GOALS', "目標�?許你指定特殊的�?�數.當這些�?�數匹�?,目標計數器增加.這樣你就�?�以監視用戶是�?�具有訪�?�?個特定的URL,發布一個特定的值,有一個特定的用戶�??或來自一個特定的地�?�.您還�?�以阻止或�?定�?�這些用戶到其他一些URL .");
DEFINE('_EW_DESC_GOALS_INSERT', "在除了name以外的所有的字段,你都�?�以使用*和？作為通�?符.例如: ?ear (將匹�?: near, tear, ..), p*r (將匹�?: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "設置為1,如果你想阻擋訪客.除了顯示�?鎖消�?�,他�?會看到餘下的內容,沒有任何�?定�?�而且他的IP添加到'阻擋'統計中(例如: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "國家�?件");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "國家�??演�?件");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', " 2大寫字�?的國家代碼(如: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "內部");
DEFINE('_EW_STATS_FROM', "從");
DEFINE('_EW_STATS_TO', "�?");
DEFINE('_EW_STATS_ADD_TO_GOALS', "添加到目標");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "為這個國家添加目標");
DEFINE('_EW_MENU_REPORT_BUG', "報告錯誤或功能");
DEFINE('_EW_GOALS_COUNTRY', "國家");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "如果你想在�?�?�讓國家�??稱大寫顯示(例如:GERMANY, UNITED KINGDOM 而�?是Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "多久緩存�?�?��?��?�的用戶, 單�?為秒");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "在總計中顯示的�?始值: 在�?�?�.當你從其他統計工具�?�移. (如: 20000).�?新設置為0,如果你�?想使用此功能.");
DEFINE('_EW_DESC_IGNORE_USER', "忽略在這個文本框中列出的用戶.�?行一個. (如: 自己{�?�行} mark_ *)");
DEFINE('_EW_FRONTEND_USERS_MOST', "今天最活�?的用戶");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "啟用基於下�?�的spamword列表的阻止功能?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "最常見的垃圾郵件,防垃圾郵件程�?使用的詞語.您�?�以使用通�?符(如: ph?rmac*).如果上�?�的設置是啟用的,ExtraWatch將檢查攻擊者是�?�通�?�(HTTP POST請求)的形�?�?�你的網站�??交垃圾郵件詞彙. (如果表單�?�加載基於Joomla的網站- 論壇,評論,�?於阻止試圖�??交�?�種�?�能表單垃圾郵件機器人是相當有效的)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "防垃圾");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "在�?�?�用戶模塊的�?�接- �?許你指定一個當用戶點擊用戶�??時打開的URL,必須包�?�字符串{user},這將被實際的用戶�??代替. (例如: index. php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "在歷�?�標籤的最大值(例如: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "在訪�?列表中�?�顯示訪�?的最後一�?,而�?是所有");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "在訪�?列表中隱�?在訪�?�?�?�標題�?複的站點�??");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "�?存在訪�?歷�?�數據庫中的最大訪客數�?.�?心使用此設置,如果你有高�?�?,增長的�?�常快.請務必檢查狀態中的歷�?�表包�?�多少數據");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "�?�載時�?留數據庫表.勾�?�此�?�項,如果你正在�?��?�級之�?�?�載,並希望�?�?您的數據.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "您將夜間在收到�?一天報告的電�?郵件,方便你在早上閱讀");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "您將收到這些報告的電�?郵件地�?�");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "在電�?郵件報告�?�包括比例值比{value} 高的行.設置為0,如果你�?想使用此功能<i>(例如: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "在電�?郵件報告�?�包括變化值高於{value} ％的<b>1天正值</b>.設置為0,如果你�?想使用此功能<i>(例如: 5 )</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "在電�?郵件報告�?�包括變化值低於{value} ％的<b>1天負值</b>.設置為0,如果你�?想使用此功能<i>(例如: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "在電�?郵件報告�?�包括變化值高於{value} ％的<b>7天正值</b>.設置為0,如果你�?想使用此功能<i>(例如: 2 )</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "在電�?郵件報告�?�包括變化值低於{value} ％的<b>7天負值</b>.設置為0,如果你�?想使用此功能<i>(例如: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "在電�?郵件報告�?�包括變化值高於{value} ％的<b>28天正值</b>.設置為0,如果你�?想使用此功能<i>(例如: 2 )</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "在電�?郵件報告�?�包括變化值低於{value} ％的<b>28天負值</b>.設置為0,如果你�?想使用此功能<i>(例如: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(專業版功能)</b>啟用此設置,如果你想標誌�?�接中包�?�屬性rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "電�?郵件列�??的最大字符數.更改此值,如果您的email客戶端的消�?�窗�?�太�?");

DEFINE('_EW_MENU_HISTORY', "歷�?�");
DEFINE('_EW_MENU_EMAILS', "電�?郵件");
DEFINE('_EW_MENU_STATUS', " DB狀態");
DEFINE('_EW_DESC_BLOCKED', "這些IP阻止被防垃圾郵件功能");


DEFINE('_EW_HISTORY_VISITORS', "訪客歷�?�");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "顯示�?�有%d 的最後一個記錄.
                �?更改此值,去設置-&gt; 歷�?�與性能-&gt; HISTORY_MAX_DB_RECORDS.�?�?心,此設置會影響下�?�的數據加載時間. ");
DEFINE('_EW_MENU_BUG', "報告錯誤");
DEFINE('_EW_MENU_FEATURE', "請求功能");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "關�?�詞");

DEFINE('_EW_BLOCKING_UNBLOCK', "�?通");
DEFINE('_EW_STATS_KEYPHRASE', "關�?�詞短語");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "表的�??稱");
DEFINE('_EW_STATUS_DATABASE_ROWS', "行");
DEFINE('_EW_STATUS_DATABASE_DATA', "數據");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "總");

DEFINE('_EW_EMAIL_REPORTS', "電�?郵件報告");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "生�?從昨天起的電�?郵件�?�濾報告");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "電�?郵件值�?�濾");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "值");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "％");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', " 1天的變化");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', " 7天的變化");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', " 28天的變化");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch今天阻止了%d 的垃圾郵件發�?者的點擊,總記: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "�?鎖的IP 地�?�");
DEFINE('_EW_ANTISPAM_SETTINGS', "�??垃圾郵件設置");
DEFINE('_EW_TRAFFIC_AJAX', " AJAX更新交通(地圖除外)");


DEFINE('_EW_HISTORY_PREVIOUS', "以�?");
DEFINE('_EW_HISTORY_NEXT', "未來");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "國家的列數");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "國家的行數");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "是�?�顯示國�??");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "首先顯示標誌,然後�?百分比");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "�??演�?件");
DEFINE('_EW_GOALS_POST_INVERSED', "發表�??演�?件");
DEFINE('_EW_GOALS_TITLE_INVERSED', "標題�??演�?件");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "用戶�??�??演�?件");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "來自�??演�?件");

DEFINE('_EW_STATS_MAP', "上次訪�?地圖");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "請輸入<a href='http://www.ipinfodb.com/register.php' target='_blank'> ipinfodb.com </ A>�?�以顯示上次訪�?地圖:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "存儲的關�?�");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "請輸入您是從有效ipinfodb關�?�碼: <a href='http://www.ipinfodb.com/register.php' target='_blank'> ipinfodb.com </ A >");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "錯誤的請求: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "�??交表單字段:");
DEFINE('_EW_VISIT_URL_PARAMETERS', " URL�?�數:");
DEFINE('_EW_VISIT_ADD_PAGE', "添加�?�?�作為目標");
DEFINE('_EW_VISIT_BLOCK_IP', "�?鎖此IP地�?�");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', "添加的表單變�?作為目標");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', "將此的URL�?�數作為目標");

DEFINE('_EW_TREND_EMPTY', "空");

DEFINE('_EW_NOT_NUMBER', "警告: 您輸入的值�?是一個數字. ExtraWatch�?會正確工作!");
DEFINE('_EW_EVALUATION_LEFT', "這是15天評估版本.還剩下: <b>%d</b>.請購買終身<a href='http://www.codegravity.com/donate/extrawatch/ ' target='_blank'> ExtraWatch 許�?�證,為您的域</a> 當�?和後續的版本.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', "你的試用版已�?�期.請購買ExtraWatch ");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "許�?�證激活�?功.�?�?您");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>錯誤的許�?�證密鑰,您的域�??�?匹�?: </b> <br/>你輸入的域�??是�?�和你�??贈時填寫的相�?�,如下? <br/>點擊“<b>請求正確的激活密鑰</b>�?下�?�,或�?�繫: support@codegravity.com <br/> ");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "如果您一直看到上�?�消�?�,您的實際網站設置�?�能是錯誤的的.
                    打開comp​​onents/com_extrawatch/config.php 文件
                    註釋,並設置您的實際網站.例如:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "警告: 在您的�?覽器中的網站的�?置中的實際網站: %s and %s �?匹�?.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "到設置實際網站: %s 並繼續...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "刪除�?�接");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "知識庫");
DEFINE('_EW_ADMINHEADER_FLOW', "�?�?");
DEFINE('_EW_ADMINHEADER_GRAPHS', "圖");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "組件");
DEFINE('_EW_ADMINHEADER_REVIEW', "審查");
DEFINE('_EW_ADMINHEADER_WRITE', "寫");

DEFINE('_EW_FLOW_TRAFFIC', "交通�?");
DEFINE('_EW_FLOW_SELECT_PAGE', "�?�擇�?�?�:");
DEFINE('_EW_FLOW_OUTG_LINKS', "根外�?��?�接數:");
DEFINE('_EW_FLOW_NESTING', "嵌套級別:");
DEFINE('_EW_FLOW_SCALE', "�?模:");

DEFINE('_EW_COMERCIAL_AD_FREE', "帶廣告的�?費版本");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "�?�常感�?您的�??贈!​​");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "您的域%s 的註冊碼是: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "�?�在你�?�以刪除�?�接或隱�?在�?�?�的ExtraWatch標誌");


DEFINE('_EW_SIZES_LAST_CHECK', "最後一次檢查是在:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "�?色= 在/administrator 文件夾中component/module 的尺寸");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "組件");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "總計:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "大�?");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "刷新所有");

DEFINE('_EW_SIZEDATABASE_TABLE', "表");
DEFINE('_EW_SIZEDATABASE_SIZE', "大�?");
DEFINE('_EW_SIZEDATABASE_1DAY', " 1天的變化");
DEFINE('_EW_SIZEDATABASE_7DAY', " 7天的變化");
DEFINE('_EW_SIZEDATABASE_28DAY', " 28天的變化");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "沒有數據");
DEFINE('_EW_SIZEDATABASE_TOTAL', "共有:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "刷新所有");
DEFINE('_EW_SIZEMODULES_TOTAL', "共有:");
DEFINE('_EW_SIZEMODULES_MODULE', "模塊");
DEFINE('_EW_SIZEMODULES_SIZE', "大�?");

DEFINE('_EW_SIZES_FILES', "文件和目錄");
DEFINE('_EW_SIZES_BYTES', "字節");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "刷新");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_STATUS_DATABASE', "數據庫表的大�?");


DEFINE('_EW_DESC_IPINFODB_KEY', "最後訪�?地圖ipinfodb.com�?�: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "強制時�?��??移");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "更新");
DEFINE('_EW_MENU_UPDATE_TITLE', "備份和�?�級");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "在�?費版本里�?�?�用,請檢查許�?�證�?�項�?�");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "垃圾單詞�?�啟用");
DEFINE('_EW_SPAMWORD_LIST', "垃圾單詞列表");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "隱�?�?複的標題");
DEFINE('_EW_TRUNCATE_VISITS', "截斷訪�?");
DEFINE('_EW_TRUNCATE_STATS', "截斷統計");
DEFINE('_EW_TRUNCATE_GOALS', "截斷目標");
DEFINE('_EW_LIMIT_BOTS', "�?制機器人");
DEFINE('_EW_LIMIT_VISITORS', "�?制訪客");
DEFINE('_EW_TOOLTIP_WIDTH', "幫助�??示寬度");
DEFINE('_EW_TOOLTIP_HEIGHT', "說明文字高度");
DEFINE('_EW_TOOLTIP_URL', "幫助�??示的網�?�");
DEFINE('_EW_TOOLTIP_ONCLICK', "幫助�??示OnClick ");
DEFINE('_EW_IP_STATS', " IP統計");
DEFINE('_EW_IPINFODB_KEY', " IP信�?�數據庫的關�?�字");
DEFINE('_EW_ONLY_LAST_URI', "�?�有最後的URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "�?�?�隱�?標誌");
DEFINE('_EW_FRONTEND_NOFOLLOW', "�?�?�沒有後續");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "�?�?�沒有返回�?�接");
DEFINE('_EW_FRONTEND_USER_LINK', "�?�?�用戶�?�接");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "�?�?�的國家第一");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "�?�?�的國家�??稱");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "�?�?�國家的大寫");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "�?�?��?�國國旗第一");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "�?�?�的國家數�?");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "�?�?�國家的最大列數");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "�?�?�國家的最大行數");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "今天�?�?�訪客");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "昨天�?�?�訪客");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "本週�?�?�訪客");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "上週�?�?�訪客");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "本月�?�?�訪客");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "上個月�?�?�訪客");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "�?�?�隱�?訪客總記");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "�?�?�總計�?步");
DEFINE('_EW_HISTORY_MAX_VALUES', "歷�?�最高值");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "歷�?�最高記錄");
DEFINE('_EW_UPDATE_TIME_VISITS', "更新時間訪�?");
DEFINE('_EW_UPDATE_TIME_STATS', "更新時間統計");
DEFINE('_EW_STATS_MAX_ROWS', "統計最大行");
DEFINE('_EW_STATS_IP_HITS', "統計的IP點擊");
DEFINE('_EW_MAXID_BOTS', "最大ID機器人");
DEFINE('_EW_MAXID_VISITORS', " 最大ID訪客");
DEFINE('_EW_STATS_KEEP_DAYS', "統計�?�?天數");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "緩存�?�?�國家");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "緩存�?�?�訪客");

DEFINE('_EW_UNINSTALL_KEEP_DATA', "�?�載�?�?數據");
DEFINE('_EW_IGNORE_IP', "忽略IP ");
DEFINE('_EW_IGNORE_URI', "忽略URI ");
DEFINE('_EW_IGNORE_USER', "忽略用戶");
DEFINE('_EW_BLOCKING_MESSAGE', "�?�阻塞消�?�");
DEFINE('_EW_SERVER_URI_KEY', "�?務器URI關�?�碼");
DEFINE('_EW_SIZEDATABASE_RECORDS', "記錄");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', "為了使阻塞有效,你需�?把ExtraWatch代�?�髮佈在任何內容和表單之�?.例如:在您的模�?�的左�?�.
                    <br/>
                    進入模塊管�?�- >ExtraWatch代�?�- >�?�擇�?置左");

DEFINE('_EW_EMAIL_SEO_REPORTS', " SEO報告");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', " SEO�?晚電�?郵件報告啟用");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "觀看安�?演示");

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