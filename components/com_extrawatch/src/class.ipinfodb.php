<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1399
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

final class ipinfodb
{
  protected $errors = array();
  protected $showTimezone = FALSE;
  protected $service = 'api.ipinfodb.com';
  protected $oldVersion = 'v2';
  protected $curVersion = 'v3';
  protected $apiKey = '';

  public function __construct()
  {
  }

  public function __destruct()
  {
  }

  public function setKey($key)
  {
    if (!empty($key)) $this->apiKey = $key;
  }

  public function showTimezone()
  {
    $this->showTimezone = TRUE;
  }

  public function getError()
  {
    return implode("\n", $this->errors);
  }

    public function getGeoLocation($ip) {
        if (!ExtraWatchConfig::isIPAddress($ip)) {
            $ip = @gethostbyname($ip);
        }

        if (ExtraWatchConfig::isIPAddress($ip)) {   //if gethostbyname did not fail after gethostbyname
            $result = array();
            try {
                $csv = $this->retrieveCSV($ip);
                $csvParsed = str_getcsv($csv, ";");

                $result[ExtraWatchVisit::COUNTRY_CODE] = $csvParsed[3];
                $result[ExtraWatchVisit::COUNTRY_NAME] = ucwords(strtolower($csvParsed[4])); //camel case
                $result[ExtraWatchVisit::CITY] = ucwords(strtolower($csvParsed[6])); //camel case
                $result[ExtraWatchVisit::LATITUDE] = $csvParsed[8];
                $result[ExtraWatchVisit::LONGITUDE] = $csvParsed[9];
                return $result;
            }
            catch (Exception $e) {
                $this->errors[] = $e->getMessage();
                return $result;
            }
        }

        $this->errors[] = '"' . @$ip . '" is not a valid IP address or hostname.';
        return;
    }

  /**
   * @deprecated
   */
  public function retrieveXML($ip)
  {

    if (!$this->apiKey) {
      return;
    }
    $url = 'http://' . $this->service . '/' . $this->oldVersion . '/' . 'ip_query.php?key=' . $this->apiKey . '&ip=' . $ip;

    //fix: URL file-access is disabled in the server configuration, using curl_init
    if (function_exists('curl_init')) {

      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      $xml = curl_exec($curl);
      curl_close($curl);

    } else {

      $xml = file_get_contents($url);
    }

    return $xml;

  }

    public function retrieveCSV($ip) {

        if (!$this->apiKey) {
            return;
        }
        $url = 'http://' . $this->service . '/' . $this->curVersion . '/ip-city/' . '?key=' . $this->apiKey . '&ip=' . $ip;

        //fix: URL file-access is disabled in the server configuration, using curl_init
        if (function_exists('curl_init')) {

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $csv = curl_exec($curl);
            curl_close($curl);

        } else {

            $csv = file_get_contents($url);
        }

        return $csv;

    }
}

