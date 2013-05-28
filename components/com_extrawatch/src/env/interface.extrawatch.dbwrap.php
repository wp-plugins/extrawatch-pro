<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 725
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

interface ExtraWatchDBWrap
{

  public function setQuery($query);

  public function query();

  public function getErrorNum();

  public function loadAssocList($key = '');

  public function objectListQuery($query);

  public function getQuery();

  public function getEscaped($sql);

  public function resultQuery($query);

  public function executeQuery($query);

  public function loadObjectList($key = '');

}
