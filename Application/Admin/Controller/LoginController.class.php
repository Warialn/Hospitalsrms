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
			if($result[0]['type'] == 0){
				echo "<script>alert('对不起，您没有权限访问！');window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Login/index'</script>";

			}
			$pass=$result['0']['password'];
			$map['id']=$result['0']['id'];
			//echo $pass;
			if($data['password'] == $pass){
				    echo "<script>window.location.href='http://localhost/test/Hospitalsrms/index.php/Admin/Index/index'</script>";
					
					//$this->success('登陆成功！','http://localhost/test/Hospitalsrms/index.php/Admin/Index/index');
					$dat['last_time']=strtotime(date("Y-m-d H:i:s",time()));
					$User->where($map)->save($dat);
					//Session::set('USER_AUTH_KEY',$map['id']);
					$_SESSION['user_id'] = $map['id'];
					$_SESSION['user_name'] = $data['user_name'];

			}else{
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
 }