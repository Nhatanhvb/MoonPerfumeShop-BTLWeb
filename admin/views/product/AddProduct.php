<div id="main">

    <div class="head">
        <div class="col-div-6">
            <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav">&#9776; Danh sách sản phẩm</span>
            <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav2">&#9776; Danh sách sản phẩm</span>
        </div>

        <div class="col-div-6">
            <div class="profile">

                <img src="images/user.png" class="pro-img" />
                <p style="color: #95097e;">Admin</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <br /><br />
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Thêm sản phẩm mới</p>
                    </div>
                    <div class="card-body">
                        <form action="?action=addConfirmPrd" method="post">
                            <div class="form-group">
                                <label for="TenSanPham">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="TenSanPham" name="TenSanPham">
                            </div>
                            <div class="form-group">
                                <label for="GiaTien">Giá tiền</label>
                                <input type="text" class="form-control" id="GiaTien" name="GiaTien">
                            </div>
                            <div class="form-group">
                                <label for="Mota">Mô tả</label>
                                <textarea class="form-control" id="Mota" name="Mota"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Status">Trạng thái</label>
                                <select class="form-control" id="Status" name="Status">
                                    <option value="1">Còn hàng</option>
                                    <option value="2">Hết hàng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="SoLuong">Số lượng</label>
                                <input type="text" class="form-control" id="SoLuong" name="SoLuong">
                            </div>
                            <div class="form-group">
                                <label for="HinhAnh">Hình ảnh</label>
                                <input type="text" class="form-control" id="HinhAnh" name="HinhAnh">
                            </div>
                            <div class="form-group">
                                <label for="MaDanhMuc">Mã danh mục</label>
                                <select class="form-control" id="MaDanhMuc" name="MaDanhMuc">
                                    <option value="1">Nước hoa nữ</option>
                                    <option value="2">Nước hoa nam</option>
                                    <option value="3">Nước hoa unisex</option>
                                    <option value="4">Nước hoa cao cấp</option>
                                    <option value="5">Nước hoa cho bé</option>
                                    <option value="6">Nước hoa hương hoa</option>
                                    <option value="7">Nước hoa hương gỗ</option>
                                    <option value="8">Nước hoa hương trái cây</option>
                                    <option value="9">Nước hoa mùi tự nhiên</option>
                                    <option value="10">Nước hoa hương vani</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="MaThuongHieu">Mã thương hiệu</label>
                                <select class="form-control" id="MaThuongHieu" name="MaThuongHieu">
                                    <option value="1">Chanel</option>
                                    <option value="2">Versace</option>
                                    <option value="3">Dior</option>
                                    <option value="4">Yves Saint Laurent</option>
                                    <option value="5">Victoria Secret</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="MaGiamGia">Mã giảm giá</label>
                                <select class="form-control" id="MaGiamGia" name="MaGiamGia">
                                    <option value="1">10%</option>
                                    <option value="2">20%</option>
                                    <option value="3">30%</option>
                                    <option value="4">40%</option>
                                    <option value="5">50%</option>
                                    <option value="6">60%</option>
                                    <option value="7">70%</option>
                                    <option value="8">80%</option>
                                    <option value="8">90%</option>
                                    <option value="8">100%</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="MaKhuyenMai">Mã Khuyến mãi</label>
                                <select class="form-control" id="MaKhuyenMai" name="MaKhuyenMai">
                                    <option value="1">Khuyến mãi 10%</option>
                                    <option value="2">Khuyến mãi 20%</option>
                                    <option value="3">Khuyến mãi 30%</option>
                                    <option value="4">Khuyến mãi 40%</option>
                                    <option value="5">Khuyến mãi 50%</option>
                                    <option value="6">Khuyến mãi 60%</option>
                                    <option value="7">Khuyến mãi 70%</option>
                                    <option value="8">Khuyến mãi 80%</option>
                                    <option value="9">Khuyến mãi 90%</option>
                                    <option value="10">Khuyến mãi 100%</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Hoàn thành</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="?action=product"><button class="new-item"><strong>Quay lại</strong></button></a>
</div>

<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(".nav").click(function () {
        $("#mySidenav").css('width', '100px');
        $("#main").css('margin-left', '100px');
        $(".logo").css('visibility', 'hidden');
        $(".logo span").css('visibility', 'visible');
        $(".logo span").css('margin-left', '-10px');
        $(".icon-a").css('visibility', 'hidden');
        $(".icons").css('visibility', 'visible');
        $(".icons").css('margin-left', '-8px');
        $(".nav").css('display', 'none');
        $(".nav2").css('display', 'block');
    });

    $(".nav2").click(function () {
        $("#mySidenav").css('width', '300px');
        $("#main").css('margin-left', '300px');
        $(".logo").css('visibility', 'visible');
        $(".icon-a").css('visibility', 'visible');
        $(".icons").css('visibility', 'visible');
        $(".nav").css('display', 'block');
        $(".nav2").css('display', 'none');
    });

</script>