<div id="main">

    <div class="head">
        <div class="col-div-6">
            <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav">&#9776; Danh sách khách
                hàng</span>
            <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav2">&#9776; Danh sách khách
                hàng</span>
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
                        <p>Chỉnh sửa thông tin khách hàng</p>
                    </div>
                    <div class="card-body">
                        <?php if ($customer): ?>
                            <form action="?action=editConfirm&id=<?php echo $customer['MaKhachHang']; ?>" method="post">
                                <div class="form-group">
                                    <label for="MaKhachHang">Mã khách hàng</label>
                                    <input type="text" class="form-control" id="MaKhachHang" name="MaKhachHang"
                                        value="<?php echo ($customer['MaKhachHang']); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="TenKhachHang">Tên khách hàng</label>
                                    <input type="text" class="form-control" id="TenKhachHang" name="TenKhachHang"
                                        value="<?php echo ($customer['TenKhachHang']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" id="Email" name="Email"
                                        value="<?php echo ($customer['Email']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="SDT">Số điện thoại</label>
                                    <input type="text" class="form-control" id="SDT" name="SDT"
                                        value="<?php echo ($customer['SDT']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="DiaChi">Địa chỉ</label>
                                    <input type="text" class="form-control" id="DiaChi" name="DiaChi"
                                        value="<?php echo ($customer['DiaChi']); ?>">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        <?php else: ?>
                            <p>Không tìm thấy thông tin khách hàng.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="?action=customer"><button class="new-item"><strong>Quay lại</strong></button></a>
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