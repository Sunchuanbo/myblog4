<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
    <base href="<?php echo site_url();?>">
    <style>
        .change-form{
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>修改密码</h1>

<div class="change-form">
    <form method="post" action="admin/change_pwd">
        <input type="hidden"  name="admin_id" id="admin_id" value="<?php echo $admin -> admin_id; ?>">
        <br>
        <input type="hidden"  name="admin_pwd" id="admin_pwd" value="<?php echo $admin -> admin_pwd; ?>">
        <br>
        用户名：  <?php echo  $admin -> admin_name; ?>
        <br>
        <input type="text" name = "newpwd" id="newpwd">
        <button type="submit" class="sure">确定</button>
    </form>
</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>

<!--<script>-->
<!--    $('.sure').on('click', function () {//修改单击事件-->
<!--      var adminId = $admin_id-->
<!--        if(confirm('确定么？')){-->
<!--            location.href = 'admin/change_pwd?admin_id='+ adminId;-->
<!--        }-->
<!--    });-->
<!--</script>-->
</body>
</html>