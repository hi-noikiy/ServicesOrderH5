<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	protected $apipostdata = array();//向接口递交的参数
	public function _initialize(){
		$this->apipostdata['userinfoid'] = 'test';
	}
}