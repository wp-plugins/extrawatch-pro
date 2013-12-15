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
DEFINE('_EW_MENU_STATS', "חי סטטיסטיקות");
DEFINE('_EW_MENU_GOALS', "מטרות");
DEFINE('_EW_MENU_SETTINGS', "הגדרות");
DEFINE('_EW_MENU_CREDITS', "קרדיטי�?");
DEFINE('_EW_MENU_FAQ', "FAQ");
DEFINE('_EW_MENU_DOCUMENTATION', "תִעוּד");
DEFINE('_EW_MENU_LICENSE', "רִשָ�?יוֹן");
DEFINE('_EW_MENU_DONATORS', "תומכי");
DEFINE('_EW_MENU_SUPPORT', "תמיכה ExtraWatch ולקבל �?ת המודעות שלך להסיר backend.");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "מבקרי�? �?חרוני�?");
DEFINE('_EW_VISITS_BOTS', "בוטי�?");
DEFINE('_EW_VISITS_CAME_FROM', "ב�?");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "מודול ExtraWatch שלך ל�? מתפרס�?! הנתוני�? הסטטיסטיי�? ל�? חדש מתועדות. כדי לפרס�? �?ת זה, ללכת מודולי�? קטע ולפרס�? �?ותו בכל הדפי�?.");
DEFINE('_EW_VISITS_PANE_LOADING', "טוען ביקורי�?...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "בקר סטטיסטיקת שבוע");
DEFINE('_EW_STATS_WEEK', "שָ�?בוּעַ");
DEFINE('_EW_STATS_THIS_WEEK', "השבוע");
DEFINE('_EW_STATS_UNIQUE', "יְחִידָ�?ִי");
DEFINE('_EW_STATS_LOADS', "המון");
DEFINE('_EW_STATS_HITS', "להיטי�?");
DEFINE('_EW_STATS_TODAY', "הַיוֹ�?");
DEFINE('_EW_STATS_FOR', "for");
DEFINE('_EW_STATS_ALL_TIME', "כל הזמן");
DEFINE('_EW_STATS_EXPAND', "לְהַגדִיל");
DEFINE('_EW_STATS_COLLAPSE', "הִתמוֹטְטוּת");
DEFINE('_EW_STATS_URI', "דפי�?");
DEFINE('_EW_STATS_COUNTRY', "מדינות");
DEFINE('_EW_STATS_USERS', "משתמשי�?");
DEFINE('_EW_STATS_REFERERS', "משייכי�?");
DEFINE('_EW_STATS_IP', "IPs");
DEFINE('_EW_STATS_BROWSER', "דפדפני�?");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "מילות מפתח");
DEFINE('_EW_STATS_GOALS', "מטרות");
DEFINE('_EW_STATS_TOTAL', "גָמוּר");
DEFINE('_EW_STATS_DAILY', "יוֹמִי");
DEFINE('_EW_STATS_DAILY_TITLE', "Daily stats");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "כל זמן stats");
DEFINE('_EW_STATS_LOADING', "הַטעָנָה...");
DEFINE('_EW_STATS_LOADING_WAIT', "הַטעָנָה... �?נ�? המתן");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IP הֵחָסְמוּת");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "הזן IP ב�?ופן ידני");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "הזן כתובת ה-IP שברצונך לחסו�?. (eg. 217.242.11.54 or 217.* or 217.242.* לחסו�? �?ת כל כתובות IP הת�?מת כלליי�?)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "ב�?מת לעבור חסימת ");
DEFINE('_EW_STATS_PANE_LOADING', "טוען stats...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "הגדרות");
DEFINE('_EW_SETTINGS_DEFAULT', "בְּרֵרַת מֶחדָל");
DEFINE('_EW_SETTINGS_SAVE', "לְהַצִיל");
DEFINE('_EW_SETTINGS_APPEARANCE', "הוֹפָעָה");
DEFINE('_EW_SETTINGS_FRONTEND', "Frontend");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "היסטוריה של ביצועי�?");
DEFINE('_EW_SETTINGS_ADVANCED', "מִתקַדֵ�?");
DEFINE('_EW_SETTINGS_IGNORE', "לְהִתְעַלֵ�?");
DEFINE('_EW_SETTINGS_BLOCKING', "הֵחָסְמוּת");
DEFINE('_EW_SETTINGS_EXPERT', "מוּמחֶה");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "ה�?�? �?תה ב�?מת רוצה ל�?פס �?ת כל הסטטיסטיקה והנתוני�? המבקר?");
DEFINE('_EW_SETTINGS_RESET_ALL', "�?יפוס כל");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "�?יפוס כל נתון סטטיסטי ונתוני�? המבקר");
DEFINE('_EW_SETTINGS_LANGUAGE', "שָׂפָה");
DEFINE('_EW_SETTINGS_SAVED', "הגדרות ניצלו");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "הוסף ה-IP שלך");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "לרשימה.");

