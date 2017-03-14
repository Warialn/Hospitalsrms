<?php
namespace Admin\Controller;
use Think\Controller;
 class KyjfController extends Controller{
 
	 public function index(){
	 	$model=M('JfExpense');
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		//$map['uid'] = $_SESSION['user_id'];
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,8);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//dump($list);die;
		$year = M('Year');
		$result=$year->select();
		foreach ($result as $k =>$val){
			$yearlist[] = $result[$k]['year'];
		}
		$this->assign('year',$yearlist);
		$this->assign('thesesList',$list);
		$this->assign('page',$show);//赋值分页输出
 		Layout('Layout/layout');
		$this->display();
	 }
	 public function apply(){
	 	$model=M('JfExpenseApply');
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		//$map['uid'] = $_SESSION['user_id'];
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,8);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//dump($list);die;
		$year = M('Year');
		$result=$year->select();
		foreach ($result as $k =>$val){
			$yearlist[] = $result[$k]['year'];
		}
		$this->assign('year',$yearlist);
		$this->assign('thesesList',$list);
		$this->assign('page',$show);//赋值分页输出

	 	Layout('Layout/layout');
		$this->display();
	 }
 }