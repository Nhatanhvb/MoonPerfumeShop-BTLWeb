# Moon Perfume Shop

Moon Perfume Shop là một nền tảng thương mại điện tử trực tuyến để bán nước hoa. Dự án bao gồm cả trang web dành cho người dùng và bảng điều khiển quản trị để quản lý sản phẩm, đơn hàng và khách hàng.

## Công nghệ sử dụng

- **Frontend**: HTML, CSS, JavaScript, jQuery, Bootstrap
- **Backend**: PHP
- **Cơ sở dữ liệu**: MySQL (MariaDB)
- **Thư viện**:
  - FontAwesome để hiển thị biểu tượng
  - Fancybox để hiển thị thư viện ảnh
  - noUiSlider để tạo thanh trượt
  - Select2 để cải thiện dropdown

## Cấu trúc thư mục

### Trang chính

- **`assets/`**: Chứa các tài nguyên tĩnh như CSS, JavaScript và hình ảnh.
  - **`css/`**: Các tệp CSS cho trang web.
    - **`Library/`**: Các thư viện CSS của bên thứ ba như FontAwesome.
  - **`js/`**: Các tệp JavaScript cho trang web.
    - **`Library/`**: Các thư viện JavaScript của bên thứ ba như Fancybox và noUiSlider.
  - **`images/`**: Hình ảnh sử dụng trong trang web.
- **`controllers/`**: Chứa các controller PHP để xử lý tương tác người dùng.
  - **`account/`**: Controller cho quản lý tài khoản người dùng (ví dụ: đăng nhập, đăng ký).
  - **`shop/`**: Controller cho danh sách sản phẩm và sắp xếp.
  - **`product/`**: Controller cho chi tiết sản phẩm.
- **`models/`**: Chứa các model PHP để tương tác với cơ sở dữ liệu.
- **`views/`**: Chứa các view PHP để hiển thị giao diện người dùng.
  - **`shop/`**: View cho trang cửa hàng.
  - **`product/`**: View cho chi tiết sản phẩm.
  - **`account/`**: View cho trang đăng nhập và đăng ký.
- **`routes/`**: Chứa logic định tuyến cho trang chính.
- **`Data/`**: Chứa các tệp SQL cho cấu trúc cơ sở dữ liệu và dữ liệu ban đầu.

### Bảng điều khiển quản trị

- **`admin/`**: Thư mục gốc cho bảng điều khiển quản trị.
  - **`controllers/`**: Chứa các controller PHP cho chức năng quản trị.
    - **`controllerCustomer.php`**: Quản lý các hành động liên quan đến khách hàng.
    - **`controllerProduct.php`**: Quản lý các hành động liên quan đến sản phẩm.
    - **`controllerCategory.php`**: Quản lý các hành động liên quan đến danh mục.
  - **`models/`**: Chứa các model PHP để tương tác cơ sở dữ liệu trong quản trị.
  - **`routes/`**: Chứa logic định tuyến cho bảng điều khiển quản trị.
  - **`views/`**: Chứa các view PHP để hiển thị giao diện quản trị.
    - **`customer/`**: View để quản lý khách hàng.
    - **`product/`**: View để quản lý sản phẩm.
    - **`category/`**: View để quản lý danh mục.

## Tính năng

### Trang chính
- Duyệt sản phẩm theo danh mục.
- Xem chi tiết sản phẩm.
- Thêm sản phẩm vào giỏ hàng.
- Xác thực người dùng (đăng nhập/đăng ký).

### Bảng điều khiển quản trị
- Quản lý sản phẩm (thêm, sửa, xóa).
- Quản lý danh mục.
- Quản lý khách hàng.
- Xem và xử lý đơn hàng.

## Giấy phép

Dự án này chỉ dành cho mục đích học tập.
