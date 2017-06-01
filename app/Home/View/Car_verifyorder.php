<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
	
		body{
			background:#656667;
		}
		.order-content{
			padding: 5px 0;
			width: 90%;
			margin: 5%;
			margin-bottom: 100px;
			background: #fff;
			border-radius: 20px;
		}
		.receipt-money{
			width: 100%;
			bottom:0;
			position:fixed;
		}
		.receipt-money button{
			background:  #D10024;
			color: #fff;
			margin-bottom: 0;
			border: none;
		}
		.total-price {
			text-align: right;
			margin-bottom: 70px
		}
		
		.total-price span:last-child {
			font-size: 16px;
			color: #D32F32;
		}
	</style>
</head>
<body>
	<!--<div class="order-bg mui-content">-->
		<div class="order-content">
			<div class="title">
				<b>{$info['orderPersonName']}</b>
				<span></span>
			</div>
			<ul class="mui-table-view">
				<li class="mui-table-view-cell">
					<p>车&nbsp;&nbsp;&nbsp;型：{$info['carModelName']}</p>
					<p>车架号：{$info['orderVin']}</p>
					<p>电&nbsp;&nbsp;&nbsp;话：<span>{$info['orderPhone']}</span></p>
				</li>
			</ul>
			<div class="title">
			订单编号：<span>{$info['orderNo']}</span>
		</div>
		<ul class="mui-table-view">
		<?php
			if($info['productList']){
				foreach($info['productList'] as $v){
		?>
			<li class="mui-table-view-cell mui-media">
					<img class="mui-media-object mui-pull-left" src="<?php if($v['imgSrc']==''){ ?>__PUBLIC__/assets/images/none-car.jpg<?php }else{ ?><?php echo C('IMG_URL'); ?>{$v['imgSrc']}<?php } ?>">
					<div class="mui-media-body mui-row">
						<p class="mui-col-xs-8">{$v['productName']}</p>
						<div class="mui-col-xs-4" style="text-align: right">
						<p style="color:#D32F32;">￥{$v['salePrice']}</p>
						<p> ×<span>{$v['productNum']}</span></p>
						</div>
					</div>
			</li>
			<?php
				}
			}
			?>
		</ul>
		<div class="title total-price">
			 合计：<span>￥{$info['totalPrice']}</span>
		</div>
		</div>
		<div class="receipt-money mui-row">
			<div class="mui-col-xs-6">
			<button class="mui-btn mui-btn-block">
				支付宝收款
			</button>
			</div>
			<div class="mui-col-xs-6">
			<button class="mui-btn mui-btn-block">
				线下收款
			</button>
			</div>
		</div>
		<include file="./app/Home/View/Include_foot.php"/>
</body>
</html>