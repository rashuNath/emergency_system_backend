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