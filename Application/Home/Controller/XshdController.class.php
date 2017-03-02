<?php
namespace Home\Controller;
use Think\Controller;
class XshdController extends CommonController{

	public function index(){
		Layout('Layout/layout');
		$this->display();
	}
	public function scanMeet(){
		Layout('Layout/layout');
		$this->display();
	}
	public function addLecture(){
		Layout('Layout/layout');
		$this->display();

	}
	public function scanLecture(){
		Layout('Layout/layout');
		$this->display();
	}
	public function addComposition(){
		Layout('Layout/layout');
		$this->display();
	}
	public function scanComposition(){
		Layout('Layout/layout');
		$this->display();
	}
}