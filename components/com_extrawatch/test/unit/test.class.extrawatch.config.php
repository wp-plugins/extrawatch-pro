<?php
/**
 * Created by IntelliJ IDEA.
 * User: matej.koval
 * Date: Apr 21, 2010
 * Time: 1:37:59 PM
 * To change this template use File | Settings | File Templates.
 */
require("test.extrawatch.base.php");

class TestExtraWatchConfig extends TestExtraWatchBase
{

    function testConfigValueInsertion()
    {
        $extraWatchConfig = new ExtraWatchConfig();
        $testKey = "TEST CONFIG KEY";
        $testValue = "TEST CONFIG VALUE";
        $extraWatchConfig->saveConfigValue($testKey, $testValue);
        $this->assertTrue($testValue == $extraWatchConfig->getConfigValue($testKey));
        $extraWatchConfig->removeConfigValue($testKey, $testValue);
        $this->assertTrue($testValue != $extraWatchConfig->getConfigValue($testKey));
    }

}
