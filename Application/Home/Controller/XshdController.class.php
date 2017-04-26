<?php
namespace Home\Controller;
use Think\Controller;
class XshdController extends CommonController{

	public function index(){
		$model = M('XsMeet');
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
		            $data['introduction'] = $file['savepath'].$file['savename'];
		           
		        } 
			}
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['meetName'] = $name;
			}
			/*$date = I('year');
			if($date){
				$map['date'] = $date;
			}*/
			
		}

		//如果经过同意的就显示给所有用户，如果未同意就只显示给申请人
		$uid = $_SESSION['user_id'];
		$map['_string'] = "(status = 1) OR (status = 0 AND uid = $uid) OR (status = 2 AND uid = $uid)";
		$count = $model->where($map)->count();
	    $Page = new \Think\Page($count,10);
 		$show = $Page->show();		
	    //dump($show);

		$list = $model->where($map)->order('id')->order('meetTime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		
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
	public function meet_delete(){
		$id = I('id');
		$model = M('XsMeet');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function domeetDownload(){
		$model = M('XsMeet');
		$map['id'] = $_GET['id'];
		$result = $model->where($map)->select();
		header("content-type:text/html;charset=utf-8");

		$file_name="Public/Upload/".$result[0]['introduction'];
		//dump($file_name);die;

		if(!file_exists($file_name)){
			echo "<script>alert('NOT FOND');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Xshd/scanMeet';</script>";
		}else{
			$file=fopen($file_name,"r");
			Header("Content-type:application/octet-stream");
			Header("Accept-Ranges:bytes");
			Header("Accept-Length:".filesize($file_name));
			Header("Content-Disposition:attachment;filename=".$file_name);
			echo fread($file,filesize($file_name));
			fclose($file);
			echo "<script>alert('下载完成');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Xshd/scanMeet';</script>";
			exit();
		}
	}
	public function addLecture(){
		$model = M('XsLecture');
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
		            $data['introduction'] = $file['savepath'].$file['savename'];
		           
		        } 
			}
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['name'] = $name;
			}
			/*$date = I('year');
			if($date){
				$map['date'] = $date;
			}*/
			
		}
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
	public function lecture_delete(){
		$id = I('id');
		$model = M('XsLecture');
		$res = $model->where(array('id'=>$id))->delete();
		if($res){
			$this->ajaxReturn(array('status'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>'error'));
		}
	}
	public function dolectureDownload(){
		$model = M('XsLecture');
		$map['id'] = $_GET['id'];
		$result = $model->where($map)->select();
		header("content-type:text/html;charset=utf-8");

		$file_name="Public/Upload/".$result[0]['introduction'];
		//dump($file_name);die;

		if(!file_exists($file_name)){
			echo "<script>alert('NOT FOND');window.close();</script>";
		}else{
			$file=fopen($file_name,"r");
			Header("Content-type:application/octet-stream");
			Header("Accept-Ranges:bytes");
			Header("Accept-Length:".filesize($file_name));
			Header("Content-Disposition:attachment;filename=".$file_name);
			echo fread($file,filesize($file_name));
			fclose($file);
			echo "<script>alert('下载完成');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Kytj/scanTheses';</script>";
			exit();
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
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['compositionName'] = $name;
			}
			/*$date = I('year');
			if($date){
				$map['date'] = $date;
			}*/
			
		}
		$map['status'] = array('neq',0);
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
	public function returnbook(){
		$modal = M('XsComposition');
		if(IS_POST){
			$map['id'] = I('id');
			$data['status'] = 4;
			$res = $modal->where($map)->save($data);
			if($res){
				$this->ajaxReturn(array('status'=>'success'));
			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
		
	}
	public function readbook(){
		$modal = M('XsComposition');
		if(IS_POST){
			$map['id'] = I('id');
			$data['status'] = 2;
			$res = $modal->where($map)->save($data);
			if($res){
				$this->ajaxReturn(array('status'=>'success'));
			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
		
	}
} 