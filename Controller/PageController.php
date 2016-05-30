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

    public function addAction(){
        if(count($_POST) === 0){
            //formulaire, affichage vu
        }else{
            //traitement formulaire, sauvegarde
        }
    }


    public function displayAction()
    {
        if (isset($_GET['route'])) {
            $slug = $_GET['route'];
        } else {
            $slug = 'teletubbies';
        }
        $nav = $this->getNav($slug);
        $page = $this->repository->getSlug($slug);
        include 'View/index.php';

    }

    /**
     * recupération de la nav a partir d'une vue
     * @return string
     */
    private function getNav($slug){
        ob_start();
        $nav = $this->repository->getAll();
        // capture de l'output et placement dans l'output buffer
        if ($nav === false){
            $nav = [];
        }
        include 'View/nav.php';
        return ob_get_clean();
    }

    public function detailsAction()
    {

    }


}