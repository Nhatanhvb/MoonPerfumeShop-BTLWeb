<?php
require_once APP_ROOT . '/models/base.php';
class Account extends BaseModel
{
	private $baseModel;
	public function __construct()
	{
		$this->baseModel = new BaseModel();
	}

	public function addNewAccount($username, $email, $phone, $password)
	{
		$pdo = $this->baseModel->connect();
		$stmt = $pdo->prepare('INSERT INTO taikhoan(Username,Email,Phone,Password) 
			VALUES (?, ?, ?,?)');
		$stmt->execute([$username, $email, $phone, $password]);
	}
	public function getAccountByEmail($email)
	{
		$pdo = $this->baseModel->connect();
		$stmt = $pdo->prepare('SELECT * FROM taikhoan WHERE Email = ?');
		$stmt->execute([$email]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function getAccount($email, $password)
	{
		$pdo = $this->baseModel->connect();

		$stmt = $pdo->prepare('SELECT * FROM taikhoan WHERE Email = ? AND Password = ?');
		$stmt->execute([$email, $password]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}
