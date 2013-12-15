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
DEFINE('_EW_MENU_STATS', "ãƒ©ã‚¤ãƒ–é–‹å§‹");
DEFINE('_EW_MENU_GOALS', "ç›®æ¨™");
DEFINE('_EW_MENU_SETTINGS', "è¨­å®š");
DEFINE('_EW_MENU_CREDITS', "ã‚¯ãƒ¬ã‚¸ãƒƒãƒˆ");
DEFINE('_EW_MENU_FAQ', "è‰¯ã??ã?‚ã‚‹è³ªå•?");
DEFINE('_EW_MENU_DOCUMENTATION', "æƒ…å ±ç®¡ç?†");
DEFINE('_EW_MENU_LICENSE', "ãƒ©ã‚¤ã‚»ãƒ³ã‚¹");
DEFINE('_EW_MENU_DONATORS', "ã‚µãƒ?ãƒ¼ã‚¿ãƒ¼");
DEFINE('_EW_MENU_SUPPORT', "ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã‚’ã‚µãƒ?ãƒ¼ãƒˆã?—ã?¦ã??ã? ã?•ã?„ã€‚ã??ã?†ã?™ã‚‹ã?¨åºƒå‘Šè¡¨ç¤ºã?ªã?—ã?§ã?”åˆ©ç”¨ã?„ã?Ÿã? ã?‘ã?¾ã?™ã€‚");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "æœ€è¿‘ã?®è¨ªå•?è€…");
DEFINE('_EW_VISITS_BOTS', "ãƒœãƒƒãƒˆ");
DEFINE('_EW_VISITS_CAME_FROM', "å‡ºèº«");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ã?Œç™ºè¡Œã?•ã‚Œã?¦ã?„ã?¾ã?›ã‚“ï¼?æ–°è¦?çŠ¶æ…‹ã?Œè¨˜éŒ²ã?•ã‚Œã?¦ã?„ã?¾ã?›ã‚“ã€‚ ç™ºè¡Œã?™ã‚‹ã?«ã?¯ã€?ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ã‚»ã‚¯ã‚·ãƒ§ãƒ³ã?¸ã‚¢ã‚¯ã‚»ã‚¹ã?—ã€?ã??ã?—ã?¦å…¨ãƒšãƒ¼ã‚¸ä¸Šã?«ç™ºè¡Œã?—ã?¦ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_VISITS_PANE_LOADING', "è¨ªå•?è€…èª­è¾¼ã?¿...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "é€±åˆ¥è¨ªå•?è€…çŠ¶æ³?");
DEFINE('_EW_STATS_WEEK', "é€±");
DEFINE('_EW_STATS_THIS_WEEK', "ä»Šé€±");
DEFINE('_EW_STATS_UNIQUE', "å›ºæœ‰");
DEFINE('_EW_STATS_LOADS', "èª­è¾¼ã?¿");
DEFINE('_EW_STATS_HITS', "ãƒ’ãƒƒãƒˆ");
DEFINE('_EW_STATS_TODAY', "ä»Šæ—¥");
DEFINE('_EW_STATS_FOR', "ç›®çš„");
DEFINE('_EW_STATS_ALL_TIME', "æœ€é«˜");
DEFINE('_EW_STATS_EXPAND', "æ‹¡å¤§");
DEFINE('_EW_STATS_COLLAPSE', "å´©å£Š");
DEFINE('_EW_STATS_URI', "ãƒšãƒ¼ã‚¸");
DEFINE('_EW_STATS_COUNTRY', "å›½");
DEFINE('_EW_STATS_USERS', "ãƒ¦ãƒ¼ã‚¶ãƒ¼");
DEFINE('_EW_STATS_REFERERS', "å?‚ç…§");
DEFINE('_EW_STATS_IP', "IP");
DEFINE('_EW_STATS_BROWSER', "ãƒ–ãƒ©ã‚¦ã‚¶");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "ã‚­ãƒ¼ãƒ¯ãƒ¼ãƒ‰");
DEFINE('_EW_STATS_GOALS', "ç›®æ¨™");
DEFINE('_EW_STATS_TOTAL', "å?ˆè¨ˆ");
DEFINE('_EW_STATS_DAILY', "æ¯Žæ—¥");
DEFINE('_EW_STATS_DAILY_TITLE', "æ¯Žæ—¥ã?®çŠ¶æ³?");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "æœ€é«˜ã?®çŠ¶æ³?");
DEFINE('_EW_STATS_LOADING', "èª­è¾¼ã?¿ä¸­...");
DEFINE('_EW_STATS_LOADING_WAIT', "èª­è¾¼ã?¿ä¸­...ã?—ã?°ã‚‰ã??ã?Šå¾…ã?¡ã??ã? ã?•ã?„");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IPãƒ–ãƒ­ãƒƒã‚­ãƒ³ã‚°");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "IPã‚’æ‰‹å‹•å…¥åŠ›");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "ãƒ–ãƒ­ãƒƒã‚¯ã?—ã?Ÿã?„IPã‚¢ãƒ‰ãƒ¬ã‚¹ã‚’å…¥åŠ›ã?—ã?¦ã??ã? ã?•ã?„ã€‚(ä¾‹ 217.242.11.54 æˆ–ã?„ã?¯ 217.* æˆ–ã?„ã?¯ 217.242.* ãƒ¯ã‚¤ãƒ«ãƒ‰ã‚«ãƒ¼ãƒ‰ã?«ä¸€è‡´ã?™ã‚‹ã?“ã‚Œã‚‰å…¨ã?¦ã?®IPã‚’ãƒ–ãƒ­ãƒƒã‚¯ã?™ã‚‹)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "å®Ÿéš›ã?«ãƒˆã‚°ãƒ«ãƒ–ãƒ­ãƒƒã‚­ãƒ³ã‚°å…ˆ ");
DEFINE('_EW_STATS_PANE_LOADING', "èª­è¾¼ã?¿çŠ¶æ³?...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "è¨­å®š");
DEFINE('_EW_SETTINGS_DEFAULT', "åˆ?æœŸè¨­å®š");
DEFINE('_EW_SETTINGS_SAVE', "ä¿?å­˜");
DEFINE('_EW_SETTINGS_APPEARANCE', "å¤–è¦‹");
DEFINE('_EW_SETTINGS_FRONTEND', "å…ˆé ­");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "å±¥æ­´å?Šã?³ãƒ‘ãƒ•ã‚©ãƒ¼ãƒžãƒ³ã‚¹");
DEFINE('_EW_SETTINGS_ADVANCED', "è©³ç´°");
DEFINE('_EW_SETTINGS_IGNORE', "ç„¡è¦–");
DEFINE('_EW_SETTINGS_BLOCKING', "ãƒ–ãƒ­ãƒƒã‚­ãƒ³ã‚°");
DEFINE('_EW_SETTINGS_EXPERT', "ã‚¨ã‚¯ã‚¹ãƒ‘ãƒ¼ãƒˆ");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "å…¨çµ±è¨ˆã?¨è¨ªå•?è€…ãƒ‡ãƒ¼ã‚¿ã‚’æœ¬å½“ã?«ãƒªã‚»ãƒƒãƒˆã?—ã?¾ã?™ã?‹ï¼Ÿ");
DEFINE('_EW_SETTINGS_RESET_ALL', "å…¨ã?¦ã‚’ãƒªã‚»ãƒƒãƒˆ");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "å…¨çµ±è¨ˆå?Šã?³è¨ªå•?è€…ãƒ‡ãƒ¼ã‚¿ã‚’ãƒªã‚»ãƒƒãƒˆ");
DEFINE('_EW_SETTINGS_LANGUAGE', "è¨€èªž");
DEFINE('_EW_SETTINGS_SAVED', "è¨­å®šã?Œä¿?å­˜ã?•ã‚Œã?¾ã?—ã?Ÿã€‚");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "IPè¿½åŠ ");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "ãƒªã‚¹ãƒˆã?¸");

