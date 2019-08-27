<?php
/**
 * Created by PhpStorm.
 * User: rashu
 * Date: 24-08-19
 * Time: 23.09
 */

namespace App\DataManipulation;

use App\Model\Database as DB;
use App\Utility;
use PDO;


class DataManipulation extends DB
{
//    properties
    public $organizationName;
    public $organizationAddress;
    public $bedNumber;
    public $icuNumber;
    public $latitude;
    public $longitude;

    public $bedEngaged;
    public $bedFree;
    public $icuEngaged;
    public $icuFree;
    public $hospitalId;
//    properties end

//set data methods
    public function setOrganizationData($post){
        if(array_key_exists('name',$post)){
            $this->organizationName = $post['name'];
        }

        if(array_key_exists('address',$post)){
            $this->organizationAddress = $post['address'];
        }

        if(array_key_exists('bedNumber',$post)){
            $this->bedNumber = $post['bedNumber'];
        }

        if(array_key_exists('icuNumber',$post)){
            $this->icuNumber = $post['icuNumber'];
        }

        if(array_key_exists('latitude',$post)){
            $this->latitude = $post['latitude'];
        }

        if(array_key_exists('longitude',$post)){
            $this->longitude = $post['longitude'];
        }
    }

    public function setHospitalUpdateData($post){
        if(array_key_exists('id',$post)){
            $this->hospitalId = $post['id'];
        }

        if(array_key_exists('bedEngaged',$post)){
            $this->bedEngaged = $post['bedEngaged'];
        }

        if(array_key_exists('bedFree',$post)){
            $this->bedFree = $post['bedFree'];
        }

        if(array_key_exists('icuEngaged',$post)){
            $this->icuEngaged = $post['icuEngaged'];
        }

        if(array_key_exists('icuFree',$post)){
            $this->icuFree = $post['icuFree'];
        }
    }
//set data methods end

//insert data methods
    public function insertHospitalDetails(){
        $dataArray = array($this->organizationName, $this->organizationAddress, $this->bedNumber, $this->icuNumber,$this->latitude,$this->longitude,$this->bedNumber,$this->icuNumber,0,0);
        $sql = "insert into hospital (hospital_name, address, bed_number, icu_number,latitude,longitude,empty_bed, empty_icu,bad_filled,icu_filled) values (?, ?, ?, ?,?,?,?,?,?,?)";
        $sth = $this->dbh->prepare($sql);
        $status = $sth->execute($dataArray);
        return $status;
    }
//insert data methods end

//update data methods
    public function updateHospitalDataById(){
        $sql = "select * from hospital where `id`='".$this->hospitalId."'";
        $sth = $this->dbh->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $data = $sth->fetch();

        $emptyBed = $data->empty_bed;
        $emptyIcu = $data->empty_icu;

        $emptyBed = $emptyBed - $this->bedEngaged;
        $emptyBed = $emptyBed + $this->bedFree;

        $emptyIcu = $emptyIcu - $this->icuEngaged;
        $emptyIcu = $emptyIcu + $this->icuFree;

        $dataArray = array($emptyBed,$emptyIcu);
        $sql = "update hospital set empty_bed=?, empty_icu=? where id='".$this->hospitalId."'";
        $sth = $this->dbh->prepare($sql);
        $status = $sth->execute($dataArray);

        if($status){
            return TRUE;
        }else{
            return FALSE;
        }
    }
//update data methods end

//view methods

    public function viewAllHospital($userLatitude,$userLongitude){

        $sql = "select * from hospital";
        $sth = $this->dbh->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $hospitals = $sth->fetchAll();
        $distanceArray = array();
        if($hospitals){
            function distance($lat1, $lon1, $lat2, $lon2) {

                $pi80 = M_PI / 180;
                $lat1 *= $pi80;
                $lon1 *= $pi80;
                $lat2 *= $pi80;
                $lon2 *= $pi80;

                $r = 6372.797; // mean radius of Earth in km
                $dlat = $lat2 - $lat1;
                $dlon = $lon2 - $lon1;
                $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
                $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
                $km = $r * $c;

                //echo '<br/>'.$km;
                return $km;
            }
            foreach ($hospitals as $hospital){
                $distanceValue = distance($userLatitude,$userLongitude,$hospital->latitude,$hospital->longitude);
                $distanceArray[$hospital->id] = $distanceValue;
                $sql = "update hospital set distance='".$distanceValue."' where id='".$hospital->id."'";
                $sth = $this->dbh->exec($sql);
            }

            $sql = "select * from hospital ORDER BY `hospital`.`distance` DESC limit 5";
            $sth = $this->dbh->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $data = $sth->fetchAll();
            return $data;
        }else{
            return FALSE;
        }


    }

    public function viewAllHospitalByUser($userId){
        $sql = "select * from hospital where user_id='".$userId."'";
        $sth = $this->dbh->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $data = $sth->fetchAll();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    public function viewHospitalById($hospitalId){
        $sql = "select * from hospital where id='".$hospitalId."'";
        $sth = $this->dbh->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $data = $sth->fetch();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }
//view methods end

    public function viewAvailableHospital(){
        $sql = "SELECT * FROM `hospital` where appointable='yes' ORDER BY `hospital`.`empty_bed` DESC";
        $sth = $this->dbh->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $data = $sth->fetchAll();

        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }
}