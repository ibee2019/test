<?php
defined('APP_ENV_PROD') or define('APP_ENV_PROD', false);

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public static $now;

    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }

    public function test_getGreetingStr()
    {
        $time1 = strtotime(date('Y-m-d'). ' 00:00:00');
        $this->assertEquals(
            $this->greeter->getGreeting($time1),
            'Good morning'
        );

        $time2 = strtotime(date('Y-m-d'). ' 12:00:00');
        $this->assertEquals(
            $this->greeter->getGreeting($time2),
            'Good afternoon'
        );

        $time3 = strtotime(date('Y-m-d'). ' 18:00:00');
        $this->assertEquals(
            $this->greeter->getGreeting($time3),
            'Good evening'
        );

    }
}
