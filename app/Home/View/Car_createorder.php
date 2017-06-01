<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
		.mui-content>.mui-table-view:first-child {
			margin-top: 0;
		}
		
		.mui-row {
			margin-top: 10px
		}
		
		.mui-col-xs-4 {
			text-align: right;
		}
		
		.mui-col-xs-4 p:first-child {
			font-size: 16px;
			color: #D32F32;
		}
		
		.total-price {
			text-align: right;
		}
		
		.total-price span:last-child {
			font-size: 24px;
			color: #D32F32;
		}
		
		label span {
			color: #D32F32;
		}
		
		.btn-location {
			text-align: center;
			margin-bottom: 40px;
		}
	</style>
</head>

<body>
<button type="button" class="mui-btn mui-btn-block mui-btn-primary" style=" border: none;border-radius: 0px; color: #FFFFFF;position: fixed;z-index: 10;text-align: center;width: 100%;bottom: 0px;left: 0px;background-color: #CE0104;margin-bottom: 0px;" id="submitbtn">确认订单</button>
	<div class="mui-content" style="padding-bottom: 80px;">
		<div class="title">
			门店信息
		</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell"><span id="subName">加载中...</span></li>
			<li class="mui-table-view-cell">
				<p>
					<span class="mui-icon mui-icon-location-filled"></span>
					<span>门店地址：</span>
					<span id="subAddr">加载中...</span>
				</p>
				<p>
					<span class="mui-icon mui-icon-phone"></span>
					<span>电话：</span>
					<span id="subPhone">加载中...</span>
				</p>
				<p>
					<span class="mui-icon-extra mui-icon-extra-outline"></span>
					<span>预约时间：</span>
					<span id="selectdate">加载中...</span>
					<span id="startTime">加载中...</span>
				</p>
			</li>
		</ul>
		<div class="title">
			保养项目
		</div>
		<ul class="mui-table-view" id="productlist">
			<li class="mui-table-view-cell mui-media">
					数据加载中...
			</li>
		</ul>
		<div class="title total-price">
			合计：￥<span id="sumPrice">1000</span>
		</div>
		<form class="mui-input-group">
			<div class="mui-input-row">
				<label><span>*</span>姓&nbsp;&nbsp;&nbsp;名：</label>
				<input type="text" class="mui-input-clear" placeholder="请输入真实姓名" id="orderPersonName">
			</div>
			<div class="mui-input-row">
				<label>&nbsp;车架号：</label>
				<input type="text" class="mui-input-clear" placeholder="请输入正确的车架号" id="orderVin">
			</div>
			<div class="mui-input-row">
				<label><span>*</span>手机号：</label>
				<input type="text" class="mui-input-clear" placeholder="请输入您的手机号" id="orderPhone">
			</div>
		</form>
	</div>
		<include file="./app/Home/View/Include_foot.php"/>
		<script>
		var data = _GETDATA( 'subName' );
		if ( data != undefined && data != null && data != "" ) {
			jQuery( '#subName' ).text( data );
			jQuery( '#subAddr' ).text( _GETDATA( 'subAddr' ) );
			jQuery( '#subPhone' ).text( _GETDATA( 'subPhone' ) );
			jQuery( '#selectdate' ).text( _GETDATA( 'selectdate' ) );
			jQuery( '#startTime' ).text( _GETDATA( 'startTime' )+' - '+ _GETDATA( 'endTime' ) );
			jQuery( '#orderPersonName' ).val( _GETDATA( 'orderPersonName' ) );
			jQuery( '#orderVin' ).val( _GETDATA( 'orderVin' ) );
			jQuery( '#orderPhone' ).val( _GETDATA( 'orderPhone' ) );
			var productList = _GETDATA( 'productList' );
			if(productList!=undefined && productList!=null && productList!="" && productList!="[]"){
				//alert(productList);
				productList = eval('('+productList +')');
				var liststr = '';
				var imgSrc = '__PUBLIC__/assets/images/none-shop.jpg';
				var sumPrice=0;
				jQuery.each(productList,function(entryIndex,data){
					if(data['imgSrc']!=''){
						imgSrc = '<?php echo C('IMG_URL'); ?>'+data['imgSrc'];
					}else{
						imgSrc = '__PUBLIC__/assets/images/none-shop.jpg';
					}
					liststr += '<li class="mui-table-view-cell mui-media">'+
					'<img class="mui-media-object mui-pull-left" src="'+imgSrc+'">'+
					'<div class="mui-media-body mui-row">'+
						'<p class="mui-col-xs-8">'+data['productName']+'</p>'+
						'<div class="mui-col-xs-4" >'+
						'<p>￥'+data['salePrice']+'</p>'+
						'<p> ×<span>'+data['productNum']+'</span></p>'+
						'</div>'+
					'</div>'+
					'</li>';
					sumPrice += parseFloat(data['salePrice'])*parseFloat(data['productNum']);
				});
				jQuery('#productlist').html(liststr);
				jQuery('#sumPrice').text(sumPrice);
			}
		}
		function isSubmit(){
			if(jQuery('#orderPersonName').val()==''){
				mui.alert('请输入您的真实姓名');
				return false;
			}
			if(jQuery('#orderVin').val()==''){
				mui.alert('请输入正确的车架号');
				return false;
			}
			if(jQuery('#orderPhone').val()==''){
				mui.alert('请输入您的手机号');
				return false;
			}
			_SAVEDATA('orderPersonName',jQuery('#orderPersonName').val());//保存进本地存储
			_SAVEDATA('orderVin',jQuery('#orderVin').val());//保存进本地存储
			_SAVEDATA('orderPhone',jQuery('#orderPhone').val());//保存进本地存储
			//alert(_GETDATA( 'productList' ));
			jQuery.ajax({
				type: "POST",
				url: "<?php echo U('home/car/createorder'); ?>",
				global:"false",
				data:"productList="+_GETDATA( 'productList' )+"&ReserveTime="+_GETDATA( 'selectdate' )+"&CarModelCode="+_GETDATA( 'carModelCode' )+"&subTimeID="+_GETDATA( 'subTimeID' )+"&subCode="+_GETDATA( 'subCode' )+"&orderPersonName="+jQuery('#orderPersonName').val()+"&orderVin="+jQuery('#orderVin').val()+"&BuyCarDate="+_GETDATA( 'buydate' )+"&CarKM="+_GETDATA( 'licheng' )+"&orderPhone="+jQuery('#orderPhone').val(),
				dataType:"json",
				error:function(){
					return false;
				},
				success: function(msg){
					if(msg.status=='1'){
						
							mui.alert(msg.info.message);
						if(msg.info.data == ''){
							mui.alert(msg.info.message);
						}else{
							mui.alert('您的订单已提交成功', '提示', function() {
								window.location.href="__APP__/";
							});
						}
					}else if(msg.status=='-1'){
						mui.alert('与服务器通讯出错');
					}
					else if(msg.status=='-2'){
						mui.alert('提交的信息不符合要求');
					}
				},
				complete:function(){
					//mui('#submitbtn').button('reset');
				}
			});
			return false;
		}
		mui(document.body).on('tap', '#submitbtn', function(e) {
			isSubmit();
            mui('#submitbtn').button('loading');
           /* setTimeout(function() {
                mui(this).button('reset');
            }.bind(this), 2000);*/
        });
		</script>
</body>
</html>