// Other / mostly general.
DEFINE('_EW_TITLE', "ãƒªã‚¢ãƒ«ã‚¿ã‚¤ãƒ AJAXã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ãƒ¢ãƒ‹ã‚¿ãƒ¼");
DEFINE('_EW_BACK', "æˆ»ã‚‹");
DEFINE('_EW_ACCESS_DENIED', "ã?“ã‚Œã‚’é–²è¦§æ‰¿èª?ã‚’å¾—ã?¦ã?„ã?¾ã?›ã‚“ï¼?");
DEFINE('_EW_LICENSE_AGREE', "ä¸Šè¨˜ã?®è«¸æ?¡ä»¶ã?«å?Œæ„?ã?—ã?¾ã?™ã€‚");
DEFINE('_EW_LICENSE_CONTINUE', "ç¶šã?‘ã‚‹");
DEFINE('_EW_SUCCESS', "ã‚ªãƒšãƒ¬ãƒ¼ã‚·ãƒ§ãƒ³æˆ?åŠŸ");
DEFINE('_EW_RESET_SUCCESS', "å…¨çµ±è¨ˆå?Šã?³è¨ªå•?è€…ãƒ‡ãƒ¼ã‚¿ã?Œç„¡äº‹ã?«å‰Šé™¤ã?•ã‚Œã?¾ã?—ã?Ÿã€‚");
DEFINE('_EW_RESET_ERROR', "ãƒ‡ãƒ¼ã‚¿ã?Œç„¡äº‹ã?«å‰Šé™¤ã?•ã‚Œã?¾ã?›ã‚“ã?§ã?—ã?Ÿã€‚å•?é¡Œã?Œç™ºç”Ÿã?—ã?¾ã?—ã?Ÿã€‚");
DEFINE('_EW_CREDITS_TITLE', "ã‚¯ãƒ¬ã‚¸ãƒƒãƒˆ");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "æ¯Žæ—¥å?Šã?³æ¯Žé€±ã?®çŠ¶æ³?");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAXæ‰¿èª?æ‹’å?¦ï¼šã‚¸ãƒ¥ãƒ¼ãƒ ãƒ© - æ§‹æˆ?.phpã?«è¨˜è¼‰ã?—ã?Ÿãƒ‰ãƒ¡ã‚¤ãƒ³ã?‹ã‚‰ã?“ã?®çµ±è¨ˆã‚’é–²è¦§ã?—ã?¦ã??ã? ã?•ã?„");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "www.ã?®ãƒ‰ãƒ¡ã‚¤ãƒ³å??ã‚’ã?Šå¿˜ã‚Œã?§ã?™ã?‹ã€‚ã?ŠæŒ?ã?¡ã?®ã‚¸ãƒ£ãƒ?ã‚¹ã‚¯ãƒªãƒ—ãƒˆã?Œã‚¢ã‚¯ã‚»ã‚¹ã‚’è©¦ã?¿ã?¦ã?„ã?¾ã?™");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "ã‚¢ã‚¯ã‚»ã‚¹å…ƒ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "ç•°ã?ªã‚‹ãƒ‰ãƒ¡ã‚¤ãƒ³ã?§ã?‚ã‚‹ã?¨ã?Šè€ƒã?ˆã?«ã?ªã?£ã?Ÿã?®ã?¯ã?ªã?œã?§ã?™ã?‹");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "æœ€æ–°ã?®æ‹¡å¼µã‚³ãƒ¼ãƒ‰å?–å¾—å…ˆ");
DEFINE('_EW_HEADER_CAST_YOUR', "ä»¥ä¸‹ã‚’å¤‰æ?›ã?—ã?¦ã??ã? ã?•ã?„");
DEFINE('_EW_HEADER_VOTE', "æŠ•ç¥¨");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—ã‚’è¡¨ç¤ºã?™ã‚‹ã?Ÿã‚?ã?«ã‚¯ãƒªãƒƒã‚¯");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—ã‚’è¡¨ç¤ºã?™ã‚‹ã?Ÿã‚?ã?«ãƒžã‚¦ã‚¹ã‚’é‡?ã?­ã‚‹");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "æ˜¨æ—¥ã?®å¢—åŠ é‡?");
DEFINE('_EW_TOOLTIP_HELP', "æ¬¡ã?®ã‚ªãƒ³ãƒ©ã‚¤ãƒ³å¤–éƒ¨ãƒ˜ãƒ«ãƒ—ã‚’é–‹ã??");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "ã?“ã?®ã‚¦ã‚£ãƒ³ãƒ‰ã‚¦ã‚’é–‰ã?˜ã‚‹");
DEFINE('_EW_TOOLTIP_PRINT', "å?°åˆ·");

