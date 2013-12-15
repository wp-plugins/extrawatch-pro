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
DEFINE('_EW_MENU_STATS', "实时统计");
DEFINE('_EW_MENU_GOALS', "目标");
DEFINE('_EW_MENU_SETTINGS', "设置");
DEFINE('_EW_MENU_CREDITS', "积分");
DEFINE('_EW_MENU_FAQ', "常�?问题");
DEFINE('_EW_MENU_DOCUMENTATION', "文件");
DEFINE('_EW_MENU_LICENSE', "许�?��?");
DEFINE('_EW_MENU_DONATORS', "支�?者");
DEFINE('_EW_MENU_SUPPORT', "支�?ExtraWatch以便从�?��?�删除 ExtraWatch 的广告.");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "最新访客");
DEFINE('_EW_VISITS_BOTS', "机器人");
DEFINE('_EW_VISITS_CAME_FROM', "�?�自");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "你的ExtraWatch模�?�没有�?�布�?没有新的统计信�?�被记录下�?�.�?�布它,去模�?�部分并把其在所有网页上�?�布");
DEFINE('_EW_VISITS_PANE_LOADING', "载入访问...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "一周访问统计");
DEFINE('_EW_STATS_WEEK', "周");
DEFINE('_EW_STATS_THIS_WEEK', "本周");
DEFINE('_EW_STATS_UNIQUE', "独特");
DEFINE('_EW_STATS_LOADS', "负载");
DEFINE('_EW_STATS_HITS', "点击");
DEFINE('_EW_STATS_TODAY', "今天");
DEFINE('_EW_STATS_FOR', "为");
DEFINE('_EW_STATS_ALL_TIME', "所有时间");
DEFINE('_EW_STATS_EXPAND', "扩大");
DEFINE('_EW_STATS_COLLAPSE', "崩溃");
DEFINE('_EW_STATS_URI', "页");
DEFINE('_EW_STATS_COUNTRY', "国家");
DEFINE('_EW_STATS_USERS', "用户");
DEFINE('_EW_STATS_REFERERS', "查阅情况");
DEFINE('_EW_STATS_IP', "IPs");
DEFINE('_EW_STATS_BROWSER', "�?览器");
DEFINE('_EW_STATS_OS', "�?作系统");
DEFINE('_EW_STATS_KEYWORDS', "关键�?");
DEFINE('_EW_STATS_GOALS', "目标");
DEFINE('_EW_STATS_TOTAL', "共有");
DEFINE('_EW_STATS_DAILY', "日报");
DEFINE('_EW_STATS_DAILY_TITLE', "�?日统计");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "所有时间统计");
DEFINE('_EW_STATS_LOADING', "加载...");
DEFINE('_EW_STATS_LOADING_WAIT', "载入中...请等待");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', " IP阻塞");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "手动输入IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "输入你�?阻止IP地�?�. (如217.242.11.54或217 * 217.242 *阻止所有IP地�?�匹�?的通�?符)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "实时阻塞切�?�");
DEFINE('_EW_STATS_PANE_LOADING', "载入统计...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "设置");
DEFINE('_EW_SETTINGS_DEFAULT', "默认");
DEFINE('_EW_SETTINGS_SAVE', "�?存");
DEFINE('_EW_SETTINGS_APPEARANCE', "外观");
DEFINE('_EW_SETTINGS_FRONTEND', "�?�?�");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "历�?�与性能");
DEFINE('_EW_SETTINGS_ADVANCED', "高级");
DEFINE('_EW_SETTINGS_IGNORE', "忽略");
DEFINE('_EW_SETTINGS_BLOCKING', "阻止");
DEFINE('_EW_SETTINGS_EXPERT', "专家");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "你真的�?�?置所有统计和访问者数�?�?");
DEFINE('_EW_SETTINGS_RESET_ALL', "�?置所有");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "�?置所有统计访问者数�?�");
DEFINE('_EW_SETTINGS_LANGUAGE', "语言");
DEFINE('_EW_SETTINGS_SAVED', "设置被�?存");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "添加您的IP ");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "到列表.");

