<?php
require_once APP_ROOT . '/controllers/controllerCustomer.php';
require_once APP_ROOT . '/controllers/controllerProduct.php';
require_once APP_ROOT . '/controllers/controllerOrder.php';
require_once APP_ROOT . '/controllers/controllerCategory.php';
require_once APP_ROOT . '/controllers/controllerDashboard.php';
$controllerCustomer = new CustomerController();
$controllerProduct = new ProductController();
$controllerOrder = new OrderController();
$controllerCategory = new CategoryController();
$controllerDashboard = new DashboardController();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'details' && isset($_GET['id'])) {
        $controllerCustomer->detailCustomer($_GET['id']);
    } 
    elseif ($_GET['action'] === 'delete' && isset($_GET['id'])){
        $controllerCustomer->deleteCustomer($_GET['id']);
    } 
    elseif ($_GET['action'] === 'edit' && isset($_GET['id'])){
        $controllerCustomer->editCustomerForm($_GET['id']);
    } 
    elseif ($_GET['action'] === 'editConfirm' && isset($_GET['id'])){
        $controllerCustomer->editCustomer($_GET['id']);
    } 
    elseif ($_GET['action'] === 'customer') {
        $controllerCustomer->listCustomers();
    } 
    elseif ($_GET['action'] === 'product') {
        $controllerProduct->listProducts();
    }
    elseif ($_GET['action'] === 'deletePrd' && isset($_GET['id'])){
        $controllerProduct->deleteProduct($_GET['id']);
    }
    elseif ($_GET['action'] === 'detailsPrd' && isset($_GET['id'])){
        $controllerProduct->detailProduct($_GET['id']);
    }
    elseif ($_GET['action'] === 'editPrd' && isset($_GET['id'])){
        $controllerProduct->editProductForm($_GET['id']);
    }
    elseif ($_GET['action'] === 'editConfirmPrd' && isset($_GET['id'])){
        $controllerProduct->editProduct($_GET['id']);
    }
    elseif ($_GET['action'] === 'addPrd'){
        $controllerProduct->addProductForm();
    }
    elseif ($_GET['action'] === 'addConfirmPrd'){
        $controllerProduct->addProduct();
    }
    elseif ($_GET['action'] === 'order') {
        $controllerOrder->listOrders();
    }
    elseif ($_GET['action'] === 'category') {
        $controllerCategory->listCategorys();
    }
    elseif ($_GET['action'] === 'deleteCtg' && isset($_GET['id'])){
        $controllerCategory->deleteCategory($_GET['id']);
    }
    elseif ($_GET['action'] === 'addCtg'){
        $controllerCategory->addCategoryForm();
    }
    elseif ($_GET['action'] === 'addConfirmCtg'){
        $controllerCategory->addCategory();
    }
    elseif ($_GET['action'] === 'editCtg' && isset($_GET['id'])){
        $controllerCategory->editCategoryForm($_GET['id']);
    }
    elseif ($_GET['action'] === 'editConfirmCtg' && isset($_GET['id'])){
        $controllerCategory->editCategory($_GET['id']);
    }
    else {
        $controllerDashboard->loadDashboard();
    }
}
else {
    $controllerDashboard->loadDashboard();;
}
?>