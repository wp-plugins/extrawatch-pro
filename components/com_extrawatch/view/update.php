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
defined('_JEXEC') or die('Restricted access');

$query = "select extension_id as id from #__extensions where element = 'com_extrawatch'";
$id = $this->extraWatch->database->resultQuery($query);

$query = sprintf("update #__updates set extension_id = %d where extension_id = 0", (int)$id);
$id = $this->extraWatch->database->executeQuery($query);

?>
<h2>Update ExtraWatch (Joomla 1.6 only)</h2>

<i>The following update method is little bit weird, because of unfinished update mechanism of Joomla 1.6, which contains
    a bug.
    ExtraWatch fixes this bug, but you need to to the following:</i>
<br/><br/>

1. <b><a href="/administrator/index.php?option=com_installer&view=update">Open update manger</a></b> <br/><br/>

2. Click Find Updates<br/><br/>

3. Go back to ExtraWatch -> Update and <b><a href="/administrator/index.php?option=com_installer&view=update">Open
    update manager again</a></b>  <br/><br/>

4. Now you should see the New version in update manager (if available)<br/><br/>

5. Tick the checkbox and click "Update"<br/><br/>
