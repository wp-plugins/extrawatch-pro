<?php
class Publish_Modules extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/");
    }

    public function testMyTestCase()
    {
        $this->open("/administrator/index.php");
        try {
            $this->assertTrue($this->isElementPresent("link=Log out"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->click("link=Extensions");
        $this->click("link=Module Manager");
        $this->waitForPageToLoad("30000");
        $this->select("filter_state", "label=Unpublished");
        $this->waitForPageToLoad("30000");
        // Search for ExtraWatch Agent
        $this->type("filter_search", "ExtraWatch Agent");
        $this->click("css=button[type=submit]");
        $this->waitForPageToLoad("30000");
        try {
            $this->assertTrue($this->isElementPresent("link=ExtraWatch Agent"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        // Publishing ExtraWatch Agent
        $this->click("link=ExtraWatch Agent");
        $this->waitForPageToLoad("30000");
        $this->type("jform_position", "position-11");
        $this->select("jform_published", "label=Published");
        // Set Start publishing date
        $this->type("jform_publish_up", "2011-01-01 00:01:00");
        $this->select("jform_assignment", "label=On all pages");
        $this->click("css=span.icon-32-apply");
        $this->verifyTextPresent("Module successfully saved");
        $this->click("css=span.icon-32-save");
        $this->click("css=button[type=button]");
        $this->waitForPageToLoad("30000");
        $this->type("filter_search", "ExtraWatch Users");
        $this->click("css=button[type=submit]");
        $this->waitForPageToLoad("30000");
        try {
            $this->assertTrue($this->isElementPresent("link=ExtraWatch Users"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->click("link=ExtraWatch Users");
        $this->waitForPageToLoad("30000");
        // Publishing ExtraWatch Users
        $this->type("jform_position", "position-11");
        $this->select("jform_published", "label=Published");
        // Set Start publishing date
        $this->type("jform_publish_up", "2011-01-01 00:01:00");
        $this->select("jform_assignment", "label=On all pages");
        $this->click("css=span.icon-32-save");
        $this->verifyTextPresent("Module successfully saved");
        $this->click("css=button[type=button]");
        $this->waitForPageToLoad("30000");
        $this->type("filter_search", "ExtraWatch Visitors");
        $this->click("css=button[type=submit]");
        $this->waitForPageToLoad("30000");
        try {
            $this->assertTrue($this->isElementPresent("link=ExtraWatch Visitors"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->click("link=ExtraWatch Visitors");
        $this->waitForPageToLoad("30000");
        // Publishing ExtraWatch Visitors
        $this->type("jform_position", "position-11");
        $this->select("jform_published", "label=Published");
        // Set Start publishing date
        $this->type("jform_publish_up", "2011-01-01 00:01:00");
        $this->select("jform_assignment", "label=On all pages");
        $this->click("link=Save & Close");
        $this->verifyTextPresent("Module successfully saved");
        $this->click("css=button[type=button]");
        $this->waitForPageToLoad("30000");
    }
}


