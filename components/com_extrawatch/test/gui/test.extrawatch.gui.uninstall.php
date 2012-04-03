<?php


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once 'test.extrawatch.gui.base.php';

class TestExtraWatchGUI extends BaseTestExtraWatchGUI
{


    function testUninstall()
    {
        $this->open("/dev/administrator/");
        $this->type("modlgn_username", "admin");
        $this->type("modlgn_passwd", "!JmlWtchDm82");
        $this->click("//input[@value='Login']");
        $this->waitForPageToLoad("30000");
        $this->open("/dev/administrator/index.php?option=com_installer");
        $this->waitForPageToLoad("30000");
        $this->click("//a[@onclick=\"javascript:document.adminForm.type.value='components';submitbutton('manage');\"]");
        $this->waitForPageToLoad("30000");
        $this->click("cb1");
        $this->click("//td[@id='toolbar-delete']/a/span");
        $this->waitForPageToLoad("30000");
        //$this->assertTextPresent("Uninstall Component Success");
        $this->click("link=Module Manager");
        $this->waitForPageToLoad("30000");
        $this->type("search", "extraWatch");
        $this->waitForPageToLoad("30000");
        $this->click("//button[@onclick='this.form.submit();']");
        $this->click("cb0");
        $this->click("cb1");
        $this->click("cb2");
        $this->click("//td[@id='toolbar-delete']/a/span");
        $this->waitForPageToLoad("30000");
        $this->assertTextPresent("3 Item(s) removed.");
    }

}
