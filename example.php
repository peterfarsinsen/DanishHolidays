<?php
require 'src/PF/DanishHolidays/DanishHolidayList.php';

use \PF\DanishHolidays\DanishHolidayList;

$holidayList = new DanishHolidayList('2013', true);
$holidays = $holidayList->getHolidays();

foreach($holidays as $holiday) {
	var_dump($holiday);
}