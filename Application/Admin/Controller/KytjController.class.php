<?php
namespace Admin\Controller;
use Think\Controller;
class KytjController extends CommonController {
	public function index(){
		$model=M('TjTheses');
		$name = I('name');
		if($name){
			$map['name'] = $name;

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
	public function index_delAll(){
		$model = M('TjTheses');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->ajaxReturn(array('status'=>'success')); 
		}else{   
		     $this->ajaxReturn(array('status'=>'faild')); 
		} 

	}
	public function Achievement(){
		$model=M('TjAchievement');
		$name = I('name');
		if($name){
			$map['name'] = $name;

		}
	
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,8);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//$result=$model->select();
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
	public function achievement_delAll(){
		$model = M('TjAchievement');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->ajaxReturn(array('status'=>'success')); 
		}else{   
		     $this->ajaxReturn(array('status'=>'faild')); 
		} 

	}
	public function Propty(){
		$model=M('TjPropty');
		$name = I('name');
		if($name){
			$map['cname'] = $name;

		}
	
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,8);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//$result=$model->select();
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
	public function propty_delAll(){
		$model = M('TjPropty');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->ajaxReturn(array('status'=>'success')); 
		}else{   
		     $this->ajaxReturn(array('status'=>'faild')); 
		} 

	}
	public function Equipment(){
		$model=M('TjEquipment');
		$name = I('name');
		if($name){
			$map['name'] = $name;

		}
	
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,8);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//$result=$model->select();
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
	public function equipment_delAll(){
		$model = M('TjEquipment');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->ajaxReturn(array('status'=>'success')); 
		}else{   
		     $this->ajaxReturn(array('status'=>'faild')); 
		} 

	}
}