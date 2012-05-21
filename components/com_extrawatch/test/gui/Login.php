<?php
class Login extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/administrator/index.php");
    }

    public function testMyTestCase()
    {

        $User = "admin";
        $Password = "demo";
        //$this->open("/administrator/index.php");
        $this->type("mod-login-username", $User);
        $this->type("mod-login-password", $Password);
        $this->click("link=Log in");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isTextPresent("Log out")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        try {
            $this->assertTrue($this->isElementPresent("link=Log out"));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            array_push($this->verificationErrors, $e->toString());
        }
    }
}

