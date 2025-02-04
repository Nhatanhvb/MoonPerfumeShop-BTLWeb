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
                        <p>Chỉnh sửa thông tin sản phẩm</p>
                    </div>
                    <div class="card-body">
                        <?php if ($product): ?>
                            <form action="?action=editConfirmPrd&id=<?php echo $product['MaSanPham']; ?>" method="post">
                                <div class="form-group">
                                    <label for="MaSanPham">Mã sản phẩm</label>
                                    <input type="text" class="form-control" id="MaSanPham" name="MaSanPham"
                                        value="<?php echo ($product['MaSanPham']); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="TenSanPham">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="TenSanPham" name="TenSanPham"
                                        value="<?php echo ($product['TenSanPham']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="GiaTien">Giá tiền</label>
                                    <input type="text" class="form-control" id="GiaTien" name="GiaTien"
                                        value="<?php echo ($product['GiaTien']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Mota">Mô tả</label>
                                    <textarea class="form-control" id="Mota"
                                        name="Mota"><?php echo ($product['Mota']); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Status">Trạng thái</label>
                                    <select class="form-control" id="Status" name="Status">
                                        <option value="1" <?php echo ($product['Status'] == 1) ? 'selected' : ''; ?>>Còn hàng
                                        </option>
                                        <option value="2" <?php echo ($product['Status'] == 2) ? 'selected' : ''; ?>>Hết hàng
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="SoLuong">Số lượng</label>
                                    <input type="text" class="form-control" id="SoLuong" name="SoLuong"
                                        value="<?php echo ($product['SoLuong']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="HinhAnh">Hình ảnh</label>
                                    <input type="text" class="form-control" id="HinhAnh" name="HinhAnh"
                                        value="<?php echo ($product['HinhAnh']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="MaDanhMuc">Mã danh mục</label>
                                    <input type="text" class="form-control" id="MaDanhMuc" name="MaDanhMuc"
                                        value="<?php echo ($product['MaDanhMuc']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="MaThuongHieu">Mã thương hiệu</label>
                                    <input type="text" class="form-control" id="MaThuongHieu" name="MaThuongHieu"
                                        value="<?php echo ($product['MaThuongHieu']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="MaGiamGia">Mã giảm giá</label>
                                    <input type="text" class="form-control" id="MaGiamGia" name="MaGiamGia"
                                        value="<?php echo ($product['MaGiamGia']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="MaKhuyenMai">Mã Khuyến mãi</label>
                                    <input type="text" class="form-control" id="MaKhuyenMai" name="MaKhuyenMai"
                                        value="<?php echo ($product['MaKhuyenMai']); ?>">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        <?php else: ?>
                            <p>Không tìm thấy thông tin sản phẩm.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="?action=product"><button class="new-item"><strong>Quay lại</strong></button></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','100px');
    $("#main").css('margin-left','100px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>