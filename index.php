<?php
 require_once 'vendor/autoload.php';
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=Teletubbies","root","root");
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
$page = new \Controller\PageController($pdo);
$page->displayAction();