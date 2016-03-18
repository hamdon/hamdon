<?php

namespace Hamdon;
/**
 * Class DateRange
 *
 * @author hamdon created at 2016/2/25 10:42
 */
class DateRange
{
    public $inputDate;

    public function startTime()
    {
        $dates = $this->getYearMonthDayArray();
        if ($dates['day'] == 0) {
            if ($dates['month'] == 0) {
                $date = $dates['year']."-1-1";
            } else {
                $date = $dates['year'] . "-" .$dates['month'];
            }
            $time=strtotime($date);
        } else {
            $time = strtotime($dates['year']."-".$dates['month']."-".$dates['day']);
        }
        return $time;
    }

    public function endTime()
    {
        $dates = $this->getYearMonthDayArray();
        if ($dates['day'] == 0) {
            if ($dates['month'] == 0||$dates['month'] == 12) {
                $date = $dates['year']."-12-31";
            } else {
                $date = $dates['year'] . "-" . ($dates['month']+1);
            }
            $time=strtotime($date);
        } else {
            $time = strtotime($dates['year']."-".$dates['month']."-".$dates['day']) + 86400;
        }
        return $time;
    }

    public function getYearMonthDayArray()
    {
        $year  = date("Y");
        $month = date("m");
        $day   = date("d");
        if (!empty($this->inputDate)) {
            $dates    = explode("-", $this->inputDate);
            if (strlen($dates[0]) != 4) {
                $dates = explode("/", $this->inputDate);
            }
            if (strlen($dates[0]) == 4) {
                $year  = $dates[0];
                $month = empty($dates[1]) ? 0 : ($dates[1]<10&&substr($dates[1],0,1)!=0?"0".$dates[1]:$dates[1]);
                $day   = empty($dates[2]) ? 0 : $dates[2];
            }
        }
        return array("year" => $year, "month" => $month, "day" => $day);
    }
}

 