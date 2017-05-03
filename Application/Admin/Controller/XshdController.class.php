<?php 
namespace Admin\Controller;
use Think\Controller;
class XshdController extends CommonController{
	public function index(){
		$model=M('XsMeet');
		$name = I('name');
		if($name){
			$map['meetName'] = $name;

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
		$model = M('XsMeet');
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
	public function lecture(){
		$model=M('XsLecture');
		$name = $_GET['name'];
		if($name){
			$map['name'] = $name;

		}
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
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
	public function lecture_edit(){
		$model = M('XsLecture');
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
	public function composition(){
		$model=M('XsComposition');
		$name = $_GET['name'];
		if($date){
			$map['compositionName'] = $name;

		}
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
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
	public function composition_edit(){
		$model = M('XsComposition');
		if($_POST){
			$id = I('id');
			$stat = I('stat');
		}
		$map['id'] = $id;
		if($stat == "agree"){
			$data['status'] = 1;
		}
		$res=$model->where($map)->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function agreeread(){
		$modal = M('XsComposition');
		if(IS_POST){
			$map['id'] = I('id');
			$data['status'] = 3;
			$res = $modal->where($map)->save($data);
			if($res){
				$this->ajaxReturn(array('status'=>'success'));
			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
		
	}
	public function agreereturn(){
		$modal = M('XsComposition');
		if(IS_POST){
			$map['id'] = I('id');
			$data['status'] = 1;
			$res = $modal->where($map)->save($data);
			if($res){
				$this->ajaxReturn(array('status'=>'success'));
			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
		
	}


}