// Goals.
DEFINE('_EW_GOALS_INSERT', "ç›®æ¨™æŒ¿å…¥");
DEFINE('_EW_GOALS_UPDATE', "ç›®æ¨™ç•ªå?·æ›´æ–°");
DEFINE('_EW_GOALS_ACTION', "ã‚¢ã‚¯ã‚·ãƒ§ãƒ³");
DEFINE('_EW_GOALS_TITLE', "æ–°è¦?ç›®æ¨™");
DEFINE('_EW_GOALS_NEW', "æ–°è¦?ç›®æ¨™");
DEFINE('_EW_GOALS_RELOAD', "å†?èª­è¾¼ã?¿");
DEFINE('_EW_GOALS_ADVANCED', "è©³ç´°");
DEFINE('_EW_GOALS_NAME', "æ°?å??");
DEFINE('_EW_GOALS_ID', "ID");
DEFINE('_EW_GOALS_URI_CONDITION', "URIçŠ¶æ…‹");
DEFINE('_EW_GOALS_URI_INVERSED', "URIå??è»¢çŠ¶æ…‹");
DEFINE('_EW_GOALS_GET_VAR', "å?–å¾—ãƒ?ãƒ¼ã‚¸ãƒ§ãƒ³");
DEFINE('_EW_GOALS_GET_CONDITION', "å?–å¾—çŠ¶æ…‹");
DEFINE('_EW_GOALS_POST_VAR', "ãƒ?ã‚¹ãƒˆãƒ?ãƒ¼ã‚¸ãƒ§ãƒ³");
DEFINE('_EW_GOALS_POST_CONDITION', "POSTçŠ¶æ…‹");
DEFINE('_EW_GOALS_TITLE_CONDITION', "ã‚¿ã‚¤ãƒˆãƒ«çŠ¶æ…‹");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "ãƒ¦ãƒ¼ã‚¶ãƒ¼å??çŠ¶æ…‹");
DEFINE('_EW_GOALS_IP_CONDITION', "IPçŠ¶æ…‹");
DEFINE('_EW_GOALS_IP_INVERSED', "IPå??è»¢çŠ¶æ…‹");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "çŠ¶æ…‹ã?«èµ·å› ");
DEFINE('_EW_GOALS_BLOCK', "ãƒ–ãƒ­ãƒƒã‚¯");
DEFINE('_EW_GOALS_REDIRECT', "URLã?¸ãƒªãƒ€ã‚¤ã‚¢ãƒ«");
DEFINE('_EW_GOALS_HITS', "ãƒ’ãƒƒãƒˆ");
DEFINE('_EW_GOALS_ENABLED', "æœ‰åŠ¹");
DEFINE('_EW_GOALS_EDIT', "ç·¨é›†");
DEFINE('_EW_GOALS_DELETE', "å‰Šé™¤");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "ã?“ã?®ç›®æ¨™ã?®ã?Ÿã‚?ã?«å…¨ã?¦ã?®æœ€è¿‘ã?®çµ±è¨ˆãƒ‡ãƒ¼ã‚¿ã‚’å¤±ã?„ã?¾ã?™ã€‚ç›®æ¨™ç•ªå?·ã‚’æœ¬å½“ã?«å‰Šé™¤ã?—ã?¾ã?™ã?‹ï¼Ÿ");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "å›½");
DEFINE('_EW_FRONTEND_VISITORS', "è¨ªå•?è€…");
DEFINE('_EW_FRONTEND_TODAY', "ä»Šæ—¥");
DEFINE('_EW_FRONTEND_YESTERDAY', "æ˜¨æ—¥");
DEFINE('_EW_FRONTEND_THIS_WEEK', "ä»Šé€±");
DEFINE('_EW_FRONTEND_LAST_WEEK', "å…ˆé€±");
DEFINE('_EW_FRONTEND_THIS_MONTH', "ä»Šæœˆ");
DEFINE('_EW_FRONTEND_LAST_MONTH', "å…ˆæœˆ");
DEFINE('_EW_FRONTEND_TOTAL', "å?ˆè¨ˆ");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã?Œä¿®æ­£ãƒ¢ãƒ¼ãƒ‰ã?§ã?™ã€‚ã?“ã‚Œã?«ã‚ˆã‚Šã‚¨ãƒ©ãƒ¼åŽŸå› ã‚’ä¿®å¾©ã?§ã??ã?¾ã?™ã€‚ã‚ªãƒ•ã?«ã?™ã‚‹ã?«ã?¯ã€?/components/com_extrawatch/config.phpã?®EXTRAWATCH_DEBUGå€¤ã?®1ã?‹ã‚‰0ã‚’å¤‰æ›´ã?—ã?¦ã??ã? ã?•ã?„");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "çŠ¶æ…‹ã?Œæ‹¡å¼µãƒ¢ãƒ¼ãƒ‰ã?®éš›ã€?æœ€å¤§è¡Œæ•°ã?Œè¡¨ç¤ºã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_STATS_IP_HITS', "æ•°æ—¥é–“ãƒ’ãƒƒãƒˆã?—ã?ªã?‹ã?£ã?Ÿå…¨IPã‚¢ãƒ‰ãƒ¬ã‚¹ã?§ã?™ã€‚ã?“ã?®å€¤ã?ŒIPå±¥æ­´ã?‹ã‚‰å‰Šé™¤ã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_STATS_URL_HITS', "æ•°æ—¥é–“ãƒ’ãƒƒãƒˆã?—ã?ªã?‹ã?£ã?Ÿå…¨URLã?§ã?™ã€‚ã?“ã?®å€¤ã?ŒIPå±¥æ­´ã?‹ã‚‰å‰Šé™¤ã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_IGNORE_IP', "çµ±è¨ˆã?‹ã‚‰ç‰¹å®šã?®IPã‚’æŽ’é™¤ã?™ã‚‹ã€‚æ–°è¦?ãƒ©ã‚¤ãƒ³ã?¨é›¢ã?™ã€‚ã?“ã?“ã?§ãƒ¯ã‚¤ãƒ«ãƒ‰ã‚«ãƒ¼ãƒ‰ã‚’ä½¿ç”¨ã?§ã??ã?¾ã?™ã€‚ <br/>ä¾‹ 192.* ã?Œ192.168.51.31ã€?192.168.16.2ã€?ã?ªã?©ã‚’ç„¡è¦–ã?—ã?¾ã?™");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "è¨ªå•?è€…ã?Œç§’å?˜ä½?ã?§æ™‚é–“ã‚’ãƒªãƒ•ãƒ¬ãƒƒã‚·ãƒ¥ã?—ã€?åˆ?æœŸè¨­å®šã?Œ2000ã?®éš›ã?¯ã?”æ³¨æ„?ã??ã? ã?•ã?„ã€‚ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ãƒ?ãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã‚’å†?ã?³èª­ã?¿è¾¼ã‚“ã?§ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "çµ±è¨ˆã?Œç§’å?˜ä½?ã?§æ™‚é–“ã‚’ãƒªãƒ•ãƒ¬ãƒƒã‚·ãƒ¥ã?—ã€?åˆ?æœŸè¨­å®šã?Œ4000ã?®éš›ã?¯ã?”æ³¨æ„?ã??ã? ã?•ã?„ã€‚ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ãƒ?ãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã‚’å†?ã?³èª­ã?¿è¾¼ã‚“ã?§ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_DESC_MAXID_BOTS', "ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹ã?«ä¿?å­˜ã?™ã‚‹ãƒœãƒƒãƒˆè¨ªå•?è€…æ•°");
DEFINE('_EW_DESC_MAXID_VISITORS', " ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹ã?«ä¿?å­˜ã?™ã‚‹å®Ÿéš›ã?®è¨ªå•?è€…æ•°");
DEFINE('_EW_DESC_LIMIT_BOTS', "ãƒ?ãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã?«è¦‹ã‚‰ã‚Œã‚‹ãƒœãƒƒãƒˆæ•°");
DEFINE('_EW_DESC_LIMIT_VISITORS', "ãƒ?ãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã?«è¦‹ã‚‰ã‚Œã‚‹å®Ÿéš›ã?®è¨ªå•?è€…æ•°");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "é•·ã?„ã‚¿ã‚¤ãƒˆãƒ«ã?¨URIã?«è¡¨ç¤ºã?•ã‚Œã‚‹æœ€å¤§æ–‡å­—æ•°");
DEFINE('_EW_DESC_TRUNCATE_STATS', "æ­£ã?—ã?„çµ±è¨ˆãƒ‘ãƒ?ãƒ«ã?«è¡¨ç¤ºã?•ã‚Œã‚‹æœ€å¤§æ–‡å­—æ•°");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "çµ±è¨ˆã‚’ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹å†…ã?«ä¿?å­˜ã?™ã‚‹æ—¥æ•° 0 = ç„¡é™?");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "ãƒ›ã‚¹ãƒˆã‚µãƒ¼ãƒ?ãƒ¼ã?¨åˆ¥ã?®ã‚¿ã‚¤ãƒ ã‚¾ãƒ¼ãƒ³ã?«ã?„ã‚‹å ´å?ˆ (ãƒ—ãƒ©ã‚¹æˆ–ã?¯ãƒžã‚¤ãƒŠã‚¹æ™‚æ•°)");
DEFINE('_EW_DESC_WEEK_OFFSET', "ã‚¦ã‚£ãƒ¼ã‚¯ãƒ»ã‚ªãƒ•ã‚»ãƒƒãƒˆã€?ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—/(3600*24*7)ã?§1.1.1970å¹´1æœˆ1æ—¥ã?‹ã‚‰ã?®é€±æ•°ã‚’è¨­å®šã?—ã?¾ã?™ã€‚ã?“ã?®ã‚ªãƒ•ã‚»ãƒƒãƒˆã?«ã‚ˆã‚Šã€?æœˆæ›œæ—¥ã?‹ã‚‰é–‹å§‹ã?™ã‚‹æ§˜ã?«ä¿®æ­£ã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_DAY_OFFSET', "æ—¥ä»˜ã‚ªãƒ•ã‚»ãƒƒãƒˆã€?ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—/(3600*24)ã?§1.1.1970å¹´1æœˆ1æ—¥ã?‹ã‚‰ã?®æ—¥æ•°ã‚’è¨­å®šã?—ã?¾ã?™ã€‚ã?“ã?®ã‚ªãƒ•ã‚»ãƒƒãƒˆã?«ã‚ˆã‚Šã€?00ï¼š00ã?‹ã‚‰é–‹å§‹ã?™ã‚‹æ§˜ã?«ä¿®æ­£ã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(ãƒ—ãƒ­ãƒ?ãƒ¼ã‚¸ãƒ§ãƒ³å†…æ©Ÿèƒ½)</b>ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«ãƒ–ãƒ©ãƒ³ã‚¯ã?®1x1pxã‚¢ã‚¤ã‚³ãƒ³ã‚’ä½¿ç”¨ã?—ã?¾ã?™ ");
DEFINE('_EW_DESC_IP_STATS', "ã‚¢ãƒ‰ãƒ¬ã‚¹çµ±è¨ˆã‚’æœ‰åŠ¹ã?«ã?—ã?¾ã?™ã€‚è¤‡æ•°ã?®å›½ã?§ã?¯é•·æ™‚é–“ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹å†…ã?«IPã‚’ä¿?å­˜ã?™ã‚‹ã?“ã?¨ã?¯æ³•å¾‹ã?§ç¦?ã?˜ã‚‰ã‚Œã?¦ã?„ã?¾ã?™ã€‚ãƒªã‚¹ã‚¯ã‚’ã?”æ‰¿çŸ¥ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_DESC_HIDE_ADS', "ã?“ã?®è¨­å®šã?§ã?¯ã€?æœ¬å½“ã?«åºƒå‘Šã‚’è¦‹ã?Ÿã??ã?ªã?„å ´å?ˆã€?ãƒ?ãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã?«åºƒå‘Šã‚’éš ã?—ã?¾ã?™ã€‚åºƒå‘Šã‚’ä¿?å­˜ã?™ã‚‹ã?“ã?¨ã?§ã€?æœ¬ãƒ„ãƒ¼ãƒ«ã?®æ›´ã?ªã‚‹é–‹ç™ºã‚’ã‚µãƒ?ãƒ¼ãƒˆã?™ã‚‹ã?“ã?¨ã?«ã?ªã‚Šã?¾ã?™ã€‚ã?‚ã‚Šã?Œã?¨ã?†ã?”ã?–ã?„ã?¾ã?™ã€‚");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "ãƒžã‚¦ã‚¹ã‚¯ãƒªãƒƒã‚¯ã?®ä»£ã‚?ã‚Šã?«ãƒžã‚¦ã‚¹ã‚ªãƒ¼ãƒ?ãƒ¼ã?§ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—ã‚’è¡¨ç¤ºã?™ã‚‹ã?«ã?¯ã€?ã‚¢ãƒ³ãƒ?ã‚§ãƒƒã‚¯ã?«ã?—ã?¦ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_DESC_SERVER_URI_KEY', "åˆ?æœŸè¨­å®šã?¯'REDIRECT_URL'ã?§ã?™ã€‚ãƒªãƒ©ã‚¤ãƒˆã?™ã‚‹URLã‚’ä½¿ç”¨ã?™ã‚‹å ´å?ˆã€?ã?“ã‚Œã?ŒåŸºæº–ã?§ã?™ã€‚ã?¾ã?Ÿindex.phpã?®ã?¿è¨˜éŒ²ã?™ã‚‹å ´å?ˆã€?'SCRIPT_URL'ã?«è¨­å®šã?•ã‚Œã?¾ã?™ã€‚");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã?Ÿãƒ¦ãƒ¼ã‚¶ãƒ¼ã?«è¡¨ç¤ºã?•ã‚Œã‚‹ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸æˆ–ã?¯ã?“ã‚Œã‚‰ã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?«ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã‚‹ç?†ç”±ã?«ã?¤ã?„ã?¦ã?®è©³ç´°");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—å¹…");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—é«˜ã?•");
DEFINE('_EW_DESC_TOOLTIP_URL', "è¨ªå•?è€…ã?®IPã‚’è¦–è¦šåŒ–ã?™ã‚‹ã?Ÿã‚?ã?«ã€?ã?“ã?“ã?«URLã‚’å…¥åŠ›ã?§ã??ã?¾ã?™ã€‚è¨ªå•?è€…ã?®IPã?§ã??ã?®{ip}ã?Œç½®ã??æ?›ã?ˆã‚‰ã‚Œã?¾ã?™ã€‚ä¾‹ http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "çµ±è¨ˆã?‹ã‚‰ç„¡è¦–ã?•ã‚Œã?Ÿã?„URIã‚’å…¥åŠ›ã?§ã??ã?¾ã?™ã€‚ãƒ¯ã‚¤ãƒ«ãƒ‰ã‚«ãƒ¼ãƒ‰(* and ?)ã‚’ã?“ã?“ã?§ä½¿ç”¨ã?§ã??ã?¾ã?™ã€‚ä¾‹: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "ç›®æ¨™å??ã‚’ã?“ã?“ã?«è¨˜å…¥ã?—ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®å??å‰?ã?¯çµ±è¨ˆå†…ã?«è¡¨ç¤ºã?•ã‚Œã?¾ã?™ã€‚");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "ãƒ‰ãƒ¡ã‚¤ãƒ³å??ã?®å¾Œã‚?å…¨ã?¦ã€‚http://www.codegravity.com/projects/ã?«é–¢ã?™ã‚‹URI: /projects/ (Example to use: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GETå¤‰æ•°ã?¯ã€?é€šå¸¸a ?ã‚„ &amp;ãƒžãƒ¼ã‚¯ã?®å¾Œã?«ã€?URLå†…ã?§è¦‹ã‚‰ã‚Œã‚‹å¤‰æ•°ã?§ã?™ã€‚ ä¾‹ http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smithã€‚ã?“ã?®ãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰å†…ã?§å…¨ã?¦ã?®GETå€¤ã‚’ã‚¹ã‚­ãƒ£ãƒ³ã?™ã‚‹ã?Ÿã‚?ã?« <u>*</u>ã‚’ä½¿ç”¨ã?™ã‚‹ã?“ã?¨ã‚‚ã?§ã??ã?¾ã?™ã€‚ (ä½¿ç”¨ä¾‹: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "ã?“ã?“ã?§å‰?å›žã?®ãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰ã?‹ã‚‰æ•°å€¤ã?®ä¸€è‡´ã‚’æŒ‡å®šã?™ã‚‹å¿…è¦?ã?Œã?‚ã‚Šã?¾ã?™ (ä½¿ç”¨ä¾‹: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "ã?»ã?¼ä¼¼ã?¦ã?„ã?¾ã?™ã?Œã€?ãƒ•ã‚©ãƒ¼ãƒ ã?‹ã‚‰é€?ä¿¡ã?•ã‚Œã?Ÿå€¤ã‚’ç¢ºèª?ã?—ã?¦ã?„ã?¾ã?™ã€‚ã?ŠæŒ?ã?¡ã?®ã‚¦ã‚§ãƒ–ã‚µã‚¤ãƒˆä¸Šã?«ãƒ•ã‚©ãƒ¼ãƒ ã‚’ã?ŠæŒ?ã?¡ã?§ã?‚ã‚Œã?°ã€?ãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰&lt;input type='text' name='<u>experiences</u>' /&gt;ã?Œã?‚ã‚Šã?¾ã?™ã€‚ (ä½¿ç”¨ä¾‹: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "ã?“ã?®ãƒ?ã‚¹ãƒˆãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰ã?‹ã‚‰ä¸€è‡´ã?—ã?Ÿå€¤ã€‚ ä¾‹ ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?«ã‚¸ãƒ£ãƒ?ã?®ä½¿ç”¨çµŒé¨“ã?Œã?‚ã‚‹ã?‹ã?©ã?†ã?‹ç¢ºèª?ã?—ã?Ÿã?„ã€‚ (ä½¿ç”¨ä¾‹: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "ä¸€è‡´ã?™ã?¹ã??ãƒšãƒ¼ã‚¸ã‚¿ã‚¤ãƒˆãƒ«ã€‚ (ä½¿ç”¨ä¾‹: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "ãƒ­ã‚°ã‚¤ãƒ³ãƒ¦ãƒ¼ã‚¶ãƒ¼å?? (ä½¿ç”¨ä¾‹: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?®ã‚¢ã‚¯ã‚»ã‚¹å…ƒIP (ä½¿ç”¨ä¾‹: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?®ã‚¢ã‚¯ã‚»ã‚¹å…ƒURL (ä½¿ç”¨ä¾‹: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "ã?‚ã?ªã?Ÿã?Œç‰¹å®šã?—ã?ŸURLã?¸ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?Œãƒªãƒ€ã‚¤ãƒ¬ã‚¯ãƒˆã?•ã‚Œã?¾ã?—ã?Ÿã€‚'ãƒ–ãƒ­ãƒƒã‚­ãƒ³ã‚°'ã‚ˆã‚Šã€?é«˜ã?„å„ªå…ˆåº¦: (ä½¿ç”¨ä¾‹: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "ç›®æ¨™è¡¨ã?®åˆ‡ã‚Šè©°ã‚?ãƒ?ãƒ£ãƒ¼ãƒˆæ•°");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(ãƒ—ãƒ­ãƒ?ãƒ¼ã‚¸ãƒ§ãƒ³ã?®æ©Ÿèƒ½)</b> codegravity.comã?¸ã?®ãƒ?ãƒƒã‚¯ãƒªãƒ³ã‚¯ã‚’ç„¡åŠ¹ã?«ã?§ã??ã?¾ã?™ã?Œã€?ã??ã?®ã?¾ã?¾ã?”åˆ©ç”¨ã?„ã?Ÿã? ã?‘ã‚‹ã?¨åŠ©ã?‹ã‚Šã?¾ã?™ã€‚ã?”ç?†è§£ã?„ã?Ÿã? ã??ã?‚ã‚Šã?Œã?¨ã?†ã?”ã?–ã?„ã?¾ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ã?§ã?®å›½ã?®ç·?çµ±è¨ˆè¡¨ç¤ºã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_ ã?«æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®è¨ªå•?è€…/å›½ã?®é †ç•ªã‚’å…¥ã‚Œæ›¿ã?ˆã?Ÿã?„å ´å?ˆã€? æœªç¢ºèª?ã?«ã?—ã?¦ã??ã? ã?•ã?„ã€‚ã??ã?†ã?™ã‚‹ã?¨ã€?å…ˆã?šè¨ªå•?è€…ã?Œç?¾ã‚Œã?¾ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«å›½ã?®æ•°ã?Œè¡¨ç¤ºã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ã?«å›½ã?®è¨ªå•?è€…ã?Œè¡¨ç¤ºã?•ã‚Œã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?§å›½ã?®ç·?æ•°ã‚’ä¿?å­˜ã?™ã‚‹ã?®ã?«æ•°ç§’ã?‹ã?‹ã‚Šã?¾ã?™ã€‚");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?§è¨ªå•?è€…ã‚’ä¿?å­˜ã?™ã‚‹ã?®ã?«æ•°ç§’ã?‹ã?‹ã‚Šã?¾ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "æœ¬æ—¥ã?®è¨ªå•?è€…ã‚’ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_...ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "æ˜¨æ—¥ã?®è¨ªå•?è€…ã‚’ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_...ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "ä»Šé€±ã?®è¨ªå•?è€…ã‚’ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_...ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "å…ˆé€±ã?®è¨ªå•?è€…ã‚’ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_...ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "ä»Šæœˆã?®è¨ªå•?è€…ã‚’ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_...ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "å…ˆæœˆã?®è¨ªå•?è€…ã‚’ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_...ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã‚’ã‚¤ãƒ³ã‚¹ãƒˆãƒ¼ãƒ«ä»¥é™?ã?®è¨ªå•?è€…æ•°ã‚’è¡¨ç¤ºã?—ã?¾ã?™ã€‚å¤‰æ›´ã?—ã?Ÿå ´å?ˆã€?CACHE_FRONTEND_..ã?§æ™‚é–“è¨­å®šå¾Œã€?ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å†…ã?§ã?“ã?®è¨­å®šã?ŒåŠ¹æžœçš„ã?§ã?™ã€‚");
DEFINE('_EW_DESC_LANGUAGE', "ä½¿ç”¨ã?™ã‚‹è¨€èªžãƒ•ã‚¡ã‚¤ãƒ«ã€‚ /components/com_extrawatch/lang/ã?«ä¿?å­˜ã?•ã‚Œã?¦ã?„ã?¾ã?™ã€‚æ–°è¦?ã?®è¨€èªžãƒ•ã‚¡ã‚¤ãƒ«ã‚’ä½œæˆ?ã?—ã?Ÿã?„å ´å?ˆã€?å…ˆã?šã€?ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã?®ãƒ›ãƒ¼ãƒ ãƒšãƒ¼ã‚¸ã‚’ç¢ºèª?ã?—ã€?è¨€èªžãƒ•ã‚¡ã‚¤ãƒ«ã?Œã?ªã?„å ´å?ˆã€?åˆ?æœŸè¨­å®šenglish.phpã‚’ä¾‹ã?ˆã?°german.phpã?«ã‚³ãƒ”ãƒ¼ã?—ã?¦ã??ã? ã?•ã?„ã€‚ã??ã?—ã?¦ã?“ã?®ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã?«ä¿?å­˜ã?—ã?¦ã??ã? ã?•ã?„ã€‚ã??ã?—ã?¦æ­£ç¢ºã?«å…¨ã?¦ã?®ä¸»è¦?ã?ªå€¤ã‚’ç¿»è¨³ã?—ã?¦ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_DESC_GOALS', "ç›®æ¨™ã?§ç‰¹åˆ¥ã?®ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ã‚’æŒ‡å®šã?§ã??ã?¾ã?™ã€‚ã?“ã‚Œã‚‰ã?®ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ã?Œä¸€è‡´ã?™ã‚‹éš›ã€?ç›®æ¨™ã‚«ã‚¦ãƒ³ã‚¿ãƒ¼ã?Œå¢—åŠ ã?—ã?¾ã?™ã€‚ã?“ã?®æ–¹æ³•ã?§ã€?ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?Œç‰¹å®šã?®URLã?¸ã‚¢ã‚¯ã‚»ã‚¹ã?—ã?Ÿã?‹ã€?ç‰¹å®šã?®å€¤ã‚’æŠ•å‡½ã?—ã?Ÿã?‹ã€?ç‰¹å®šã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼å??ã‚’ä¿?æœ‰ã?—ã?¦ã?„ã‚‹ã?‹æˆ–ã?¯ç‰¹å®šã?®ã‚¢ãƒ‰ãƒ¬ã‚¹ã?‹ã‚‰ã‚¢ã‚¯ã‚»ã‚¹ã?—ã?¦ã??ã?¦ã?„ã‚‹ã?‹ã‚’ãƒ¢ãƒ‹ã‚¿ãƒªãƒ³ã‚°ã?§ã??ã?¾ã?™ã€‚ã?“ã?®ã‚ˆã?†ã?ªãƒ¦ãƒ¼ã‚¶ãƒ¼ã‚’ãƒ–ãƒ­ãƒƒã‚¯æˆ–ã?¯ä»–ã?®URLã?¸ãƒªãƒ€ã‚¤ã‚¢ãƒ«ã?§ã??ã?¾ã?™ã€‚");
DEFINE('_EW_DESC_GOALS_INSERT', "å??å‰?ã‚’é™¤ã??å…¨ã?¦ã?®ãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰ã?§ã€?ãƒ¯ã‚¤ãƒ«ãƒ‰ã‚«ãƒ¼ãƒ‰ã?¨ã?—ã?¦*ã‚„?ã‚’ä½¿ç”¨ã?§ã??ã?¾ã?™ã€‚ä¾‹ã?ˆã?°: ?ear (ä¸€è‡´å?˜èªž: near, tear, ..)ã€?p*r (ä¸€è‡´å?˜èªž: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "è¨ªå•?è€…ã?«ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã?Ÿã?„å ´å?ˆã€?1ã‚’è¨­å®šã?—ã?¦ã??ã? ã?•ã?„ã€‚ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã?®ãƒªã‚»ãƒƒãƒˆå†…å®¹ã‚’è¦‹ã?¾ã?›ã‚“ã€‚ãƒªãƒ€ã‚¤ãƒ¬ã‚¯ãƒˆã‚„IPã?Œ'ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã?Ÿ'çµ±è¨ˆã?¸è¿½åŠ ã?•ã‚Œã‚‹ã?“ã?¨ã?ªã??ã€?ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã?Ÿã?¨ã?„ã?†ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ã?Œè¡¨ç¤ºã?•ã‚Œã?¾ã?™ã€‚ (ä½¿ç”¨ä¾‹: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "å›½æ?¡ä»¶");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "å›½å??è»¢æ?¡ä»¶");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "å¤§æ–‡å­—ã?§ã?®2æ–‡å­—è¡¨è¨˜ã?®å›½ã‚³ãƒ¼ãƒ‰(ä¾‹: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "å›½å†…");
DEFINE('_EW_STATS_FROM', "ã?‹ã‚‰");
DEFINE('_EW_STATS_TO', "å®›");
DEFINE('_EW_STATS_ADD_TO_GOALS', "ç›®æ¨™ã?¸è¿½åŠ ");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "ã?“ã?®å›½ã?«ç›®æ¨™è¿½åŠ ");
DEFINE('_EW_MENU_REPORT_BUG', "ãƒ?ã‚°ã‚„æ©Ÿèƒ½ã‚’å ±å‘Š");
DEFINE('_EW_GOALS_COUNTRY', "å›½");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«å¤§æ–‡å­—ã?§å›½å??ã‚’è¡¨è¨˜ã?—ã?Ÿã?„å ´å?ˆ (ä¾‹: å°?æ–‡å­—ã?§ãƒ‰ã‚¤ãƒ„ã€?ã‚¤ã‚®ãƒªã‚¹ã?¨è¡¨è¨˜ã?™ã‚‹ä»£ã‚?ã‚Šã?«å¤§æ–‡å­—ã?§ãƒ‰ã‚¤ãƒ„ã€?ã‚¤ã‚®ãƒªã‚¹ã?¨è¡¨è¨˜)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ãƒ¦ãƒ¼ã‚¶ãƒ¼ã‚’å¼•ã??ã?¤ã?‘ã?¦ä¿?å­˜ã?™ã‚‹ã?®ã?«æ•°ç§’ã?‹ã?‹ã‚Šã?¾ã?™");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å?ˆè¨ˆå†…ã?«è¡¨ç¤ºã?•ã‚Œã?Ÿä¸»è¦?å€¤ã€‚ä»–ã?®ã‚¹ã‚¿ãƒ¼ãƒˆãƒ„ãƒ¼ãƒ«ã?‹ã‚‰ç§»å‹•ã?™ã‚‹éš›æœ‰ç”¨ã?§ã?™ã€‚(ä¾‹: 20000)ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?—ã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?¸è¨­å®šã?—ã?¦ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_DESC_IGNORE_USER', "ã?“ã?®ãƒ†ã‚­ã‚¹ãƒˆãƒœãƒƒã‚¯ã‚¹å†…ã?«ãƒªã‚¹ãƒˆã?•ã‚Œã?Ÿãƒ¦ãƒ¼ã‚¶ãƒ¼ã‚’ç„¡è¦–ã€‚ãƒ©ã‚¤ãƒ³æ¯Žã€‚ (ä¾‹: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "æœ¬æ—¥æœ€ã‚‚ã‚¢ã‚¯ãƒ†ã‚£ãƒ–ã?ªãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?®å?ˆè¨ˆ");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "ä»¥ä¸‹ã?®ã‚¹ãƒ‘ãƒ ãƒ¯ãƒ¼ãƒ‰ãƒªã‚¹ãƒˆã?‹ã‚‰ã?®è¨€è‘‰ã?«åŸºã?¥ã??ç¦?æ­¢äº‹é …ã‚’æœ‰åŠ¹ã?«ã?—ã?¾ã?™ã?‹ï¼Ÿ");
DEFINE('_EW_DESC_SPAMWORD_LIST', "ã‚¹ãƒ‘ãƒ ãƒœãƒƒãƒˆã?Œä½¿ç”¨ã?—ã?Ÿæœ€ã‚‚å…±é€šã?®ã‚¹ãƒ‘ãƒ è¨€èªžã€‚ã?“ã?“ã?§ãƒ¯ã‚¤ãƒ«ãƒ‰ã‚«ãƒ¼ãƒ‰ã‚’ä½¿ç”¨ã?§ã??ã?¾ã?™ (ä¾‹: ph?rmac*)ã€‚ä¸Šè¨˜è¨­å®šã?Œæœ‰åŠ¹ã?§ã?‚ã‚‹å ´å?ˆã€?ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã?Œã€?ã?“ã‚Œã‚‰ã?®ã‚¹ãƒ‘ãƒ è¨€èªžã?§ã?ŠæŒ?ã?¡ã?®ã‚¦ã‚§ãƒ–ã‚µã‚¤ãƒˆä¸Šã?«ãƒ•ã‚©ãƒ¼ãƒ ( HTTP POSTè¦?æ±‚)ã‚’ã‚¢ã‚¿ãƒƒã‚«ãƒ¼ã?Œé€?ä¿¡ã?—ã?Ÿã?‹ç¢ºèª?ã?—ã?¾ã?™ã€‚(ãƒ•ã‚©ãƒ¼ãƒ ã?Œã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ™ãƒ¼ã‚¹ã?®ã‚¦ã‚§ãƒ–ã‚µã‚¤ãƒˆã?®ãƒ•ã‚©ãƒ¼ãƒ©ãƒ ã€?ã‚³ãƒ¡ãƒ³ãƒˆã?®ã?¿èª­ã?¿è¾¼ã‚€å ´å?ˆã?«é?©ç”¨ã?•ã‚Œã?¾ã?™ã?Œã€?å?¯èƒ½ã?ªãƒ•ã‚©ãƒ¼ãƒ ã‚’é€?ä¿¡ã?—ã‚ˆã?†ã?¨ã?™ã‚‹ã‚¹ãƒ‘ãƒ ãƒœãƒƒãƒˆã‚’ãƒ–ãƒ­ãƒƒã‚¯ã?™ã‚‹ã?®ã?«ã?¨ã?¦ã‚‚åŠ¹æžœçš„ã?§ã?™ã€‚)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "ã‚¢ãƒ³ãƒ?ã‚¹ãƒ‘ãƒ ");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«å†…ãƒªãƒ³ã‚¯ã?§URLã‚’ç‰¹å®šã?§ã??ã€?ãƒ¦ãƒ¼ã‚¶ãƒ¼å??ã‚’ãƒ¦ãƒ¼ã‚¶ãƒ¼ã?Œã‚¯ãƒªãƒƒã‚¯ã?—ã?Ÿéš›é–‹ã??ã?¾ã?™ã€‚ã‚¹ãƒˆãƒªãƒ³ã‚°{user}ã‚’å?«ã‚€å¿…è¦?ã?Œã?‚ã‚Šã?¾ã?™ã€‚å®Ÿéš›ã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼å??ã?¨ç½®ã??æ?›ã?ˆã‚‰ã‚Œã?¾ã?™ã€‚ (ä¾‹ index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "ã‚­ãƒ¼ãƒ•ãƒ¬ãƒ¼ã‚º");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "å±¥æ­´ã‚¿ãƒ–å†…ã?®æœ€å¤§å€¤ (ä¾‹: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "è¨ªå•?ç”»é?¢ã?§ã?¯å…¨ã?¦ã?§ã?¯ã?ªã??ã€?æœ€çµ‚è¨ªå•?ãƒšãƒ¼ã‚¸ã?®ã?¿è¡¨ç¤ºã?•ã‚Œã?¾ã?™");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "è¨ªå•?ç”»é?¢ã?§ã?¯ã€?è¨ªå•?ãƒšãƒ¼ã‚¸ã‚¿ã‚¤ãƒˆãƒ«å†…ã?®ä»£è¡¨ã‚µã‚¤ãƒˆå??ã‚’éš ã?—ã?¾ã?™");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "è¨ªå•?å±¥æ­´ã?®ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹å†…ã?«ä¿?å­˜ã?™ã‚‹ã?Ÿã‚?ã?®è¨ªå•?è€…æœ€å¤§æ•°å€¤ã€‚ã‚¢ã‚¯ã‚»ã‚¹æ•°ã?Œå¤šã?„å ´å?ˆã€?ç›´ã??ã?«ä¸€æ?¯ã?«ã?ªã‚‹ã?Ÿã‚?ã?”æ³¨æ„?ã??ã? ã?•ã?„ã€‚çµ±è¨ˆå†…ã?®å±¥æ­´è¡¨ã?®ãƒ‡ãƒ¼ã‚¿å?«ã?¿é‡?ã‚’å¸¸ã?«ã?”ç¢ºèª?ã??ã? ã?•ã?„");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹è¡¨ã‚’ã‚¢ãƒ³ã‚¤ãƒ³ã‚¹ãƒˆãƒ¼ãƒ«ã?«ã?™ã‚‹ã€‚æ›´æ–°ä¸­ã?§ã?‚ã‚‹ã?¾ã?Ÿãƒ‡ãƒ¼ã‚¿ã‚’ä¿?å­˜ã?—ã?Ÿã?„å ´å?ˆã€?ã?“ã?®ã‚ªãƒ—ã‚·ãƒ§ãƒ³ã‚’ã‚¢ãƒ³ã‚¤ãƒ³ã‚¹ãƒˆãƒ¼ãƒ«ã?™ã‚‹å‰?ã?«ã?”ç¢ºèª?ã??ã? ã?•ã?„ã€‚ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹è¡¨ã‚’ã‚¢ãƒ³ã‚¤ãƒ³ã‚¹ãƒˆãƒ¼ãƒ«ã?«ã?—ã?¦ã??ã? ã?•ã?„ã€‚");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "æ¯Žæ™©ã€?å‰?æ—¥ã?«é–¢ã?™ã‚‹å ±å‘Šæ›¸ã‚’ãƒ¡ãƒ¼ãƒ«ã?§å?—ã?‘å?–ã‚Šã?¾ã?™ã€‚æœ?èª­ã‚€ã?“ã?¨ã?Œã?§ã??ã?¾ã?™ã€‚");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "ã?“ã‚Œã‚‰ã?®å ±å‘Šæ›¸ã‚’å?—ã?‘å?–ã‚Šã?Ÿã?„ãƒ¡ãƒ¼ãƒ«ã‚¢ãƒ‰ãƒ¬ã‚¹");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿<b>1æ—¥ä»¥é™?</b>å¤‰æ›´å€¤ã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿<b>1æ—¥ä»¥å‰?</b>å¤‰æ›´å€¤ã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿<b>7æ—¥ä»¥é™?</b>å¤‰æ›´å€¤ã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿<b>7æ—¥ä»¥å‰?</b>å¤‰æ›´å€¤ã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿<b>28æ—¥ä»¥é™?</b>å¤‰æ›´å€¤ã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "ç¢ºçŽ‡ã?Œ{value}ã‚ˆã‚Šé«˜ã?„ãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸ã?«è¡Œã?®ã?¿<b>28æ—¥ä»¥å‰?</b>å¤‰æ›´å€¤ã?®ã?¿å?«ã‚?ã?¦ã??ã? ã?•ã?„ã€‚ã?“ã?®æ©Ÿèƒ½ã‚’ä½¿ç”¨ã?•ã‚Œã?Ÿã??ã?ªã?„å ´å?ˆã€?0ã?«è¨­å®šã?—ã?¦ã??ã? ã?•ã?„<i>(ä¾‹: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(ãƒ—ãƒ­ãƒ?ãƒ¼ã‚¸ãƒ§ãƒ³ã?®æ©Ÿèƒ½)</b>  rel='nofollow'å±žæ€§ã?§å¤‰æ›´ã?•ã‚Œã?Ÿãƒ­ã‚´ãƒªãƒ³ã‚¯ã‚’ä½œæˆ?ã?•ã‚Œã?Ÿã?„å ´å?ˆã€?ã?“ã?®è¨­å®šã‚’æœ‰åŠ¹ã?«ã?—ã?¦ã??ã? ã?•ã?„ ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "ãƒ¡ãƒ¼ãƒ«è¡Œå??æœ€å¤§æ–‡å­—æ•°ã€‚ãƒ¡ãƒ¼ãƒ«ã‚¯ãƒ©ã‚¤ã‚¢ãƒ³ãƒˆãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ç”»é?¢ã?Œå°?ã?•ã?™ã?Žã‚‹å ´å?ˆã€?ã?“ã‚Œã‚’å¤‰æ›´ã?—ã?¦ã??ã? ã?•ã?„ã€‚");

DEFINE('_EW_MENU_HISTORY', "å±¥æ­´");
DEFINE('_EW_MENU_EMAILS', "Eãƒ¡ãƒ¼ãƒ«");
DEFINE('_EW_MENU_STATUS', "DBçŠ¶æ³?");
DEFINE('_EW_DESC_BLOCKED', "ã‚¢ãƒ³ãƒ?ã‚¹ãƒ‘ãƒ ã?«ã‚ˆã‚Šã?“ã‚Œã‚‰ã?®IPã?¯ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã?¦ã?„ã?¾ã?™ã€‚");


DEFINE('_EW_HISTORY_VISITORS', "è¨ªå•?è€…å±¥æ­´");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "%dæœ€çµ‚è¨˜éŒ²ã?®ã?¿è¡¨ç¤º
                ã?“ã?®å€¤ã‚’å¤‰æ›´ã?™ã‚‹ã?«ã?¯ã€?è¨­å®š -&gt; å±¥æ­´ &amp; ãƒ‘ãƒ•ã‚©ãƒ¼ãƒžãƒ³ã‚¹ -&gt; HISTORY_MAX_DB_RECORDSã?¸é€²ã‚“ã?§ã??ã? ã?•ã?„ã€‚ã?“ã?®è¨­å®šã?¯ã€?ä»¥ä¸‹ã?®ãƒ‡ãƒ¼ã‚¿èª­è¾¼ã?¿æ™‚é–“ã?«å½±éŸ¿ã‚’ä¸Žã?ˆã‚‹ã?Ÿã‚?ã?”æ³¨æ„?ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_MENU_BUG', "ãƒ?ã‚°ã‚’å ±å‘Š");
DEFINE('_EW_MENU_FEATURE', "æ©Ÿèƒ½è¦?æœ›");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "ã‚­ãƒ¼ãƒ•ãƒ¯ãƒ¼ãƒ‰");

DEFINE('_EW_BLOCKING_UNBLOCK', "ãƒ–ãƒ­ãƒƒã‚¯ã?—ã?ªã?„");
DEFINE('_EW_STATS_KEYPHRASE ', "ã‚­ãƒ¼ãƒ•ãƒ¬ãƒ¼ã‚º");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "ãƒ†ãƒ¼ãƒ–ãƒ«å??");
DEFINE('_EW_STATUS_DATABASE_ROWS', "è¡Œæ•°");
DEFINE('_EW_STATUS_DATABASE_DATA', "ãƒ‡ãƒ¼ã‚¿");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "å?ˆè¨ˆ");

DEFINE('_EW_EMAIL_REPORTS', "Eãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "æ˜¨æ—¥ã?‹ã‚‰ç™ºç”Ÿã?—ã?Ÿãƒ•ã‚£ãƒ«ã‚¿ãƒ¼ã?•ã‚Œã?ŸEãƒ¡ãƒ¼ãƒ«å ±å‘Šæ›¸");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Eãƒ¡ãƒ¼ãƒ«å€¤ãƒ•ã‚£ãƒ«ã‚¿ãƒ¼");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "å€¤");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "ç¢ºçŽ‡");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1æ—¥é–“å¤‰æ›´");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7æ—¥é–“å¤‰æ›´");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28æ—¥é–“å¤‰æ›´");
DEFINE('_EW_ANTISPAM_BLOCKED', "æœ¬æ—¥ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã?Œ%dã‚¹ãƒ‘ãƒžãƒ¼ãƒ’ãƒƒãƒˆã‚’ãƒ–ãƒ­ãƒƒã‚¯ã?—ã?¾ã?—ã?Ÿã€‚å?ˆè¨ˆ: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "ãƒ–ãƒ­ãƒƒã‚¯ã?•ã‚Œã?ŸIPã‚¢ãƒ‰ãƒ¬ã‚¹");
DEFINE('_EW_ANTISPAM_SETTINGS', "ã‚¢ãƒ³ãƒ?ã‚¹ãƒ‘ãƒ è¨­å®š");
DEFINE('_EW_TRAFFIC_AJAX', "AJAXã?Œãƒˆãƒ©ãƒ•ã‚£ãƒƒã‚¯ã‚’æ›´æ–°ã?—ã?¾ã?™(ãƒžãƒƒãƒ—ã‚’é™¤ã??)");


DEFINE('_EW_HISTORY_PREVIOUS', "å‰?");
DEFINE('_EW_HISTORY_NEXT', "æ¬¡");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "å›½ã?®ã‚³ãƒ©ãƒ æ•°");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "å›½ã?®è¡Œæ•°");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "å›½å??ã‚’è¡¨ç¤ºã?—ã?¾ã?™ã?‹");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "å…ˆã?šå›½æ——ã‚’è¡¨ç¤ºã€?ã??ã?—ã?¦ç¢ºçŽ‡");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "å??è»¢æ?¡ä»¶ã‚’å?–å¾—");
DEFINE('_EW_GOALS_POST_INVERSED', "å??è»¢æ?¡ä»¶ã‚’ãƒ?ã‚¹ãƒˆ");
DEFINE('_EW_GOALS_TITLE_INVERSED', "å??è»¢æ?¡ä»¶ã?®ã‚¿ã‚¤ãƒˆãƒ«");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "å??è»¢æ?¡ä»¶ã?®ãƒ¦ãƒ¼ã‚¶ãƒ¼å??");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "å??è»¢æ?¡ä»¶ã?«èµ·å› ");

