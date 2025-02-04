<?php
require_once APP_ROOT . '/models/account/Account.php';

class AccountController
{
    private $accountModel;
    public function __construct()
    {
        $this->accountModel = new Account();
    }

    public function signupForm()
    {
        include APP_ROOT . '/views/account/signup.php';
    }

    public function loginForm()
    {
        include APP_ROOT . '/views/account/login.php';
    }

    public function contactForm()
    {
        include APP_ROOT . '/views/contact/contact.php';
    }

    public function addSignUpAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $password = $_POST['password'] ?? '';
            $password1 = $_POST['password1'] ?? '';

            // Kiểm tra lỗi
            $errors = [];

            // Kiểm tra username (không được rỗng và tối thiểu 3 ký tự)
            if (empty($username) || strlen($username) < 3) {
                $errors[] = "Tên người dùng phải có ít nhất 3 ký tự.";
            }

            // Kiểm tra email (định dạng email hợp lệ)
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email không hợp lệ.";
            }

            // Kiểm tra phone (phải là số và có độ dài hợp lý)
            if (empty($phone) || !preg_match('/^[0-9]{10,15}$/', $phone)) {
                $errors[] = "Số điện thoại phải từ 10 đến 15 chữ số.";
            }

            // Kiểm tra password (không được rỗng và tối thiểu 6 ký tự)
            if (empty($password) || strlen($password) < 6) {
                $errors[] = "Mật khẩu phải có ít nhất 6 ký tự.";
            }

            // Kiểm tra 2 mật khẩu có khớp nhau hay không
            if ($password !== $password1) {
                $errors[] = "Mật khẩu không khớp. Vui lòng nhập lại.";
            }
            $existingAccount = $this->accountModel->getAccountByEmail($email);
            if ($existingAccount) {
                $errors[] = "Tài khoản với email '$email' đã tồn tại. Vui lòng chọn username khác.";
            }

            // Nếu có lỗi, hiển thị lỗi
            if (!empty($errors)) {
                echo '<div class="alert alert-danger" role="alert">';
                echo '<ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo '</ul>';
                echo '</div>';
                header('refresh:3;url=?action=signupForm');
                return;
            }

            $this->accountModel->addNewAccount($username, $email, $phone, $password);
            echo '<div class="alert alert-success" role="alert">';
            echo "Đăng ký thành công! Bạn sẽ được chuyển hướng đến trang đăng nhập.";
            echo '</div>';
            header('refresh:3;url=?action=loginForm');
            exit;
        }
    }
    public function LoginAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $errors = [];

            if (empty($email)) {
                $errors[] = "Email không được để trống.";
            }

            if (empty($password)) {
                $errors[] = "Mật khẩu không được để trống.";
            }

            if (!empty($errors)) {
                echo '<div class="alert alert-danger" role="alert">';
                echo '<ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo '</ul>';
                echo '</div>';
                return;
            }


            $account = $this->accountModel->getAccount($email, $password);

            // Đăng nhập thành công
            if ($account) {
                session_start();
                $_SESSION['user'] = $account;

                // Nếu là admin (email và pass cố định)
                if ($email === 'abc@gmail.com' && $password === 'admin') {
                    header('Location: admin/index.php');
                    exit;
                } else {
                    header('Location: index.php');
                    exit;
                }
            } else {
                // Đăng nhập thất bại
                echo '<div class="alert alert-danger" role="alert">';
                echo "Email hoặc mật khẩu không đúng.";
                echo '</div>';
            }
        }
    }

}
?>