// Other / mostly general.
DEFINE('_EW_TITLE', "一个实时的AJAX joomla监控");
DEFINE('_EW_BACK', "返回");
DEFINE('_EW_ACCESS_DENIED', "您没有�?��?查看此!");
DEFINE('_EW_LICENSE_AGREE', "我�?��?以上的�?�款与�?�件");
DEFINE('_EW_LICENSE_CONTINUE', "继续");
DEFINE('_EW_SUCCESS', "�?作�?功");
DEFINE('_EW_RESET_SUCCESS', "所有统计和访客数�?�擦除�?功");
DEFINE('_EW_RESET_ERROR', "数�?�没有被�?功擦除,出现异常");
DEFINE('_EW_CREDITS_TITLE', "积分");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "�?日和�?周的统计");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', " AJAX�?��?被拒�?: 请从你在Joomla的configuration.php中指定的域访问这些统计数�?� ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "也许你�?�是忘记了在您的域�??�?�?�添加www.您的JavaScript试图访问");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "从");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "什么使得它认为这是一个�?�?�的域.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "从获�?�最新的扩展的代�?");
DEFINE('_EW_HEADER_CAST_YOUR', "请投下您的");
DEFINE('_EW_HEADER_VOTE', "投票");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "�?�击显示帮助�??示");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "悬�?�鼠标显示帮助�??示");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "昨日增加");
DEFINE('_EW_TOOLTIP_HELP', "打开外部网上帮助");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "关闭此窗�?�");
DEFINE('_EW_TOOLTIP_PRINT', "打�?�");