// Other / mostly general.
DEFINE('_EW_TITLE', "בזמן �?מת AJAX joomla לפקח");
DEFINE('_EW_BACK', "Back");
DEFINE('_EW_ACCESS_DENIED', "�?תה ל�? צריך שו�? הרש�?ות להציג �?ת זה!");
DEFINE('_EW_LICENSE_AGREE', "�?ני מסכי�? לתנ�?י &amp;התנ�?י�? לעיל");
DEFINE('_EW_LICENSE_CONTINUE', "לְהִמָשֵ�?ך");
DEFINE('_EW_SUCCESS', "מבצע מוצלח");
DEFINE('_EW_RESET_SUCCESS', "כל הנתוני�? ו�?ת הסטטיסטיקה המבקר נמחק בהצלחה");
DEFINE('_EW_RESET_ERROR', "הנתוני�? ל�? נמחק בהצלחה, משהו השתבש.");
DEFINE('_EW_CREDITS_TITLE', "קרדיטי�?");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "סטטיסטיקת יומי שבועי של");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "רשות AJAX הכחיש: בבקשה להציג �?ת נתוני תחו�? שציינת configuration.php של ג'ומלה- ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "�?ולי �?תה שכחת רק www. לפני ש�? הדומיין שלך. Javascript שלך הי�? מנסה לגשת ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "מִ-");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "מה שעושה �?ותו חושב שזה תחו�? שונה.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "קבל קוד סיומת של ה�?חרוני�?");
DEFINE('_EW_HEADER_CAST_YOUR', "בבקשה להטיל שלך");
DEFINE('_EW_HEADER_VOTE', "מִניָן");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "לחץ כדי להציג tooltip");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "ריחוף העכבר מעל להר�?ות tooltip");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "�?ֶתמוֹל&apos;s לְהַגדִיל");
DEFINE('_EW_TOOLTIP_HELP', "פתיחת לעזור חיצוני ב�?ינטרנט");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "סגור חלון זה");
DEFINE('_EW_TOOLTIP_PRINT', "דְפוּס");

