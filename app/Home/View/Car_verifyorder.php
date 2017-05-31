<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
		.order-bg{
			background:rgba(80,80,80,.5);
			position:absolute;
			top:0;
			bottom:0;
			left:0;
			right:0;
		}
		.order-content{
			position:absolute;
			top:40px;
			bottom:100px;
			left: 20px;
			right:20px;
			background: #fff;
			border-radius: 20px;
		}
		.receipt-money{
			width: 100%;
			bottom:0;
			position:absolute;
			background:  #dd524d;
		}
		.receipt-money p{
			height: 60px;
			line-height: 60px;
			color:#fff;
			text-align: center;
		}
		.total-price {
			text-align: right;
		}
		
		.total-price span:last-child {
			font-size: 16px;
			color: #D32F32;
		}
	</style>
</head>
<body>
	<div class="order-bg mui-content">
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
						<div class="mui-col-xs-4" >
						<p>￥{$v['salePrice']}</p>
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
			共<span>3</span>件商品 合计：<span>￥{$info['totalPrice']}</span>
		</div>
		</div>
		<div class="receipt-money mui-row">
			<p class="mui-col-sm-6 mui-col-xs-6">
				支付宝收款
			</p>
			<p class="mui-col-sm-6 mui-col-xs-6">
				线下收款
			</p>
		</div>
	</div>
		<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>