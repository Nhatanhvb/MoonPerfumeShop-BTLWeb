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
                        <p>Chi tiết sản phẩm</p>
                    </div>
                    <div class="card-body">
                        <?php if ($product): ?>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <td><?php echo ($product['MaSanPham']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <td><?php echo ($product['TenSanPham']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Giá tiền</th>
                                        <td><?php echo ($product['GiaTien']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Mô tả</th>
                                        <td><?php echo ($product['Mota']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Trạng thái</th>
                                        <td><?php echo ($product['Status']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Số lượng</th>
                                        <td><?php echo ($product['SoLuong']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                                            <img src="../<?php echo ($product['HinhAnh']); ?>"
                                                alt="<?php echo ($product['TenSanPham']); ?>"
                                                style="max-height: 100%; max-width: 100%;">
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tên danh mục</th>
                                        <td><?php echo ($product['TenDanhMuc']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tên thương hiệu</th>
                                        <td><?php echo ($product['TenThuongHieu']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Mã giảm giá</th>
                                        <td><?php echo ($product['MaGiamGia']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Khuyến mãi</th>
                                        <td><?php echo ($product['TenKhuyenMai']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p>Không tìm thấy thông tin sản phẩm.</p>
                        <?php endif; ?>
                        <div>
                            <a href="?action=editPrd&id=<?php echo $product['MaSanPham']; ?>"
                                class="btn btn-secondary">Sửa
                            </a>
                            <a href="?action=deletePrd&id=<?php echo $product['MaSanPham']; ?>" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá?');">Xóa
                            </a>
                        </div>
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