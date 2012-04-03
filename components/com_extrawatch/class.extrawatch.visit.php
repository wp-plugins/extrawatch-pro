<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 41
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchVisit
{

    var $env;

    var $database;
    var $config;
    var $helper;
    var $stat;
    var $block;
    var $goal;
    var $sizes;
    var $date;
    var $heatmap;
    var $seo;

    function ExtraWatchVisit()
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = & $this->env->getDatabase();
        $this->config = new ExtraWatchConfig($this->database);
        $this->helper = new ExtraWatchHelper($this->database);
        $this->stat = new ExtraWatchStat($this->database);
        $this->block = new ExtraWatchBlock($this->database);
        $this->goal = new ExtraWatchGoal($this->database);
        $this->flow = new ExtraWatchFlow($this, $this->database);
        $this->sizes = new ExtraWatchSizes($this->database);
        $this->date = new ExtraWatchDate($this->database);
        $this->heatmap = new ExtraWatchHeatmap($this->database);
        $this->seo = new ExtraWatchSEO($this->database);
    }


    /**
     * visitor
     *
     * @return unknown
     */
    function getLastVisitId()
    {
        $query = sprintf("select #__extrawatch_uri.id as last from #__extrawatch left join #__extrawatch_uri on #__extrawatch.id = #__extrawatch_uri.fk where #__extrawatch.browser is not NULL order by #__extrawatch_uri.id desc limit 1");
        $last = $this->database->resultQuery($query);
        return $last;
    }

    function getLastIp()
    {
        $query = sprintf("select ip from #__extrawatch where (browser is not NULL and browser != '') order by id desc limit 1");
        $last = $this->database->resultQuery($query);
        return $last;
    }

    function ip2Country($ip)
    {
        $referer = "";
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $this->getReferer();
        }

        $ipinfodb = new ipinfodb;
        $ipinfodb->setKey($this->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY"));
        $locations = $ipinfodb->getGeoLocation($ip);
        if (!empty($locations) && is_array($locations)) {
            foreach ($locations as $field => $val)
            {
                if ($field == "Latitude") $latitude = $val;
                if ($field == "Longitude") $longitude = $val;
                if ($field == "City") $city = $val;
                if ($field == "CountryName") $country = $val;
                if ($field == "CountryCode") $countryCode = $val;
            }
        }
        $geolocation = array(
            'ipAdress' => $ip,
            'city' => $city,
            'country' => $country,
            'countryCode' => $countryCode,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'referer' => $referer
        );
        return $geolocation;
    }

    function insertIntoHistory()
    {

        $query = sprintf("select id as maxid from #__extrawatch where browser is not NULL order by id desc limit 1");
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        $maxidvisitors = @ $row->maxid - $this->config->getConfigValue('EXTRAWATCH_MAXID_VISITORS');

        /* move to history */
        $query = sprintf("select ifnull(max(id),0) as maxFk from #__extrawatch_history where browser is not null ");
        $maxFk = $this->database->resultQuery($query);

        /*     omitting id < '%d'   $query = sprintf("INSERT IGNORE INTO #__extrawatch_history SELECT * from #__extrawatch where id < '%d' and id > (select ifnull(max(id),0) and browser is not null from #__extrawatch_history ) ", (int) $maxidvisitors);*/
        $query = sprintf("INSERT IGNORE INTO #__extrawatch_history SELECT * from #__extrawatch where id > %d ", (int)$maxidvisitors, (int)$maxFk);
        $this->database->executeQuery($query);

        /* move to history */
        /*      omitting fk < '%d'   $query = sprintf("INSERT IGNORE INTO #__extrawatch_uri_history SELECT * from #__extrawatch_uri where fk < '%d' and fk > (select ifnull(max(fk),0) from #__extrawatch_uri_history ) ", (int) $maxidvisitors);*/
        $query = sprintf("INSERT IGNORE INTO #__extrawatch_uri_history SELECT * from #__extrawatch_uri where fk > %d ", (int)$maxidvisitors, (int)$maxFk);
        $this->database->executeQuery($query);

    }

    /**
     * visitor
     *
     * @return unknown
     */
    function deleteOldVisits()
    {

        /* delete old heatmap entries */
        $timestampThreshold = ($this->date->jwDateToday() - $this->config->getConfigValue('EXTRAWATCH_HEATMAP_KEEP_DAYS')) * 3600 * 24;
        $query = sprintf("DELETE FROM #__extrawatch_heatmap WHERE `timestamp` < %d", (int)$timestampThreshold);
        $this->database->executeQuery($query);

        $maxRows = $this->config->getConfigValue('EXTRAWATCH_STATS_MAX_ROWS');
        $today = $this->date->jwDateToday();

        /** delete visitors */
        $maxVisitors = $this->config->getConfigValue('EXTRAWATCH_LIMIT_VISITORS');
        $query = sprintf("SELECT id as maxId FROM #__extrawatch where browser is not NULL ORDER BY id DESC LIMIT %d, 1", (int)($maxVisitors * 2));
        $maxId = @ $this->database->resultQuery($query);
        $query = sprintf("DELETE FROM #__extrawatch_uri WHERE browser is not NULL and fk < %d", (int)$maxId);
        @$this->database->executeQuery($query);
        $query = sprintf("DELETE FROM #__extrawatch WHERE browser is not NULL and id < %d", (int)$maxId);
        @$this->database->executeQuery($query);


        /** delete bots */
        $maxBots = $this->config->getConfigValue('EXTRAWATCH_LIMIT_BOTS');
        $query = sprintf("SELECT id as maxId FROM #__extrawatch where browser is NULL ORDER BY id DESC LIMIT %d, 1", (int)($maxBots * 2));
        $maxId = @ $this->database->resultQuery($query);
        $query = sprintf("DELETE FROM #__extrawatch_uri WHERE browser is NULL and fk < %d", (int)$maxId);
        @$this->database->executeQuery($query); //1189132
        $query = sprintf("DELETE FROM #__extrawatch WHERE browser is NULL and id < %d", (int)$maxId);
        @$this->database->executeQuery($query);

        for ($i = 0; $i < 20; $i++) {
            /** delete records from previous day, which are not in top 20 (or value in maxRows */
            $query = sprintf("SELECT id FROM `#__extrawatch_info` where `group` = '$i' and date = '%d' order by `value` desc limit %d,99999", (int)($today - 1), (int)$maxRows);
            $rows = @ $this->database->objectListQuery($query);
            if ($rows)
                foreach ($rows as $row) {
                    $query = sprintf("delete from `#__extrawatch_info` where id = '%d' and `group` not in (%d, %d, %d) ", (int)$row->id, (int)DB_KEY_URI2KEYPHRASE, DB_KEY_HEATMAP, DB_KEY_SEARCH_RESULT_NUM); /* except uri2keyphrase */
                    $this->database->executeQuery($query);

                    $query = sprintf("delete from `#__extrawatch_uri` where fk = '%d' ", (int)$row->id);
                    $this->database->executeQuery($query);
                }
        }


        if ($this->config->getConfigValue('EXTRAWATCH_STATS_KEEP_DAYS') != 0) { // 0 = infinite
            $today = $this->date->jwDateToday();
            $daysToKeep = $today - $this->config->getConfigValue('EXTRAWATCH_STATS_KEEP_DAYS');

            // delete old statistics, except unique/loads (frontend module use it for total: value)
            $query = sprintf("delete from #__extrawatch_info where date < '%d' and `group` not in (%d, %d, %d)", (int)$daysToKeep, DB_KEY_UNIQUE, DB_KEY_LOADS, DB_KEY_SEARCH_RESULT_NUM);
            $this->database->executeQuery($query);
        }

        /*		//delete all IP records that are less than 1%
                $value = $this->config->getConfigValue('EXTRAWATCH_STATS_IP_HITS');
                $query = sprintf("DELETE FROM `#__extrawatch_info` where (`group` = '%d' and date < '%d')", (int) ($today-1), (int) DB_KEY_IP);
                $this->database->setQuery($query);
                $this->database->executeQuery($query);


                //delete all IP records that are less than 1%
                $value = $this->config->getConfigValue('EXTRAWATCH_STATS_IP_HITS');
                $query = sprintf("DELETE FROM `#__extrawatch_info` where (`group` = '%d' and date < '%d' and value < '%s')", (int) $today, $this->database->getEscaped($value), (int) DB_KEY_IP);
                $this->database->setQuery($query);
                $this->database->executeQuery($query);
        */
        //delete from uri2title record older than EXTRAWATCH_STATS_KEEP_DAYS days
        $count = (ExtraWatchDate::getUTCTimestamp() - (7 * 3600 * 24)); // 7-day unaccessed records should be deleted
        $query = sprintf("DELETE FROM `#__extrawatch_uri2title` where (timestamp < '%d') ", (int)$this->database->getEscaped($count));
        $this->database->executeQuery($query);

        //delete from uri2title record older than EXTRAWATCH_STATS_KEEP_DAYS days
        $count = (ExtraWatchDate::getUTCTimestamp() - (7 * 3600 * 24)); // 7-day unaccessed records should be deleted
        $query = sprintf("DELETE FROM `#__extrawatch_internal` where (timestamp < '%d') ", (int)$this->database->getEscaped($count));
        $this->database->executeQuery($query);


        /** delete old history */
        $maxHistorySetting = $this->config->getConfigValue('EXTRAWATCH_HISTORY_MAX_DB_RECORDS');

        $query = sprintf("SELECT count(id) as count FROM `#__extrawatch_history` where browser is not null");
        $count = $this->database->resultQuery($query);


        if ($count > $maxHistorySetting) {
            $query = sprintf("SELECT id FROM `#__extrawatch_history` where browser is not null order by id desc limit %d,%s", $maxHistorySetting, 4294967295); // max unsigned int value

            $rows = @ $this->database->objectListQuery($query);
            foreach ($rows as $row) {

                $query = sprintf("DELETE FROM #__extrawatch_history where id = '%d' ", (int)($row->id));
                $this->database->executeQuery($query);

                $query = sprintf("DELETE FROM #__extrawatch_uri_history WHERE fk = '%d' ", (int)($row->id));
                $this->database->executeQuery($query);
            }
        }

        $query = sprintf("DELETE FROM #__extrawatch_history WHERE browser is null ");
        $this->database->executeQuery($query);

        $query = sprintf("SELECT min( id ) as `min` FROM #__extrawatch_history");
        $min = $this->database->resultQuery($query);

        $query = sprintf("SELECT min( id ) as `min` FROM #__extrawatch_uri_history");
        $uriHistoryMin = $this->database->resultQuery($query);

        //delete obsolete uri_history entries
        $query = sprintf("DELETE FROM `#__extrawatch_uri_history` WHERE fk < %d", $min);
        $this->database->executeQuery($query);

        //delete obsolete uri post entries
        $query = sprintf("DELETE FROM `#__extrawatch_uri_post` WHERE uriid < %d", $uriHistoryMin);
        $this->database->executeQuery($query);

        //delete flows where count is less than 2.5%
        $query = sprintf("SELECT MAX(`count`)/%d as `count` from #__extrawatch_flow", 40);
        $count = $this->database->resultQuery($query);

        $query = sprintf("delete from #__extrawatch_flow where count < (%d)", (int)$count);
        $this->database->executeQuery($query);


    }

    function sendNightlyEmails()
    {
        if ($this->config->getCheckboxValue("EXTRAWATCH_EMAIL_REPORTS_ENABLED")) {
            $extraWatch = new ExtraWatch();
            $extraWatchStatHTML = new ExtraWatchStatHTML($extraWatch);
            $extraWatchStatHTML->sendNightlyEmail();
        }
    }


    /**
     * extracts phrases by the referer, different search engines
     * @param  $referer
     * @return
     */
    function extractPhraseFromUrl($referer)
    {
        if (@strstr($referer, "q=")) { // keywords from google
            preg_match('![&|?]q=([^&]*)!', urldecode($referer), $matches);
        }
        return trim(strtolower(@$matches[1]));
    }

    /**
     * extracts phrases by the referer, different search engines
     * @param  $referer
     * @return
     */
    function extractHostnameFromUrl($url)
    {
        preg_match('!^(.*?)\/(url|search)!', htmlspecialchars(urldecode($url)), $matches);
        return trim(strtolower(@$matches[1]));
    }

    function getUser()
    {
        return $this->env->getUser();
    }

    function getTitle()
    {
        return $this->env->getTitle();
    }

    /**
     * Return remote IP Address - only REMOTE_ADDR is not sufficient
     */
    function getRemoteIPAddress()
    {
        if (@$_SERVER['HTTP_X_REAL_IP']) {
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    /**
     * visitor
     */
    function insertVisit()
    {
        $userObject = $this->getUser();
        $title = $this->getTitle();
        $uri = $this->helper->getURI();
        $newUsername = @ $this->env->getUsername();
        $liveSite = $this->config->getLiveSite();

        if ($this->heatmap->isHeatmapLoaded()) {
            return true;
        }


        $ip = addslashes(strip_tags(@ $this->getRemoteIPAddress()));

        if ($this->config->isIgnored('IP', $ip) || $this->config->isIgnored('URI', $uri) || $this->config->isIgnored('USER', $newUsername)) {
            return true;
        }
        $referer = $this->getReferer();

        $this->addUri2Title($uri, $title);

        if (@$referer) { // check if there is referer, otherwise there's no point to execute the code in this block
            if (@ !$this->isVisitFromSameSite($referer)) {
                /* from some other website */
                preg_match('@^(?:http://)?([^/]+)@i', $referer, $matches);
                $host = @ $matches[1];

                $this->stat->increaseKeyValueInGroup(DB_KEY_REFERERS, $host);
                $phrase = $this->extractPhraseFromUrl($referer);
                $phrase = str_replace("%2B", "+", $phrase);
                $this->stat->increaseKeyValueInGroup(DB_KEY_KEYPHRASE, $phrase);

                $this->insertSearchResultPage($uri, $phrase, $referer, $title);

                $keywords = explode(' ', $phrase); //using space instead of + because google has changed it
                if (trim($phrase)) {
                    $this->insertUri2Keyphrase($uri, $phrase, $title);
                }
                foreach ($keywords as $keyword) {

                    $keyword = @ trim(strtolower($keyword));
                    if ($keyword && strlen($keyword) >= 3) { //keyword leght must be >= as 3
                        $this->stat->increaseKeyValueInGroup(DB_KEY_KEYWORDS, $keyword);
                    }
                }
            } else { /* starts with the live site */
                $referer = str_replace($liveSite, "", $referer);

                if (substr($referer, 0, 4) != "http" && substr($referer, 0, 1) != "/") {
                    $referer = "/" . $referer; // add / prefix, because live site contains already / and it's replaced
                }
                $from = $referer;

                $query = sprintf("select id from #__extrawatch_internal where (`from` = '%s' and `to` = '%s') ", $this->database->getEscaped($from), $this->database->getEscaped($uri));
                $id = $this->database->resultQuery($query);

                if (!@$id) {
                    $query = sprintf("insert into #__extrawatch_internal (id, `from`,`to`,`timestamp`) values ('', '%s', '%s', '%d') ", $this->database->getEscaped($from), $this->database->getEscaped($uri), (int)ExtraWatchDate::getUTCTimestamp());
                    $this->database->executeQuery($query);

                    $query = sprintf("select id from #__extrawatch_internal where (`from` = '%s' and `to` = '%s') ", $this->database->getEscaped($from), $this->database->getEscaped($uri));
                    $id = $this->database->resultQuery($query);
                }

                $query = sprintf("update #__extrawatch_internal set `timestamp` = '%d' where (id = '%d') ", $this->date->getUTCTimestamp(), (int)$id);
                $this->database->executeQuery($query);

                $this->stat->increaseKeyValueInGroup(DB_KEY_INTERNAL, $id);

            }
        }

        $this->insertIntoHistory();
        /* execute on midnight */
        $this->runAtMidnight();

        if ($this->date->getUTCTimestamp() % 10 == 0) {
            $this->deleteOldVisits();
            $this->seo->cleanUnimportantKeyphrases();
        }

        $time = $this->date->getUTCTimestamp();

        $count = $this->block->getBlockedIp($ip);
        if (@ $count) {
            $this->block->dieWithBlockingMessage($ip);
        }

        $query = sprintf("select id, username from #__extrawatch where ip = '%s' limit 1", $this->database->getEscaped($ip));
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        $id = @ $row->id;
        $username = @ $row->username;

        if (!@ $id) {

            $referer = strip_tags($referer);
            $ip = strip_tags($ip);
            $query = sprintf("insert into #__extrawatch (id, ip, country, browser, referer) values ('', '%s',  NULL, NULL, '%s') ", $this->database->getEscaped($ip), $this->database->getEscaped($referer));
            $this->database->executeQuery($query);

            $query = sprintf("select id from #__extrawatch where ip = '%s' limit 1", $this->database->getEscaped($ip));
            $rows = @ $this->database->objectListQuery($query);
            $row = @ $rows[0];
            $id = @ $row->id;

            $query = sprintf("insert into #__extrawatch_uri (id, fk, timestamp, uri, title) values ('', '%d', '%d', '%s', '%s') ", (int)$id, (int)$time, $this->database->getEscaped($uri), $this->database->getEscaped($title));
            $this->database->executeQuery($query);
        } else {
            $query = sprintf("insert into #__extrawatch_uri (id, fk, timestamp, uri, title) values ('', '%d', '%d', '%s', '%s') ", (int)$id, (int)$time, $this->database->getEscaped($uri), $this->database->getEscaped($title));
            $this->database->executeQuery($query);
        }

        //START POST CODE MOD
        $query = sprintf("select id from #__extrawatch_uri where fk = '%d' and `timestamp` = '%d' and `uri` LIKE '%s' and `title` LIKE '%s' ",
            (int)$id, (int)$time, $this->database->getEscaped($uri), $this->database->getEscaped($title));
        $id = $this->database->resultQuery($query);

        foreach (ExtraWatchHelper::requestPost() as $key => $value)
        {
            $query = sprintf("insert into #__extrawatch_uri_post (`uriid`, `key`, `value`, `type`) values ('%d', '%s', '%s', 1) ",
                $id, $this->database->getEscaped($key), $this->database->getEscaped($value));
            $this->database->executeQuery($query);
        }

        foreach (ExtraWatchHelper::requestGet() as $key => $value)
        {
            $query = sprintf("insert into #__extrawatch_uri_post (`uriid`, `key`, `value`, `type`) values ('%d', '%s', '%s', 2) ",
                $id, $this->database->getEscaped($key), $this->database->getEscaped($value));
            $this->database->executeQuery($query);
        }
        //END POST CODE MOD

        if (($username != $newUsername) && ($newUsername)) {
            $query = sprintf("update #__extrawatch set username = '%s' where ip = '%s'", $this->database->getEscaped($newUsername), $this->database->getEscaped($ip));
            $this->database->executeQuery($query);
        }

        if (@ $newUsername) {
            $this->stat->increaseKeyValueInGroup(DB_KEY_USERS, $newUsername);
        }

        if ($this->config->getConfigValue('EXTRAWATCH_IP_STATS')) {
            $this->stat->increaseKeyValueInGroup(DB_KEY_IP, $ip); //add ip watching
        }

        $this->stat->increaseKeyValueInGroup(DB_KEY_HITS, DB_KEY_HITS);

        $this->goal->checkGoals($title, $newUsername, $ip, $referer, $liveSite);


    }

    function insertSearchResultPage($uri, $phrase, $referer, $title)
    {
        if (@$phrase) {
            $position = $this->seo->extractGooglePageNumberFromReferer($referer);
            if (@$position) {
                $uri2keyphraseId = $this->insertUri2Keyphrase($uri, $phrase, $title);
                $uri2keyphraseId2positionId = $this->insertUri2Keyphrase2Position($uri2keyphraseId, $position);
                $this->stat->increaseKeyValueInGroup(DB_KEY_SEARCH_RESULT_NUM, $uri2keyphraseId2positionId);
            }
        }
    }

    /**
     * visitor
     */
    function updateVisitByBrowser($uri)
    {
        $ip = addslashes(strip_tags($this->getRemoteIPAddress()));
        $userAgent = addslashes(strip_tags(@ $_SERVER['HTTP_USER_AGENT']));

        if ($this->config->isIgnored('IP', $ip) || $this->config->isIgnored('URI', $uri)) {
            return true;
        }

        $this->updateBrowserStats($ip, $userAgent);

        $query = sprintf("select #__extrawatch_uri.uri from #__extrawatch left join #__extrawatch_uri on #__extrawatch.id = #__extrawatch_uri.fk  where (#__extrawatch.ip = '%s' and #__extrawatch.browser is not null) order by #__extrawatch_uri.timestamp desc limit 2", $this->database->getEscaped($ip));
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        $uri = @ $row->uri;

        if (@$rows[1]) {
            $lastUriRow = $rows[1];
            $lastUri = $lastUriRow->uri;
        }

        $this->stat->increaseKeyValueInGroup(DB_KEY_URI, $uri);
        $this->stat->increaseKeyValueInGroup(DB_KEY_LOADS, DB_KEY_LOADS);

        $referer = $this->getReferer();
        if ($this->isVisitFromSameSite($referer)) {
            if (@ $lastUri) {
                $this->flow->insertFlow($lastUri, $uri);
            }
        }

    }


    /**
     * Method called from the frontend module
     * visitor
     */
    function updateBrowserStats($ip, $userAgent)
    {
        $query = sprintf("select id,browser,country from #__extrawatch where ip = '%s' order by id asc limit 1", $this->database->getEscaped($ip));
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        if (@ $row->browser == '')
            $firstTime = true;

        $country = @$row->country;
        if (!$country) {
            $country = $this->helper->countryByIp($ip);
        }

        $query = sprintf("select browser,country from #__extrawatch where ip = '%s' order by browser desc limit 1", $this->database->getEscaped($ip));
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];

        //check if first time visit
        if (@ !$row->browser) {

            $userAgent = strip_tags($userAgent);
            if (@ $userAgent) {
                // to make sure it's really unique for today
                $this->stat->increaseKeyValueInGroup(DB_KEY_UNIQUE, DB_KEY_UNIQUE);
            }

            /* Googlebot patch identifier: Googlebot-Image/1.0 */
            if (!@strstr($userAgent, "Googlebot")) {
                $query = sprintf("update #__extrawatch set browser = '%s' where ip = '%s'", $this->database->getEscaped($userAgent), $this->database->getEscaped($ip));
                $this->database->executeQuery($query);
            }

            $browser = $this->identifyBrowser(@ $userAgent);
            $this->stat->increaseKeyValueInGroup(DB_KEY_BROWSER, $browser);

            $os = $this->identifyOs(@ $userAgent);
            $this->stat->increaseKeyValueInGroup(DB_KEY_OS, $os);

            if ($country != EXTRAWATCH_UNKNOWN_COUNTRY) {
                $this->stat->increaseKeyValueInGroup(DB_KEY_COUNTRY, $country);
            }

        }

    }

    /**
     * visitor
     */
    function identifyOs($userAgent)
    {
        if (stristr($userAgent, "Mac"))
            $os = "Mac";
        else
            if (stristr($userAgent, "Linux"))
                $os = "Linux";
            else
                if (stristr($userAgent, "Windows 95"))
                    $os = "Windows98";
                else
                    if (stristr($userAgent, "Windows 98"))
                        $os = "Windows98";
                    else
                        if (stristr($userAgent, "Windows ME"))
                            $os = "Windows98";
                        else
                            if (stristr($userAgent, "Windows NT 4.0"))
                                $os = "WindowsNT";
                            else
                                if (stristr($userAgent, "Windows NT 5.1"))
                                    $os = "WindowsXP";
                                else
                                    if (stristr($userAgent, "Windows NT 6.0"))
                                        $os = "WindowsVista";
                                    else
                                        if (stristr($userAgent, "Windows NT 6.1"))
                                            $os = "Windows7";
                                        else
                                            if (stristr($userAgent, "Windows"))
                                                $os = "Windows";

        return @ $os;
    }

    /**
     * visitor
     */
    function identifyBrowser($userAgent)
    {
        if (stristr($userAgent, "Chrome"))
            $browser = "Chrome";
        else
            if (stristr($userAgent, "Safari"))
                $browser = "Safari";
            else
                if (stristr($userAgent, "MSIE"))
                    $browser = "Explorer";
                else
                    if (stristr($userAgent, "Firefox"))
                        $browser = "Firefox";
                    else
                        if (stristr($userAgent, "Opera"))
                            $browser = "Opera";
                        else
                            if (stristr($userAgent, "Mozilla"))
                                $browser = "Mozilla";

        return @ $browser;
    }

    /**
     * visitor
     */
    function getBrowserByIp($ip)
    {
        $query = sprintf("select browser from #__extrawatch where (ip = '%s' and browser is not NULL) order by browser desc limit 1", $this->database->getEscaped($ip));
        $browser = $this->database->resultQuery($query);
        return $browser;
    }

    /**
     * visitor
     */
    function getBots()
    {
        $limit = 0;
        $limit = $this->config->getConfigValue('EXTRAWATCH_LIMIT_BOTS');
        $query = sprintf("select ip, referer, username from #__extrawatch where (browser is NULL) order by id desc limit %d", (int)$limit);
        $rows = $this->database->objectListQuery($query);
        return $rows;

    }

    /**
     * visitor
     */
    function getVisitors()
    {
        $limit = 0;
        $limit = $this->config->getConfigValue('EXTRAWATCH_LIMIT_VISITORS');
        $query = sprintf("select ip, referer, username from #__extrawatch where (browser is not NULL and browser != '') order by id desc limit %d", (int)$limit);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    /**
     * visitor
     */
    function getJoinedURIRows($bots)
    {
        if ($bots) {
            $browserCondition = "is NULL";
            $limit = $this->config->getConfigValue("EXTRAWATCH_LIMIT_BOTS");
        } else {
            $browserCondition = "is not NULL";
            $limit = $this->config->getConfigValue("EXTRAWATCH_LIMIT_VISITORS");
        }
        $query = sprintf("SELECT * FROM #__extrawatch LEFT JOIN #__extrawatch_uri ON #__extrawatch.id = #__extrawatch_uri.fk WHERE #__extrawatch.browser %s order by #__extrawatch_uri.timestamp desc limit %d", $this->database->getEscaped($browserCondition), (int)$limit);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    /**
     * visitor
     */
    function getJoinedURIRowById($id)
    {
        $query = sprintf("SELECT * FROM #__extrawatch LEFT JOIN #__extrawatch_uri ON #__extrawatch.id = #__extrawatch_uri.fk where #__extrawatch_uri.id = '%d' ORDER BY #__extrawatch_uri.timestamp desc", (int)$id);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    /**
     * visitor
     */
    function getInternalNameById($id)
    {
        $query = sprintf("select `from`,`to` from #__extrawatch_internal where id = '%d'", (int)$id);
        $rows = @ $this->database->objectListQuery($query);
        $row = @$rows[0];
        return $row;
    }

    /**
     * visitor
     */
    function addUri2Title($uri, $title)
    {
        $title = htmlspecialchars($title);
        $uri = htmlspecialchars($uri);
        $this->increaseUri2TitleCount($uri);

        $query = sprintf("select id from #__extrawatch_uri2title where (`uri` = '%s') limit 1 ", $this->database->getEscaped($uri), $this->database->getEscaped($title));
        $id = $this->database->resultQuery($query);

        if (!@$id) {
            $query = sprintf("insert into #__extrawatch_uri2title (id, uri, title, `count`, `timestamp`) values ('','%s','%s',1,'%d') ", $this->database->getEscaped($uri), $this->database->getEscaped($title), (int)ExtraWatchDate::getUTCTimestamp());
            $this->database->executeQuery($query);
        } else if ($title) { // already exists, but we need to update title if there is any
            $query = sprintf("update #__extrawatch_uri2title set title = '%s' where id = '%d' ", $this->database->getEscaped($title), (int)$id);
            $this->database->executeQuery($query);
        }
    }

    /**
     * visitor
     */
    function getTitleByUriId($uriId)
    {
        $query = sprintf("select title from #__extrawatch_uri2title where (`id` = '%d') limit 1 ", (int)$uriId);
        $title = $this->database->resultQuery($query);
        return htmlspecialchars($title);
    }

    /**
     * visitor
     */
    function getTitleByUri($uri)
    {
        $query = sprintf("select title from #__extrawatch_uri2title where (`uri` = '%s') limit 1 ", $this->database->getEscaped($uri));
        $title = $this->database->resultQuery($query);
        return htmlspecialchars($title);
    }

    /**
     * visitor
     */
    function getUriNameByUriId($uriId)
    {
        $query = sprintf("select uri from #__extrawatch_uri2title where (`id` = '%d') limit 1 ", (int)$uriId);
        $uri = $this->database->resultQuery($query);
        return $uri;
    }

    /**
     * visitor
     */
    function getUriIdByUriName($uri)
    {
        $query = sprintf("select id from #__extrawatch_uri2title where (`uri` = '%s') limit 1 ", htmlspecialchars($this->database->getEscaped($uri)));
        $id = $this->database->resultQuery($query);
        return (int)$id;
    }

    /**
     * visitor
     */
    function increaseUri2TitleCount($uri)
    {
        $query = sprintf("update #__extrawatch_uri2title set count = count+1, timestamp = '%d' where (`uri` = '%s')", (int)ExtraWatchDate::getUTCTimestamp(), $this->database->getEscaped($uri));
        $this->database->executeQuery($query);
    }

    /**
     * visitor
     */
    function getMaxCountUriId()
    {
        $query = sprintf("SELECT uri2title.id
                            FROM #__extrawatch_uri2title AS uri2title
                            JOIN #__extrawatch_flow AS flow ON uri2title.id = flow.`from`
                            order by uri2title.`count` DESC limit 1");
        $rows = $this->database->objectListQuery($query);
        if (@$rows) {
            return $rows[0]->id;
        }
    }

    function isVisitFromSameSite($referer)
    {
        $liveSite = $this->config->getLiveSite();
        $ignorePrefix = "www.";
        $comparison = @strstr(str_replace($ignorePrefix, "", $referer), str_replace($ignorePrefix, "", str_replace($ignorePrefix, "", $liveSite)));
        if ($comparison) {
            return true;
        } else {
            return false;
        }
    }

    function runAtMidnight()
    {
        $lastRunAtMidnightDate = $this->config->getConfigValue("EXTRAWATCH_LAST_RUN_AT_MIDNIGHT_DATE");
        $todayDate = $this->date->jwDateToday();

        if ($lastRunAtMidnightDate) {
            if ($lastRunAtMidnightDate != $todayDate) {
                $this->config->saveConfigValue("EXTRAWATCH_LAST_RUN_AT_MIDNIGHT_DATE", $todayDate);

                /* functions to run at midnight */
                $this->sendNightlyEmails();
                $this->sizes->updateTableSizes($lastRunAtMidnightDate);
                $this->heatmap->updateHeatmapStats($lastRunAtMidnightDate);
                $this->flow->updateFlowStats($lastRunAtMidnightDate);
                $this->stat->optimizeTables();
                /* functions to run at midnight */
            }
        } else {
            /** if we don't have any last record, we'll insert it into database */
            $this->config->saveConfigValue("EXTRAWATCH_LAST_RUN_AT_MIDNIGHT_DATE", $todayDate);
        }

    }


    function getReferer()
    {
        return strip_tags(addslashes(strip_tags(@ $_SERVER['HTTP_REFERER'])));
    }

    function arePostDataForUri($id)
    {
        $query = sprintf("select count(id) as count from #__extrawatch_uri_post where `uriid` = '%d' and `type` = '1' ", (int)$id);

        return $this->database->resultQuery($query);
    }

    function insertUri2Keyphrase($uri, $keyphrase, $title)
    {
        $keyphraseId = $this->getKeyphraseId($keyphrase);
        if (!$keyphraseId) {
            $this->insertKeyphrase($keyphrase);
            $keyphraseId = $this->getKeyphraseId($keyphrase);
        }
        $uri2titleId = $this->getUriIdByUriName($uri);
        if (!$uri2titleId) {
            $uri2titleId = $this->addUri2Title($uri, $title);
        }

        $id = $this->getUri2KeyphraseId($uri2titleId, $keyphraseId);
        if (!$id) {
            $query = sprintf("insert into #__extrawatch_uri2keyphrase values ('','%d','%d') ", (int)$uri2titleId, (int)$keyphraseId);
            $this->database->executeQuery($query);
            $id = $this->getUri2KeyphraseId($uri2titleId, $keyphraseId);
        }
        $this->stat->increaseKeyValueInGroup(DB_KEY_URI2KEYPHRASE, $id);
        return $id;
    }

    function insertUri2Keyphrase2Position($uri2keyphraseId, $position)
    {
        $id = $this->getUri2Keyphrase2Position($uri2keyphraseId, $position);
        if (!$id) {
            $query = sprintf("insert into #__extrawatch_uri2keyphrase_pos values ('','%d','%d') ", (int)$uri2keyphraseId, (int)$position);
            $this->database->executeQuery($query);
            $id = $this->getUri2Keyphrase2Position($uri2keyphraseId, $position);
        }
        return $id;
    }

    function getUri2Keyphrase2Position($uri2keyphraseId, $position)
    {
        $query = sprintf("select id from #__extrawatch_uri2keyphrase_pos where uri2keyphraseId = '%d' and `position` = '%d' limit 1 ", (int)$uri2keyphraseId, (int)$position);
        $id = $this->database->resultQuery($query);
        return $id;
    }

    function getUri2KeyphraseId($uriId, $keyphraseId)
    {
        $query = sprintf("select id from #__extrawatch_uri2keyphrase where uri2titleId = '%d' and keyphraseId = '%d' limit 1 ", (int)$uriId, (int)$keyphraseId);
        $id = $this->database->resultQuery($query);
        return $id;
    }

    function getKeyphraseId($keyphrase)
    {
        $query = sprintf("select id from #__extrawatch_keyphrase where `name` = '%s' limit 1 ", $this->database->getEscaped($keyphrase));
        $id = $this->database->resultQuery($query);
        return $id;
    }

    function getKeyphraseFromUri2KeyphraseId($name)
    {
        $query = sprintf("select keyphrase.name as name from #__extrawatch_uri2keyphrase uri2keyphrase LEFT JOIN #__extrawatch_keyphrase keyphrase on uri2keyphrase.keyphraseId = keyphrase.id WHERE uri2keyphrase.id = %d", (int)$name);
        $name = $this->database->resultQuery($query);
        return $name;
    }


    function getKeyphraseById($id)
    {
        $query = sprintf("select `name` from #__extrawatch_keyphrase where `id` = '%d' limit 1 ", (int)$id);
        $id = $this->database->resultQuery($query);
        return $id;
    }

    function getKeyphraseIdByValue($value)
    {
        $query = sprintf("select `id` from #__extrawatch_keyphrase where `name` = '%s' limit 1 ", $this->database->getEscaped($value));
        $id = $this->database->resultQuery($query);
        return $id;
    }

    function insertKeyphrase($keyword)
    {
        $query = sprintf("insert into #__extrawatch_keyphrase (`name`) values ('%s') ", $this->database->getEscaped($keyword));
        $this->database->executeQuery($query);
    }

}

?>
