<?php
require_once APP_ROOT . '/models/base.php';

class News extends BaseModel
{
    // sử dụng BaseModel
    private $baseModel;

    public function __construct()
    {
        $this->baseModel = new BaseModel();
    }

    public function getAllNews()
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT * FROM news ORDER BY created_at DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    //   giới hạn 3 tin tức
    public function getNewsLimit()
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    public function getNewsById($id)
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT * FROM news WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $news = $stmt->fetch();
        return $news;
    }

}

