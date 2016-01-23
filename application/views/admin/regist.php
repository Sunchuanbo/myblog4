<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>管理员注册</title>
<base href="<?php echo site_url();?>">
<style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .am-g{
    	margin: 0 auto;
    	width: 640px;
    	height: 220px;
    	margin-top: 20px;
    }
    .am-g label{
        display: inline-block;
	    margin-bottom: 5px;
	    font-weight: 700;
    }
    .am-g .am-0{
    	display: block;
	    width: 600px;
	    padding: 15px;
	    font-size: 15px;
	    line-height: 1.2;
	    color: #555;
	    vertical-align: middle;
	    background-color: #fff;
	    background-image: none;
	    border: 1px solid #ccc;
	    border-radius: 0;
    }
    .am-fl{
    	cursor: pointer;
    	float: left;
    	width: 80px;
    	height: 50px;
    	color: #fff;
	    background-color: #0e90d2;
	    border-color: #0e90d2;
	    margin-bottom: 0;
	    padding: 15px;
	    font-size: 15px;
	    font-weight: 400;
	    line-height: 1.2;
	    text-align: center;
    }
</style>
</head>
<body>
<div class="header">
	<div class="zc">
	    <h1>管理员注册</h1>
	</div>
<hr/>
</div>
<div class="am-g">
	<div class="">
<!--	    <form method="post" class="am-form" action="admin/check_regist">-->
	    	<label >用户名:</label><br>
	    	<input type="text" name="admin_name" id="admin_name" class="am-0" value="">
	    	<br>
	    	<label >密码:</label><br>
	    	<input type="password" name="admin_pwd" id="admin_pwd" class="am-0" value="">
	    	<br />
	    	<div class="am-cf">
	        	<input type="submit" name="" value="注 册" class="am-btn am-btn-primary am-btn-sm am-fl">
	    	</div>
<!--	    </form>-->
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/regist.js"></script>

</div>
</body>
</html>