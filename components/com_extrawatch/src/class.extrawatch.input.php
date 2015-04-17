<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.3
 * @revision 2532
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2015 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

const
_EW_INPUT_IP = 1,//
_EW_INPUT_URL = 2,//
_EW_INPUT_URI = 3,
_EW_INPUT_XPATH = 4,
_EW_INPUT_ONE_STRING = 5,//
_EW_INPUT_DIR = 6,
_EW_INPUT_ENV = 7,
_EW_INPUT_FILE_NAME = 8,//
_EW_INPUT_TOKEN = 9,
_EW_INPUT_REFERRER = 10,
_EW_INPUT_FILE_PATH = 11,
_EW_INPUT_FILE_EXTERNAL_PATH = 12,//
_EW_INPUT_EXTRACT = 13,//
_EW_INPUT_QUERY_STRING = 14,
_EW_INPUT_HOST = 15,//
_EW_INPUT_SCRIPT_NAME = 16,
_EW_INPUT_USER_AGENT = 17,
_EW_INPUT_EMAIL = 18,//
_EW_INPUT_REFERRER_SAME_SITE = 19,//
_EW_INPUT_FILE_ROOT_PATH_HTACCESS = 20,
_EW_INPUT_FILE_PATH_TMP = 21;

define("_EW_ALLOWED_PARAMS_TO_EXTRACT", serialize (array (1=>"action", "click", "uri2titleId", "x", "y", "w","h","heatmapToken","xpath",
"extraWatchHeatmap", "extraWatchDay", "getParams","ip")));

class ExtraWatchInput {


    public static function validate($type, $input = "") {
        switch ($type) {
            case _EW_INPUT_IP: {
                if (!(
                    filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE) ||
                    filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE)
                )) {
                    throw new ExtraWatchInputException(_EW_INPUT_IP, $input);
                }
                return $input;
            }
            case _EW_INPUT_URL: {
                if (!filter_var($input, FILTER_VALIDATE_URL)) {
                    throw new ExtraWatchInputException(_EW_INPUT_URL, $input);
                }
                return $input;
            }
            case _EW_INPUT_ONE_STRING: {
                if (@$input && !filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)) {
                    throw new ExtraWatchInputException(_EW_INPUT_ONE_STRING, $input);
                }
                return $input;
            }
            case _EW_INPUT_FILE_PATH: {
                $dir = realpath(__DIR__.DS."..");
                if (!ExtraWatchHelper::startsWith($input, $dir)) {
                    throw new ExtraWatchInputException(_EW_INPUT_FILE_PATH, $input);
                }
                return $input;
            }
            case _EW_INPUT_FILE_PATH_TMP: {
                $dir = self::getUploadTmpDir();
                if (!ExtraWatchHelper::startsWith($input, $dir)) {
                    throw new ExtraWatchInputException(_EW_INPUT_FILE_PATH_TMP, $input);
                }
                return $input;

            }

            case _EW_INPUT_FILE_ROOT_PATH_HTACCESS; {
                $env = ExtraWatchEnvFactory::getEnvironment();
                $rootPath = $env->getRootPath();
                $dir = $rootPath.DS.".htaccess";
                if (!ExtraWatchHelper::startsWith($input, $dir)) {
                    throw new ExtraWatchInputException(_EW_INPUT_FILE_ROOT_PATH_HTACCESS, $input);
                }

                return $input;
            }
            case _EW_INPUT_EXTRACT: {
                if (@$input && $input != "getParams=") {
                    $object = @$input['params'];
                    if ($object) {
                        if ($object && $object != "getParams=") {
                            $getParams = ExtraWatchHelper::convertUrlQuery($object);
                            if ($getParams) {
                                foreach($getParams as $getParam => $getParamValue) {
                                    if ($getParam && !array_search($getParam, unserialize(_EW_ALLOWED_PARAMS_TO_EXTRACT))) {
                                        throw new ExtraWatchInputException(_EW_INPUT_EXTRACT, $getParam);
                                    }
                                }
                            } else {
                                $reflector = new ReflectionClass(get_class($object));
                                $classFileName = dirname($reflector->getFileName());
                                if (!self::validate(_EW_INPUT_FILE_PATH, $classFileName)) {
                                    throw new ExtraWatchInputException(_EW_INPUT_EXTRACT, $classFileName);
                                }
                            }
                        }
                    }
                }
                return $input;
                break;
            }
            case _EW_INPUT_EMAIL: {
                if (filter_var($input, FILTER_VALIDATE_EMAIL) === false) {
                    throw new ExtraWatchInputException(_EW_INPUT_EMAIL, $input);
                }
                return $input;
                break;
            }
            case _EW_INPUT_FILE_NAME: {
                $tmpUploadDir = self::getUploadTmpDir();
                $tmpUploadDir = str_replace("/",DS, $tmpUploadDir);
                if (!ExtraWatchHelper::startsWith($input['file']['tmp_name'], $tmpUploadDir)) {
                    throw new ExtraWatchInputException(_EW_INPUT_FILE_NAME, $input);
                }
                return $input;

            }
            case _EW_INPUT_FILE_EXTERNAL_PATH:
            case _EW_INPUT_DIR: {
                $env = ExtraWatchEnvFactory::getEnvironment();
                if (!ExtraWatchHelper::startsWith(realpath($input), realpath($env->getCMSFileSystemRootPath()))) {
                    throw new ExtraWatchInputException(_EW_INPUT_FILE_EXTERNAL_PATH, $input);
                }

                return $input;
            }

            case _EW_INPUT_HOST: {
                $isIpValid = (
                    filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE) ||
                    filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE)
                );

                $isHostValid = (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $input) //valid chars check
                    && preg_match("/^.{1,253}$/", $input) //overall length check
                    && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $input)   ); //length of each label

                if (!($isIpValid || $isHostValid)) {
                    throw new ExtraWatchInputException(_EW_INPUT_HOST, $input);
                }
                return $input;
            }

            case _EW_INPUT_REFERRER_SAME_SITE: {
                $env = ExtraWatchEnvFactory::getEnvironment();
                if (!ExtraWatchHelper::startsWith($_SERVER["HTTP_REFERER"], $env->getCMSBaseURL())) {
                    throw new ExtraWatchInputException(_EW_INPUT_REFERRER_SAME_SITE, $_SERVER["HTTP_REFERER"]);
                }
                return $input;
            }

            default: {
            return $input;
            }

        }

    }

    /**
     * @return bool|string
     */
    public static function getUploadTmpDir()
    {
        return ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
    }


}


