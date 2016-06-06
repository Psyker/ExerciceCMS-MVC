<?php
/**
 * Created by PhpStorm.
 * User: Bourgoin
 * Date: 13/05/2016
 * Time: 09:24
 */

namespace Controller;

use Repository\PageRepository;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class PageController
 * @package Controller
 */
class PageController
{
    /**
     * @var PageRepository
     */
    private $repository;

    /**
     * PageController constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
    }

    /**
     *
     */
    public function addAction(){

        if(count($_POST) === 0){
            require 'View/admin/addForm.php';
        }else{
            $img = Image::make($_FILES['img']["tmp_name"]);
            $mime = $img->mime();
            if($mime == 'image/jpeg')
                $extension = '.jpg';
            elseif($mime == 'image/png')
                $extension = '.png';
            elseif($mime == 'image/gif')
                $extension = '.gif';
            else
                $extension = '';

            $filename = time() . $extension;
            $img->resize(400, 400);
            $img->save('img/'.$filename);
            //traitement formulaire, sauvegarde
            $this->repository->setPage($filename);
        }


    }

    public function deleteAction(){
        $this->repository->delete();
    }


    /**
     *
     */
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

    /**
     *Affichage des détails de page
     */
    public function detailsAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception("Merci de mettre une id dans l'url");
        }
        $id = $_GET['id'];
        $data = $this->repository->getById();
        require 'View/admin/detailsPage.php';

    }




    public function listAction()
    {
        $data = $this->repository->getAll();
        require 'View/admin/listPage.php';
    }

    public function editAction()
    {
        if(count($_POST) === 0){
            $data = $this->repository->getById();
            require 'View/admin/editPage.php';
        }else{
            $this->repository->editPage();
        }

    }




}