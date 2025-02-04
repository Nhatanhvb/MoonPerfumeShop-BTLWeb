<?php
require_once APP_ROOT . '/core/Database.php';
class BaseModel extends Database
{
    protected $db;
    public function __construct()
    {
        $this->db = $this->connect();
    }

}
