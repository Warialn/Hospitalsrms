<?php
namespace Home\Controller;
use Think\Controller;
class KyjfController extends CommonController{

	public function index(){
		$model = M('JfExpense');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanIndex';</script>";

			}else{
				echo "有错误";
			}
		}
		Layout('Layout/layout');
		$this->display();
	}
	public function scanIndex(){
		$model=M('JfExpense');
		
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
	public function index_edit(){

		$model = M('JfExpense');
		$id = I('post.id');
		$user = I('post.user');
		if($user){
			$data['user'] =$user;
		}
		$subject_id = I('post.subject_id');
		if($applicant){
			$data['applicant'] = $applicant;
		}
		$date = I('post.date');
		if($date){
			$data['date']= $date;
		}
		$money = I('post.money');
		if($money){
			$data['money']= $money;
		}

		$res=$model->where(array('id'=>$id))->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function index_delete(){
		$id = I('id');
		$model = M('JfExpense');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function moneyApply(){
		$model = M('JfExpenseApply');
		if($_POST){
			
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanApply';</script>";

			}else{
				echo "有错误";
			}
		}

		Layout('Layout/layout');
		$this->display();
	}
	public function scanApply(){
		$model=M('JfExpenseApply');
		
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
	public function apply_edit(){
		$model = M('JfExpenseApply');
		$id = I('post.id');
		$user = I('post.user');
		if($user){
			$data['user'] =$user;
		}
		$subject_id = I('post.subject_id');
		if($applicant){
			$data['applicant'] = $applicant;
		}
		$date = I('post.date');
		if($date){
			$data['date']= $date;
		}
		$money = I('post.money');
		if($money){
			$data['money']= $money;
		}
		$res=$model->where(array('id'=>$id))->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function apply_delete(){
		$id = I('id');
		$model = M('JfExpenseApply');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
}