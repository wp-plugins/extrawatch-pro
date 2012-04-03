<?php
/**
 * Created by IntelliJ IDEA.
 * User: matej.koval
 * Date: Apr 21, 2010
 * Time: 2:11:26 PM
 * To change this template use File | Settings | File Templates.
 */

class TestExtraWatchBase extends PHPUnit_Framework_TestCase
{

    private $mainframe;
    private $database;

    function setUp()
    {
        error_reporting(E_NOTICE);

        if (!defined('_JEXEC')) define('_JEXEC', 1);
        if (!defined('JPATH_BASE')) define('JPATH_BASE', "d:/work/cg15/");
        if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

        require_once(JPATH_BASE . "configuration.php");
        require_once(JPATH_BASE . "includes/defines.php");
        require_once(JPATH_BASE . "libraries/joomla/factory.php");
        require_once(JPATH_BASE . "libraries/loader.php");
        require_once(JPATH_BASE . "libraries/joomla/base/object.php");
        require_once(JPATH_BASE . "libraries/joomla/application/application.php");
        require_once(JPATH_BASE . "libraries/joomla/error/error.php");
        require_once(JPATH_BASE . "libraries/joomla/filter/filterinput.php");
        require_once(JPATH_BASE . "libraries/joomla/user/user.php");
        require_once(JPATH_BASE . "libraries/joomla/language/language.php");

        $this->mainframe = & JFactory :: getApplication('site');
        $this->mainframe->initialise();
        $this->database = & JFactory :: getDBO();

        require_once(JPATH_BASE . "components/com_extrawatch/config.php");
        require_once(JPATH_BASE . "components/com_jextrawatchclass.joextrawatchonfig.php");
        require_once(JPATH_BASE . "components/com_jooextrawatchass.extraWatch.helper.php");

    }

    function testBlank()
    {
    }

}

?>
