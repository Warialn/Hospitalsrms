<?php
namespace Admin\Controller;
use Think\Controller;
class XtglController extends CommonController {
	public function news(){
		$modal =M('News');
		$count = $modal->count();
		$Page = new \Think\Page($count,2);
		    //		$Page->parameter   =   array_map('urlencode',$map);
 		$show = $Page->show();
		$result = $modal->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('show',$show);
		$this->assign('news_result',$result);
		Layout('layout/layout');
		$this->display();
	}
	public function news_add(){
		$modal = M('News');
		if(IS_POST){
			$data['title'] = I('post.title');
			$data['author'] = I('post.author');
			$data['content'] = I('post.content');
			$data['time'] = time();

			$result = $modal->add($data);

			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}
	public function do_news_edit(){
		$modal = M('News');
		if(IS_POST){
			$data['title'] = I('post.title');
			$data['author'] = I('post.author');
			$data['content'] = I('post.content');
			$data['time'] = time();
			$map['id'] = I('id');

			$result = $modal->where($map)->save($data);

			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}

	}
	public function news_delete(){
		$modal = M('News');
		if(IS_POST){
			
			$map['id'] = I('id');

			$result = $modal->where($map)->delete();

			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}


	public function user(){
		$result=M('User')->select();
		$group = M('Usergroup');
		$group_data = $group->select();
		
		foreach ($result as $key => $value) {

				$result[$key]['alias_name'] = $this->col($value['usergroup_id']);
	
		}
		$this->assign('group_data',$group_data);
		$this->assign('result',$result);
		Layout('layout/layout');
		$this->display();

	}
	public function col($v){
		$modal = M('Usergroup');
		$result = $modal->where(array('id'=>$v))->field('alias_name')->select();
		return $result[0]['alias_name'];

	}
	public function user_add(){
		$modal = M('User');
		if(IS_POST){
			$data['usergroup_id'] = I('post.usergroup');
			$data['user_name'] = I('post.user_name');
			$data['password'] = md5(I('post.password'));
			$data['reg_time'] = time();

			$result = $modal->add($data);

			/*$user_group =M('GroupAccess');
			foreach ($usergroup as  $value) {
				$user_group->add(array('uid'=>$result,'group_id'=>$value));
				# code...
			}*/
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}


	}
	public function do_user_edit(){
		$modal = M('User');
		if(IS_POST){
			//$usergroup = I('post.usergroup');
			$data['user_name'] = I('post.user_name');
			$data['password'] = md5(I('post.password'));
			$map['id'] = I('id');

			$result = $modal->where($map)->save($data);

			/*$user_group =M('GroupAccess');
			foreach ($usergroup as  $value) {
				$user_group->where(array('uid'=>$map['id']))->save(array('group_id'=>$value));
				# code...
			}*/
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}
	public function user_delete(){
		if(IS_POST){
			$map['id'] = I('id');
			$result = M('User')->where($map)->delete();
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}
	public function password(){
		$modal = M('User');
		$map['id'] = $_SESSION['user_id'];
		$result = $modal->where($map)->select();
		if(IS_POST){
			
			$password = md5(I('password'));
			if($password != $result[0]['password']){
				$this->ajaxReturn(array('status'=>0));

			}else{
				$password_new = I('password_new');
				$password_new2 = I('password_new2');
				if($password_new == $password_new2){
					$data['password'] = md5($password_new);
					$res=$modal->where($map)->save($data);
					if($res){
						$this->ajaxReturn(array('status'=>'success'));
					}
				}else{
					$this->ajaxReturn(array('status'=>1));
				}
					
			}
		}
		Layout('layout/layout');
		$this->display();

	}
	public function usergroup(){
		$result = M('Usergroup')->select();
		$this->assign('result',$result);

		Layout('layout/layout');
		$this->display();
		
	}
	public function usergroup_add(){
		$modal = M('Usergroup');
		if(IS_POST){
			$data['group_name'] = I('post.group_name');
			$data['alias_name'] = I('post.note');

			$result = $modal->add($data);

			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}


	}
	public function do_usergroup_edit(){
		$modal = M('Usergroup');
		if(IS_POST){
			//$usergroup = I('post.usergroup');
			$data['group_name'] = I('post.group_name');
			$data['alias_name'] = I('post.note');
			$map['id'] = I('id');

			$result = $modal->where($map)->save($data);

			/*$user_group =M('GroupAccess');
			foreach ($usergroup as  $value) {
				$user_group->where(array('uid'=>$map['id']))->save(array('group_id'=>$value));
				# code...
			}*/
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}
	public function usergroup_delete(){
		if(IS_POST){
			$map['id'] = I('id');
			$result = M('Usergroup')->where($map)->delete();
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}
}