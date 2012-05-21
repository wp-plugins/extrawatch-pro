<?php


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once 'test.extrawatch.gui.base.php';

class TestExtraWatchGUI extends BaseTestExtraWatchGUI
{

    /**
     * @depends testLogin
     */
    function testMyTestCase()
    {
        $this->open("/administrator");
        $this->type("modlgn_username", "test");
        $this->type("modlgn_passwd", "!selenium");
        $this->click("//input[@value='Login']");
        sleep(2);
        $this->open("/administrator/index.php?option=com_extrawatch");
        $this->waitForTextPresent("Stats");
        $this->assertTrue($this->isTextPresent("Stats"));
        $this->assertTrue($this->isTextPresent("Goals"));
        $this->assertTrue($this->isTextPresent("Settings"));
        $this->assertTrue($this->isTextPresent("Credits"));
        $this->assertTrue($this->isTextPresent("Documentation"));
        $this->assertTrue($this->isTextPresent("FAQ"));
        $this->assertTrue($this->isTextPresent("Report bug or feature"));
        $this->assertTrue($this->isTextPresent("Ad-free License"));
        $this->assertTrue($this->isTextPresent("Donators"));
    }

}