// Goals.
DEFINE('_EW_GOALS_INSERT', "הוספת מטרה חדשה");
DEFINE('_EW_GOALS_UPDATE', "עדכון מספר המטרה.");
DEFINE('_EW_GOALS_ACTION', "מַעֲשֶׂה");
DEFINE('_EW_GOALS_TITLE', "ניו המטרה");
DEFINE('_EW_GOALS_NEW', "ניו המטרה");
DEFINE('_EW_GOALS_RELOAD', "לְשַ�?טְעֵן");
DEFINE('_EW_GOALS_ADVANCED', "מִתקַדֵ�?");
DEFINE('_EW_GOALS_NAME', "לָתֵת שֵ�?�?");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI מַצָב");
DEFINE('_EW_GOALS_URI_INVERSED', "URI inversed מצב");
DEFINE('_EW_GOALS_GET_VAR', "GET var");
DEFINE('_EW_GOALS_GET_CONDITION', "GET מצב");
DEFINE('_EW_GOALS_POST_VAR', "POST Var");
DEFINE('_EW_GOALS_POST_CONDITION', "POST מצב");
DEFINE('_EW_GOALS_TITLE_CONDITION', "שֵ�?�? מצב");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "ש�? משתמש מצב");
DEFINE('_EW_GOALS_IP_CONDITION', "IP מַצָב");
DEFINE('_EW_GOALS_IP_INVERSED', "IP inversed מַצָב");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "הגיע ממצב");
DEFINE('_EW_GOALS_BLOCK', "גוּש�?");
DEFINE('_EW_GOALS_REDIRECT', "הפניה ל URL");
DEFINE('_EW_GOALS_HITS', "צפיות");
DEFINE('_EW_GOALS_ENABLED', "מופעל");
DEFINE('_EW_GOALS_EDIT', "לַעֲרוֹך");
DEFINE('_EW_GOALS_DELETE', "לִמְחוֹק");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "�?תה משוחרר כל הסטטיסטיקה הנתוני�? ה�?חרוני�? עבור מטרה זו. ה�?�? �?תה ב�?מת רוצה לעשות למחוק מספר המטרה.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "מדינות");
DEFINE('_EW_FRONTEND_VISITORS', "המבקרי�?");
DEFINE('_EW_FRONTEND_TODAY', "הַיוֹ�?");
DEFINE('_EW_FRONTEND_YESTERDAY', "�?ֶתמוֹל");
DEFINE('_EW_FRONTEND_THIS_WEEK', "השבוע");
DEFINE('_EW_FRONTEND_LAST_WEEK', "מהשבוע ה�?חרון");
DEFINE('_EW_FRONTEND_THIS_MONTH', "החודש הזה");
DEFINE('_EW_FRONTEND_LAST_MONTH', "חודש שעבר");
DEFINE('_EW_FRONTEND_TOTAL', "גָמוּר");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch במצב debug. בדרך זו ניתן לגלות גור�? שגי�?ה. על מנת לכבות �?ותו, בבקשה לשנות �?תEXTRAWATCH_DEBUG ערך /components/com_extrawatch/config.php from 1 to 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "מקס שורות להר�?ות כ�?שר הנתוני�? הסטטיסטיי�? נמצ�? במצב מורחב.");
DEFINE('_EW_DESC_STATS_IP_HITS', "כל כתובות ה-IP �?שר פוגע פחות מ�?שר בימי�? הקודמי�? ערך זה יימחקו מן ההיסטוריה IP.");
DEFINE('_EW_DESC_STATS_URL_HITS', "כתובות כל שיש לו להיטי�? פחות מ�?שר בימי�? הקודמי�? ערך זה יימחקו מן ההיסטוריה IP.");
DEFINE('_EW_DESC_IGNORE_IP', "תכלול IP מסוימות מן הנתוני�? הסטטיסטיי�?. הפרד ע�? קו חדש. ניתן להשתמש בתווי�? כלליי�? כ�?ן. <br/>Eg. 192.* תתעל�? 192.168.51.31, 192.168.16.2, etc..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "המבקרי�? לרענן זמן �?לפיות השנייה, ברירת המחדל הי�? 2000, להיזהר ע�? זה. ל�?חר מכן לטעון מחדש �?ת ExtraWatch עורפיי�?.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "סטטיסטיקות זמן רענון �?לפיות השנייה, ברירת המחדל הי�? 4000, להיזהר ע�? זה. ל�?חר מכן לטעון מחדש �?ת ExtraWatch עורפיות.");
DEFINE('_EW_DESC_MAXID_BOTS', "כמה ביקורי�? בוט לשמור על מסד נתוני�?.");
DEFINE('_EW_DESC_MAXID_VISITORS', "כמה ביקורי�? �?מיתי לשמור על מסד נתוני�?.");
DEFINE('_EW_DESC_LIMIT_BOTS', "�?יך בוטי�? רבי�? תר�?ה בסופו של דבר גב.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "כמה מבקרי�? �?מיתי תר�?ה בסופו של דבר גב.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "מרבית הדמויות שתוצג בכותרת �?רוכה URIs.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "מרבית הדמויות שיוצגו בלוח סטטיסטיקה ימין.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "ימי�? כדי לשמור על הסטטיסטיקה ב�?תר, 0 = נִצחִי.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "כ�?שר �?תה נמצ�? �?זור שונה מ�?שר השרת המ�?רח שלך. (ערך חיובי �?ו שלילי שעות)");
DEFINE('_EW_DESC_WEEK_OFFSET', "שבוע לקזז �?ת חותמת הזמן / (3600 * 24 * 7) נותן �?ת מספר שבוע 1970/01/01, לקזז זה תיקון כדי להפוך �?ותו להתחיל ע�? יו�? שני ");
DEFINE('_EW_DESC_DAY_OFFSET', "יו�? לקזז �?ת חותמת הזמן / (3600 * 24) נותנת �?ת המספר יו�? 1970/01/01, זה לקזז הו�? תיקון לעשות �?ת זה מתחילי�? ב 00:00 ");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(תפקודית בגירסה מקצועית)</b> כדי להשתמש ריק 1x1px סמל חזיתי");
DEFINE('_EW_DESC_IP_STATS', "To ל�?פשר �?ת הסטטיסטיקה כתובת IP. במדינות מסוימות לשמור �?ת ה-IP במסד הנתוני�? זמן רב יותר �?סורה לפי החוק. השימוש הו�? על �?חריותך בלבד.");
DEFINE('_EW_DESC_HIDE_ADS', "הגדרה זו מסתירה �?ת המודעות backend, �?�? ה�? ב�?מת לעצבן �?ותך. על ידי שמירה על �?ות�?, �?תה תומך בפיתוח נוסף של כלי זה. תודה");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "בטל, �?�? �?תה רוצה להציג tooltip על העכבר מעל, במקו�? לחיצת עכבר.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "ברירת המחדל הי�? 'REDIRECT_URL', �?שר תקן �?�? �?תה משתמש url שכתוב, יכול להיות מוגדר 'SCRIPT_URL' �?�? זה מתחבר רק index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "הודעה זו תוצג בפני המשתמש חסו�? �?ו מידע נוסף למה �?תה חוס�? משתמשי�? �?לה.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Tooltip רוחב");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Tooltip גובה");
DEFINE('_EW_DESC_TOOLTIP_URL', "�?תה יכול לשי�? כל כתובתURL כ�?ן, כדי להמחיש ה-IP של המבקר.{Ip} יוחלפו על ידי ה-IP של המבקר. Eg. http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "ב�?פשרותך להקליד כל URI �?תה רוצה להתעל�? מן הנתוני�? הסטטיסטיי�?. ניתן להשתמש בתווי�? כלליי�? (* ו?) כ�?ן. Eg.: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "ציין ש�? המטרה כ�?ן. ש�? זה תוכלו לר�?ות בסטטיסטיקה.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "�?חרי הכל זה ש�? הדומיין שלך. For http://www.codegravity.com/projects/ the URI is: /projects/ (דוגמה לשימוש: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET המשתנה הו�? משתנה �?שר ניתן לר�?ות ב-URL בדרך כלל �?חרי כמה? �?ו &amp; �?וֹת. Eg. http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. You can use also <u>*</u> בתחו�? זה כדי לסרוק �?ת כל הערכי�? לקבל. (Example to use: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "כ�?ן �?תה צריך לציין תו�?�? �?ת ערך מהשדה הקוד�?. (דוגמה לשימוש: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "די דומה, �?בל �?נחנו בודקי�? �?ת הערכי�? שהוגשו מצורות. לכן, כ�?שר יש לך טופס ב�?תר ה�?ינטרנט שלך, כי יש שדה.מידע נוסף. &lt;input type='text' name='<u>experiences</u>' /&gt;. (Example to use: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "הת�?מה עבור הערך מתחו�? זה POST. Eg. �?נחנו רוצי�? לבדוק, �?�? למשתמש יש חוויות java. (Example to use: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "הכותרת של הדף שהו�? צריך להת�?י�?. (Example to use: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "ש�? המשתמש המחובר. (Example to use: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP שהמשתמש מגיע: (Example to use: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "כתובת ה-URL שהמשתמש הגיע. (Example to use: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "המשתמש �?ינו מנותב �?ל URL שצוין על ידכ�?. בעל עדיפות גבוה יותר מ�?שר 'חסימת': (Example to use: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "כמה תווי�? רבי�? לחתוך בטבלה יעדי�?");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(תפקודית בגירסה מקצועית)</b> Backlink כדי codegravity.com, ניתן לבטל �?ת זה, �?בל �?נחנו מעריכי�? תוכלו לשמור �?ותו ש�?. תודה");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "הצגת נתוני�? סטטיסטיי�? של מדינות הכולל מודול הממשק. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "�?�? �?תה רוצה להחליף �?ת הסדר של מבקרי�? / מדינות הממשק. בטל �?ותו מבקרי�? תופיע ר�?שונה.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "מספר מדינות להצגה הממשק");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "הצגת מדינות מבקרי�? במודול הממשק. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע  CACHE_FRONTEND_");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "זמן שניות מטמון מקסי�? של מדינות הכולל הממשק");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "זמן שניות מטמון של הב�?ת מבקרי�? הממשק");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "כדי להר�?ות למבקרי�? Frontend ל: היו�?. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "כדי להר�?ות למבקרי�? Frontend ל: �?תמול. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "כדי להר�?ות למבקרי�? הממשק עבור: השבוע. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן מוגדר CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "כדי להר�?ות למבקרי�? הממשק עבור: בשבוע שעבר. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "כדי להר�?ות למבקרי�? הממשק עבור: החודש. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "כדי להר�?ות למבקרי�? הממשק עבור: בחודש שעבר. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "כדי להציג מבקרי�? המספר הכולל מ�?ז ההתקנה ExtraWatch. �?�? השתנה, הגדרה זו תהיה יעילה הממשק ל�?חר זמן שנקבע CACHE_FRONTEND_...");
DEFINE('_EW_DESC_LANGUAGE', "קובץ שפה להשתמש. ה�? ממוקמי�? /components/com_extrawatch/lang/. �?�? �?תה רוצה ליצור קובץ חדש המותג שפה, בדוק תחילה בדף הבית של הפרויקט, ו�?�? �?ת קובץ השפה הי�? עדיין ל�? ש�?, פשוט להעתיק �?ת english.php כברירת מחדל למשל. german.php ולמק�? �?ותו בספריה זו. ו�?ז, לתרג�? �?ת כל הערכי�? על מקש ימין.");
DEFINE('_EW_DESC_GOALS', "מטרות מ�?פשרות לך לציין פרמטרי�? מיוחדי�?. כ�?שר להת�?י�? פרמטרי�? �?לה, הדלפק המטרה גדל. בדרך זו �?תה יכול לפקח �?�? המשתמש ביקר כתובת URL מסוימת, פרסמו ערך מסוי�?, יש ש�? משתמש ספציפי �?ו הגיע מכתובת מסוימת. �?תה יכול ג�? לחסו�? �?ו להפנות משתמשי�? כגון לכתובת �?חרת.");
DEFINE('_EW_DESC_GOALS_INSERT', "בכל התחומי�?, למעט ש�? �?תה יכול להשתמש * ו? כמו בתווי�? כלליי�?. For example: ?ear (will match: near, tear, ..),  p*r (will match: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "הגדר 1, �?�? �?תה רוצה �?ת המבקר להיחס�?. הו�? ל�? מוכן לר�?ות �?ת ש�?ר התוכן, רק �?ת המסר כי הו�? היה חסו�? - לל�? ניתוב מחדש כל ה-IP שלו מתווסף סטטיסטיקת חסו�? (Example to use: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "מדינה מצב");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "�?רץ inversed מצב");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "2 �?ותיות קוד מדינה במקרה העליון (Eg: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "פְּנִימִי");
DEFINE('_EW_STATS_FROM', "מִ-");
DEFINE('_EW_STATS_TO', "�?ֶל");
DEFINE('_EW_STATS_ADD_TO_GOALS', "הוסף יעדי�?");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "הוסף המטרה של המדינה הז�?ת");
DEFINE('_EW_MENU_REPORT_BUG', "דווח על ב�?ג �?ו תכונה");
DEFINE('_EW_GOALS_COUNTRY', "�?ֶרֶץ");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "�?�? �?תה רוצה �?ת השמות של המדינות ב�?ותיות רישיות של הממשק (Eg: GERMANY, UNITED KINGDOM בִּמקוֹ�? Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "זמן שניות מטמון מקסי�? של משתמשי�? הממשק");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "ערך ר�?שוני מוצג סך הכל: ב הממשק. שימושי כ�?שר היגרו כלי stat �?חרי�?. (Eg.: 20000). הגדר חזרה 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו.");
DEFINE('_EW_DESC_IGNORE_USER', "התעל�? המשתמשי�? הרשומי�? בתיבת הטקסט הזה. �?חת בכל שורה. (Eg.: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "המשתמשי�? הפעילי�? ביותר היו�? מתוך סך של");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "�?פשר �?וסרת על המילי�? מהרשימה spamword להלן ?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "מילי�? זבל הנפוצי�? ביותר בשימוש על ידי מדו�?ר זבל. ניתן להשתמש בתווי�? כלליי�? כ�?ן (Eg.: ph?rmac*). �?�? ההגדרה לעיל מופעלת, ExtraWatch יבדוק �?�? התוקף הגיש טופס (�?ת בקשת POST HTTP) ב�?תר ה�?ינטרנט שלך, ע�? כמה מילי�? �?לה זבל. (חל �?�? הטופס טוען �?ת �?תר ג'ומלה מבוססי בלבד - פורו�?, הערות, �?בל הו�? יעיל מ�?וד כדי לחסו�? מדו�?ר זבל, �?שר מנסה לשלוח כל צורה �?פשרית)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "קישור במודול הממשק משתמשי�? - מ�?פשר לך לציין �?ת כתובת ה�?תר, �?שר פתוח כ�?שר המשתמש לוחץ על ש�? המשתמש. חייב להכיל �?ת המחרוזת {המשתמש}, �?שר יוחלפו על ידי ש�? המשתמש בפועל. (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "משפטי מפתח");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "ערכי מקסימו�? בלשונית ההיסטוריה (Example: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "בביקורי�? להציג רק הדף ה�?חרון ביקר, ל�? כל");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "בביקורי�? חוזרי�? להסתיר sitename בכותרת הדף ביקר");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "מספר מרבי של המבקרי�? לשמור במסד הנתוני�? להיסטוריה בקר. תיזהר ע�? הגדרה זו, �?�? יש לך תעבורה גבוהה, זה יכול לגדול ממש מהר. תמיד לבדוק כמה נתוני�? בטבלה ההיסטוריה מכיל מצב");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "שמור �?ת טבל�?ות מסד נתוני�? על ההסרה. בדוק �?פשרות זו לפני להסיר �?�? �?תה עושה שדרוג ורוצי�? לשמור �?ת הנתוני�?.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "תקבל הודעות דו�?ל הלילי ע�? דוחות עבור יו�? קוד�? לכן, שבו �?תה יכול לקרו�? בבוקר
Th");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "כתובת דו�?ל ש�?ליה תקבל דוחות �?לה");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "רק כוללי�? שורות בדוחות דו�?ל שבו �?חוז גבוה יותר {value}.הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "רק כוללי�? <b>יו�? חיובי one</b> שינוי ערכי�? בדוחות דו�?ל גבוה יותר מ�?שר �?חוז {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו<i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "רק כוללי�? <b>יו�? השליליי�?,</b> שינוי ערכי�? בדוחות דו�?ל �?חוז נמוך יותר של {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו <i>(example: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "רק כוללי�?<b>positive seven day</b> שינוי ערכי�? בדוחות דו�?ל גבוה יותר מ�?שר �?חוז {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "רק כוללי�?<b>negative seven day</b>  שינוי ערכי�? בדוחות דו�?ל �?חוז נמוך יותר של {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו שינוי ערכי�? בדוחות דו�?ל �?חוז נמוך יותר של {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו <i>(example: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "רק כוללי�? <b>positive twenty eight day</b> שינוי ערכי�? בדוחות דו�?ל גבוה יותר מ�?שר �?חוז {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "רק כוללי�? <b>negative twenty eight day</b>  שינוי ערכי�? בדוחות דו�?ל �?חוז נמוך יותר של {value}. הגדר 0 �?�? �?תה ל�? רוצה להשתמש בתכונה זו <i>(example: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(תפקודית בגירסה מקצועית)</b> תפקודית הגדרה מקצועית זו versionEnable �?�? �?תה רוצה לעשות �?ת הקישור הלוגו שניתנו ע�? תכונת rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "תווי�? מקסימלי של ש�? שורה דו�?ל. שינוי זה, �?�? לקוח הדו�?ל שלך חלון הודעה קטן מדי");

DEFINE('_EW_MENU_HISTORY', "הִיסטוֹרִיָה");
DEFINE('_EW_MENU_EMAILS', "הודעות דו�?ל");
DEFINE('_EW_MENU_STATUS', "DB מצב");
DEFINE('_EW_DESC_BLOCKED', "כתובות �?לה נחסמו על ידי �?נטי ספ�?�?");


DEFINE('_EW_HISTORY_VISITORS', "מבקרי�? היסטוריה");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "מציג רק %d הרשומות ה�?חרונות.
                כדי לשנות ערך זה, עבור �?ל הגדרות -&gt; History &amp; בִּצוּעַ -&gt; HISTORY_MAX_DB_RECORDS . היזהר, הגדרה זו משפיעה על זמני הטעינה של הנתוני�? להלן.  ");
DEFINE('_EW_MENU_BUG', "דווח על תקלה");
DEFINE('_EW_MENU_FEATURE', "בקשה זו");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "מילות מפתח");

DEFINE('_EW_BLOCKING_UNBLOCK', "החסימה");
DEFINE('_EW_STATS_KEYPHRASE ', "Keyphrase");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "הטבלה ש�?");
DEFINE('_EW_STATUS_DATABASE_ROWS', "שורות");
DEFINE('_EW_STATUS_DATABASE_DATA', "נְתוּנִי�?");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "גָמוּר");

DEFINE('_EW_EMAIL_REPORTS', "דו�?ל דוחות");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Generated דו�?ל דוח מסונני�? מ�?תמול");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "ערך מסנני דו�?ר �?לקטרוני");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "שִ�?וּוּי");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "לְמֵ�?ָה");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-יו�? השינוי");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-יו�? השינוי");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-יו�? השינוי");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch חס�? %d להיטי�? מפיץ דו�?ר זבל היו�?, בסך הכל: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "IP חסומי�? Adresses");
DEFINE('_EW_ANTISPAM_SETTINGS', "Anti-Spam הגדרות");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX עדכוני תנועה (למעט מפות)");


