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

    public function getAll()
    {
        $sql = "SELECT
                    `title`,
                    `slug`
                FROM
                    `page`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchObject();
    }

}