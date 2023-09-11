<?php 

function memberAge ($dob) {
    //get todays date 
    $thisYear = date('Y');
    $thisMonth = date('m');

    list($year, $month, $day) = explode('-',$dob);
    // get age
    $age = $thisYear - $year;
    // handle if birthday is passed this year or not
    if ($thisMonth < $month || ($thisMonth == $month && date('d') < $day)) {
        $age--;
    }
    return $age;
}