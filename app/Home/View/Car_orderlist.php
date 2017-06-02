<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
		.total-price {
			text-align: right;
			margin-bottom: 10px
		}
		
		.total-price span:last-child {
			font-size: 16px;
			color: #D32F32;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-card">
			<div class="mui-card-header mui-row">
				<p class="mui-col-xs-7">
					订单编号：<span >12qewrte3456</span>
				</p>
				<p class="mui-col-xs-5">
					<span class="mui-pull-right">2017-05-03</span>
				</p>
			</div>
			<div class="mui-card-content">
				<div class="mui-card-content-inner">
					<ul class="mui-table-view">
						<?php
						if ( $info[ 'productList' ] ) {
							foreach ( $info[ 'productList' ] as $v ) {
								?>
						<li class="mui-table-view-cell mui-media">
							<img class="mui-media-object mui-pull-left" src="<?php if($v['imgSrc']==''){ ?>__PUBLIC__/assets/images/none-car.jpg<?php }else{ ?><?php echo C('IMG_URL'); ?>{$v['imgSrc']}<?php } ?>">
							<div class="mui-media-body mui-row">
								<p class="mui-col-xs-8">{$v['productName']}</p>
								<div class="mui-col-xs-4" style="text-align: right">
									<p style="color:#D32F32;">￥{$v['salePrice']}</p>
									<p> ×<span>{$v['productNum']}</span>
									</p>
								</div>
							</div>
						</li>
						<?php
						}
						}
						?>
					</ul>
					<div class="title total-price">
			 			共<span>4</span>件商品， 合计：<span>￥{$info['totalPrice']}</span>
					</div>
				</div>
			</div>
			<div class="mui-card-footer">
				<button class="mui-btn" style="background:#D10024;color:#fff;border: none;margin-left:65%;">
				出示二维码
				</button>
			</div>
		</div>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>