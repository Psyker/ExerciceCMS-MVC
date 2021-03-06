<?php

chdir($rootDir = dirname(__DIR__));
require_once 'init.php';
$action ='';

if(isset($_GET['a'])){
    $action = $_GET['a'];
    require 'View/admin/navAdmin.php';
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
    default:
        require 'View/404.php';
        break;
}