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
		$result=M('AdminUser')->select();
		$group = M('AdminUsergroup');
		$group_data = $group->select();
		//dump($result);
		foreach ($result as $key => $value) {
			$grouplist = M('GroupAccess')->where(array('uid'=>$value['id']))->field('group_id')->select();
			foreach($grouplist as $k=>$val){
				$result[$key]['group_name'][$k]['name'] = $this->col($val['group_id']);
			}
			# code...
		}
		$this->assign('group_data',$group_data);
		$this->assign('result',$result);
		Layout('layout/layout');
		$this->display();

	}
	public function col($v){
		$modal = M('AdminUsergroup');
		$result = $modal->where(array('id'=>$v))->field('alias_name')->select();
		return $result[0]['alias_name'];

	}
	public function user_add(){
		$modal = M('AdminUser');
		if(IS_POST){
			$usergroup = I('post.usergroup');
			$data['user_name'] = I('post.user_name');
			$data['password'] = I('post.password');
			$data['reg_time'] = time();

			$result = $modal->add($data);

			$user_group =M('GroupAccess');
			foreach ($usergroup as  $value) {
				$user_group->add(array('uid'=>$result,'group_id'=>$value));
				# code...
			}
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}


	}
	public function do_user_edit(){
		$modal = M('AdminUser');
		if(IS_POST){
			//$usergroup = I('post.usergroup');
			$data['user_name'] = I('post.user_name');
			$data['password'] = I('post.password');
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
			$result = M('AdminUser')->where($map)->delete();
			if($result){
				$this->ajaxReturn(array('status'=>'success'));

			}else{
				$this->ajaxReturn(array('status'=>'faild'));
			}
		}
	}
	public function pass(){
		Layout('layout/layout');
		$this->display();

	}
	public function usergroup(){
		$result = M('Usergroup')->select();
		$this->assign('result',$result);

		Layout('layout/layout');
		$this->display();
		
	}
}