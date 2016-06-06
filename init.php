<?php
/**
 * Created by PhpStorm.
 * User: Bourgoin
 * Date: 30/05/2016
 * Time: 17:06
 */

require_once __DIR__.'/vendor/autoload.php';
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=kandt","root","root");
}catch(PDOException $e){
    die($e->getMessage());
}

/**
 * @param $value1
 * @param $value2
 * @return string
 */
function isActive($value1, $value2){
    if($value1 == $value2){
        return 'active';
    }else{
        return '';
    }

}

/**
 * @param $value1
 * @param $value2
 * @return string
 */
function isChecked($value1, $value2){
    if($value1 == $value2){
        return 'checked="checked"';
    }else{
        return '';
    }
}