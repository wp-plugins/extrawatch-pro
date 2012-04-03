<?php
class Uninstall_Joomla extends PHPUnit_Extensions_SeleniumTestCase
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
        $this->click("link=Extension Manager");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isTextPresent("Manage")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        $this->click("link=Manage");
        $this->waitForPageToLoad("30000");
        // Search for ExtraWatch
        $this->type("filters_search", "ExtraWatch");
        $this->click("css=button.btn");
        $this->waitForPageToLoad("30000");
        // Look for Joomla Component is installed
        $JoomlaComponent = $this->isTextPresent("ExtraWatch");
        // Select checkbox
        If ($JoomlaComponent) {
            $this->click("cb0");
            // Click uninstall
            $this->click("css=span.icon-32-delete");
            $this->waitForPageToLoad("30000");
            for ($second = 0; ; $second++) {
                if ($second >= 60) $this->fail("timeout");
                try {
                    if ($this->isTextPresent("ExtraWatch component successfully uninstalled.")) break;
                } catch (Exception $e) {
                }
                sleep(1);
            }
            $this->verifyTextPresent("Uninstalling component was successful.");
		echo "Uninstalling ExtraWatch component was successful."
	}
        Else echo "Joomla Watch Component not installed";


        // Search for ExtraWatch
        $this->type("filters_search", "ExtraWatch Agent");
        $this->click("css=button.btn");
        $this->waitForPageToLoad("30000");
        $Agent = $this->isTextPresent("ExtraWatch Agent");

        If ($Agent) {
            // Select checkbox
            $this->click("cb0");
            // Click uninstall
            $this->click("css=span.icon-32-delete");
            $this->waitForPageToLoad("30000");
            $this->verifyTextPresent("Uninstalling module was successful.");
            echo "Uninstalling Joomla Watch Agent module was successful.";
        }

        Else echo "ExtraWatch Agent not installed";

        // Search for ExtraWatch
        $this->type("filters_search", "ExtraWatch Users");
        $this->click("css=button.btn");
        $this->waitForPageToLoad("30000");
        // Look for Joomla Users module is installed
        $Users = $this->isTextPresent("ExtraWatch Users");

	If ($Users) {
        // Select checkbox
        $this->click("cb0");
        // Click uninstall
        $this->click("css=span.icon-32-delete");
        $this->waitForPageToLoad("30000");
        $this->verifyTextPresent("Uninstalling module was successful.");
        echo "Uninstalling Joomla Watch Users module was successful.";
    }
	Else echo "ExtraWatch User not installed"

    // Search for ExtraWatch
    $this->type("filters_search", "ExtraWatch Visitors");
    $this->click("css=button.btn");
    $this->waitForPageToLoad("30000");
    // Look for Joomla Component is installed
    $Visitor = $this->isTextPresent("ExtraWatch Visitors");
	If ($Visitor) {
        // Select checkbox
        $this->click("cb0");
        // Click uninstall
        $this->click("css=span.icon-32-delete");
        $this->waitForPageToLoad("30000");
        $this->verifyTextPresent("Uninstalling module was successful.");
        echo "Uninstalling Joomla Watch Agent Visitor was successful.";
    }
	Else echo "ExtraWatch Visitor not installed"
  }
}

?>
