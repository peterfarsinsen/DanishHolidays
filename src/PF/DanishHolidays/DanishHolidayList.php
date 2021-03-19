<?php
namespace PF\DanishHolidays;

class DanishHolidayList
{
    private $holidays = array();
    private $year = null;
    private $includeSpecialDays = false;

    public function __construct($year = null, $includeSpecialDays = false)
    {
        $this->year = $year;
        $this->includeSpecialDays = $includeSpecialDays;
        $this->init();
    }

    public function getHolidays()
    {
        return $this->holidays;
    }

    private function addDays($date, $days)
    {
        return date('Y-m-d', strtotime($days, strtotime($date)));
    }

    private function addHoliday($date, $text)
    {
        $this->holidays[] = (object) array(
            'date' => $date,
            'text' => $text
        );
    }

    private function init()
    {
        /**
         * Dates that never change
         */
        $this->addHoliday(
            $this->year . '-01-01',
            'New years day'
        );
        $this->addHoliday(
            $this->year.'-12-25',
            'Christmas day'
        );
        $this->addHoliday(
            $this->year.'-12-26',
            'Boxing day'
        );

        /**
         * Holidays relative to easter
         */
        $easterDate = $this->getEasterDate($this->year);
        $this->addHoliday(
            $easterDate,
            'Easter'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '+1 day'),
            'Easter monday'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '-1 week'),
            'Palm sunday'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '-2 day'),
            'Good friday'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '-3 day'),
            'Maunday thursday'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '+26 day'),
            'Prayer day'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '+39 day'),
            'Ascension day'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '+49 day'),
            'With sunday'
        );
        $this->addHoliday(
            $this->addDays($easterDate, '+50 day'),
            'With monday'
        );

        if (!$this->includeSpecialDays) {
            return;
        }

        /**
         * Special days
         */
        $this->addHoliday(
            $this->year.'-05-01',
            'May 1st'
        );
        $this->addHoliday(
            $this->year.'-06-05',
            'Constitution day'
        );
        $this->addHoliday(
            $this->year.'-12-24',
            'Christmas eve'
        );
        $this->addHoliday(
            $this->year.'-12-31',
            'New years eve'
        );
    }

    private function getEasterDate($year)
    {
        // Easter is always relative to May 21.
        $offset = $year . "-03-21";
        // Days from May 21. to easter
        $days = \easter_days($year);

        return $this->addDays($offset, '+' . $days . ' day');
    }
}
