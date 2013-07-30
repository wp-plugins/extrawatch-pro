<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 933
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
  protected $version = 'v2';
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

  public function getGeoLocation($host)
  {
    $ip = @gethostbyname($host);

    if (preg_match('/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/', $ip)) {

      $xml = $this->retrieveXML($ip);

      try {
        $response = new SimpleXMLElement($xml);

        foreach ($response as $field => $value) {
          $result[(string)$field] = (string)$value;
        }
        return $result;
      }
      catch (Exception $e) {
        $this->errors[] = $e->getMessage();
        /** Reference error fix */
        $result[0] = 0;
        $result[1] = 0;
        return $result;
      }
    }

    $this->errors[] = '"' . $host . '" is not a valid IP address or hostname.';
    return;
  }

  public function retrieveXML($ip)
  {

    if (!$this->apiKey) {
      return;
    }
    $url = 'http://' . $this->service . '/' . $this->version . '/' . 'ip_query.php?key=' . $this->apiKey . '&ip=' . $ip;

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
}

