<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.title {
			text-align: center;
		}
		.mui-table-view-cell.mui-checkbox input[type=checkbox], .mui-table-view-cell.mui-radio input[type=radio]{
			top: 18px;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-row" style="background-color: #FFFFFF;">
			<div class="mui-col-xs-8" style="padding: 10px;border-right:solid 1px #eeeeee;">
			<div class="mui-row">
				<div class="mui-col-xs-5"><img src="__PUBLIC__/assets/images/none-car.jpg" alt="" width="90%" id="carimg"></div>
				<div class="mui-col-xs-7"><span id="carname">加载中...</span><br><span style="font-size: 12px;color: #999999;">加载中...</span></div>
			</div>
			</div>
			<div class="mui-col-xs-4" style="padding: 10px;">
			<span id="carname">万公里</span><br><span style="font-size: 12px;color: #999999;">加载中...</span>
			</div>
		</div>
		<div class="title">小保养项目</div>
		<ul class="mui-table-view">
		<li class="mui-table-view-cell mui-radio mui-left mui-media" style="line-height: 42px;">
			<input name="radio" type="radio"><img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-car.jpg" width="42" height="42">Item 5<span class="mui-badge mui-badge-danger mui-badge-inverted">￥1400</span>
		</li>
		<li class="mui-table-view-cell mui-radio mui-left mui-media" style="line-height: 42px;">
			<input name="radio" type="radio"><img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-car.jpg" width="42" height="42">Item 5<span class="mui-badge mui-badge-danger mui-badge-inverted">￥1400</span>
		</li>
		<li class="mui-table-view-cell mui-radio mui-left mui-media" style="line-height: 42px;">
			<input name="radio" type="radio"><img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-car.jpg" width="42" height="42">Item 5<span class="mui-badge mui-badge-danger mui-badge-inverted">￥1400</span>
		</li>
		</ul>
		<div class="title">小保养项目</div>
		<ul class="mui-table-view">
		<li class="mui-table-view-cell mui-radio mui-left mui-media" style="line-height: 42px;">
			<input name="radio" type="radio"><img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-car.jpg" width="42" height="42">Item 5<span class="mui-badge mui-badge-danger mui-badge-inverted">￥1400</span>
		</li>
		<li class="mui-table-view-cell mui-radio mui-left mui-media" style="line-height: 42px;">
			<input name="radio" type="radio"><img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-car.jpg" width="42" height="42">Item 5<span class="mui-badge mui-badge-danger mui-badge-inverted">￥1400</span>
		</li>
		<li class="mui-table-view-cell mui-radio mui-left mui-media" style="line-height: 42px;">
			<input name="radio" type="radio"><img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-car.jpg" width="42" height="42">Item 5<span class="mui-badge mui-badge-danger mui-badge-inverted">￥1400</span>
		</li>
		</ul>
		<div style="position: fixed;z-index: 10;height: 50px; line-height: 50px;width: 100%;bottom: 0px;left: 0px;background-color: #FFFFFF;overflow: hidden;" class="mui-row">
			<div class="mui-col-xs-8" style="padding-left: 10px;font-size: 12px;">合计：￥<span style="font-size: 18px;color: red;">400</span></div>
		    <div class="mui-col-xs-4"><a href="<?php echo U('home/car/selectproduct') ?>" onClick="return isSubmit();" style="display: block;color: #FFFFFF;text-align: center;background-color: #D50225;max-width: 640px;">下一步</a></div>
		</div>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>