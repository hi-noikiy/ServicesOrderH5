<?php
namespace Home\Controller;
class CarController extends CommonController {
    public function selectcarAction(){
		$assign['title']='选择车型';
		$this->assign('assign',$assign);
		$this->display();
    }
}