DEFINE('_EW_HISTORY_PREVIOUS', "קוֹדֵ�?");
DEFINE('_EW_HISTORY_NEXT', "קָרוֹב");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "מספר העמודות של מדינות");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "מספר שורות של מדינות");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "הצגת שמות ב�?רץ �?ו ל�?");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "הצגת דגלי הר�?שון, ול�?חר מכן �?חוזי�?");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET inversed מַצָב");
DEFINE('_EW_GOALS_POST_INVERSED', "POST inversed מַצָב");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Title inversed מַצָב");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Username inversed מַצָב");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "הגיע מצב inversed");

DEFINE('_EW_STATS_MAP', "ביקור �?חרון מפה");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "�?נ�? הכנס <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> המפתח כדי להציג מפה ביקורך ה�?חרון:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "חנות מפתח");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "�?נ�? הכנס מפתח ipinfodb תקף �?ת המתקבל: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "בקשה כושלת: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "שדות הטופס נשלח:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL פרמטרי�?:");
DEFINE('_EW_VISIT_ADD_PAGE', " הוסף לדף כמטרה");
DEFINE('_EW_VISIT_BLOCK_IP', " בלוק זה כתובת IP");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " הוספת משתנה זה הגיש טופס כמטרה");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " הוספת פרמטר URL כמטרה");

