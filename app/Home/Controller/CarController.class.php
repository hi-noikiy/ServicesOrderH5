<?php
namespace Home\Controller;
class CarController extends CommonController {
	//选择车系
    public function selectcarAction(){
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetCarBrandSeriesList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$info = $info['data'][0];
			$this->assign('info',$info);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='选择车系';
		$this->assign('assign',$assign);
		$this->display();
    }
	//选择车型
	public function selectcarclassAction(){
		$id = I('get.id');
		if((int)$id==0){
			set404();
		}
		$this->apipostdata['carSeriesID'] = $id;
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetCarModelDataList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$list = $info['data'];
/*			print_r($list);
			exit;*/
			$this->assign('list',$list);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='选择车型';
		$this->assign('assign',$assign);
		$this->display();
    }
	//填写车辆信息
	public function inputinfoAction(){
		$id = I('get.id');
		if((int)$id==0){
			set404();
		}
		//$this->apipostdata['carSeriesID'] = $id;
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetServiceCityList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$list = $info['data'];
/*			print_r($list);
			exit;*/
			$this->assign('list',$list);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='填写车辆信息';
		$this->assign('assign',$assign);
		$this->display();
    }
	//智能保养方案
	public function selectproductAction(){
		//$this->apipostdata['carSeriesID'] = $id;
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetProductList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$list = $info['data'];
/*			print_r($list);
			exit;*/
			$this->assign('list',$list);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='智能保养方案';
		$this->assign('assign',$assign);
		$this->display();
	}
	public function selectshopAction(){
		$id = I('get.cityid');
		if((int)$id==0){
			set404();
		}
		$this->apipostdata['cityID'] = $id;
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetSubList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$list = $info['data'];
/*			print_r($list);
			exit;*/
			$this->assign('list',$list);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='4s店选择';
		$this->assign('assign',$assign);
		$this->display();
	}
	public function selectorderAction(){
		$id = I('get.subcode');
		if($id==""){
			set404();
		}
		$this->apipostdata['subCode'] = $id;
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GetSubTimeSlotList',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$list = $info['data'];
/*			print_r($list);
			exit;*/
			$this->assign('list',$list);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='4s店选择';
		$this->assign('assign',$assign);
		$this->display();
	}
	public function createorderAction(){
		if(IS_POST){
			$json['status']= 1;
			if(I('post.subTimeID')!='' && I('post.subCode')!='' && I('post.orderPersonName')!='' && I('post.orderVin')!='' && I('post.orderPhone')!='' && I('post.productList')!=''){
				$this->apipostdata['subTimeID'] = I('post.subTimeID');
				$this->apipostdata['subCode'] = I('post.subCode');
				$this->apipostdata['reserveTime'] = I('post.reserveTime');
				$this->apipostdata['orderPersonName'] = I('post.orderPersonName');
				$this->apipostdata['orderVin'] = I('post.orderVin');
				$this->apipostdata['orderPhone'] = I('post.orderPhone');
				$this->apipostdata['CarModelCode'] = I('post.CarModelCode');
				$this->apipostdata['BuyCarDate'] = I('post.BuyCarDate');
				$this->apipostdata['CarKM'] = I('post.CarKM');
				$this->apipostdata['ReserveTime'] = I('post.ReserveTime');
				$this->apipostdata['productList'] = json_decode($_POST['productList'],true);
				//$this->apipostdata['productList'] = json_decode(I('post.productList'),true);
				$data = json_encode($this->apipostdata);
				$RE = sendData(C('API_SERVER').'CreateOrder',$data,'POST',array('Content-Type: application/json'));
				
				if((int)$RE['code']==200){
					$json['info'] = json_decode($RE['data'],true);
					//$list = $info['data'];
		/*			print_r($list);
					exit;*/
					//$this->assign('list',$list);
				}else{
					$json['status']= -1;//与服务器通讯失败
					$json['code']= $RE['code'];
				}
			}else{
				$json['status']= -2;//提交信息不合法
			}
			echo json_encode($json);
			exit;
		}
		$assign['title']='确认订单';
		$this->assign('assign',$assign);
		$this->display();
	}
	public function verifyorderAction(){
		$orderno = I('get.orderno');
		if($orderno==""){
			set404();
		}
		$this->apipostdata['orderNo'] = $orderno;
		$data = json_encode($this->apipostdata);
		$RE = sendData(C('API_SERVER').'GerOrderInfo',$data,'POST',array('Content-Type: application/json'));
		if((int)$RE['code']==200){
			$info = json_decode($RE['data'],true);
			$info = $info['data'];
			/*print_r($info);
			exit;*/
			$this->assign('info',$info);
		}else{
			$this->error('与服务器连接失败，请稍后再试。');
		}
		$assign['title']='确认订单';
		$this->assign('assign',$assign);
		$this->display();
	}
}