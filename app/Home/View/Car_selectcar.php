<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.mui-grid-view.mui-grid-9 .mui-media{
			background-color: #ffffff;
		}
		.mui-content{
			padding:10px;
		}
		img{
			width:100%;
		}
	</style>
</head>

<body>

	<div class="mui-content">
	<img src="__PUBLIC__/assets/images/page1-1.png" alt="" width="100%">
		<ul class="mui-table-view mui-grid-view mui-grid-9">
		<?php
			if($info['carSeriesList']){
				foreach($info['carSeriesList'] as $v){
		?>
			<li class="mui-table-view-cell mui-media mui-col-xs-4">
	           <a href="<?php echo U('home/car/selectcarclass?id='.$v['carSeriesCode']); ?>" onClick="return saveinfo('{$v['carSeriesCode']}','{$v['carSeriesImg']}','{$v['carSeriesName']}')">
		           <img src="<?php if($v['carSeriesImg']==''){ ?>__PUBLIC__/assets/images/none-car.jpg<?php }else{ ?><?php echo C('IMG_URL'); ?>{$v['carSeriesImg']}<?php } ?>" alt="">
		           <div class="mui-media-body">{$v['carSeriesName']}</div>
		       </a>
			</li>
			<?php
				}
			}
			?>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script>
		function saveinfo(carSeriesCode,carSeriesImg,carSeriesName){
			_SAVEDATA('carSeriesCode',carSeriesCode);
			_SAVEDATA('carSeriesImg',carSeriesImg);
			_SAVEDATA('carSeriesName',carSeriesName);
			return true;
		}
	</script>
</body>

</html>