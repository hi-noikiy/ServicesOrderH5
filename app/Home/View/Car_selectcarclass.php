<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>

	</style>
</head>

<body>
	<div class="mui-content">
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-collapse">
				<a class="mui-navigate-right" href="#">2017款</a>
				<div class="mui-collapse-content">
					<form class="mui-input-group">
						<div class="mui-input-row">
							<label>Input</label>
							<input type="text" placeholder="普通输入框">
						</div>
						<div class="mui-input-row">
							<label>Input</label>
							<input type="text" class="mui-input-clear" placeholder="带清除按钮的输入框">
						</div>

						<div class="mui-input-row mui-plus-visible">
							<label>Input</label>
							<input type="text" class="mui-input-speech mui-input-clear" placeholder="语音输入">
						</div>
						<div class="mui-button-row">
							<button class="mui-btn mui-btn-primary" type="button" onclick="return false;">确认</button>&nbsp;&nbsp;
							<button class="mui-btn mui-btn-primary" type="button" onclick="return false;">取消</button>
						</div>
					</form>
				</div>
			</li>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>