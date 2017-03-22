<?php
namespace Home\Controller;
use Think\Controller;
class XshdController extends CommonController{

	public function index(){
		$model = M('XsMeet');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
			$data['status'] = 0;
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanMeet';</script>";

			}else{
				echo "有错误";
			}
		}
		Layout('Layout/layout');
		$this->display();
	}
	public function scanMeet(){
		$model=M('XsMeet');
		

		//如果经过同意的就显示给所有用户，如果未同意就只显示给申请人
		$uid = $_SESSION['user_id'];
		$map['_string'] = "(status = 1) OR (status = 0 AND uid = $uid) OR (status = 2 AND uid = $uid)";
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		
		foreach($list as $k =>$value){
			$list[$k]['uidcount'] = M('XsMeetAttend')->where(array('meet_id'=>$value['id']))->count('uid');

		}
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
	public function meet_attend(){
		$model = M('XsMeetAttend');
		if($_POST){
			$data['meet_id'] = I('id');
		}
		$data['uid'] = $_SESSION['user_id'];
		$data['status'] = 1;
		$result=$model->where($data)->select();
		if(!empty($result)){
			$this->ajaxReturn(array('status'=>'warning'));
		}else{
			$res=$model->add($data);
			if($res){
				$this->ajaxReturn(array('status'=>'success'));
			}else{
				$this->ajaxReturn(array('status'=>'error'));
			}
		}
		

	}
	public function addLecture(){
		$model = M('XsLecture');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
			$data['status'] = 0;
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanLecture';</script>";

			}else{
				echo "有错误";
			}
		}
		Layout('Layout/layout');
		$this->display();

	}
	public function scanLecture(){
		$model=M('XsLecture');
		$uid = $_SESSION['user_id'];
		$map['_string'] = "(status = 1) OR (status = 0) OR (uid = $uid) OR (status = 2 AND uid = $uid)";
		
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();		
	    //dump($show);


		$list = $model->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as $k =>$value){

			$list[$k]['uidcount'] = M('XsLectureAttend')->where(array('lecture_id'=>$value['id']))->count('uid');

		}

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
	public function lecture_attend(){
		$model = M('XsLectureAttend');
		if($_POST){
			$data['lecture_id'] = I('id');
		}
		$data['uid'] = $_SESSION['user_id'];
		$data['status'] = 1;
		$result=$model->where($data)->select();
		if(!empty($result)){
			$this->ajaxReturn(array('status'=>'warning'));
		}else{
			$res=$model->add($data);
			if($res){
				$this->ajaxReturn(array('status'=>'success'));
			}else{
				$this->ajaxReturn(array('status'=>'error'));
			}
		}
	}
	public function addComposition(){
		$model = M('XsComposition');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanComposition';</script>";

			}else{
				echo "有错误";
			}
		}
		Layout('Layout/layout');
		$this->display();
	}
	public function scanComposition(){
		$model=M('XsComposition');
		
		$map['uid'] = $_SESSION['user_id'];
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
}