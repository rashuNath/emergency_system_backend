<?php
/**
 * Created by PhpStorm.
 * User: rashu
 * Date: 20-11-17
 * Time: 22.57
 */

namespace App\Message;


class Message
{
    /*----------------------------------------------/
    |                                               |
    |                                               |
                  methods
    |                                               |
    |                                               |
    /----------------------------------------------*/

    public static function setMessage($message){
        $_SESSION['message'] = $message;
    }

    public static function getMessage(){
        if(isset($_SESSION['message'])){
            $_message = $_SESSION['message'];
        }
        else{
            $_message = "";
        }
        $_SESSION['message'] = "";
        return $_message;
    }

    public static function message($message = NULL){
        if(is_null($message)){
            $_message = self::getMessage();
            return $_message;
        }
        else{
            self::setMessage($message);
        }
    }
    /*----------------------------------------------/
                methods end
    /----------------------------------------------*/

}