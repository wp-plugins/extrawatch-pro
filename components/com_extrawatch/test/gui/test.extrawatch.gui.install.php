<?php


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once 'test.extrawatch.gui.base.php';

class TestExtraWatchGUI extends BaseTestExtraWatchGUI
{


    function testInstall()
    {
        $this->open("/dev/administrator/");
        $this->type("modlgn_username", "admin");
        $this->type("modlgn_passwd", "!JmlWtchDm82");
        $this->click("//input[@value='Login']");
        $this->waitForPageToLoad("30000");
        $this->open("/dev/administrator/index.php?option=com_installer");
        $this->waitForPageToLoad("30000");
        $this->type("install_package", "D:\\work\\jw-build-1.2.11-20100503\\com_jextrawatchzip");
        $this->click("//input[@value='Upload File & Install']");
        $this->waitForPageToLoad("30000");
        $this->assertTextPresent("Install Component Success");
        $this->type("install_package", "D:\\work\\jw-build-1.2.11-20100503\\mod_joextrawatchgent.zip");
        $this->click("//input[@value='Upload File & Install']");
        $this->waitForPageToLoad("30000");
        $this->assertTextPresent("Install Module Success");
        $this->type("install_package", "D:\\work\\jw-build-1.2.11-20100503\\mod_jooextrawatchers.zip");
        $this->click("//input[@value='Upload File & Install']");
        $this->waitForPageToLoad("30000");
        $this->assertTextPresent("Install Module Success");
        $this->type("install_package", "D:\\work\\jw-build-1.2.11-20100503\\mod_extrawatch\\visitors.zip");
        $this->click("//input[@value='Upload File & Install']");
        $this->waitForPageToLoad("30000");
        $this->assertTextPresent("Install Module Success");

        /* publish */
        $this->open("/dev/administrator/index.php?option=com_modules");
        $this->waitForPageToLoad("30000");
        $this->type("search", "extraWatch");
        $this->click("//button[@onclick='this.form.submit();']");
        $this->waitForPageToLoad("30000");
        $this->click("link=ExtraWatch Agent");
        $this->waitForPageToLoad("30000");
        $this->click("published1");
        $this->click("//td[@id='toolbar-save']/a/span");
        $this->waitForPageToLoad("30000");
        $this->click("link=ExtraWatch Users");
        $this->waitForPageToLoad("30000");
        $this->click("published1");
        $this->click("//td[@id='toolbar-save']/a/span");
        $this->waitForPageToLoad("30000");
        $this->click("link=ExtraWatch Visitors");
        $this->waitForPageToLoad("30000");
        $this->click("published1");
        $this->select("ordering", "label=15::ExtraWatch Visitors");
        $this->click("//td[@id='toolbar-save']/a/span");
        $this->waitForPageToLoad("30000");

    }

}
