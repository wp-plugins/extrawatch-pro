<?php
class Install_Modules extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/");
    }

    public function testMyTestCase()
    {
        $SetupAgent = "C:\\Joomla\\ExtraWatch\\mod_extrawatch_agent.zip";
        $SetupUsers = "C:\\Joomla\\ExtraWatch\\mod_jextrawatchusers.zip";
        $SetupVisitors = "C:\\Joomla\\ExtraWatch\\mod_EXTRAWATCH_visitors.zip";
        $this->open("/administrator/index.php");
        $this->click("link=Extensions");
        $this->click("link=Extension Manager");
        $this->waitForPageToLoad("30000");
        $this->type("install_package", $SetupAgent);
        $this->click("css=input.button");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isTextPresent("exact:INSTRUCTIONS: This is the basic 'agent' module, which has to be inserted everywhere, where you want the visit to be recorded. It's best to place it into the footer of your Joomla website template.")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        $this->verifyTextPresent("Installing module was successful.");
        $this->type("install_package", $SetupUsers);
        $this->click("css=input.button");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isTextPresent("exact:INSTRUCTIONS: This module allows to display the most active users and their total count for the current day in the frontend.")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        $this->verifyTextPresent("Installing module was successful.");
        $this->type("install_package", $SetupVisitors);
        $this->click("css=input.button");
        $this->waitForPageToLoad("30000");
        for ($second = 0; ; $second++) {
            if ($second >= 60) $this->fail("timeout");
            try {
                if ($this->isTextPresent("exact:INSTRUCTIONS: This module inserts a small statistical information about where did the visitors came from (Countries) and also some information about amount of visits for today, yesterday, this week, last week, this month and total. It's best to publish it somewhere on the left or right side of your website.")) break;
            } catch (Exception $e) {
            }
            sleep(1);
        }

        $this->verifyTextPresent("Installing module was successful.");
    }
}

?>