DEFINE('_EW_TREND_EMPTY', "רֵיק");

DEFINE('_EW_NOT_NUMBER', " �?ַזהָרָה: הערך שהזנת �?ינו מספר. ExtraWatch ל�? יפעל כר�?וי!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; זה 15 יו�? גירסת הערכה
. Days Left: <b>%d</b>. נ�? לרכוש �?ת החיי�? <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch רישיון עבור הדומיין שלך</a> עבור גירס�?ות זו הקרובה.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " גירסת הניסיון שלך פגה. �?נ�? לרכוש ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "רשיון הפעלת בהצלחה. תודה");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>טָעוּת: מפתח רישיון הדומיין שלך �?ינ�? תו�?מי�?.</b><br/>ה�?�? להזין �?ת ש�? הדומיין �?ותו לתוך טופס תרומה כ�?חד �?תה רו�?ה למטה? <br/>Click '<b>בקשת מפתח ההפעלה הנכונה</b>' להלן, �?ו ליצור קשר: support@codegravity.com<br/>");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "�?�? �?תה רו�?ה �?ת ההודעה הנל במשך זמן רב מדי, ה�?תר שלך עלול להיות שגוי.
                    Open the components/com_extrawatch/config.php
                   ה�?ו'�? להגיב, ולהגדיר ה�?תר לחיות בפועל. Eg.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "�?ַזהָרָה: ה�?תר בדפדפן �?תר לחיות בתצורת: %s and %s �?ין הת�?מה.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "הגדר �?תר לחיות: %s ולהמשיך...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "הסר קישור נכנס");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Knowledge Base");
