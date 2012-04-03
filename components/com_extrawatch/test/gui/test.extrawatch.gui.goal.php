<?php


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once 'test.extrawatch.gui.base.php';

class TestExtraWatchGUI extends BaseTestExtraWatchGUI
{


    function testGoalInsert()
    {
        $this->open("/administrator/");
        $this->type("modlgn_username", "test");
        $this->type("modlgn_passwd", "!selenium");
        $this->click("//input[@value='Login']");
        $this->waitForPageToLoad("30000");

        $this->open("/administrator/?option=com_extrawatch&task=goals");
        $this->waitForPageToLoad("30000");
        $this->click("link=New goal");
        $this->waitForPageToLoad("30000");
        $this->type("NAME", "name");
        $this->type("URI_CONDITION", "/uri");
        $this->type("TITLE_CONDITION", "titleCondition");
        $this->type("USERNAME_CONDITION", "username1");
        $this->type("IP_CONDITION", "ip1");
        $this->type("CAME_FROM_CONDITION", "from1");
        $this->type("COUNTRY_CONDITION", "sk");
        $this->type("GET_VAR", "get1");
        $this->type("GET_CONDITION", "getCondition");
        $this->type("POST_VAR", "post1");
        $this->type("POST_CONDITION", "postCondition");
        $this->type("BLOCK", "1");
        $this->type("REDIRECT", "/redirected.html");
        $this->click("//input[@value='Insert a new goal']");
        $this->waitForPageToLoad("30000");
        try {
            $this->assertTrue($this->isTextPresent("name"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->assertTrue($this->isTextPresent("/uri"));
        $this->assertTrue($this->isTextPresent("titleCondition"));
        $this->assertTrue($this->isTextPresent("username1"));
        $this->assertTrue($this->isTextPresent("from1"));
        $this->assertTrue($this->isTextPresent("sk"));
        $this->assertTrue($this->isTextPresent("ip1"));
        $this->assertTrue($this->isTextPresent("get"));
        $this->assertTrue($this->isTextPresent("getCondition"));
        $this->assertTrue($this->isTextPresent("post"));
        $this->assertTrue($this->isTextPresent("postCondition"));
    }

}
