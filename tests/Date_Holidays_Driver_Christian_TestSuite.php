<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_Christian_TestSuite extends PHPUnit_TestCase {
    
    var $testDates2005;

    function setUp() {
        $this->testDates2005 = array(
            'jesusCircumcision'     => array('day' => 1, 'month' => 1, 'year' => 2005),
            'epiphany'              => array('day' => 6, 'month' => 1, 'year' => 2005),
            'mariaCleaning'         => array('day' => 2, 'month' => 2, 'year' => 2005),
            'josefsDay'             => array('day' => 19, 'month' => 3, 'year' => 2005),
            'mariaAnnouncement'     => array('day' => 25, 'month' => 3, 'year' => 2005),
            'easter'                => array('day' => 27, 'month' => 3, 'year' => 2005),
            'palmSunday'            => array('day' => 20, 'month' => 3, 'year' => 2005),
            'passionSunday'         => array('day' => 13, 'month' => 3, 'year' => 2005),
            'painfulFriday'         => array('day' => 18, 'month' => 3, 'year' => 2005),
            'whiteSunday'           => array('day' => 3, 'month' => 4, 'year' => 2005),
            'ashWednesday'          => array('day' => 9, 'month' => 2, 'year' => 2005),
            'goodFriday'            => array('day' => 25, 'month' => 3, 'year' => 2005),
            'greenThursday'         => array('day' => 24, 'month' => 3, 'year' => 2005),
            'easterMonday'          => array('day' => 28, 'month' => 3, 'year' => 2005),
            'whitsun'               => array('day' => 15, 'month' => 5, 'year' => 2005),
            'requestSunday'         => array('day' => 1, 'month' => 5, 'year' => 2005),
            'ascensionDay'          => array('day' => 5, 'month' => 5, 'year' => 2005),
            'whitMonday'            => array('day' => 16, 'month' => 5, 'year' => 2005),
            'mariaHaunting'         => array('day' => 31, 'month' => 5, 'year' => 2005),
            'trinitatis'            => array('day' => 22, 'month' => 5, 'year' => 2005),
            'corpusChristi'         => array('day' => 26, 'month' => 5, 'year' => 2005),
            'heartJesus'            => array('day' => 3, 'month' => 6, 'year' => 2005),
            'johannisCelebration'   => array('day' => 24, 'month' => 6, 'year' => 2005),
            'petrusAndPaulus'       => array('day' => 29, 'month' => 6, 'year' => 2005),
            'mariaAscension'        => array('day' => 15, 'month' => 8, 'year' => 2005),
            'crossRaising'          => array('day' => 14, 'month' => 9, 'year' => 2005),
            'thanksGiving'          => array('day' => 2, 'month' => 10, 'year' => 2005),
            'kermis'                => array('day' => 16, 'month' => 10, 'year' => 2005),
            'reformationDay'        => array('day' => 31, 'month' => 10, 'year' => 2005),
            'allSaintsDay'          => array('day' => 1, 'month' => 11, 'year' => 2005),
            'allSoulsDay'           => array('day' => 2, 'month' => 11, 'year' => 2005),
            'martinsDay'            => array('day' => 11, 'month' => 11, 'year' => 2005),
            'advent4'               => array('day' => 18, 'month' => 12, 'year' => 2005),
            'advent1'               => array('day' => 27, 'month' => 11, 'year' => 2005),
            'advent2'               => array('day' => 4, 'month' => 12, 'year' => 2005),
            'advent3'               => array('day' => 11, 'month' => 12, 'year' => 2005),
            'deathSunday'           => array('day' => 20, 'month' => 11, 'year' => 2005),
            'dayOfRepentance'       => array('day' => 16, 'month' => 11, 'year' => 2005),
            'stNicholasDay'         => array('day' => 6, 'month' => 12, 'year' => 2005),
            'mariaConception'       => array('day' => 8, 'month' => 12, 'year' => 2005),
            'xmasEve'               => array('day' => 24, 'month' => 12, 'year' => 2005),
            'xmasDay'               => array('day' => 25, 'month' => 12, 'year' => 2005),
            'boxingDay'             => array('day' => 26, 'month' => 12, 'year' => 2005),
            'newYearsEve'           => array('day' => 31, 'month' => 12, 'year' => 2005)
        );
    } 
    
    function testHolidays2005() {
          
        $drvChristian = Date_Holidays::factory('Christian', 2005, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drvChristian));
        if (Date_Holidays::isError($drvChristian)) {
            print_r($drvChristian);
            die($drvChristian->getMessage());
        }
        
        
        foreach ($this->testDates2005 as $name => $dateInfo) {
            $day = $drvChristian->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

}

?>