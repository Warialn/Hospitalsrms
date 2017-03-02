<?php
namespace Admin\Controller;
use Think\Controller;
 class KyjfController extends Controller{
 
	 public function index(){
 		Layout('Layout/layout');
		$this->display();
	 }
	 public function apply(){
	 	Layout('Layout/layout');
		$this->display();
	 }
 }