<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/12/11
 * Time: 9:51 PM
 * To change this template use File | Settings | File Templates.
 */

interface ExtraWatchDBWrap
{

    function setQuery($query);

    function query();

    function getErrorNum();

    function loadAssocList($key = '');

    function objectListQuery($query);

    function getQuery();

    function getEscaped($sql);

    function resultQuery($query);

    function executeQuery($query);

    function loadObjectList($key = '');

}
