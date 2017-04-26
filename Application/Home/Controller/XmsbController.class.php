<?php
namespace Home\Controller;
use Think\Controller;
class XmsbController extends CommonController{

	public function index(){
		$model = M('XmSubject');
		if($_POST){
			
			$data = $_POST;
			$upload = new \Think\Upload();
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','doc','docx');// 设置附件上传类型
		    $upload->rootPath  =      './Public/Upload/'; // 设置附件上传根目录
		    $upload->savePath  =      ''; // 设置附件上传（子）目录
		    // 上传文件 		   
		    $info   =   $upload->upload();

			if(!$info){
				$this->error($upload->getError());
			}else{
				foreach($info as $file){
		            //echo $file['savepath'].$file['savename'];
		            $data['commitment_book'] = $file['savepath'].$file['savename'];
		           
		        } 
			}
			$data['uid'] = $_SESSION['user_id'];;
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanSubject';</script>";

			}else{
				echo "有错误";
			}
		}
		$year = M('Year');
		$result=$year->select();
		foreach ($result as $k =>$val){
			$yearlist[] = $result[$k]['year'];
		}
		$this->assign('year',$yearlist);
		Layout('Layout/layout');
		$this->display();
	}
	public function scanSubject(){
		$model=M('XmSubject');
		if(IS_GET){
			$subject_name = I('get.name');
			if($subject_name){
				$map['subject_name'] = $subject_name;
			}
			$date = I('get.year');
			if($date){
				$map['date'] = $date;
			}
		}

		$map['uid'] = $_SESSION['user_id'];
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
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

	public function subject_edit(){
		$model = M('XmSubject');
		$id = I('post.id');
		$subject_name = I('post.subject_name');
		if($subject_name){
			$data['subject_name'] =$subject_name;
		}
		$member = I('post.member');
		if($member){
			$data['member'] = $member;
		}
		$funds = I('post.funds');
		if($funds){
			$data['funds']= $funds;
		}
		$res=$model->where(array('id'=>$id))->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function subject_delete(){
		$id = I('id');
		$model = M('XmSubject');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function subject_delAll(){
		$model = M('XmSubject');
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
		$year = M('Year');
		$result=$year->select();
		foreach ($result as $k =>$val){
			$yearlist[] = $result[$k]['year'];
		}
		$this->assign('year',$yearlist);
	
		
		Layout('Layout/layout');
		$this->display();

	}
	public function scanDepartment(){
		$model=M('XmDepartment');
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['department_name'] = $name;
			}

		}
		$uid = $_SESSION['user_id'];
		$map['_string'] = "(status = 1) OR (status = 0 AND uid = $uid) OR(status =2 AND uid = $uid)";
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
		$id = I('post.id');
		$department_name = I('post.department_name');
		if($department_name){
			$data['department_name'] =$department_name;
		}
		$user = I('post.user');
		if($user){
			$data['user'] = $user;
		}
		$date = I('post.date');
		if($date){
			$data['date']= $date;
		}
		$time = I('post.time');
		if($time){
			$data['time']= $time;
		}
		$res=$model->where(array('id'=>$id))->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function department_delete(){
		$id = I('id');
		$model = M('XmDepartment');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function department_delAll(){
		$model = M('XmDepartment');
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['name'] = $name;
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
	public function coller_edit(){
		$model = M('XmColler');
		$id = I('post.id');
		$name = I('post.name');
		if($name){
			$data['name'] =$name;
		}
		$applicant = I('post.user');
		if($applicant){
			$data['user'] = $applicant;
		}
		$date = I('post.date');
		if($date){
			$data['date']= $date;
		}

		$res=$model->where(array('id'=>$id))->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function coller_delete(){
		$id = I('id');
		$model = M('XmColler');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function coller_delAll(){
		$model = M('XmColler');
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['name'] = $name;
			}

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
	public function purchase_edit(){
		$model = M('XmPurchase');
		$id = I('post.id');
		$name = I('post.name');
		if($name){
			$data['name'] =$name;
		}
		$applicant = I('post.applicant');
		if($applicant){
			$data['applicant'] = $applicant;
		}
		$date = I('post.date');
		if($date){
			$data['date']= $date;
		}
		$price = I('post.price');
		if($price){
			$data['price']= $price;
		}
		$num = I('post.num');
		if($num){
			$data['num']= $num;
		}
		$res=$model->where(array('id'=>$id))->save($data);
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function purchase_delete(){
		$id = I('id');
		$model = M('XmPurchase');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function purchase_delAll(){
		$model = M('XmPurchase');
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
