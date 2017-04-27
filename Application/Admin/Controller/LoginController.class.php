<?php
namespace Admin\Controller;
use Think\Controller;
 class LoginController extends Controller{

 	public function index(){
 		$User =M('User');
		if($_POST){
			$data['user_name'] = $_POST['username'];
			$data['password'] = md5($_POST['password']);
			$map['user_name'] = $data['user_name'];
		   
			$result = $User->where($map)->select();
			$group_id = $result[0]['usergroup_id'];
			$type = M('Usergroup')->where(array('id'=>$group_id))->select()[0]['type'];
	 		if($type == 0){
          		self::log('Web',session('user_name').'登录|客户端IP:'.get_client_ip().'|error|',3);
				echo "<script>alert('对不起，您没有权限访问！');window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Login/index'</script>";

			}
			$pass=$result['0']['password'];
			$map['id']=$result['0']['id'];
			//echo $pass;
			if($data['password'] == $pass){
				$_SESSION['user_id'] = $map['id'];
					$_SESSION['user_name'] = $data['user_name'];
          			self::log('Web',$_SESSION['user_name'].'登录|客户端IP:'.get_client_ip().'|success|'.$sql,5);

				    echo "<script>window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Index/index'</script>";
					
					$dat['last_time']=strtotime(date("Y-m-d H:i:s",time()));
					$User->where($map)->save($dat);
					//Session::set('USER_AUTH_KEY',$map['id']);
					

			}else{
           self::log('Web',session('user_name').'登录|客户端IP:'.get_client_ip().'|error|',3);

				echo "<script>alert('用户名或密码错误！');window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Login/index.html'</script>";
			}
		}
 		$this->display();

 	}
 	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		echo "<script> window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Login/index'</script>";

	}
	  public function log($app, $message='', $level=5, $data=[]){
        $log = M('log');
        $data['app'] = $app;
        $str = '';
        foreach ($data as $k => $v) {
            $str .= $k.'='.$v.' ';
        }
        $data['message'] = $message.'#'.$str;
        $data['level'] = $level;
        $data['uid'] = session('user_id');
        $data['time'] = time();
        $log->add($data);
        //return true;
    }
 }