<?php
class IP_Blocking_Final extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/");
    }

    public function testMyTestCase()
    {
        try {
            $this->assertTrue($this->isElementPresent("link=Log out"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->open("/administrator/index.php");
        $this->click("link=Components");
        $this->click("link=extrawatch");
        $this->waitForPageToLoad("30000");
        $this->click("link=live-stats");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isElementPresent("219.91.209.116")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        try {
            $this->assertTrue($this->isElementPresent("219.91.209.116"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->click("219.91.209.116");
        $this->assertTrue((bool)preg_match('/^Really toggle blocking of  219\.91\.209\.116 [\s\S]$/', $this->getConfirmation());)
        ;
        $this->click("visits");
        // Verify IP is blocked
        $this->verifyTextPresent("The IP: 219.91.209.116 is blocked due to attempt to access back-end without security code");
        // Un-block IP
        $this->click("link=Anti-Spam");
        $this->waitForPageToLoad("30000");
        $this->verifyTextPresent("219.91.209.116");
        $this->click("219.91.209.116");
        $this->waitForPageToLoad("30000");
        $this->openWindow("http://www.codegravitydemo.com/", "");
        $this->open("/");
        try {
            $this->assertTrue($this->isElementPresent("link=Home"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
    }
}

?>
