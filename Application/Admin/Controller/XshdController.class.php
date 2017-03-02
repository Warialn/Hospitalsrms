<?php 
namespace Admin\Controller;
use Think\Controller;
class XshdController extends Controller{
	public function index(){
		Layout('Layout/layout');
		$this->display();
	}
	public function lecture(){
		Layout('Layout/layout');
		$this->display();
	}
	public function composition(){
		Layout('Layout/layout');
		$this->display();
	}
}