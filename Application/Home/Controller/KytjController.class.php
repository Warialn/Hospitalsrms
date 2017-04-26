<?php
namespace Home\Controller;
use Think\Controller;
class KytjController extends CommonController{
	public function index(){
		$year = M('Year');
		$result=$year->select();
		foreach ($result as $k =>$val){
			$yearlist[] = $result[$k]['year'];
		}
		$this->assign('year',$yearlist);
		Layout('Layout/layout');
		$this->display();
	
	}
	public function addTheses(){
		$model = M('TjTheses');

		if(IS_POST){
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
		            $data['fujian'] = $file['savepath'].$file['savename'];
		           
		        } 
			}
			
			$data['uid'] = $_SESSION['user_id'];
			$data['date'] = $_POST['year'];
		
			if($model->create($data)){
				$model->add();
			    echo "<script>alert('信息已记录！');window.location.href='scanTheses';</script>";

			}else{
				echo "有错误";
			}
		}
	}
	public function scanTheses(){
		$model=M('TjTheses');
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['name'] = $name;
			}
			$date = I('year');
			if($date){
				$map['date'] = $date;
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
	public function theses_delAll(){
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
	public function dothesesDownload(){
		$model = M('TjTheses');
		$map['id'] = $_GET['id'];
		$result = $model->where($map)->select();
		header("content-type:text/html;charset=utf-8");

		$file_name="Public/Upload/".$result[0]['fujian'];
		//dump($file_name);die;

		if(!file_exists($file_name)){
			echo "<script>alert('NOT FOND');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Kytj/scanTheses';</script>";
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
	public function addAchievement(){
		$model = M('TjAchievement');
		if($_POST){
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];
			$data['date'] = $_POST['year'];			
		}
		if($model->create($data)){
			$model->add();
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
	public function scanAchievement(){
		$model=M('TjAchievement');
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['name'] = $name;
			}
			$date = I('year');
			if($date){
				$map['date'] = $date;
			}
			
		}
		$map['uid'] = $_SESSION['user_id'];
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
	public function addPropty(){
		$model = M('TjPropty');
		if($_POST){
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];			
		}
		if($model->create($data)){
			$model->add();
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
	public function scanPropty(){
		$model=M('TjPropty');
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['cname'] = $name;
			}
			$date = I('year');
			if($date){
				$map['date'] = $date;
			}
			
		}
		
		$map['uid'] = $_SESSION['user_id'];
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
	public function addEquipment(){
		$model = M('TjEquipment');
		if($_POST){
			$data = $_POST;
			$data['uid'] = $_SESSION['user_id'];			
		}
		if($model->create($data)){
			$model->add();
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
	public function scanEquipment(){
		$model=M('TjEquipment');
		if(IS_GET){
			$name = I('get.name');
			if($name){
				$map['name'] = $name;
			}
/*			$date = I('year');
			if($date){
				$map['time'] = $date;
			}*/
			
		}
		$map['uid'] = $_SESSION['user_id'];
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
	public function fileDownload(){
		$model = M('TjFiledownload');
		$date = $_GET['year'];
		if($date){
			$map['year'] = $date;

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
	

	public function dofileUpload(){
		$model = M('TjFiledownload');
		//echo "123";
		if($_POST['submit']){
			//echo "123";
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
		           // echo $file['savepath'].$file['savename'];
		            $data['path'] = $file['savepath'].$file['savename'];
		        } 
			}
			
			$data['uid'] = $_SESSION['user_id'];
			$data['username'] =$_SESSION['user_name'];
			$data['name'] = $file['name'];
			$data['time'] = strtotime(date("Y-m-d",time()));
			$data['year'] = date("Y",time());
			//dump($data);die;
			if($model->create($data)){
				$model->add();
				echo "<script>window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Kytj/fileDownload'</script>";
			}
		}

	}
	public function dofileDownload(){
		$model = M('TjFiledownload');
		$map['id'] = $_GET['id'];
		$result = $model->where($map)->select();
		header("content-type:text/html;charset=utf-8");

		$file_name="Public/Upload/".$result[0]['path'];
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
			echo "<script>alert('下载完成');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Kytj/fileDownload';</script>";
			exit();
		}
	}
	public function logList(){
		$model = M('Log');
		$result=$model->select();
		$this->assign();
		layout('Layout/layout');
		$this->display();
	}





	function deleteAll(){
		if($_GET){
		//$model = M('');
	}
		$id = I($get.checkAll);
		//dump($id);
		if(is_array($id)){   
		    $where = 'id in('.implode(',',$id).')';  
		}else{  
		    $where = 'id='.$id; 
		}  //dump($where); 
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->success("成功删除{$list}条！", U("Home/")); 
		}else{   
		    $this->error('删除失败！');  
		} 

	}

}