<?php
/**
 * Created by PhpStorm.
 * User: rashu
 * Date: 27-08-19
 * Time: 23.24
 */

include_once ('../vendor/autoload.php');
use App\DataManipulation\DataManipulation;
use App\Utility\Utility;
use App\Message\Message;

$dataManipulation = new DataManipulation();


var_dump($_POST);

if(isset($_POST['insertHospitalDetails'])){
    $dataManipulation->setOrganizationData($_POST);
    $status = $dataManipulation->insertHospitalDetails();
    if($status==true){
        Message::message("Data inserted");
        Utility::redirect('../hospital_add_details.php');
        echo "data inserted successfully.";
    }else{
        echo "something went wrong!";
    }
}

if(isset($_POST['updateHospitalDetails'])){
    $dataManipulation->setHospitalUpdateData($_POST);
    $status = $dataManipulation->updateHospitalDataById();
    if($status){
        Message::message("Data updated");
        Utility::redirect('../hospital_list.php');
    }else{
        echo "Failed!";
    }
}