<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查询</title>
    <base href="<?php echo site_url();?>">
</head>
<body>
    <h1>查询</h1>

    <div class="find-form">
        <form method="post" action="admin/findbyid">
            <input type="text" name = "mineid" id="find-id">
            <button type="submit" class="sure">确定</button>
        </form>
    </div>

</body>
</html>