<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
		//dump($_SESSION['id']);die;
        if(!isset($_SESSION['id'])){
        	$this->error('请登录后再访问该页面！','http://localhost/test/Application/Home/View/Name/login.html');
        }
}
}