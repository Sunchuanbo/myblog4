<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

//    public function get_by_name_pwd($name, $pwd){
//        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
//        $data = array(
//            'admin_name' => $name,
//            'admin_pwd' => $pwd
//        );
//        return $this -> db -> get_where('t_admin', $data) -> row();
//    }
    public function get_by_name_pwd($name,$pwd){
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd
        );
       return $this -> db ->get_where('t_admin',$data) -> row();
    }

    public function get_all(){
        return $this -> db -> get('t_admin') -> result();
    }

    public function check_by_name($adminName){
        return $this->db->get_where('t_admin',array('admin_name'=>$adminName))->row();
    }

    public  function save($admin_name, $admin_pwd){
        $data = array(
            'admin_name' => $admin_name,
            'admin_pwd' => $admin_pwd
        );
//        var_dump($data);
//        die();

        $this -> db -> insert('t_admin', $data);  //保存数据;
    }

    public function get_by_id($admin_id){
        return $this->db->get_where('t_admin',array('admin_id'=>$admin_id))->row();
    }

    public  function update($admin_pwd,$admin_id){  //更新数据
        $this -> db -> where('admin_id',$admin_id);
        $this -> db -> update('t_admin',array('admin_pwd' => $admin_pwd));
        return $this -> db -> affected_rows();
    }

    public function delete($admin_id){
            $this -> db -> delete('t_admin',array('admin_id' => $admin_id));
        }

    public function batch_delete($admin_id){
//        $data = array('document.write(array.join())'=>$admin_id);
//        $this->db->where('admin_id', 'int.length');
//        $this->db->delete('t_admin',$data);
        $this -> db -> query("delete from t_admin where admin_id in(".$admin_id.")");//原生全删；
    }

}



