// Goals.
DEFINE('_EW_GOALS_INSERT', "�?�入一个新的目标");
DEFINE('_EW_GOALS_UPDATE', "更新的目标编�?�.");
DEFINE('_EW_GOALS_ACTION', "行动");
DEFINE('_EW_GOALS_TITLE', "新目标");
DEFINE('_EW_GOALS_NEW', "新目标");
DEFINE('_EW_GOALS_RELOAD', "刷新");
DEFINE('_EW_GOALS_ADVANCED', "高级");
DEFINE('_EW_GOALS_NAME', "�??");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', " URI的�?�件");
DEFINE('_EW_GOALS_URI_INVERSED', " URI的�??演�?�件");
DEFINE('_EW_GOALS_GET_VAR', "GET�?��? ");
DEFINE('_EW_GOALS_GET_CONDITION', "GET�?�件");
DEFINE('_EW_GOALS_POST_VAR', "POST�?��?");
DEFINE('_EW_GOALS_POST_CONDITION', " POST�?�件");
DEFINE('_EW_GOALS_TITLE_CONDITION', "标题�?�件");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "用户�??�?�件");
DEFINE('_EW_GOALS_IP_CONDITION', " IP�?�件");
DEFINE('_EW_GOALS_IP_INVERSED', "IP�??演�?�件");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "�?�自�?�件");
DEFINE('_EW_GOALS_BLOCK', "阻止");
DEFINE('_EW_GOALS_REDIRECT', "�?定�?�到URL ");
DEFINE('_EW_GOALS_HITS', "点击");
DEFINE('_EW_GOALS_ENABLED', "�?�用");
DEFINE('_EW_GOALS_EDIT', "编辑");
DEFINE('_EW_GOALS_DELETE', "删除");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "你将失去所有这一目标最近的统计数�?�.你真的�?删除这个目标编�?�.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "国家");
DEFINE('_EW_FRONTEND_VISITORS', "访客");
DEFINE('_EW_FRONTEND_TODAY', "今天");
DEFINE('_EW_FRONTEND_YESTERDAY', "昨天");
DEFINE('_EW_FRONTEND_THIS_WEEK', "本周");
DEFINE('_EW_FRONTEND_LAST_WEEK', "上周");
DEFINE('_EW_FRONTEND_THIS_MONTH', "本月");
DEFINE('_EW_FRONTEND_LAST_MONTH', "上个月");
DEFINE('_EW_FRONTEND_TOTAL', "总计");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch�?行在调试模�?.通过这�?方�?,你�?�以�?�现错误的原因.�?关闭它,请更改EXTRAWATCH_DEBUG 的值 /components/com_extrawatch/config.php 从1到0 ");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "当统计在扩展模�?时显示的最大行数.");
DEFINE('_EW_DESC_STATS_IP_HITS', "过去几天中少于这个点击数值的所有IP地�?�将被从IP历�?�列表中删除.");
DEFINE('_EW_DESC_STATS_URL_HITS', "过去几天中少于这个点击数值的所有URL将被从IP历�?�列表中删除.");
DEFINE('_EW_DESC_IGNORE_IP', "从统计中排除�?些IP.用一个新行分开.这里您�?�以使用通�?符. <br/>例如: 192 .*会忽略192.168.51.31,192.168.16.2等.");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "访客刷新时间以毫秒为�?��?,默认是2000,�?用�?�?修改此值.修改�?�请�?新载入ExtraWatch�?��?�.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "统计刷新时间以毫秒为�?��?,默认是4000,�?用�?�?修改此值.修改�?�请�?新载入ExtraWatch�?��?�.");
DEFINE('_EW_DESC_MAXID_BOTS', "多少机器人访问�?�?在一个数�?�库中.");
DEFINE('_EW_DESC_MAXID_VISITORS', "多少真正的访问�?�?在一个数�?�库中.");
DEFINE('_EW_DESC_LIMIT_BOTS', "在�?��?�显示多少机器人.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "在�?��?�显示多少真正的访客.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "在长标题和URI中显示的最多字符数.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "在�?�侧统计�?��?�中显示的最多字符数.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "在数�?�库中�?存的统计信�?�的天数,0 =无�?.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "当你和您的�?务器处在�?�?�的时区(正, 负多少�?时)");
DEFINE('_EW_DESC_WEEK_OFFSET', "周�??移,时间戳/(3600 * 24 * 7)从1.1.1970周数,这个�??移是一�?修正,使其从星期一开始 ");
DEFINE('_EW_DESC_DAY_OFFSET', "日�??移,时间戳/(3600 * 24)给天数从1.1.1970,这个�??移校正在00:00开始 ");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(专业版功能)</b>�?使用�?�?�1x1px的一个空白图标");
DEFINE('_EW_DESC_IP_STATS', "�?�用IP地�?�统计.在一些国家�?�?较长时间的IP数�?�库是被法律�?止的.使用者风险自负.");
DEFINE('_EW_DESC_HIDE_ADS', "如果�?��?�广告惹�?�了你, 通过此设置�?�以�?�?.多谢你的�?�解,通过这些广告的收入�?�以支�?该软件的进一步�?�展");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "�?�消选中,如果你�?显示的帮助�??示, �?�以悬�?�鼠标显示帮助�??示.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "默认为'REDIRECT_URL',这是标准的,如果你使用URL�?写,�?�以设置为'SCRIPT_URL',如果它仅记录 index.php ");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "消�?�显示被阻止的用户或进一步的信�?�,你为什么阻止这些用户.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "帮助�??示宽度");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "说明文字高度");
DEFINE('_EW_DESC_TOOLTIP_URL', "在此处输入URL,�?�以查看对应的IP. {IP}访问者的IP地�?�将被替�?�.例如: http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "您�?�以输入想从统计中忽略的URI. 在这里, 您�?�以使用通�?符(*和？). 例如:  /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "在这里指定一​​个目标�??字.这个�??字,你会在统计看到.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "域�??�?�的其他内容. 例如 http://www.codegravity.com/projects/ the URI 是: /projects/ (例如: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', " GET�?��?是一个你�?�以在URL的?或者&�?��?�看到的符�?�.例如: http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. 你也�?�以使用 <u>*</u> �?�扫�??所有的GET�?��?. (例如: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "在这里你必须指定一个匹�?�?�?�字段的值. (例如:<b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "颇为相似,但我们检查从表�?��??交的值.因此,当您在您的网站有一个表�?�,有一个字段&lt;input type='text' name='<u>experiences</u>' /&gt;. (例如: <b> exper * CES </b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "一个匹�?POST字段中的值.例如:我们�?检查用户是�?�有Java�?验. (例如: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "相匹�?的页�?�标题. (例如:<b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "一个登录用户�??. (例如:<b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', " IP用户�?�自: (例如:<b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "用户�?�自于的URL. (例如:<b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "用户�?定�?�到您指定的URL.有一个比'blocking'更高的优先级: (例如:<b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "多少个字符将被截断的目标表");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(专业版功能)</b>链接至codegravity.com,你�?�以�?用它,但我们会感激您�?留它.谢谢");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "在�?�?�模�?�显示国家总的统计.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "如果你想交�?�观众/国家在�?�?�的顺�?.�?�消选中它,访客将首先出现.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "在�?�?�显示国家的数�?");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "显示国家的访客在�?�?�模�?�.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "多久缓存�?�?�获�?�的全部国家, �?��?为秒");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "多久缓存�?�?�获�?�的全部访客, �?��?为秒");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "显示在�?�?�的访客: 今天.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "显示在�?�?�的访客: 昨天.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "显示在�?�?�的访客: 这个星期.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "显示在�?�?�的访客: 上周.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "显示在�?�?�的访客: 这个月.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "显示在�?�?�的旅客: 上个月.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "显示自ExtraWatch安装�?�的全部访客.此设置更改�?�在�?�?�生效的时间由�?��?��?��?确定 CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_LANGUAGE', "使用的语言文件.它们被放置在/components/com_extrawatch/lang/.如果你想创建一个全新的语言文件,首先检查 extrawatch 项目的主页,如果语言文件�?然是�?存在的,�?��?�?制默认的 english.php 到你�?翻译的语言, 如. german.php �?存在�?�一个目录.然�?�翻译其中的所有键值.");
DEFINE('_EW_DESC_GOALS', "目标�?许你指定特殊的�?�数.当这些�?�数匹�?,目标计数器增加.这样你就�?�以监视用户是�?�具有访问�?个特定的URL,�?�布一个特定的值,有一个特定的用户�??或�?�自一个特定的地�?�.您还�?�以阻止或�?定�?�这些用户到其他一些URL .");
DEFINE('_EW_DESC_GOALS_INSERT', "在除了name以外的所有的字段,你都�?�以使用*和？作为通�?符.例如: ?ear (将匹�?: near, tear, ..),  p*r (将匹�?: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "设置为1,如果你想阻挡访客.除了显示�?�?消�?�,他�?会看到余下的内容,没有任何�?定�?�而且他的IP添加到'阻挡'统计中(例如:<b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "国家�?�件");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "国家�??演�?�件");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', " 2大写字�?的国家代�?(如: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "内部");
DEFINE('_EW_STATS_FROM', "从");
DEFINE('_EW_STATS_TO', "�?");
DEFINE('_EW_STATS_ADD_TO_GOALS', "添加到目标");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "为这个国家添加目标");
DEFINE('_EW_MENU_REPORT_BUG', "报告错误或功能");
DEFINE('_EW_GOALS_COUNTRY', "国家");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "如果你想在�?�?�让国家�??称大写显示(例如:GERMANY, UNITED KINGDOM 而�?是 Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "多久缓存�?�?�获�?�的用户, �?��?为秒");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "在总计中显示的�?始值: 在�?�?�.当你从其他统计工具�?移. (如: 20000).�?新设置为0,如果你�?想使用此功能.");
DEFINE('_EW_DESC_IGNORE_USER', "忽略在这个文本框中列出的用户.�?行一个. (如: 自己{�?�行} mark_ *)");
DEFINE('_EW_FRONTEND_USERS_MOST', "今天最活跃的用户");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "�?�用基于下�?�的spamword列表的阻止功能?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "最常�?的垃圾邮件,防垃圾邮件程�?使用的�?语.您�?�以使用通�?符(如: ph?rmac*).如果上�?�的设置是�?�用的,ExtraWatch将检查攻击者是�?�通过(HTTP POST请求)的形�?�?�你的网站�??交垃圾邮件�?汇. (如果表�?��?�加载基于Joomla的网站 - 论�?�,评论,对于阻止试图�??交�?��?�?�能表�?�垃圾邮件机器人是相当有效的)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "防垃圾");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "在�?�?�用户模�?�的链接 - �?许你指定一个当用户点击用户�??时打开的URL,必须包�?�字符串 {user},这将被实际的用户�??代替. (例如: index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "关键�?");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "在历�?�标签的最大值(例如: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "在访问列表中�?�显示访问的最�?�一页,而�?是所有");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "在访问列表中�?�?在访问页�?�标题�?�?的站点�??");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "�?存在访问历�?�数�?�库中的最大访客数�?.�?心使用此设置,如果你有高�?�?,增长的�?�常快.请务必检查状�?中的历�?�表包�?�多少数�?�");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "�?�载时�?留数�?�库表.勾选此选项,如果你正在�?��?�级之�?�?�载,并希望�?�?您的数�?�.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "您将夜间在收到�?一天报告的电�?邮件,方便你在早上阅读");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "您将收到这些报告的电�?邮件地�?�");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "在电�?邮件报告�?�包括比例值比 {value} 高的行.设置为0,如果你�?想使用此功能<i>(例如: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "在电�?邮件报告�?�包括�?�化值高于{value} ％的 <b>1天正值</b>.设置为0,如果你�?想使用此功能<i>(例如: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "在电�?邮件报告�?�包括�?�化值低于{value} ％的 <b>1天负值</b>.设置为0,如果你�?想使用此功能<i>(例如: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "在电�?邮件报告�?�包括�?�化值高于{value} ％的 <b>7天正值</b>.设置为0,如果你�?想使用此功能<i>(例如: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "在电�?邮件报告�?�包括�?�化值低于{value} ％的 <b>7天负值</b>.设置为0,如果你�?想使用此功能<i>(例如: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "在电�?邮件报告�?�包括�?�化值高于{value} ％的 <b>28天正值</b>.设置为0,如果你�?想使用此功能<i>(例如: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "在电�?邮件报告�?�包括�?�化值低于{value} ％的 <b>28天负值</b>.设置为0,如果你�?想使用此功能<i>(例如: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(专业版功能)</b>�?�用此设置,如果你想标志链接中包�?�属性rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "电�?邮件列�??的最大字符数.更改此值,如果您的email客户端的消�?�窗�?�太�?");

DEFINE('_EW_MENU_HISTORY', "历�?�");
DEFINE('_EW_MENU_EMAILS', "电�?邮件");
DEFINE('_EW_MENU_STATUS', " DB状�?");
DEFINE('_EW_DESC_BLOCKED', "这些IP阻止被防垃圾邮件功能");


DEFINE('_EW_HISTORY_VISITORS', "访客历�?�");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "显示�?�有 %d 的最�?�一个记录.
                �?更改此值,去设置 -&gt; 历�?�与性能 -&gt; HISTORY_MAX_DB_RECORDS.�?�?心,此设置会影�?下�?�的数�?�加载时间.  ");
DEFINE('_EW_MENU_BUG', "报告错误");
DEFINE('_EW_MENU_FEATURE', "请求功能");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "关键�?");

DEFINE('_EW_BLOCKING_UNBLOCK', "�?通");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "表的�??称");
DEFINE('_EW_STATUS_DATABASE_ROWS', "行");
DEFINE('_EW_STATUS_DATABASE_DATA', "数�?�");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "总");

