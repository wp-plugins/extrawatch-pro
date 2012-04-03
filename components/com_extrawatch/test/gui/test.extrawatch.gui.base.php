<?php
/**
 * Created by IntelliJ IDEA.
 * User: matej.koval
 * Date: Apr 21, 2010
 * Time: 9:06:06 AM
 * To change this template use File | Settings | File Templates.
 */

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class BaseTestExtraWatchGUI extends PHPUnit_Extensions_SeleniumTestCase
{
    function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.extrawatchdemo.com/");

    }

    function tearDown()
    {
        sleep(5);
    }

/*
    function testLogin()
    {
        $this->open("/administrator/");
        $this->type("modlgn_username", "test");
        $this->type("modlgn_passwd", "!selenium");
        $this->click("//input[@value='Login']");

    }
*/

}

?>
