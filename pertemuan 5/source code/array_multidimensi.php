<?php

$cars = array(
    array("Volvo",22,18),
    array("BWM",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

foreach ($cars as $car) {

    foreach ($car as $detail) {
       echo $detail.'<br/>';
    }
}