<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}





	public function contact(){
		$this->load->view('contact');
	}

	public function message(){
		$username = $this -> input -> post('username');
		$email = $this -> input -> post('email');
		$content = $this -> input -> post('content');


		if($username == '' || $email == '' || $content == ''){
			//$this -> contact();//调用方法
			echo 'fail';
		}else{
			$this -> load -> model('message_model');
			$this -> message_model -> save($username, $email, $content);
			echo "success";
		}
	}

	public  function check_name(){
		$uname = $this -> input -> get('uname');
		$this -> load -> model('message_model');
		$row = $this -> message_model -> get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}
	}

	/*public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total / 6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
			'data' => $result,
			'isEnd' => $page/6+1<$total_page?false:true
		);
		echo json_encode($json);
	}*/

	public function detail(){
		$blog_id = $this -> input -> get('blog_id');




		$this -> load -> view('single');
	}

	public function waterfall(){

		$this -> load -> view('waterfall');
	}

	public function get_blogs(){
		$page = $this -> input -> get('page');
		$offset = ($page - 1) * 6;

		$this -> load -> model('blog_model');
		$blogs = $this -> blog_model -> get_by_page($offset);

		$totalCount = $this -> blog_model -> get_total_count();


		$res = array(
			'data' => $blogs,
			'isEnd' => ceil($totalCount/6) == $page ? true : false
		);

		echo json_encode($res);
	}
}



















