<?php
class Anti_spam extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/");
    }

    public function testMyTestCase()
    {
        $ip = "219.91.209.70";
        $this->open("/");
        $this->type("mod-search-searchword", "advicer");
        $this->keyPress("mod-search-searchword", "13");
        $this->waitForPageToLoad("30000");
        // IP is blocked
        print("IP is blocked" . "\n");
        $this->verifyTextPresent("Your IP address was blocked by ExtraWatch, please contact the system administrator");
        $this->open("http://www.codegravitydemo.com/administrator/index.php");
        $this->click("link=Components");
        $this->click("link=extrawatch");
        $this->waitForPageToLoad("30000");
        $this->click("link=anti-spam--blocking");
        $this->waitForPageToLoad("30000");
        $this->verifyTextPresent($ip);
        $this->click($ip);
        $this->waitForPageToLoad("30000");
        $this->open("http://www.codegravitydemo.com/");
        $this->refresh();
        try {
            $this->assertTrue($this->isElementPresent("link=Home"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
    }
}


