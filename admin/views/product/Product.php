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
            <p>Danh sách sản phẩm</p>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Hình ảnh</th>
                  <th>Giá</th>
                  <th>Danh mục</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <!-- Duyệt qua danh sách khách hàng và hiển thị -->
                <?php foreach ($products as $product): ?>
                  <tr>
                    <td class="text-center"><?php echo ($product['MaSanPham']) ?></td>
                    <td><?php echo ($product['TenSanPham']) ?></td>
                    <td class="text-center">
                      <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                        <img src="../<?php echo ($product['HinhAnh']); ?>" alt="<?php echo ($product['TenSanPham']); ?>" style="max-height: 100%; max-width: 100%;">
                      </div>
                    </td>
                    <td class="text-center"><?php echo ($product['GiaTien']) ?></td>
                    <td><?php echo ($product['TenDanhMuc']) ?></td>
                    <td class="text-center">
                      <a href="?action=detailsPrd&id=<?php echo $product['MaSanPham']; ?>" class="btn btn-secondary btn-sm">Chi tiết</a>
                      <a href="?action=editPrd&id=<?php echo $product['MaSanPham']; ?>" class="btn btn-secondary btn-sm">Sửa</a>
                      <a href="?action=deletePrd&id=<?php echo $product['MaSanPham']; ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('Bạn có chắc chắn muốn xoá?');">Xóa</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="?action=addPrd">
    <button class="new-item"><strong>Thêm mới</strong></button>
  </a>
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