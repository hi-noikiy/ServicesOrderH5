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
		.btn-location{
			text-align:center ;
			margin-bottom: 40px;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="title">
			门店信息
		</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell">湖北中法汽车服务有限公司</li>
			<li class="mui-table-view-cell">
				<p>
					<span class="mui-icon mui-icon-location-filled"></span>
					<span>门店地址：</span>
					<span>武汉市洪山区大学园路7号</span>
				</p>
				<p>
					<span class="mui-icon mui-icon-phone"></span>
					<span>电话：</span>
					<span>027-8895222</span>
				</p>
				<p>
					<span class="mui-icon-extra mui-icon-extra-outline"></span>
					<span>预约时间：</span>
					<span>2017-04-25</span>
					<span>08:30</span>
				</p>
			</li>
		</ul>
		<div class="title">
			订单编号：<span>000000344</span>
			<button type="button" class="mui-btn mui-btn-danger">
				修改订单
			</button>
		
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
		
		<div class="mui-row">
			<div class="mui-col-sm-12 mui-col-xs-12 btn-location">
				<button type="button" class="mui-btn mui-btn-danger"> 确定</button>
			</div>
		</div>
		<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>