<?php
namespace Admin\Controller;
use Think\Controller;
class XtglController extends Controller {


	public function user(){
		$result=M('User')->select();
		$this->assign('result',$result);
		Layout('layout/layout');
		$this->display();

	}
	public function pass(){
		Layout('layout/layout');
		$this->display();

	}
	public function usergroup(){
		Layout('layout/layout');
		$this->display();
		
	}
}