DEFINE('_EW_STATS_MAP', "æœ€çµ‚è¨ªå•?ãƒžãƒƒãƒ—");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "æœ€çµ‚è¨ªå•?ãƒžãƒƒãƒ—ã?«è¡¨ç¤ºã?•ã?›ã‚‹ã?Ÿã‚?ã?«</a><a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.comã‚­ãƒ¼ã‚’å…¥åŠ›ã?—ã?¦ã??ã? ã?•ã?„ï¼š");
DEFINE('_EW_STATS_MAP_STORE_KEY', "ã‚¹ãƒˆã‚¢ã‚­ãƒ¼");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "<a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.comã?§å?–å¾—ã?—ã?Ÿ</a>æœ‰åŠ¹ã?ªipinfodbã‚­ãƒ¼ã‚’å…¥åŠ›ã?—ã?¦ã??ã? ã?•ã?„ã‚’å…¥åŠ›ã?—ã?¦ã??ã? ã?•ã?„");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "è‰¯ã??ã?ªã?„è¦?æ±‚: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "é€?ä¿¡ãƒ•ã‚©ãƒ¼ãƒ ãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URLãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ¼");
DEFINE('_EW_VISIT_ADD_PAGE', " ç›®æ¨™ã?¨ã?—ã?¦ãƒšãƒ¼ã‚¸ã‚’è¿½åŠ ");
DEFINE('_EW_VISIT_BLOCK_IP', " ã?“ã?®IPã‚¢ãƒ‰ãƒ¬ã‚¹ã‚’ãƒ–ãƒ­ãƒƒã‚¯");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " ç›®æ¨™ã?¨ã?—ã?¦ã?“ã?®é€?ä¿¡ãƒ•ã‚©ãƒ¼ãƒ å¤‰å€¤ã‚’è¿½åŠ ");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " ç›®æ¨™ã?¨ã?—ã?¦ã?“ã?®URLãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ã‚’è¿½åŠ ");

