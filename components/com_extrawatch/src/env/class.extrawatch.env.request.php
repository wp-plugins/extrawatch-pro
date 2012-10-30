<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 457
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}


class EnvRequest
{

  function get()
  {
    return @$_REQUEST;
  }

  function getVar($var)
  {
    //TODO escaping
    return @$_REQUEST[$var];

  }

  function getPost($var)
  {
    //TODO escaping
    return @$_POST[$var];
  }
}
