<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>

	</style>
</head>

<body>
	<!--<div class="mui-content">
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
				<button class="mui-btn">
					出示二维码
				</button>
			</div>
		</div>-->
	<div class="mui-content">
		<div class="mui-card">
			<div class="mui-card-header">
				订单编号：
				<span>1234567</span>
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