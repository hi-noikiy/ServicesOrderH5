<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.title {
			text-align: center;
		}
		
		.mui-table-view-cell.mui-checkbox input[type=checkbox],
		.mui-table-view-cell.mui-radio input[type=radio] {
			top: 18px;
		}
		.mui-off-canvas-left, .mui-off-canvas-right {
			background-color: #FFFFFF;
		}
	</style>
</head>

<body>
	<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable">
		<!--菜单部分-->
		<aside id="offCanvasSide" class="mui-off-canvas-right">
			<div id="offCanvasSideScroll" class="mui-scroll-wrapper">
				<div class="mui-scroll">
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
				</div>
			</div>
		</aside>
		<div class="mui-inner-wrap">
		
			<div style="position: fixed;z-index: 10;height: 50px; line-height: 50px;width: 100%;bottom: 0px;left: 0px;background-color: #FFFFFF;overflow: hidden;" class="mui-row">
				<div class="mui-col-xs-8" style="padding-left: 10px;font-size: 12px;">合计：￥<span style="font-size: 18px;color: red;">400</span>
				</div>
				<div class="mui-col-xs-4"><a href="<?php echo U('home/car/selectproduct') ?>" onClick="return isSubmit();" style="display: block;color: #FFFFFF;text-align: center;background-color: #D50225;max-width: 640px;">下一步</a>
				</div>
			</div>
		<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper" style="padding-bottom: 50px;">
		<div class="mui-scroll">
			<div class="mui-row" style="background-color: #FFFFFF;">
				<div class="mui-col-xs-8" style="padding: 10px;border-right:solid 1px #eeeeee;">
					<div class="mui-row">
						<div class="mui-col-xs-5"><img src="__PUBLIC__/assets/images/none-car.jpg" alt="" width="90%" id="carimg">
						</div>
						<div class="mui-col-xs-7"><span id="carname">加载中...</span><br><span style="font-size: 12px;color: #999999;">加载中...</span>
						</div>
					</div>
				</div>
				<div class="mui-col-xs-4" style="padding: 10px;">
					<span id="carname">万公里</span><br><span style="font-size: 12px;color: #999999;">加载中...</span>
				</div>
			</div>
			<div class="title" style="line-height: 33px;">小保养项目<a id="offCanvasBtn" href="#offCanvasSide" class="mui-btn mui-btn-danger mui-pull-right">选机油</a></div>
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
		</div>
		</div>
		<!-- off-canvas backdrop -->
		<div class="mui-off-canvas-backdrop"></div>
		</div>
	</div>
		<include file="./app/Home/View/Include_foot.php"/>
		<script>
			//侧滑容器父节点
			var offCanvasWrapper = mui('#offCanvasWrapper');
			 //主界面容器
			var offCanvasInner = offCanvasWrapper[0].querySelector('.mui-inner-wrap');
			 //菜单容器
			var offCanvasSide = document.getElementById("offCanvasSide");
			 //Android暂不支持整体移动动画
			//mui('.mui-off-canvas-wrap').offCanvas('show');
			//主界面和侧滑菜单界面均支持区域滚动；
			mui('#offCanvasSideScroll').scroll();
			mui('#offCanvasContentScroll').scroll();
		</script>
</body>

</html>