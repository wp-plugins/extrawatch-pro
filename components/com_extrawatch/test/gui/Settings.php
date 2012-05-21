<?php
class Settings extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/");
    }

    public function testMyTestCase()
    {
        $this->open("/administrator/index.php");
        $this->click("link=extrawatch");
        $this->waitForPageToLoad("30000");
        $this->click("link=Components");
        $this->click("link=Settings");
        $this->waitForPageToLoad("30000");
        $this->click("link=Countries");
        sleep(1);
        $this->verifyTextPresent("Countries");
        $this->click("link=Visitors");
        sleep(1);
        $this->verifyTextPresent("Visitors");
        $this->click("link=History & Performance");
        sleep(1);
        $this->verifyTextPresent("History & Performance");
        $this->click("link=Advanced");
        sleep(1);
        try {
            $this->assertTrue($this->isElementPresent("link=Advanced"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->click("link=Expert");
        sleep(1);
        $this->verifyTextPresent("Expert");
        $this->click("link=Appearance");
        sleep(1);
        $this->verifyTextPresent("Appearance");
        $TruncateVisits = $this->getValue("EXTRAWATCH_TRUNCATE_VISITS");
        $this->type("EXTRAWATCH_TRUNCATE_VISITS", "50");
        $this->click("submitForm");
        $this->waitForPageToLoad("30000");
        $this->verifyTextPresent("Settings were saved");
        try {
            $this->assertEquals("50", $this->getValue("EXTRAWATCH_TRUNCATE_VISITS"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->type("EXTRAWATCH_TRUNCATE_VISITS", "$TruncateVisits");
        $this->click("submitForm");
        $this->waitForPageToLoad("30000");
        $this->verifyTextPresent("Settings were saved");
    }
}


