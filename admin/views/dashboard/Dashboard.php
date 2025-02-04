 <div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav"  >&#9776; Trang chủ</span>
<span style="font-size:30px;cursor:pointer; color: #95097e;" class="nav2"  >&#9776; Trang chủ</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/user.png" class="pro-img" />
		<p style = "color: #95097e;">Admin</p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	<p style="font-size:30px;cursor:pointer; color: #95097e; margin-left: 12px; margin-bottom: 12px;">Chào mừng bạn đến với trang quản trị</p>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $countCustomer ?><br/><span>Khách hàng</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $countCategory ?><br/><span>Danh mục</span></p>
			<i class="fa fa-tasks box-icon"></i>	
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $countProduct ?><br/><span>Sản phẩm</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $countOrder ?><br/><span>Đơn hàng</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>	
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>

		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
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