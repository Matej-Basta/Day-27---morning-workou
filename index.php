<?php

require_once "Computer.php";

$my_computer = new Computer;
$my_computer->model = "ASUS ZenBook 15";
$my_computer->operating_system = "Windows 10 Home";
$my_computer->status = "on";
$my_computer->is_portable = true;

// $my_computer->switchOff();

$my_computer->toggleSwitch();

$my_computer->toggleSwitch();

include "html.php";