DEFINE('_EW_TREND_EMPTY', "Empty");

DEFINE('_EW_NOT_NUMBER', " è­¦å‘Š:å…¥åŠ›å€¤ã?Œæ•°å€¤ã?§ã?¯ã?‚ã‚Šã?¾ã?›ã‚“ã€‚ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã?Œé?©åˆ‡ã?«èµ·å‹•ã?—ã?¾ã?›ã‚“ï¼?");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; ã?“ã‚Œã?¯15æ—¥é–“è©•ä¾¡ç‰ˆã?§ã?™ã€‚æ®‹ã‚Šæ—¥æ•°: <b>%d</b> æ°¸ä¹…ç‰ˆã‚’ã?”è³¼å…¥ã??ã? ã?•ã?„ <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>æœ¬ã‚½ãƒ•ãƒˆå?Šã?³ä»Šå¾Œã?®ã‚½ãƒ•ãƒˆã?«ã?Šã?‘ã‚‹ã?‚ã?ªã?Ÿã?®</a>ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ãƒ©ã‚¤ã‚»ãƒ³ã‚¹ã?®ãƒ‰ãƒ¡ã‚¤ãƒ³");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " ãƒˆãƒ©ã‚¤ã‚¢ãƒ«ç‰ˆã?®æœŸé™?ã?Œã??ã‚Œã?¾ã?—ã?Ÿã€‚ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã‚’ã?”è³¼å…¥ã??ã? ã?•ã?„ã€‚");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "ãƒ©ã‚¤ã‚»ãƒ³ã‚¹ã?Œç„¡äº‹ã?«èµ·å‹•ã?—ã?¾ã?—ã?Ÿã€‚ã?‚ã‚Šã?Œã?¨ã?†ã?”ã?–ã?„ã?¾ã?™");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>ã‚¨ãƒ©ãƒ¼: ãƒ©ã‚¤ã‚»ãƒ³ã‚¹ã‚­ãƒ¼ã?¨ãƒ‰ãƒ¡ã‚¤ãƒ³ã?Œä¸€è‡´ã?—ã?¾ã?›ã‚“</b><br/>ä»¥ä¸‹ã?«è¡¨ç¤ºã?—ã?Ÿå¯„ä»˜ãƒ•ã‚©ãƒ¼ãƒ ã?¨å?Œã?˜ãƒ‰ãƒ¡ã‚¤ãƒ³å??ã‚’ã?”å…¥åŠ›ã?•ã‚Œã?¾ã?—ã?Ÿã?‹ï¼Ÿ <br/>ã‚¯ãƒªãƒƒã‚¯ '<b>ä»¥ä¸‹ã?«æ­£ã?—ã?„èµ·å‹•ã‚­ãƒ¼ã‚’è¦?æ±‚ã?—ã?¦ã??ã? ã?•ã?„</b>æˆ–ã?¯ã?Šå•?ã?„å?ˆã‚?ã?›ã??ã? ã?•ã?„: support@codegravity.com<br/>");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "é•·æ™‚é–“ä¸Šè¨˜ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ã‚’è¦‹ã‚‰ã‚Œã?¦ã?„ã‚‹ã?®ã?§ã?‚ã‚Œã?°ã€?ãƒ©ã‚¤ãƒ–ã‚µã‚¤ãƒˆã?Œé–“é?•ã?£ã?¦ã?„ã‚‹å?¯èƒ½æ€§ã?Œã?‚ã‚Šã?¾ã?™ã€‚
                    ã‚³ãƒ³ãƒ?ãƒ¼ãƒ?ãƒ³ãƒˆ/com_extrawatch/config.php
                    ã‚¢ãƒ³ã‚³ãƒ¡ãƒ³ãƒˆã‚’é–‹ã?„ã?¦ã??ã? ã?•ã?„ã€?ã??ã?—ã?¦å®Ÿéš›ã?®ãƒ©ã‚¤ãƒ–ã‚µã‚¤ãƒˆã‚’è¨­å®šã?—ã?¦ã??ã? ã?•ã?„ã€‚ä¾‹:
                    ã?„ã?¥ã‚Œã?‹ã‚’æ±ºå®šã?—ã?¦ã??ã? ã?•ã?„('EXTRAWATCH_LIVE_SITE'ã€?'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "è­¦å‘Š: ãƒ–ãƒ©ã‚¦ã‚¶å†…ã?®ã‚µã‚¤ãƒˆã?¨æ§‹æˆ?å†…ã?®ãƒ©ã‚¤ãƒ–ã‚µã‚¤ãƒˆ: %s and %sã?Œä¸€è‡´ã?—ã?¾ã?›ã‚“ã€‚");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "%sã?¸ã?®ãƒ©ã‚¤ãƒ–ã‚µã‚¤ãƒˆã‚’è¨­å®šã?—ã?¦ç¶šã?‘ã‚‹...");

DEFINE('_EW_ADMINHEADER_JW', "ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ? ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "ãƒ?ãƒƒã‚¯ãƒªãƒ³ã‚¯ã‚’å‰Šé™¤");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "çŸ¥è­˜ãƒ™ãƒ¼ã‚¹");
DEFINE('_EW_ADMINHEADER_FLOW', "ãƒ•ãƒ­ãƒ¼");
DEFINE('_EW_ADMINHEADER_GRAPHS', "ã‚°ãƒ©ãƒ•");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "ã‚³ãƒ³ãƒ?ãƒ¼ãƒ?ãƒ³ãƒˆ");
DEFINE('_EW_ADMINHEADER_REVIEW', "ãƒ¬ãƒ“ãƒ¥ãƒ¼");
DEFINE('_EW_ADMINHEADER_WRITE', "æ¬¡ã‚’æ›¸ã??");

DEFINE('_EW_FLOW_TRAFFIC', "ãƒˆãƒ©ãƒ•ã‚£ãƒƒã‚¯ãƒ•ãƒ­ãƒ¼");
DEFINE('_EW_FLOW_SELECT_PAGE', "ãƒšãƒ¼ã‚¸é?¸æŠž:");
DEFINE('_EW_FLOW_OUTG_LINKS', "ãƒ«ãƒ¼ãƒˆç™ºä¿¡ãƒªãƒ³ã‚¯æ•°:");
DEFINE('_EW_FLOW_NESTING', "ãƒ?ã‚¹ãƒ†ã‚£ãƒ³ã‚°ãƒ¬ãƒ™ãƒ«:");
DEFINE('_EW_FLOW_SCALE', "ã‚¹ã‚±ãƒ¼ãƒ«:");

DEFINE('_EW_COMERCIAL_AD_FREE', "åºƒå‘Šã?ªã?—ç‰ˆ");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "å¯„ä»˜ã‚’ã?‚ã‚Šã?Œã?¨ã?†ã?”ã?–ã?„ã?¾ã?™ï¼?");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "ãƒ‰ãƒ¡ã‚¤ãƒ³ç”¨ç™»éŒ²ã‚­ãƒ¼: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "ãƒ?ãƒƒã‚¯ãƒªãƒ³ã‚¯ã‚’å‰Šé™¤æˆ–ã?„ã?¯è¨­å®šã?‹ã‚‰ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®ã‚¸ãƒ¥ãƒ¼ãƒ ãƒ©ãƒ»ã‚¦ã‚©ãƒƒãƒ?ã?®ãƒ­ã‚´ã‚’éš ã?›ã?¾ã?™ã€‚");


