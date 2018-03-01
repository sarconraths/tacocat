<?php
$employees = array(
  "Augsburg" => 57,
  "München" => 25,
  "Stuttgart" => 49,
  "Mainz" => 2
);

$cityCount = 0;
$employeeCount = 0;
$cities = '';

foreach($employees as $city => $count){
  $employeeCount += $count;
  $cityCount++;
    if($cityCount==1){
      $cities .= $city;
    }else if($cityCount < count($employees)){
      $cities .= ', '.$city;
    }else{
      $cities .= ' und '.$city;
    }
}
?>