DEFINE('_EW_ADMINHEADER_FLOW', "שֶ�?טֶף");
DEFINE('_EW_ADMINHEADER_GRAPHS', "גרפי�?");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "רכיבי");
DEFINE('_EW_ADMINHEADER_REVIEW', "סִקוּר");
DEFINE('_EW_ADMINHEADER_WRITE', "כתוב ");

DEFINE('_EW_FLOW_TRAFFIC', "תנועה זרימה");
DEFINE('_EW_FLOW_SELECT_PAGE', "בחר דף:");
DEFINE('_EW_FLOW_OUTG_LINKS', "היוצ�? שורש קישורי�? לספור:");
DEFINE('_EW_FLOW_NESTING', "קינון ברמה:");
DEFINE('_EW_FLOW_SCALE', "סוּלָ�? :");

DEFINE('_EW_COMERCIAL_AD_FREE', "מודעות לל�? גרסה");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "תודה רבה לכ�? על תרומתכ�?!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "רישו�? מפתח של התחו�? שלך %s is: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "עכשיו �?תה יכול להסיר �?ו להסתיר �?ת הלוגו backlink ExtraWatch בתוך הממשק של הגדרות ");


DEFINE('_EW_SIZES_LAST_CHECK', "לבדוק �?חרונה בוצעה על:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Size of component/module in /administrator directory");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "מַרכִּיב");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "גָמוּר:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "גוֹדֶל");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "רענון כל");

