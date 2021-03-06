<?php
namespace Home\Controller;
use Think\Controller;
class KyjfController extends CommonController{

	public function index(){
		$model = M('JfExpense');
		if($_POST){
			
			$data = $_POST;
			$upload = new \Think\Upload();
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','doc','docx');// 设置附件上传类型
		    $upload->rootPath  =      './Public/Upload/image'; // 设置附件上传根目录
		    $upload->savePath  =      ''; // 设置附件上传（子）目录
		    // 上传文件 		   
		    $info   =   $upload->upload();

			if(!$info){
				$this->error($upload->getError());
			}else{
				foreach($info as $file){
		            //echo $file['savepath'].$file['savename'];
		            $data['picpath'] = $file['savepath'].$file['savename'];
		           
		        } 
			}
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['item'] = $name;
			}
			
			
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
	public function index_delAll(){
		$model = M('JfExpense');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$where['status'] =array('eq',1);
		$res = $model->where($where)->select();
		if($res){
			$this->ajaxReturn(array('status'=>'warning'));
		}else{
			$list=$model->where($where)->delete();  
			if($list!==false) {
			    $this->ajaxReturn(array('status'=>'success')); 
			}else{   
			     $this->ajaxReturn(array('status'=>'faild')); 
			} 
			
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['item'] = $name;
			}
			
			
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
	public function apply_delAll(){
		$model = M('JfExpenseApply');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$where['status'] =array('eq',1);
		$res = $model->where($where)->select();
		if($res){
			$this->ajaxReturn(array('status'=>'warning'));
		}else{
			$list=$model->where($where)->delete();  
			if($list!==false) {
			    $this->ajaxReturn(array('status'=>'success')); 
			}else{   
			     $this->ajaxReturn(array('status'=>'faild')); 
			} 
			
		}
		

	}
}