<?php
namespace Home\Controller;
use Think\Controller;
class XmsbController extends CommonController{

	public function index(){
		$year = M('Year');
		$result=$year->select();
		foreach ($result as $k =>$val){
			$yearlist[] = $result[$k]['year'];
		}
		$this->assign('year',$yearlist);
		Layout('Layout/layout');
		$this->display();
	}
	public function scanSubject(){
		Layout('Layout/layout');
		$this->display();
	}
	public function department(){
		
		Layout('Layout/layout');
		$this->display();

	}
	public function scanDepartment(){
		Layout('Layout/layout');
		$this->display();

	}
	public function coller(){
		Layout('Layout/layout');
		$this->display();

	}
	public function scanColler(){
		Layout('Layout/layout');
		$this->display();

	}
	public function purchase(){
		Layout('Layout/layout');
		$this->display();

	}
	public function scanPurchase(){
		Layout('Layout/layout');
		$this->display();

	}
}
