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
                        <p>Chi tiết khách hàng</p>
                    </div>
                    <div class="card-body">
                        <?php if ($customer): ?>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Mã khách hàng</th>
                                        <td><?php echo ($customer['MaKhachHang']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <td><?php echo ($customer['TenKhachHang']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo ($customer['Email']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Số điện thoại</th>
                                        <td><?php echo ($customer['SDT']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Địa chỉ</th>
                                        <td><?php echo ($customer['DiaChi']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p>Không tìm thấy thông tin khách hàng.</p>
                        <?php endif; ?>
                        <div>
                            <a href="?action=edit&id=<?php echo $customer['MaKhachHang']; ?>"
                                class="btn btn-secondary">Sửa
                            </a>
                            <a href="?action=delete&id=<?php echo $customer['MaKhachHang']; ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá?');">Xóa
                            </a>
                        </div>
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