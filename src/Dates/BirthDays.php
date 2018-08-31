<?php

namespace Lytvyn\Dates;


class BirthDays
{
    private $birthDate;
    private $todayDate;

    public function __construct($birthDate)
    {
        $this->birthDate = $birthDate;
        $this->todayDate = date("Y-m-d");
    }

    private function getBirthTime()
    {
        return strtotime($this->birthDate);
    }

    private function getTodayTime()
    {
        return strtotime($this->todayDate);
    }

    public function findTotalDays()
    {
        $totalSeconds = $this->getTodayTime() - $this->getBirthTime();
        return floor($totalSeconds / 3600 / 24);
    }
}