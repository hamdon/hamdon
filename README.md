# hamdon
someUtilityPHPClass


##DateRange.php

input one date and then can ouput the timestamp range and date array include year、month、day

input e.g.:
2016、2016-01、2016-01-02
 

输入一个日期,然后能输出这个日期的时间戳开始和结束的时间段，还可以返回日期数据，包括年、月、日

usage:
```php
$date = date("Y-m",time());
$dateRange = new \Hamdon\DateRange();
$dateRange->inputDate = $date
//start timestamp 开始时间戳
$startTimestamp = $dateRange->startTime();
//end timestamp 结束时间戳
$endTimestamp = $dateRange->endTime();
//date array e.g.:$dates['year'] = xx、$dates['month']=xx、$dates[`day`] = 0 
//日期数组 比如：$dates['year'] = xxx、$dates['month']=xx、$dates[`day`] = 0 
$dates = $dateRange->getYearMonthDayArray();

```








