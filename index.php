<?php

use Bogdanova\BogdanovaException;
use Bogdanova\MyLog;
use Bogdanova\QuEquation;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "Bogdanova/MyLog.php";
include "Bogdanova/Equation.php";
include "Bogdanova/QuEquation.php";
include  "Bogdanova/BogdanovaException.php";

ini_set("display_errors", 1);
error_reporting (-1);

try{
    $version = file_get_context("version.txt");
    MyLog::log("Версия программы ".$version);

    $b = new QuEquation();
    $values = array();