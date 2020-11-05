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
//
ini_set("display_errors", 1);
error_reporting (-1);

try{
    $b = new QuEquation();
    $values = array();

    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc." = 0");
    $x = $b->qu_solve($va,$vb,$vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: ".$str);
}catch(BogdanovaException $e){
    MyLog::log($e->getMessage());
}
MyLog::write();
?>