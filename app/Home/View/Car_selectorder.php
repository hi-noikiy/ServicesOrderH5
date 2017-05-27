<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.mui-content>.mui-table-view:first-child {
			margin-top: 0;
		}
		
		.mui-row {
			text-align: center;
			background: #777;
			line-height: 20px;
			padding: 5px 0;
		}
		ul.mui-row {
			list-style:none;
			background: #fff;
			padding: 15px 0;
			margin:0;
		}
		.mui-col-xs-2{
			padding:5px 0;
		}
		.price{
			color:#D11F22;
		}
		.mui-row div a {
			color: #eee;
		}
		
		.mui-row div div {
			font-size: 12px;
		}
		
		.selected-time {
			background: #B81215;
			border-radius: 10px;
		}
		
		.mui-table-view .mui-media-object {
			line-height: 80px;
			max-width: 80px;
			height: 80px;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-row">
			<div class="mui-col-xs-2"><a href="#">
				<span >03-25</span>
				<div>（周二）</div>
			</div>
			<div class="mui-col-xs-2 selected-time"><a href="#">
				<span >03-25</span>
				<div>（周二）</div>
			</div>
			<div class="mui-col-xs-2"><a href="#">
				<span >03-25</span>
				<div>（周二）</div>
			</div>
			<div class="mui-col-xs-2"><a href="#">
				<span >03-25</span>
				<div>（周二）</div>
			</div>
			<div class="mui-col-xs-2"><a href="#">
				<span >03-25</span>
				<div>（周二）</div>
			</div>
			<div class="mui-col-xs-2" id="select-time" style="font-size: 10px;line-height: 15px"><a href="#">
				选择<br>时间
			</div>
		</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/shop.png">
					<div class="mui-media-body">
						武汉中发雪铁龙4S店
						<p class='mui-ellipsis'>武汉市洪山区大学园路7号</p>
					</div>
				</a>
			</li>
		</ul>
		<ul class="mui-row">
			<li class=" mui-col-xs-4">
			08:30-09:30
			</li>
			<li class=" mui-col-xs-4 price">
			￥560
			</li>
			<li class=" mui-col-xs-4">
			<button type="button" class="mui-btn mui-btn-danger">
					预订
				</button>
			</li>
		</ul>
		<ul class="mui-row">
			<li class=" mui-col-xs-4">
			08:30-09:30
			</li>
			<li class=" mui-col-xs-4 price">
			￥560
			</li>
			<li class=" mui-col-xs-4">
			<button type="button" class="mui-btn mui-btn-danger">
					预订
				</button>
			</li>
		</ul>
		<ul class="mui-row">
			<li class=" mui-col-xs-4">
			08:30-09:30
			</li>
			<li class=" mui-col-xs-4 price">
			￥560
			</li>
			<li class=" mui-col-xs-4">
			<button type="button" class="mui-btn mui-btn-danger">
					预订
				</button>
			</li>
		</ul>
		<ul class="mui-row">
			<li class=" mui-col-xs-4">
			08:30-09:30
			</li>
			<li class=" mui-col-xs-4 price">
			￥560
			</li>
			<li class=" mui-col-xs-4">
			<button type="button" class="mui-btn mui-btn-danger">
					预订
				</button>
			</li>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>