DEFINE('_EW_SIZES_LAST_CHECK', "æœ€çµ‚ç¢ºèª?å®Ÿè¡Œæ—¥ï¼š");
DEFINE('_EW_SIZES_ADMINISTRATOR', "ãƒ–ãƒ«ãƒ¼ = ã‚³ãƒ³ãƒ?ãƒ¼ãƒ?ãƒ³ãƒˆ/ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«/ç®¡ç?†è€…ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã?®ã‚µã‚¤ã‚º");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "ã‚³ãƒ³ãƒ?ãƒ¼ãƒ?ãƒ³ãƒˆ");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "å?ˆè¨ˆ:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "ã‚µã‚¤ã‚º");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "å…¨ã?¦ã‚’ãƒªãƒ•ãƒ¬ãƒƒã‚·ãƒ¥");

DEFINE('_EW_SIZEDATABASE_TABLE', "ãƒ†ãƒ¼ãƒ–ãƒ«");
DEFINE('_EW_SIZEDATABASE_SIZE', "ã‚µã‚¤ã‚º");
DEFINE('_EW_SIZEDATABASE_1DAY', "1æ—¥é–“å¤‰æ›´");
DEFINE('_EW_SIZEDATABASE_7DAY', "7æ—¥é–“å¤‰æ›´");
DEFINE('_EW_SIZEDATABASE_28DAY', "28æ—¥é–“å¤‰æ›´");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "ãƒ‡ãƒ¼ã‚¿ã?ªã?—");
DEFINE('_EW_SIZEDATABASE_TOTAL', "å?ˆè¨ˆ:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "å…¨ã?¦ã‚’ãƒªãƒ•ãƒ¬ãƒƒã‚·ãƒ¥");
DEFINE('_EW_SIZEMODULES_TOTAL', "å?ˆè¨ˆ:");
DEFINE('_EW_SIZEMODULES_MODULE', "ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«");
DEFINE('_EW_SIZEMODULES_SIZE', "ã‚µã‚¤ã‚º");

DEFINE('_EW_SIZES_FILES', "&ampãƒ•ã‚¡ã‚¤ãƒ«;ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒª");
DEFINE('_EW_SIZES_BYTES', "ãƒ?ã‚¤ãƒˆ");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "ãƒªãƒ•ãƒ¬ãƒƒã‚·ãƒ¥");

