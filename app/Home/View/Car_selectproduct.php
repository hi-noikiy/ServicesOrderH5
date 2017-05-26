<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.mui-content>.mui-table-view:first-child {
			margin-top: 0;
		}
		
		.mui-table-view .mui-media-object {
			max-width: 100%;
		}
		
		.mui-media-body div {
			width: 48%;
			float: left;
			text-align: center
		}
		
		.title {
			text-align: center;
		}
		
		.mui-btn-danger {
			margin-left: 50px;
		}
		.mui-input-group .mui-input-row {
    		height:70px; 
		}
		.roduct-list-detail{
			margin-left:70px;
		}
		.roduct-list-detail ul{
			overflow:hidden;
		}
		roduct-list-detail ul li{
			float:right;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
						<img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/page1-als.jpg">
						<div class="mui-media-body">
							<div>
								东风雪铁龙-C3-XR
								<p class='mui-ellipsis'>2015款1.6THP自动型</p>
							</div>
							<div>
								5000   km
								<p class='mui-ellipsis'>当前里程</p>
							</div>
						</div>
					</a>
			
			</li>
		</ul>
		<div class="title">
			小保养项目
			<button type="button" class="mui-btn mui-btn-danger">
					选机油
				</button>
		
		</div>
		<div class="mui-table-view">
			<form class="mui-input-group">
				<div class="mui-input-row mui-radio mui-left" >
					<ul class="product-list-detail">
						<li>
							<img  src="__PUBLIC__/assets/images/page1-als.jpg">
						</li>
						<li>
							小保养服务(不含工时)
						</li>
						<li>
							￥400
						</li>
					</ul>
					<input name="radio1" type="radio">
				</div>
			</form>
		</div>
	</div>

	<include file="./app/Home/View/Include_foot.php"/>
</body>

</html>