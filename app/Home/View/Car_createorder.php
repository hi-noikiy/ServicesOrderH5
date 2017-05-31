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
			font-size: 16px;
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
<a href="/index.php/home/car/selectproduct.html" onClick="return isSubmit();" style="color: #FFFFFF;position: fixed;z-index: 10;line-height: 50px;text-align: center;width: 100%;bottom: 0px;left: 0px;background-color: #CE0104;">查看保养方案</a>
	<div class="mui-content" style="padding-bottom: 50px;">
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
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/oil1.jpg">
					<div class="mui-media-body mui-row">
						<p class="mui-col-xs-8">昆仑润滑油</p>
						<div class="mui-col-xs-4" >
						<p>￥400</p>
						<p> ×<span>1</span></p>
						</div>
					</div>
        		</a>
			

			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/oil1.jpg">
					<div class="mui-media-body mui-row">
						<p class="mui-col-xs-8">昆仑润滑油</p>
						<div class="mui-col-xs-4" >
						<p>￥400</p>
						<p> ×<span>1</span></p>
						</div>
					</div>
        		</a>
			

			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/oil1.jpg">
					<div class="mui-media-body mui-row">
						<p class="mui-col-xs-8">昆仑润滑油</p>
						<div class="mui-col-xs-4" >
						<p>￥400</p>
						<p> ×<span>1</span></p>
						</div>
					</div>
        		</a>
			
			</li>
		</ul>
		<div class="title total-price">
			共<span>3</span>件商品 合计：<span>￥1000</span>
		</div>
		<form class="mui-input-group">
			<div class="mui-input-row">
				<label><span>*</span>姓&nbsp;&nbsp;&nbsp;名：</label>
				<input type="text" class="mui-input-clear" placeholder="请输入真实姓名">
			</div>
			<div class="mui-input-row">
				<label>&nbsp;车架号：</label>
				<input type="text" class="mui-input-clear" placeholder="请输入正确的车架号">
			</div>
			<div class="mui-input-row">
				<label><span>*</span>手机号：</label>
				<input type="text" class="mui-input-clear" placeholder="请输入本人手机号">
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
		}
		</script>
</body>
</html>