DEFINE('_EW_EMAIL_REPORTS', "电�?邮件报告");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "生�?从昨天起的电�?邮件过滤报告");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "电�?邮件值过滤");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "值");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "％");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', " 1天的�?�化");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', " 7天的�?�化");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', " 28天的�?�化");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch今天阻止了 %d 的垃圾邮件�?��?者的点击,总记: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "�?�?的 IP 地�?�");
DEFINE('_EW_ANTISPAM_SETTINGS', "�??垃圾邮件设置");
DEFINE('_EW_TRAFFIC_AJAX', " AJAX更新交通(地图除外)");


DEFINE('_EW_HISTORY_PREVIOUS', "以�?");
DEFINE('_EW_HISTORY_NEXT', "未�?�");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "国家的列数");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "国家的行数");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "是�?�显示国�??");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "首先显示标志,然�?��?百分比");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "�??演�?�件");
DEFINE('_EW_GOALS_POST_INVERSED', "�?�表�??演�?�件");
DEFINE('_EW_GOALS_TITLE_INVERSED', "标题�??演�?�件");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "用户�??�??演�?�件");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "�?�自�??演�?�件");

DEFINE('_EW_STATS_MAP', "上次访问地图");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "请输入<a href='http://www.ipinfodb.com/register.php' target='_blank'> ipinfodb.com </ A>键以显示上次访问地图:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "存储的关键");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "请输入您是从有效ipinfodb关键�?: <a href='http://www.ipinfodb.com/register.php' target='_blank'> ipinfodb.com </ A >");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "错误的请求: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "�??交表�?�字段:");
DEFINE('_EW_VISIT_URL_PARAMETERS', " URL�?�数:");
DEFINE('_EW_VISIT_ADD_PAGE', "添加页�?�作为目标");
DEFINE('_EW_VISIT_BLOCK_IP', "�?�?此IP地�?�");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', "添加的表�?��?��?作为目标");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', "将此的URL�?�数作为目标");

