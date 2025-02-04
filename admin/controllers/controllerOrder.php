<?php
require_once APP_ROOT . '/models/order/modelOrder.php';
class OrderController
{
	private $orderModel;
	public function __construct()
	{
		$this->orderModel = new Order();
	}
	public function listOrders()
	{
		$orders = $this->orderModel->getAllOrder();
		include APP_ROOT . '/views/order/Order.php';
	}
}
?>