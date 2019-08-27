<?php
/**
 * Created by PhpStorm.
 * User: rashu
 * Date: 28-08-19
 * Time: 02.27
 */

include_once ('../vendor/autoload.php');
use App\DataManipulation\DataManipulation;
use App\Utility\Utility;
use App\Message\Message;

$dataManipulation = new DataManipulation();

var_dump($_POST);

$distanceArray = array();

if(isset($_POST['searchHospital'])){

    $userLatitude = $_POST['latitude'];
    $userLongitude = $_POST['longitude'];

    $sortedHospital = $dataManipulation->viewAllHospital($userLatitude,$userLongitude);
//    sort($distanceArray);
    echo "<pre>";
    var_dump($sortedHospital);
    echo "</pre>";


}