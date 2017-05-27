<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.mui-content>.mui-table-view:first-child {
			margin-top: 0;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-table-view  mui-grid-view">
			<div class="mui-table-view-cell" style="text-align: left">
				<img src="__PUBLIC__/assets/images/none-car.jpg" alt="" height="50" id="carimg">
			</div>
			<div class="mui-table-view-cell " style="text-align: left" id="carname">加载中...</div>
		</div>
		<ul class="mui-table-view">
			<?php
			if($list){
				foreach($list as $v){
			?>
			<li class="mui-table-view-cell mui-collapse">
				<a class="mui-navigate-right" href="#">{$v['carModelGroupName']}</a>
				<?php if($v['carModelList']){ ?>
					<ul class="mui-table-view mui-table-view-chevron">
					<?php foreach($v['carModelList'] as $rs){ ?>
						<li class="mui-table-view-cell"><a class="mui-navigate-right" href="<?php echo U('Car/inputinfo?id='.$rs['carModelCode']); ?>" onClick="return saveinfo('{$rs['carModelCode']}','{$rs['carModelName']}')">{$rs['carModelName']}</a></li>
					<?php } ?>
					</ul>
				<?php } ?>
			</li>
			<?php
				}
			}
			?>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script>
		var carSeriesCode = _GETDATA('carSeriesCode');
		var carSeriesImg = _GETDATA('carSeriesImg');
		var carSeriesName = _GETDATA('carSeriesName');
		jQuery('#carname').html(carSeriesName);
		if(carSeriesImg!=""){
			jQuery('#carimg').attr('src',carSeriesImg);
		}
		
		function saveinfo(carModelCode,carModelName){
			_SAVEDATA('carModelCode',carModelCode);
			_SAVEDATA('carModelName',carModelName);
			return true;
		}
	</script>
</body>

</html>