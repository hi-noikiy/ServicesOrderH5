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
<?php
if ( $info ) {
	foreach ( $info as $rs ) {
?>
		<div class="mui-card">
			<div class="mui-card-header" style="display: block">订单编号：{$rs['orderNo']}<br>
			<span style="font-size: 10px;color: #CCCCCC;">下单时间：{$rs['commitTime']}</span>
			</div>
			<div class="mui-card-content">

					<ul class="mui-table-view">
						<?php
						if ( $rs[ 'productList' ] ) {
							foreach ( $rs[ 'productList' ] as $v ) {
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
					<div class="title total-price" style="border-top:solid 1px #E3E3E5; padding-top: 10px;">
				<span style="font-size: 14px;color: #666666;">预约时间：{$rs['reserveTime']}</span><br>
			 			共<span>{$rs['productNum']}</span>件商品， 合计：<span>￥{$rs['totalPrice']}</span>
					</div>
			</div>
			<div class="mui-card-footer" style="text-align: right;display: block">
				<button class="mui-btn" style="background:#D10024;color:#fff;border: none;" myorderno="{$rs['orderNo']}">
				出示二维码
				</button>
			</div>
		</div>
<?php
	}
}else{
?>
<div style="text-align: center">您还没有任何订单。</div>
<?php
}
?>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script src="__PUBLIC__/assets/js/jquery.qrcode.min.js"></script>
	<script>
	jQuery('[myorderno]').click(function(){
		var orderno = jQuery(this).attr('myorderno');
		mui.alert('<div id="qrcode"></div>', '二维码', function() {
		});
		jQuery("#qrcode").qrcode({
			width: 800, //宽度 
			height:800, //高度 
			text: "<?php echo ReHome(); ?>__APP__/home/car/verifyorder/orderno/"+orderno //任意内容 
		}); 
		jQuery("#qrcode canvas").width('100%').height('auto');
	});
	</script>
</body>

</html>