DEFINE('_EW_TREND_EMPTY', "空");

DEFINE('_EW_NOT_NUMBER', "警告: 您输入的值�?是一个数字. ExtraWatch�?会正确工作!");
DEFINE('_EW_EVALUATION_LEFT', "这是15天评估版本.还剩下: <b>%d</b>.请购买终身<a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'> ExtraWatch 许�?��?,为您的域</a> 当�?和�?�续的版本.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', "你的试用版已过期.请购买 ExtraWatch ");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "许�?��?激活�?功.谢谢您");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>错误的许�?��?密钥,您的域�??�?匹�?: </b> <br/>你输入的域�??是�?�和你�??赠时填写的相�?�,如下? <br/>点击“<b>请求正确的激活密钥</b>�?下�?�,或�?�系: support@codegravity.com <br/> ");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "如果您一直看到上�?�消�?�,您的实际网站设置�?�能是错误的的.
                    打开 components/com_extrawatch/config.php 文件
                    注释,并设置您的实际网站.例如:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "警告: 在您的�?览器中的网站的�?置中的实际网站: %s and %s �?匹�?.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "到设置实际网站:  %s 并继续...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "删除链接");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "知识库");
DEFINE('_EW_ADMINHEADER_FLOW', "�?�?");
DEFINE('_EW_ADMINHEADER_GRAPHS', "图");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "组件");
DEFINE('_EW_ADMINHEADER_REVIEW', "审查");
DEFINE('_EW_ADMINHEADER_WRITE', "写");

