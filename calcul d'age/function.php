<?php


// function CalculAge($date){
//     $toDay = newDateTime("Y-m-d");
//     $age = date_diff($date, date_create($toDay));
//     return $age; 
// }

function calculAge($date){
    $toDay = new DateTime();
    $date = new DateTime($date);
    $interval = $date -> diff($toDay);
    $age = $interval-> format("%Y");
    return [$age, $date];
}

