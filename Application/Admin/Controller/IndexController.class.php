<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
        $map['status'] = 0;
        $where['status'] =array('in',array('0','2','4'));
    	$theses_num = M('TjTheses')->count();
        $equipment_num = M('TjEquipment')->count();
        $propty_num = M('TjPropty')->count();
    	$subject_num = M('XmSubject')->count();
        $subject_do_num = M('XmSubject')->where($map)->count();
    	$user_num = M('User')->count();
    	$department_num = M('XmDepartment')->count();
        $department_do_num = M('XmDepartment')->where($map)->count();
    	$achievement_num = M('TjAchievement')->count();
        $coller_num = M('XmColler')->count();
        $coller_do_num = M('XmColler')->where($map)->count();
        $purchase_num = M('XmPurchase')->count();
        $purchase_do_num = M('XmPurchase')->where($map)->count();
        $composition_num = M('XsComposition')->count();
        $composition_do_num = M('XsComposition')->where($where)->count();
        $meet_num = M('XsMeet')->count();
        $meet_do_num =M('XsMeet')->where($map)->count();
        $lecture_num = M('XsLecture')->count();
        $lecture_do_num =M('XsLecture')->where($map)->count();
        $expense_num = M('JfExpense')->count();
        $expense_do_num =M('JfExpense')->where($map)->count();
        $apply_num = M('JfExpenseApply')->count();
        $apply_do_num =M('JfExpenseApply')->where($map)->count();
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
        $this->assign('subject_do_num',$subject_do_num);
    	$this->assign('user_num',$user_num);
    	$this->assign('department_num',$department_num);
        $this->assign('department_do_num',$department_do_num);
    	$this->assign('achievement_num',$achievement_num);
        $this->assign('coller_num',$coller_num);
        $this->assign('coller_do_num',$coller_do_num);
        $this->assign('lecture_num',$lecture_num);
        $this->assign('lecture_do_num',$lecture_do_num);
        $this->assign('expense_num',$expense_num);
        $this->assign('expense_do_num',$expense_do_num);
        $this->assign('purchase_num',$purchase_num);
        $this->assign('purchase_do_num',$purchase_do_num);
        $this->assign('apply_num',$apply_num);
        $this->assign('apply_do_num',$apply_do_num);
        $this->assign('meet_num',$meet_num);
        $this->assign('meet_do_num',$meet_do_num);
        $this->assign('equipment_num',$equipment_num);
        $this->assign('propty_num',$propty_num);
        $this->assign('composition_num',$composition_num);
        $this->assign('composition_do_num',$composition_do_num);
    	$this->assign('news_num',$news_num);
		Layout('Layout/layout');      
        $this->display();

    }
    
}