DEFINE('_EW_SIZEDATABASE_TABLE', "ש�?וּלְחָן");
DEFINE('_EW_SIZEDATABASE_SIZE', "גוֹדֶל");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-Day שִ�?נוּי");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-Day שִ�?נוּי");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-Day שִ�?נוּי");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "�?ין נתוני�?");
DEFINE('_EW_SIZEDATABASE_TOTAL', "גָמוּר:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "רענון כל");
DEFINE('_EW_SIZEMODULES_TOTAL', "גָמוּר:");
DEFINE('_EW_SIZEMODULES_MODULE', "מודול");
DEFINE('_EW_SIZEMODULES_SIZE', "גוֹדֶל");

DEFINE('_EW_SIZES_FILES', "קבצי�? &amp; מדריכי�?");
DEFINE('_EW_SIZES_BYTES', "בתי�?");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "לְרַעֲנֵן");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_STATUS_DATABASE', "טבלת מסד הנתוני�? גדלי�?");


DEFINE('_EW_DESC_IPINFODB_KEY', "ביקורך ה�?חרון המפה ipinfodb.com מפתח: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "�?זור חיל �?ופסט");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "לְעַדְכֵּן");
DEFINE('_EW_MENU_UPDATE_TITLE', "גבוי שדרוג");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "ל�? זמין בגרסת חינ�?, �?נ�? בדוק �?ת הכרטיסייה רישיון");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "ב�?ן ספ�?�? מילי�? �?פשר");
DEFINE('_EW_SPAMWORD_LIST', "רשימת מילי�? ספ�?�?");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "הסתר כותרת חוזרי�?");
DEFINE('_EW_TRUNCATE_VISITS', "חתוך ביקורי�?");
DEFINE('_EW_TRUNCATE_STATS', "חתוך סטטיסטיקות");
DEFINE('_EW_TRUNCATE_GOALS', "חתוך שערי�?");
DEFINE('_EW_LIMIT_BOTS', "הגבל בוטי�?");
DEFINE('_EW_LIMIT_VISITORS', "הגבל מבקרי�?");
DEFINE('_EW_TOOLTIP_WIDTH', "Tooltip רוחב");
DEFINE('_EW_TOOLTIP_HEIGHT', "Tooltip גובה");
DEFINE('_EW_TOOLTIP_URL', "Tooltip URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "Tooltip OnClick");
DEFINE('_EW_IP_STATS', "IP stats");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB key ");
DEFINE('_EW_ONLY_LAST_URI', "Only Last URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "הקצה הקדמי הסתר לוגו ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "החלק הקדמי ל�? פעל");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Front End �?ין קישור חזרה");
DEFINE('_EW_FRONTEND_USER_LINK', "משתמש הקישורי�? החזית");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "סוף מדינות חזית הג'יפ לפני�?");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "סוף מדינות החזית ש�?");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "סוף מדינות החזית במקרה עליון");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "מדינות חזיתי דגל ר�?שון ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "סוף מדינות החזית מספר");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "סוף מדינות החזית מקס קולו�?");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "הקצה הקדמי מדינות מקס שורות");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "סוף מבקרי�? החזית היו�? ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "סוף מבקרי�? החזית �?תמול ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "סוף מבקרי�? החזית השבוע ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "סוף מבקרי�? החזית בשבוע שעבר ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "סוף מבקרי�? החזית החודש ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "הקצה הקדמי מבקרי�? החודש שעבר");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Front End הסתר מבקרי�? סך הכל");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "הקצה הקדמי ר�?שונית בסך");
DEFINE('_EW_HISTORY_MAX_VALUES', "מקס היסטוריה ערכי�?");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "היסטוריה מקס רשומות");
DEFINE('_EW_UPDATE_TIME_VISITS', "עדכון ביקורי�? זמן");
DEFINE('_EW_UPDATE_TIME_STATS', "Uעדכון זמן stats");
DEFINE('_EW_STATS_MAX_ROWS', "סטטיסטיקות מקס שורות");
DEFINE('_EW_STATS_IP_HITS', "סטטיסטיקת כניסות IP");
DEFINE('_EW_MAXID_BOTS', "מקס id  בוטי�?");
DEFINE('_EW_MAXID_VISITORS', "מקס id מבקרי�?");
DEFINE('_EW_STATS_KEEP_DAYS', "סטטיסטיקות לשמור ימי�? ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Front End מטמון מדינות ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Front End מטמון מבקרי�? ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "הסר לשמור נתוני�? ");
DEFINE('_EW_IGNORE_IP', "לְהִתְעַלֵ�? IP");
DEFINE('_EW_IGNORE_URI', "לְהִתְעַלֵ�?URI");
DEFINE('_EW_IGNORE_USER', "לְהִתְעַלֵ�?User");
DEFINE('_EW_BLOCKING_MESSAGE', "חסימת הודעה");
DEFINE('_EW_SERVER_URI_KEY', "שרת URI מפתח");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "המבקרי�? חזיתי סך ר�?שוני");
DEFINE('_EW_SIZEDATABASE_RECORDS', "רשומות");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " כדי להפוך �?ת חוס�? יעיל, �?תה צריך לפרס�? �?ת סוכן ExtraWatch לפני כל תוכן �?ו צורות. Eg. על צד שמ�?ל בתבנית שלך.
                    <br/>
                    Go to Module Manager -> ExtraWatch agent -> select position as left");

DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO דוחות");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO Nightly דוחות דו�?ל מופעלת");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "צפה בהדגמה ההתקנה");


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