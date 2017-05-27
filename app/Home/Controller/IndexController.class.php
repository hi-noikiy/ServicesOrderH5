<?php
namespace Home\Controller;
class IndexController extends CommonController {
    public function indexAction(){
		redirect(U('home/car/selectcar'));
    }
}