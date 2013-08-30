DanishHolidays
==============

Simple class to generate a list of danish holidays.

$holidayList = new DanishHolidayList('2013');
$holidays = $holidayList->getHolidays();

foreach($holidays as $holiday) {
	...
}

Includes a few special days such as new years eve, may 1st etc. that has a special status in Denmark. Some people have these days off and some dont. Include them in the list by passing true as the second param to the constructor.

$holidayList = new DanishHolidayList('2013', true);
$holidays = $holidayList->getHolidays();

foreach($holidays as $holiday) {
	...
}

# License

MIT License Copyright (C) 2013 by Peter Farsinsen

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.