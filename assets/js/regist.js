var bFlag = false;
$(function () {
        $('.am-cf').on('click',function(){
            var $admin_name=$('[name="admin_name"]');
            var $admin_pwd=$('[name="admin_pwd"]');
            if(bFlag){
                $.get('admin/check_regist',{
                    adminName : $admin_name.val(),
                    adminPwd : $admin_pwd.val()
                },function(ly){
                    if(ly=='fail'){
                        $admin_name.css({
                            border:'1px solid red'
                        });
                    }
                    else if(ly == 'success'){
                        window.location.href = 'admin/admin_mgr';
                    }
                    //else{

                    //}
                });
            };

        });


    $('#admin_name').on('blur', function(){
        that = $(this);
        $.get('admin/check_regist2',{adminName:that.val()},function(res){
            if(res == 'fail'){
                alert('用户名已存在');
                bFlag = false;
            }else if(res == 'success'){
                bFlag = true;
                //alert('用户名可以使用');
            }
        },'text');
    });

})

