<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
		.mui-content>.mui-table-view:first-child {
			margin-top: 0;
		}
		.mui-row{
			margin-top:10px 
		}
		.mui-col-xs-4{
			font-size: 16px;
			color: #D32F32;
		}
		.total-price{
			text-align:right;
		}
		.total-price span:last-child{
			font-size:16px;
			color: #D32F32; 
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
						<p class="mui-col-xs-8">能和心爱的人</p>
						<p class="mui-col-xs-4" >￥400</p>
					</div>
        		</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/oil1.jpg">
					<div class="mui-media-body mui-row">
						<p class="mui-col-xs-8">能和心爱的人</p>
						<p class="mui-col-xs-4" >￥400</p>
					</div>
        		</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/oil1.jpg">
					<div class="mui-media-body mui-row">
						<p class="mui-col-xs-8">能和心爱的人</p>
						<p class="mui-col-xs-4" >￥400</p>
					</div>
        		</a>
			</li>
		</ul>
		<div class="title total-price">
			共<span>3</span>件商品 合计：<span>￥1000</span>
		</div>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>