DEFINE('_EW_STATS_FOOTER', "ã‚¸ãƒ¥ãƒ¼ãƒžãƒ«ãƒ»ã‚¦ã‚©ãƒƒãƒ? &ã‚³ãƒ”ãƒ¼;2006-@å¹´@ ãƒžãƒ†ã‚¤ãƒ»ã‚³ãƒ?ãƒ«ç¤¾æ??ä¾›");

DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_STATUS_DATABASE', "ãƒ‡ãƒ¼ã‚¿ãƒ™ãƒ¼ã‚¹è¡¨ã‚µã‚¤ã‚º");


DEFINE('_EW_DESC_IPINFODB_KEY', "æœ€çµ‚è¨ªå•?ãƒžãƒƒãƒ— ipinfodb.comã‚­ãƒ¼å?–å¾—å…ˆ: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "å¼·åˆ¶çš„ã?«ã‚¿ã‚¤ãƒ ã‚¾ãƒ¼ãƒ³ã‚’ã‚ªãƒ•ã‚»ãƒƒãƒˆ");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "æ›´æ–°");
DEFINE('_EW_MENU_UPDATE_TITLE', "ãƒ?ãƒƒã‚¯ã‚¢ãƒƒãƒ—&ã‚¢ãƒƒãƒ—ã‚°ãƒ¬ãƒ¼ãƒ‰");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "ç„¡æ–™ç‰ˆã?§ã?¯ã?”åˆ©ç”¨ã?„ã?Ÿã? ã?‘ã?¾ã?›ã‚“ã€‚ãƒ©ã‚¤ã‚»ãƒ³ã‚¹ã‚¿ãƒ–ã‚’ç¢ºèª?ã?—ã?¦ã??ã? ã?•ã?„ã€‚");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "ã‚¹ãƒ‘ãƒ è¨€èªžç¦?æ­¢æœ‰åŠ¹");
DEFINE('_EW_SPAMWORD_LIST', "ã‚¹ãƒ‘ãƒ è¨€èªžãƒªã‚¹ãƒˆ");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "ä½•åº¦ã‚‚è¡¨ç¤ºã?•ã‚Œã‚‹ã‚¿ã‚¤ãƒˆãƒ«ã‚’éš ã?™");
DEFINE('_EW_TRUNCATE_VISITS', "è¨ªå•?è€…æ•°ã‚’åˆ‡ã‚Šæ?¨ã?¦ã‚‹");
DEFINE('_EW_TRUNCATE_STATS', "çµ±è¨ˆã‚’åˆ‡ã‚Šæ?¨ã?¦ã‚‹");
DEFINE('_EW_TRUNCATE_GOALS', "ç›®æ¨™ã‚’åˆ‡ã‚Šæ?¨ã?¦ã‚‹");
DEFINE('_EW_LIMIT_BOTS', "ãƒœãƒƒãƒˆã‚’åˆ¶é™?");
DEFINE('_EW_LIMIT_VISITORS', "è¨ªå•?è€…æ•°ã‚’åˆ¶é™?");
DEFINE('_EW_TOOLTIP_WIDTH', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—å¹…");
DEFINE('_EW_TOOLTIP_HEIGHT', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—é«˜ã?•");
DEFINE('_EW_TOOLTIP_URL', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "ãƒ„ãƒ¼ãƒ«ãƒ?ãƒƒãƒ—ãƒ»ã‚ªãƒ³ã‚¯ãƒªãƒƒã‚¯");
DEFINE('_EW_IP_STATS', "IPçŠ¶æ³?");
DEFINE('_EW_IPINFODB_KEY', "IPæƒ…å ±DBã‚­ãƒ¼");
DEFINE('_EW_ONLY_LAST_URI', "å”¯ä¸€ã?®æœ€çµ‚URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®ãƒ­ã‚´ã‚’éš ã?™ ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«ãƒ•ã‚©ãƒ­ãƒ¼ã?ªã?—");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?«æˆ»ã‚‹ãƒªãƒ³ã‚¯ã?ªã?—");
DEFINE('_EW_FRONTEND_USER_LINK', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ãƒ¦ãƒ¼ã‚¶ãƒ¼ãƒªãƒ³ã‚¯");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®åˆ?ã‚?ã?®å›½");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å›½å??");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®å›½å¤§æ–‡å­—");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®åˆ?ã‚?ã?®å›½æ—— ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®å›½æ•°");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®å›½æœ€å¤§ã‚³ãƒ©ãƒ æ•°");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®å›½æœ€å¤§è¡Œæ•°");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "æœ¬æ—¥ã?®ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "æ˜¨æ—¥ã?®ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "ä»Šé€±ã?®ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "å…ˆé€±ã?®ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "ä»Šæœˆã?®ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "å…ˆæœˆã?®ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®è¨ªå•?è€…æ•°ã‚’éš ã?™");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰ã?®åˆ?æœŸå?ˆè¨ˆ");
DEFINE('_EW_HISTORY_MAX_VALUES', "å±¥æ­´æœ€å¤§å€¤");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "å±¥æ­´æœ€å¤§è¨˜éŒ²");
DEFINE('_EW_UPDATE_TIME_VISITS', "æ™‚é–“åˆ¥è¨ªå•?è€…æ›´æ–°");
DEFINE('_EW_UPDATE_TIME_STATS', "æ™‚é–“åˆ¥çµ±è¨ˆæ›´æ–°");
DEFINE('_EW_STATS_MAX_ROWS', "æœ€å¤§çµ±è¨ˆè¡Œæ•°");
DEFINE('_EW_STATS_IP_HITS', "IPãƒ’ãƒƒãƒˆçµ±è¨ˆ");
DEFINE('_EW_MAXID_BOTS', "æœ€å¤§IDãƒœãƒƒãƒˆ");
DEFINE('_EW_MAXID_VISITORS', "Maxid Visitorsæœ€å¤§IDè¨ªå•?è€…æ•°");
DEFINE('_EW_STATS_KEEP_DAYS', "çµ±è¨ˆã‚’æ•°æ—¥é–“ä¿?å­˜ ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰å›½ã‚’éš ã?™ ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…ã‚’éš ã?™ ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "ä¿?ç®¡ãƒ‡ãƒ¼ã‚¿ã‚¢ãƒ³ã‚¤ãƒ³ã‚¹ãƒˆãƒ¼ãƒ« ");
DEFINE('_EW_IGNORE_IP', "IPç„¡è¦–");
DEFINE('_EW_IGNORE_URI', "URIç„¡è¦–");
DEFINE('_EW_IGNORE_USER', "ãƒ¦ãƒ¼ã‚¶ãƒ¼ç„¡è¦–");
DEFINE('_EW_BLOCKING_MESSAGE', "ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ãƒ–ãƒ­ãƒƒã‚¯");
DEFINE('_EW_SERVER_URI_KEY', "ã‚µãƒ¼ãƒ?ãƒ¼URIã‚­ãƒ¼");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "ãƒ•ãƒ­ãƒ³ãƒˆã‚¨ãƒ³ãƒ‰è¨ªå•?è€…å?ˆè¨ˆåˆ?æœŸåŒ–");
DEFINE('_EW_SIZEDATABASE_RECORDS', "è¨˜éŒ²");
/***********EDITs*****************/
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