<?php
namespace Home\Controller;
use Think\Controller;
class KyjfController extends CommonController{

	public function index(){
		Layout('Layout/layout');
		$this->display();
	}
	public function scanIndex(){
		Layout('Layout/layout');
		$this->display();
	}
	public function moneyApply(){
		Layout('Layout/layout');
		$this->display();
	}
	public function scanApply(){
		Layout('Layout/layout');
		$this->display();
	}
}