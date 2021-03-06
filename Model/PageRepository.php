<?php
/**
 * Created by PhpStorm.
 * User: Bourgoin
 * Date: 13/05/2016
 * Time: 09:39
 */

namespace Repository;


class PageRepository
{

    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getSlug($slug)
    {
        $sql = "SELECT
                    `h1`,
                    `body`,
                    `title`,
                    `span_class`,
                    `span_text`,
                    `img`,
                    `slug`
                FROM
                    `page`
                WHERE
                    `slug` = :slug";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function delete()
    {
        $sql = "DELETE FROM `page` WHERE `id` = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        header('Location: index.php?a=lister');
    }

    public function getAll()
    {
        $sql = "SELECT
                    `id`,
                    `title`,
                    `slug`
                FROM
                    `page`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById()
    {
        $sql = "SELECT
                    `h1`,
                    `body`,
                    `title`,
                    `span_class`,
                    `span_text`,
                    `img`,
                    `slug`,
                    `id`
                FROM
                    `page`
                WHERE
                    `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function setPage($filename)
    {
        $sql ="INSERT INTO
                        `page` (id, title, h1, body, span_class, span_text, img, slug)
                    VALUES
                        (null, :title, :h1, :body, :span_class, :span_text, :img, :slug)";


        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':h1', $_POST['h1']);
        $stmt->bindParam(':body', $_POST['body']);
        $stmt->bindParam(':span_class', $_POST['span_class']);
        $stmt->bindParam(':span_text', $_POST['span_text']);
        $stmt->bindParam(':img', $filename);
        $stmt->bindParam(':slug', $_POST['slug']);
        $stmt->execute();
        header('Location: index.php?a=lister');
    }

    public function editPage()
    {
        $sql="UPDATE `page`
          SET
          `title` = :title,
          `h1` = :h1,
          `body` = :body,
          `span_class` = :span_class,
          `span_text` = :span_text,
          `img` = :img,
          `slug` = :slug
          WHERE id = :id
          LIMIT 1";

        $stmt= $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':h1', $_POST['h1']);
        $stmt->bindValue(':body', $_POST['body']);
        $stmt->bindValue(':span_class', $_POST['span_class']);
        $stmt->bindValue(':span_text', $_POST['span_text']);
        $stmt->bindValue(':img', $_POST['img']);
        $stmt->bindValue(':slug', $_POST['slug']);
        $stmt->execute();
        header('Location: index.php?a=lister');
    }

}