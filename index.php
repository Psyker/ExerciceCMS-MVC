<?php
 require_once 'vendor/autoload.php';
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=Teletubbies","root","root");
}catch(PDOException $e){
    die($e->getMessage());
}
$page = new \Controller\PageController($pdo);
$page->displayAction();