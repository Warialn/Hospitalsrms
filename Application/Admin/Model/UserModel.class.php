<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	public function __construct(){
		parent::__construct();
		//echo '\Home';
	}
	protected $_validate = array(
		array('name','','账号名称已经存在',0,'unique',1),
		//array('password','checkPwd','密码格式不正确',0,'function'),
		//array('repassword','password','两次密码不一致',0,'confirm'),
		array('password',array('1','255'),'值的范围不正确',2,'between'),
		);
	protected $_auto =array(
		array('status','1'),
		array('password','md5',3,'function'),
		array('update_time','time',2,'function'),

		);

}