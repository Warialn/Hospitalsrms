<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{

	public function index(){
		$this->display();
	}
	public function register(){
		$User = M('User');
		$res = M('Usergroup')->where(array('type'=>'0'))->select();
		if($_POST['submit']){
		$data['user_name']=$_POST['username'];
		$data['password']=md5($_POST['password']);
		$data['usergroup_id'] = I('post.usergroup_id');
		//dump($data);die;
	    }
		if($User->create($data)){
			
			$data['reg_time']=strtotime(date('Y-m-d H:i:s',time()));
			$member=$User->add($data);
			echo "<script>alert('注册成功！'');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Login/index'</script>";
		}
		$this->assign('grouplist',$res);
		$this->display();
	
	}
	public function login(){
		$User =M('User');
		if($_POST){
			$data['user_name'] = $_POST['username'];
			$data['password'] = md5($_POST['password']);
			$map['user_name'] = $data['user_name'];
		   
			$result = $User->where($map)->select();
			$pass=$result['0']['password'];
			$map['id']=$result['0']['id'];
			//echo $pass;
			if($data['password'] == $pass){
				    echo "<script>window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Index/index'</script>";
					
					//$this->success('登陆成功！','http://localhost/test/Hospitalsrms/index.php/Home/Index/index');
					$dat['last_time']=strtotime(date("Y-m-d H:i:s",time()));
					$User->where($map)->save($dat);
					//Session::set('USER_AUTH_KEY',$map['id']);
					$_SESSION['user_id'] = $map['id'];
					$_SESSION['user_name'] = $data['user_name'];

			}else{
				echo "<script>alert('用户名或密码错误！');window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Login/index.html'</script>";
			}
		}

	}
	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		echo "<script> window.location.href='http://localhost/test/Hospitalsrms/index.php/Home/Index/index'</script>";

	}
}