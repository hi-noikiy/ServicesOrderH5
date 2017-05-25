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
				<img src="__PUBLIC__/assets/images/page1-als.jpg" alt="" height="50">
			</div>
			<div class="mui-table-view-cell " style="text-align: left">ewewrDDSD</div>
		</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-collapse">
				<a class="mui-navigate-right" href="#">2017款</a>
				<div class="mui-collapse-content">
					<ul class="mui-table-view">
						<li class="mui-table-view-cell">Item 1</li>
						<li class="mui-table-view-cell">Item 2</li>
						<li class="mui-table-view-cell">Item 3</li>
					</ul>
				</div>
			</li>
			<li class="mui-table-view-cell mui-collapse">
				<a class="mui-navigate-right" href="#">2016款</a>
				<div class="mui-collapse-content">
					<ul class="mui-table-view">
						<li class="mui-table-view-cell">Item 1</li>
						<li class="mui-table-view-cell">Item 2</li>
						<li class="mui-table-view-cell">Item 3</li>
					</ul>
				</div>
			</li>
			<li class="mui-table-view-cell mui-collapse">
				<a class="mui-navigate-right" href="#">2015款</a>
				<div class="mui-collapse-content">
					<ul class="mui-table-view">
						<li class="mui-table-view-cell">Item 1</li>
						<li class="mui-table-view-cell">Item 2</li>
						<li class="mui-table-view-cell">Item 3</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>