<?php


class QueryBilder
{
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function getAllPosts() {
        $sql = "SELECT * FROM `oop_1.0`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }

}