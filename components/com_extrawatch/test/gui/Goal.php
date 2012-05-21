<?php
class Goal extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.codegravitydemo.com/");
    }

    public function testMyTestCase()
    {
        $GoalName = "GoalName";
        $TitleCondition = "Title";
        $UserNameCondition = "User Name";
        $IPCondition = "IP";
        $CountryCondition = "Country";
        $GetVar = "GetVar";
        $GetCondition = "GetCondition";
        $PostVar = "PostVar";
        $PostCondition = "PostCondition";
        $Block = "Block";
        $Redirect = "Redirect";
        $URL2 = "URI_CONDITION";
        $URL1 = "CAME_FROM_CONDITION";
        $URI_INVERSED = TRUE;
        $TITLE_INVERSED = FALSE;
        $USERNAME_INVERSED = TRUE;
        $IP_INVERSED = FALSE;
        $CAME_FROM_INVERSED = TRUE;
        $COUNTRY_INVERSED = TRUE;
        $GET_INVERSED = FALSE;
        $POST_INVERSED = FALSE;
        $this->open("/administrator/index.php");
        $this->click("link=Components");
        $this->click("link=extrawatch");
        $this->waitForPageToLoad("30000");
        $this->click("link=Goals");
        $this->waitForPageToLoad("30000");
        $this->click("link=New goal");
        $this->waitForPageToLoad("30000");
        $this->type("NAME", $GoalName);
        $this->type("URI_CONDITION", "URL2");
        If ($URI_INVERSED) $this->click("URI_INVERSED");
        $this->type("TITLE_CONDITION", $TitleCondition);
        If ($TITLE_INVERSED) $this->click("TITLE_INVERSED");
        $this->type("USERNAME_CONDITION", $UserNameCondition);
        IF ($USERNAME_INVERSED) $this->click("USERNAME_INVERSED");
        $this->type("IP_CONDITION", $IPCondition);
        IF (IP_INVERSED) $this->click("IP_INVERSED");
        $this->type("CAME_FROM_CONDITION", $URL1);
        IF ($CAME_FROM_INVERSED) $this->click("CAME_FROM_INVERSED");
        $this->type("COUNTRY_CONDITION", $CountryCondition);
        IF ($COUNTRY_INVERSED) $this->click("COUNTRY_INVERSED");
        $this->type("GET_VAR", $GetVar);
        $this->type("GET_CONDITION", $GetCondition);
        IF ($GET_INVERSED) $this->click("GET_INVERSED");
        $this->type("POST_VAR", $PostVar);
        $this->type("POST_CONDITION", $PostCondition);
        IF (POST_INVERSED) $this->click("POST_INVERSED");
        $this->type("BLOCK", $Block);
        $this->type("REDIRECT", $Redirect);
        $this->click("css=input[type=submit]");
        $this->waitForPageToLoad("30000");
        $ = $this->isTextPresent($GoalName);
        $this->verifyTextPresent($GoalName);
    }
}


