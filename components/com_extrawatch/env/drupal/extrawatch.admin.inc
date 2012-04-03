<?php

/**
 * @file
 * ExtraWatch administration and module settings UI.
 */


function extrawatch()
{
    define('JPATH_BASE2', dirname(__FILE__));
    define('_JEXEC', 1);
    define('ENV', 1);
    include('administrator/components/com_extrawatch/admin.extrawatch.php');
}
