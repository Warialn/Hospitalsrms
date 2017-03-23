<?php
namespace Admin\Controller;
use Think\Controller;
class XmsbController extends CommonController{
	public function index(){
		$model=M('XmSubject');
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
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
		$model = M('XmSubject');
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
	public function department(){
		$model=M('XmDepartment');
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
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
	public function department_edit(){
		$model = M('XmDepartment');
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
	public function coller(){
		$model=M('XmColler');
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();	
		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
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
	public function coller_edit(){
		$model = M('XmColler');
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
	public function purchase(){
		$model=M('XmPurchase');
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
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
	public function purchase_edit(){
		$model = M('XmSubject');
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