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
        $nav = $this->getNav();
        if (!$page) {
            include 'View/404.php';
            return;
        }
        include 'View/index.php';
    }

    /**
     * recupération de la nav a partir d'une vue
     * @return string
     */
    public function getNav(){
        // capture de l'output et placement dans l'output buffer
        ob_start();
        include 'View/nav.php';
        return ob_get_clean();
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