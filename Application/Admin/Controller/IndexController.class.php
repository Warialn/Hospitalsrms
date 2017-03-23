<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
    	
		Layout('Layout/layout');      
        $this->display();

    }
    
}