<div id="main">

  <div class="head">
    <div class="col-div-6">
      <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav">&#9776; Danh sách đơn hàng</span>
      <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav2">&#9776; Danh sách đơn hàng</span>
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
            <p>Danh sách đơn hàng</p>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Email</th>
                  <th>Thành tiền</th>
                  <th>Trạng thái</th>
                  <th>Hình thức TT</th>
                  <th>Địa chỉ</th>
                </tr>
              </thead>
              <tbody>
                <!-- Duyệt qua danh sách khách hàng và hiển thị -->
                <?php foreach ($orders as $order): ?>
                  <tr>
                    <td class="text-center"><?php echo ($order['MaDon']) ?></td>
                    <td><?php echo ($order['TenKhachHang']) ?></td>
                    <td><?php echo ($order['Email']) ?></td>
                    <td class="text-center"><?php echo ($order['ThanhTien']) ?></td>
                    <td class="text-center">
                      <?php 
                        if ($order['TrangThai'] == 1) {
                            echo 'Đã thanh toán';
                        } else {
                            echo 'Chưa thanh toán';
                        }
                      ?>
                    </td>
                    <td><?php echo ($order['TenHinhThuc']) ?></td>
                    <td><?php echo ($order['DiaChi']) ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
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