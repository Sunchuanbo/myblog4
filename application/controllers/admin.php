<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function login(){
        $this->load->view('admin/login');
    }
    public function check_login(){
        //1.接数据
        $user_name = $this -> input -> post('admin_name');
        $user_pwd = $this -> input -> post('admin_pwd');

        //2.查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($user_name, $user_pwd);

        //3.跳转
        if($row){
            $this -> load -> view('admin/admin-index');
        }else{
            $this -> load -> view('admin/login');
        }
    }


        public function admin_mgr(){
            $this -> load ->model('admin_model');
            $result = $this -> admin_model -> get_all();
            $data = array(
                'admins' => $result
            );
            $this -> load -> view('admin/admin-mgr',$data);
        }

        public function regist(){
            $this ->load -> view('admin/regist');
        }


        public function delete_admin(){
            $admin_id = $this -> input -> get('admin_id');
            $this -> load -> model('admin_model');
            $this -> admin_model -> delete($admin_id);
            $this -> admin_mgr();
        }


        public function batch_delete(){
            $admin_id = $this -> input -> get('admin_id');
//            var_dump($admin_id);
//            die();
            $this -> load -> model('admin_model');
            $this -> admin_model -> batch_delete($admin_id);
            $this -> admin_mgr();
        }

        public function check_regist(){
            $admin_name = $this -> input -> get('adminName');
            $admin_pwd = $this -> input -> get('adminPwd');
            if($admin_name ==''||$admin_pwd==''){
                echo 'fail';
            }else{
                $this -> load -> model('admin_model');
                $this -> admin_model -> save($admin_name, $admin_pwd);
                echo 'success';
//                $this -> admin_mgr();   因为使用的ajax 过来了  但是不刷新页面，所有不会跳过去
            }
        }
        public function check_regist2(){
            $adminName = $this->input->get('adminName');
    //        var_dump($adminName);
    //        die;
            $this -> load -> model('admin_model');
            $bol = $this->admin_model->check_by_name($adminName);
            if($bol){
                echo 'fail';
            }else{
                echo 'success';
            }
        }

        public function find(){
            $this->load->view('admin/find');
        }

        public function findbyid(){
            $mineid = $this -> input -> post('mineid');

            if($mineid == ''){
                $this->load->view('admin/find');
            }else{

                echo $mineid;
            }
         }

        //**************************************修改**********************************
        public function change(){
//            $this->load->view('admin/change');
            $admin_id = $this -> input -> get('admin_id');
            $this -> load -> model('admin_model');
            $admin = $this -> admin_model -> get_by_id($admin_id);
            if($admin){
                $this->load->view('admin/change',array(
                    'admin' => $admin
                ));
            }
        }

        public function change_pwd(){
            $this -> load -> model('admin_model');
            $admin_pwd = $this -> input -> post('newpwd');
            $admin_rwd = $this -> input -> post('admin_pwd');


            if($admin_pwd == ''|| $admin_pwd == $admin_rwd ){
                $admin_id = $this -> input -> post('admin_id');
                $this -> load -> model('admin_model');
                $admin = $this -> admin_model -> get_by_id($admin_id);
                if($admin){
                    $this->load->view('admin/change',array(
                        'admin' => $admin
                    ));
                }
            }else{
                $admin_id = $this -> input -> post('admin_id');
//                $admin_pwd = $this -> input -> post('newpwd');
                $this -> load -> model('admin_model');
                $rows = $this -> admin_model -> update($admin_pwd,$admin_id);
                if( $rows > 0 ){
                    redirect('admin/admin_mgr');
                }
            }
        }

}

//$('.am-icon-trash-o').on('click', function () {//批量删除单击事件
//    for(var i= 0;i<input.length;i++){
//        if(input:checked){
//            var all = $(this).data('id');
//        }
//          }
////          var all = $( "input:checked").data('id');
//          location.href = 'admin/batch_delete?admin_id='+all;
//        });

















