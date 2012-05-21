<?php
class Install_Component extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/administrator/index.php");
    }

    public function testMyTestCase()
    {
        $ComSetup = "C:\\Joomla\\ExtraWatch\\com_extrawatch.zip";
        //$this->open("/administrator/index.php");
        $this->click("link=Manage");
        $this->waitForPageToLoad("30000");
        try {
            $this->assertTrue($this->isElementPresent("link=Log out"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
        $this->click("link=Extensions");
        $this->click("link=Extension Manager");
        $this->waitForPageToLoad("30000");
        $this->type("install_package", $ComSetup);
        $this->click("css=input.button");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isTextPresent("Installing component was successful.")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        $this->verifyTextPresent("Installing component was successful.");
        $this->verifyTextPresent("Installation finished.");
    }
}


