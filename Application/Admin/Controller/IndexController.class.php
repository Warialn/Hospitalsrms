<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
    	$theses_num = M('TjTheses')->count();
    	$subject_num = M('XmSubject')->count();
    	$user_num = M('User')->count();
    	$department_num = M('XmDepartment')->count();
    	$achievement_num = M('TjAchievement')->count();
    	$news_num = M('News')->count();
    	$ip = get_client_ip();
    	$Ip = new \Org\Net\IpLocation('UTFWry.dat');
		$area = $Ip->getLocation('')['area'];
		$time = date("Y-m-d H:i:s");
		$this->assign('time',$time);
		$this->assign('ip',$ip);
		$this->assign('area',$area);
    	$this->assign('theses_num',$theses_num);
    	$this->assign('subject_num',$subject_num);
    	$this->assign('user_num',$user_num);
    	$this->assign('department_num',$department_num);
    	$this->assign('achievement_num',$achievement_num);
    	$this->assign('news_num',$news_num);
		Layout('Layout/layout');      
        $this->display();

    }
    
}