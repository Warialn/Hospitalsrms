<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$modal = M('News');
    	$result = $modal->order('id desc')->field('title,content')->limit(6)->select();
    	$this->assign('new_res',$result);


    	Layout('Layout/layout');
    	$this->display();
            }

}