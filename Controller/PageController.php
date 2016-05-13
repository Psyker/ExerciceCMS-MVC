<?php
/**
 * Created by PhpStorm.
 * User: Bourgoin
 * Date: 13/05/2016
 * Time: 09:24
 */

namespace Controller;

use Repository\PageRepository;

class PageController
{
    private $repository;

    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
    }

    public function indexAction()
    {

    }

    public function editAction()
    {

    }

    public function addAction()
    {

    }

    public function displayAction()
    {
        if (isset($_GET['route'])) {
            $slug = $_GET['route'];
        } else {
            $slug = 'teletubbies';
        }
        $page = $this->repository->getSlug($slug);
        if (!$page) {
            include 'View/404.php';
            return;
        }
        include 'View/index.php';
    }

    public function deleteAction()
    {

    }

    public function listAction()
    {

    }

    public function detailsAction()
    {

    }


}