DEFINE('_EW_FLOW_TRAFFIC', "交通�?");
DEFINE('_EW_FLOW_SELECT_PAGE', "选择页�?�:");
DEFINE('_EW_FLOW_OUTG_LINKS', "根外�?�链接数:");
DEFINE('_EW_FLOW_NESTING', "嵌套级别:");
DEFINE('_EW_FLOW_SCALE', "规模:");

DEFINE('_EW_COMERCIAL_AD_FREE', "带广告的�?费版本");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "�?�常感谢您的�??赠!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "您的域 %s 的注册�?是: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "现在你�?�以删除链接或�?�?在�?�?�的ExtraWatch标志");


DEFINE('_EW_SIZES_LAST_CHECK', "最�?�一次检查是在:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "�?色= 在 /administrator 文件夹中 component/module 的尺寸");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "组件");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "总计:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "大�?");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "刷新所有");

DEFINE('_EW_SIZEDATABASE_TABLE', "表");
DEFINE('_EW_SIZEDATABASE_SIZE', "大�?");
DEFINE('_EW_SIZEDATABASE_1DAY', " 1天的�?�化");
DEFINE('_EW_SIZEDATABASE_7DAY', " 7天的�?�化");
DEFINE('_EW_SIZEDATABASE_28DAY', " 28天的�?�化");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "没有数�?�");
DEFINE('_EW_SIZEDATABASE_TOTAL', "共有:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "刷新所有");
DEFINE('_EW_SIZEMODULES_TOTAL', "共有:");
DEFINE('_EW_SIZEMODULES_MODULE', "模�?�");
DEFINE('_EW_SIZEMODULES_SIZE', "大�?");

DEFINE('_EW_SIZES_FILES', "文件和目录");
DEFINE('_EW_SIZES_BYTES', "字节");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "刷新");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_STATUS_DATABASE', "数�?�库表的大�?");


