<?php
namespace Home\Controller;
use Think\Controller;
class XshdController extends CommonController{

	public function index(){
		$model = M('XsMeet');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
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
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		$map['uid'] = $_SESSION['user_id'];
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
	public function addLecture(){
		$model = M('XsLecture');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
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
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
		$map['uid'] = $_SESSION['user_id'];
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
		$date = $_GET['ctime'];
		if($date){
			$map['date'] = $date;

		}
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