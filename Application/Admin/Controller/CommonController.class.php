<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Auth;
class CommonController extends Controller{
	public function _initialize(){
		//dump($_SESSION['id']);die;
        if(!isset($_SESSION['user_id'])){
        	//$this->error('请登录后再访问该页面！','http://localhost/test/Hospitalsrms/index.php/Admin/Login/index.html');
            echo "<script>window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Login/index.html';</script>";
        	
        }
         $auth = new Auth();
         if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,session('user_id'))){
            
            $this ->error('没有权限或该模块不存在');
         }
        /* if (MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME != 'Home/System/check_status') {
            self::update(session('uid'));
         } */ 
        $this->assign('module', $think . MODULE_NAME);
        $this->assign('controller', $think . CONTROLLER_NAME);
        $this->assign('action', $think . ACTION_NAME);
	}
	public function initMenu(){
		$Menu = F('Menu');
		if(!$Menu){
			$Menu = D('Common/Menu')->menu_cache();
		}
		return $Menu;
	}
  
}