<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
        if(!isset($_SESSION['user_id'])){
        	$this->error('请登录后再访问该页面！','http://localhost/Hospitalsrms/index.php/Home/Login/index.html');
        }
	}
}