DEFINE('_EW_DESC_IPINFODB_KEY', "最�?�访问地图ipinfodb.com键: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "强制时区�??移");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "更新");
DEFINE('_EW_MENU_UPDATE_TITLE', "备份和�?�级");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "在�?费版本里�?�?�用,请检查许�?��?选项�?�");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "垃圾 �?��?�?��?�用");
DEFINE('_EW_SPAMWORD_LIST', "垃圾 �?��?列表");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "�?�?�?�?的标题");
DEFINE('_EW_TRUNCATE_VISITS', "截断访问");
DEFINE('_EW_TRUNCATE_STATS', "截断统计");
DEFINE('_EW_TRUNCATE_GOALS', "截断目标");
DEFINE('_EW_LIMIT_BOTS', "�?制机器人");
DEFINE('_EW_LIMIT_VISITORS', "�?制访客");
DEFINE('_EW_TOOLTIP_WIDTH', "帮助�??示宽度");
DEFINE('_EW_TOOLTIP_HEIGHT', "说明文字高度");
DEFINE('_EW_TOOLTIP_URL', "帮助�??示的网�?�");
DEFINE('_EW_TOOLTIP_ONCLICK', "帮助�??示 OnClick ");
DEFINE('_EW_IP_STATS', " IP统计");
DEFINE('_EW_IPINFODB_KEY', " IP信�?�数�?�库的关键字");
DEFINE('_EW_ONLY_LAST_URI', "�?�有最�?�的URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "�?�?��?�?标志");
DEFINE('_EW_FRONTEND_NOFOLLOW', "�?�?�没有�?�续");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "�?�?�没有返回链接");
DEFINE('_EW_FRONTEND_USER_LINK', "�?�?�用户链接");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "�?�?�的国家第一");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "�?�?�的国家�??称");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "�?�?�国家的大写");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "�?�?��?�国国旗第一");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "�?�?�的国家数�?");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "�?�?�国家的最大列数 ");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "�?�?�国家的最大行数");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "今天�?�?�访客");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "昨天�?�?�访客");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "本周�?�?�访客");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "上周�?�?�访客");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "本月�?�?�访客");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "上个月�?�?�访客");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "�?�?��?�?访客总记");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "�?�?�总计�?步");
DEFINE('_EW_HISTORY_MAX_VALUES', "历�?�最高值");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "历�?�最高记录");
DEFINE('_EW_UPDATE_TIME_VISITS', "更新时间访问");
DEFINE('_EW_UPDATE_TIME_STATS', "更新时间统计");
DEFINE('_EW_STATS_MAX_ROWS', "统计最大行");
DEFINE('_EW_STATS_IP_HITS', "统计的IP点击");
DEFINE('_EW_MAXID_BOTS', "最大ID机器人");
DEFINE('_EW_MAXID_VISITORS', " 最大ID访客");
DEFINE('_EW_STATS_KEEP_DAYS', "统计�?�?天数");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "缓存�?�?�国家");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "缓存�?�?�访客");

DEFINE('_EW_UNINSTALL_KEEP_DATA', "�?�载�?�?数�?�");
DEFINE('_EW_IGNORE_IP', "忽略IP ");
DEFINE('_EW_IGNORE_URI', "忽略URI ");
DEFINE('_EW_IGNORE_USER', "忽略用户");
DEFINE('_EW_BLOCKING_MESSAGE', "�?�阻塞消�?�");
DEFINE('_EW_SERVER_URI_KEY', "�?务器URI关键�?");
DEFINE('_EW_SIZEDATABASE_RECORDS', "记录");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', "为了使阻塞有效,你需�?把ExtraWatch代�?� �?�布在任何内容和表�?�之�?.例如:在您的模�?�的左侧.
                    <br/>
                    进入模�?�管�?� - >ExtraWatch代�?� - >选择�?置左");

DEFINE('_EW_EMAIL_SEO_REPORTS', " SEO报告");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', " SEO�?晚电�?邮件报告�?�用");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "观看安装演示");

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