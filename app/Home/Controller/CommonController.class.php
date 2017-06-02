<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	protected $apipostdata = array();//向接口递交的参数
	public function _initialize(){
		$this->apipostdata['userinfoid'] = 'test';
		
		if($_COOKIE['alipay_user_id'] == ''){
			if(I('get.auth_code') != ''){
				// 获取支付宝用户id
				$this->apipostdata['auth_code'] = I('get.auth_code');
				$data = json_encode($this->apipostdata);
				$RE = sendData(C('API_SERVER').'GetAliPayUserID',$data,'POST',array('Content-Type: application/json'));
				if((int)$RE['code']==200){
					$alipay_userid = json_decode($RE['data'],true);
					$alipay_userid = $alipay_userid['data'];
/*					print_r($alipay_userid);
					exit;*/
					if($alipay_userid!=''){
						setcookie('alipay_user_id',$alipay_userid,0,'/');
					}else{
						$this->error('支付宝授权失败。');
					}
		/*			print_r($list);
					exit;*/
					$this->assign('alipay_userid',$alipay_userid);
				}else{
					$this->error('与服务器连接失败，请稍后再试。');
				}
			}else{
				redirect('https://openauth.alipay.com/oauth2/publicAppAuthorize.htm?app_id=2017042807041383&scope=auth_base&redirect_uri='.GetCurUrl());
				exit();
			}
		}
	}
}