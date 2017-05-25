<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/mui.picker.min.css" />
	<style>
		.mui-content>.mui-table-view:first-child{
			margin-top: 0;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="title">请完善一下信息便于更精确的为您提供保养套餐</div>
		<ul class="mui-table-view">
				<li class="mui-table-view-cell">
				<button id='demo2' data-options='{"type":"date","beginYear":2014,"endYear":2016}' class="btn mui-btn mui-btn-block">
					<a class="mui-navigate-right">
						 购车时间
					</a>
					</button>
				</li>
				<li class="mui-table-view-cell">
					<a class="mui-navigate-right">
						 行驶里程
					</a>
				</li>
				<li class="mui-table-view-cell">
					<a class="mui-navigate-right">
						城市
					</a>
				</li>
			</ul>
			<div id='result' class="ui-alert"></div>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script src="__PUBLIC__/assets/js/mui.picker.min.js"></script>
			<script>
			(function($) {
				$.init();
				var result = $('#result')[0];
				var btns = $('.btn');
				btns.each(function(i, btn) {
					btn.addEventListener('tap', function() {
						var optionsJson = this.getAttribute('data-options') || '{}';
						var options = JSON.parse(optionsJson);
						var id = this.getAttribute('id');
						/*
						 * 首次显示时实例化组件
						 * 示例为了简洁，将 options 放在了按钮的 dom 上
						 * 也可以直接通过代码声明 optinos 用于实例化 DtPicker
						 */
						var picker = new $.DtPicker(options);
						picker.show(function(rs) {
							/*
							 * rs.value 拼合后的 value
							 * rs.text 拼合后的 text
							 * rs.y 年，可以通过 rs.y.vaue 和 rs.y.text 获取值和文本
							 * rs.m 月，用法同年
							 * rs.d 日，用法同年
							 * rs.h 时，用法同年
							 * rs.i 分（minutes 的第二个字母），用法同年
							 */
							result.innerText = '选择结果: ' + rs.text;
							/* 
							 * 返回 false 可以阻止选择框的关闭
							 * return false;
							 */
							/*
							 * 释放组件资源，释放后将将不能再操作组件
							 * 通常情况下，不需要示放组件，new DtPicker(options) 后，可以一直使用。
							 * 当前示例，因为内容较多，如不进行资原释放，在某些设备上会较慢。
							 * 所以每次用完便立即调用 dispose 进行释放，下次用时再创建新实例。
							 */
							picker.dispose();
						});
					}, false);
				});
			})(mui);
		</script>
</body>

</html>