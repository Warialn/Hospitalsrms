<?php
namespace Home\Controller;
use Think\Controller;
class XmsbController extends CommonController{

	public function index(){
		$model = M('XmSubject');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];;
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanSubject';</script>";

			}else{
				echo "有错误";
			}
		}
		Layout('Layout/layout');
		$this->display();
	}
	public function scanSubject(){
		$model=M('XmSubject');
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
	public function department(){
		$model = M('XmDepartment');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
			$data['date'] = $_POST['year'];
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanDepartment';</script>";

			}else{
				echo "有错误";
			}
		}
	
		
		Layout('Layout/layout');
		$this->display();

	}
	public function scanDepartment(){
		$model=M('XmDepartment');
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
	public function coller(){
		$model = M('XmColler');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanColler';</script>";

			}else{
				echo "有错误";
			}
		}

		Layout('Layout/layout');
		$this->display();

	}
	public function scanColler(){
		$model=M('XmColler');
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
	public function purchase(){
		$model = M('XmPurchase');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
			$data['status'] =1;
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanPurchase';</script>";

			}else{
				echo "有错误";
			}
		}

		Layout('Layout/layout');
		$this->display();

	}
	public function scanPurchase(){
		$model=M('XmPurchase');
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
}
