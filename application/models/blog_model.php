<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        return $this -> db -> get() -> result();
    }

   /*public function get_by_page($page){
       //return $this->db->get('t_blog', 6, $page) -> result();
       $this -> db -> select("*");
       $this -> db -> from('t_blog blog');
       $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
       $this -> db -> limit(6, $page);
       return $this -> db -> get() -> result();
   }*/

    public function get_by_page($page){
        $this -> db -> select('*');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        $this -> db -> limit(6, $page);
        return $this -> db -> get() -> result();
    }

    public function get_total_count(){
        return $this -> db -> count_all('t_blog');
    }

}



















