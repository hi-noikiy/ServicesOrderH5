<?php
namespace Home\Controller;
class CarController extends CommonController {
    public function selectcarAction(){
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetCarBrandSeriesList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$info = $info['data'][0];
			print_r($info);
			exit();
			$this->assign('info',$info);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='选择车型';
		$this->assign('assign',$assign);
		$this->display();
    }
	public function selectcarclassAction(){
		
		$assign['title']='选择车系';
		$this->assign('assign',$assign);
		$this->display();
    }
	public function inputinfoAction(){
		
		$assign['title']='填写车辆信息';
		$this->assign('assign',$assign);
		$this->display();
    }
}