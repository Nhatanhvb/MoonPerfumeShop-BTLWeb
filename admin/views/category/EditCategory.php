<div id="main">

    <div class="head">
        <div class="col-div-6">
            <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav">&#9776; Danh sách danh mục</span>
            <span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav2">&#9776; Danh sách danh mục</span>
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
                        <p>Thêm danh mục mới</p>
                    </div>
                    <div class="card-body">
                    <?php if ($category): ?>
                            <form action="?action=editConfirmCtg&id=<?php echo $category['MaDanhMuc']; ?>" method="post">
                                <div class="form-group">
                                    <label for="MaDanhMuc">Mã danh mục</label>
                                    <input type="text" class="form-control" id="MaDanhMuc" name="MaDanhMuc"
                                        value="<?php echo ($category['MaDanhMuc']); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="TenDanhMuc">Tên danh mục</label>
                                    <input type="text" class="form-control" id="TenDanhMuc" name="TenDanhMuc"
                                        value="<?php echo ($category['TenDanhMuc']); ?>">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        <?php else: ?>
                            <p>Không tìm thấy thông tin danh mục.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="?action=category"><button class="new-item"><strong>Quay lại</strong></button></a>
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