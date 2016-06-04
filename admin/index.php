<?php

chdir($rootDir = dirname(__DIR__));
require_once 'init.php';
$action ='';

if(isset($_GET['a'])){
    $action = $_GET['a'];
}

$page = new \Controller\PageController($pdo);
switch($action){
    case 'ajouter' :
        $page->addAction();
        break;
    case 'lister' :
        $page->listAction();
        break;
    case 'details' :
        try{
        $page->detailsAction();
        }catch (\Exception $e){
            die($e->getMessage());
        }
        break;
    case 'delete' :
        $page->deleteAction();
        break;
    case 'modifier' :
        $page->editAction();
        break;
}