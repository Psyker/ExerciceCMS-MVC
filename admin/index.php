<?php
/**
 * Created by PhpStorm.
 * User: Bourgoin
 * Date: 30/05/2016
 * Time: 17:05
 */

require_once '../init.php';
$page = new \Controller\PageController($pdo);
switch($_GET['a']){
    case 'ajouter' :
        $page->addAction();
        break;
}