<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 761
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchDownloadsHTML
{

  public $extraWatch;
  public $downloads;

  function __construct()
  {
    $this->extraWatch = new ExtraWatchMain();
    $this->downloads = new ExtraWatchDownloads($this->extraWatch->database);
  }

    function renderAddExtension() {
        $output = ExtraWatchHelper::get_include_contents(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view".DS."dm_add_ext.php", array("extraWatch"=>$this->extraWatch));
        return $output;
    }

    function renderEditExtension($eid) {
        $editextname = $this->downloads->findExtensionNameById($eid);
        $output = ExtraWatchHelper::get_include_contents(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view".DS."dm_edit_ext.php", array("extraWatch"=>$this->extraWatch, "eid" => $eid, "editextname" => $editextname));
        return $output;
    }


    function renderAddFile() {
        $output = ExtraWatchHelper::get_include_contents(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view".DS."dm_add_filepath.php", array("extraWatch"=>$this->extraWatch));
        return $output;
    }

    function renderEditFile($did) {
        $editfilepathname = $this->downloads->findFilePathNameById($did);
        $output = ExtraWatchHelper::get_include_contents(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view".DS."dm_edit_filepath.php", array("extraWatch"=>$this->extraWatch, "did" => $did, "editfilepathname" => $editfilepathname));
        return $output;
    }


}
