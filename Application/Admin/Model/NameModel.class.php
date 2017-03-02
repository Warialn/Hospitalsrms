<?php
namespace Home\Model;
use Think\Model;

class NameModel extends Model{
	public function __construct(){
		parent::__construct();
	}
	protected $_validate = array(
		array('username','','该用户名已被注册！',0,'unique',1),
		array('password',6,'请填入六位字母或数字密码！',2,'length'),
		);
	protected $_auto = array(
		array('password','md5',3,'function'),
		);

}