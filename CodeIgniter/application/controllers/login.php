<?php 
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_check');
	}
	
	function index(){
	$this->load->view('fullhealth/login_index.html');
		
	}
	
	function check(){
		$name=$_POST['username'];
		$password=$_POST['password'];
		$data=array( 'username'=>$name,'password'=>$password);
		
		
		$state=$this->user_check->check_user($data);
		if($state){
			$this->load->view('fullhealth/main_index.html');				
		}
 		else{
	    echo "������û��������������������������룡";				
		}	
	}

}

?>