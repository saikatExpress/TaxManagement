<?php

function dateTimeFormat($date)
{
    $dateString    = $date;
    $date          = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
    $formattedDate = $date->format('d M, y');

    return $formattedDate;
}
