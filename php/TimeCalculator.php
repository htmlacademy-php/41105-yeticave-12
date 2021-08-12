<?php


class TimeCalculator
{
    public function getTimeLeft($date)
    {
        $diffInSeconds = time() - strtotime($date);
        $diffInHours = $diffInSeconds / 3600;
        $remainderInMinutes = $diffInSeconds % 3600 / 60;
        return [$diffInHours, $remainderInMinutes];
    }
}
