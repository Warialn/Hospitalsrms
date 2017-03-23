<?php
namespace Admin\Controller;
use Think\Controller;
 class KyjfController extends CommonController{
 
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
	 public function index_edit(){
		$model = M('JfExpense');
		if($_POST){
			$id = I('id');
			$stat = I('stat');
		}
		$map['id'] = $id;
		if($stat == "agree"){
			$data['status'] = 1;
			$result = $model->where($map)->select();
		

			if($result[0]['subject_id'] != NULL){
				$resul = M('XmSubject')->where(array('id'=>$result[0]['subject_id']))->select();
			
				$where['id'] = $result[0]['subject_id'];
				$dat['funds'] = $resul[0]['funds'] - $result[0]['money'];
				M('XmSubject')->where($where)->save($dat);
			}
		}else{
			$data['status'] = 2;
		}
		$res=$model->where($map)->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
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
	 public function apply_edit(){
		$model = M('JfExpenseApply');
		if($_POST){
			$id = I('id');
			$stat = I('stat');
		}
		$map['id'] = $id;
		if($stat == "agree"){
			$data['status'] = 1;
		}else{
			$data['status'] = 2;
		}
		$res=$model->where($map)->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
 }