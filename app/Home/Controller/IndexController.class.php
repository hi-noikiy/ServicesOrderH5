<?php
namespace Home\Controller;
class IndexController extends CommonController {
    public function indexAction(){
		$assign['title']='数据概览';
		$this->assign('assign',$assign);
		$this->display();
    }
}