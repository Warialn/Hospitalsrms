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

				$result[$key]['title'] = $this->col($value['usergroup_id']);
	
		}
		$this->assign('group_data',$group_data);
		$this->assign('result',$result);
		Layout('layout/layout');
		$this->display();

	}
	public function col($v){
		$modal = M('Usergroup');
		$result = $modal->where(array('id'=>$v))->field('title')->select();
		return $result[0]['title'];

	}
	public function user_add(){
		$modal = M('User');
		if(IS_POST){
			$data['usergroup_id'] = I('post.usergroup');
			$data['user_name'] = I('post.user_name');
			$data['password'] = md5(I('post.password'));
			$data['reg_time'] = time();

			$result = $modal->add($data);
			$usergroup = M('AuthGroupAccess');
			$usergroup->add(array('uid'=>$result,'group_id'=>$data['usergroup_id']));
			
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
	public function user_delAll(){
		$model = M('User');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->ajaxReturn(array('status'=>'success')); 
		}else{   
		     $this->ajaxReturn(array('status'=>'faild')); 
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
			$data['title'] = I('post.note');

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
			$data['title'] = I('post.note');
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
	public function usergroup_delAll(){
		$model = M('Usergroup');
		$id = I('post.id');
		$where['id'] = array('in',$id);
		$list=$model->where($where)->delete();  
		if($list!==false) {
		    $this->ajaxReturn(array('status'=>'success')); 
		}else{   
		     $this->ajaxReturn(array('status'=>'faild')); 
		} 

	}
	 public function authorize() {
        $this->auth_access_model = D("Common/usergroup");
       //角色ID
        $roleid = intval(I("get.id"));
        if (!$roleid) {
            $this->error("参数错误！");
        }
        $menu = new \Think\Tree();
        $menu->icon = array('│ ', '├─ ', '└─ ');
        $menu->nbsp = '&nbsp;&nbsp;&nbsp;';
        //$result = $this->initMenu();
        $result = M('Menu')->select();
        $newmenus=array();
        $priv_data=$this->auth_access_model->where(array("id"=>$roleid))->getField("rules",true);//获取权限表数据
        $priv_data=explode(',', $priv_data[0]);
        //var_dump($priv_data);die();
        $auth_rule = M('auth_rule');
        $data = $auth_rule->where(array('id'=>array('in',$priv_data)))->getField('name',true);
        foreach ($data as $k => $v) {
          $data[$k]=strtolower($v);
        }

        foreach ($result as $m){
            $newmenus[$m['id']]=$m;
        }
        
        foreach ($result as $n => $t) {
            $result[$n]['checked'] = ($this->_is_checked($t, $roleid, $priv_data)) ? 'checked' : '';
            $result[$n]['level'] = $this->_get_level($t['id'], $newmenus);
            $result[$n]['parentid_node'] = ($t['parentid']) ? ' class="child-of-node-' . $t['parentid'] . '"' : '';
        }
        
        $str = "<tr id='node-\$id' \$parentid_node>
                       <td style='padding-left:30px;'>\$spacer<input type='checkbox' name='menuid[]' value='\$id' level='\$level' \$checked onclick='javascript:checknode(this);'> \$name</td>
                    </tr>";
        $menu->init($result);
        $categorys = $menu->get_tree(0, $str);
        
        $this->assign("categorys", $categorys);
        $this->assign("roleid", $roleid);
        layout('Layout/layout');
        $this->display();
    }

      /**
     *  检查指定菜单是否有权限
     * @param array $menu menu表中数组
     * @param int $roleid 需要检查的角色ID
     */
    private function _is_checked($menu, $roleid, $priv_data) {
        
        // $app=$menu['app'];
        // $model=$menu['model'];
        // $action=$menu['action'];
        // $name=strtolower("$app/$model/$action");
        //var_dump($priv_data);die;
        $id = $menu['id'];
        if($priv_data){
            
            if (in_array($id, $priv_data)) {
                return true;
            } else{
              return false;
          }
        }else{
          return false;
        }  
        
    }

    /**
     * 获取菜单深度
     * @param $id
     * @param $array
     * @param $i
     */
    protected function _get_level($id, $array = array(), $i = 0) {
        
            if ($array[$id]['parentid']==0 || empty($array[$array[$id]['parentid']]) || $array[$id]['parentid']==$id){
                return  $i;
            }else{
                $i++;
                return $this->_get_level($array[$id]['parentid'],$array,$i);
            }
                
    }

     /**
     * 角色授权
     * 角色授权
     */
    public function authorize_post() {
      $this->auth_access_model = M("Usergroup");
      if (IS_POST) {
        $roleid = intval(I("post.roleid"));
        if(!$roleid){
          //self::log('Web',session('username').'权限编辑|客户端IP:'.get_client_ip().'|error|',3);
          $this->error("需要授权的角色不存在！");
        }
        if (is_array($_POST['menuid']) && count($_POST['menuid'])>0) {
          $rules = implode(",",$_POST['menuid']);
          $this->auth_access_model->where(array("id"=>$roleid))->save(array('rules'=>$rules));
          //self::log('Web',$_SESSION['username'].'授权|客户端IP:'.get_client_ip().'|success|'.$sql,5);
          $this->success("授权成功！", "usergroup");
        }else{
          //当没有数据时，清除当前角色授权
          $this->auth_access_model->where(array("id" => $roleid))->setField('rules','');
          //self::log('Web',$_SESSION['username'].'清除授权|客户端IP:'.get_client_ip().'|success|'.$sql,3);
          $this->error("没有接收到数据，执行清除授权成功！");
        }
      }
    }
    public function test(){
      $menu = M('Menu');
      $result = $menu ->select();
      foreach ($result as $key => $value) {
        $data['id'] = $value['id'];
        $data['name'] = $value['app'].'/'.$value['model'].'/'.$value['action'];
        $data['title'] = $value['name'];
        $auth_rule = M('auth_rule');
        $auth_rule -> add($data);
      }
      $this->assign('result',$result);
      layout('Layout/layout');
      $this->display();
    }
}