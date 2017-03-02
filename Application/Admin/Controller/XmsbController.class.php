<?php
namespace Admin\Controller;
use Think\Controller;
class XmsbController extends Controller{
	public function index(){
		Layout('Layout/layout');
		$this->display();
	}
	public function department(){
		Layout('Layout/layout');
		$this->display();
	}
	public function coller(){
		Layout('Layout/layout');
		$this->display();
	}
	public function purchase(){
		Layout('Layout/layout');
		$this->display();
	}
}