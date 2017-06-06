<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.datebox {
			font-size: 18px;
			background-color: #999999;
			color: #ffffff;
			line-height: 50px;
		}
		.timebox {
			line-height: 33px;
			background-color: #ffffff;
			border-top: solid 1px #c8c7cc;
			border-bottom: solid 1px #c8c7cc;
		}
		.timebox .mui-col-xs-4{
			padding: 10px;
		}
		.selected-time {
			text-align: center;
			background: #777;
			line-height: 20px;
			padding: 5px 0;
		}
		.selected-time .mui-col-xs-2{
			padding:5px 0;
		}
		.selected-time div {
			color: #eee;
		}
		
		.mui-row div div {
			font-size: 12px;
		}
		
		.selected{
			background: #B81215;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<!--<div class="mui-row datebox">
			<div class="mui-col-xs-10" style="padding-left: 10px;">预约日期：<span id="selectdateshow">2017年6月23日</span></div>
		</div>-->
		<div class="mui-row selected-time">
			<div class="mui-col-xs-2 selected">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 ">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 ">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 ">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
		</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<img class="mui-media-object mui-pull-left" src="__PUBLIC__/assets/images/none-shop.jpg" id="subPicture">
				<div class="mui-media-body">
					<span id="subName">加载中...</span>
					<p class='mui-ellipsis' id="subAddr">加载中...</p>
				</div>
			</li>
		</ul>
		<br>
		<div class="mui-row timebox">
		<?php
			if($list){
				foreach($list as $v){
		?>
			<div class=" mui-col-xs-4" style="">{$v['startTime']}-{$v['endTime']}</div>
			<div class=" mui-col-xs-4" style="text-align: center"><!--￥<span style="color: #FF0000">{$v['floatPrice']}</span>--></div>
			<div class=" mui-col-xs-4" style="text-align: right;"><a href="<?php echo U('home/car/createorder'); ?>" class="mui-btn mui-btn-danger" onClick="return isSubmit('{$v['subTimeID']}','{$v['startTime']}','{$v['endTime']}','{$v['floatPrice']}');">预订</a></div>
		<?php
				}
			}
		?>
		</div>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script>
		var data = _GETDATA( 'selectdate' );
		if ( data != undefined && data != null && data != "" ) {
			jQuery( '#selectdateshow' ).text( data );
			jQuery( '#subName' ).text( _GETDATA( 'subName' ) );
			jQuery( '#subAddr' ).text( _GETDATA( 'subAddr' ) );
			if ( _GETDATA( 'subPicture' ) != '' ) {
				jQuery( '#subPicture' ).attr( "src","<?php echo C('IMG_URL'); ?>"+_GETDATA( 'subPicture' ) );
			}
		}
		function isSubmit( subTimeID, startTime, endTime, floatPrice ) {
			_SAVEDATA( 'subTimeID', subTimeID ); //保存进本地存储
			_SAVEDATA( 'startTime', startTime );
			_SAVEDATA( 'endTime', endTime );
			_SAVEDATA( 'floatPrice', floatPrice );
			return true;
		}
		console.log(_GETDATA( 'selectdate' ))
		printtimeOn(_GETDATA( 'selectdate' ), 0)
		
		function printtimeOn(date, num) {
			var date = new Date(date);
			date.setDate(date.getDate() - num);
			var md = document.querySelectorAll(".md");
			var timeBox = document.querySelectorAll(".time-box");
			$(timeBox[num]).addClass("selected-time");
			var week = document.querySelectorAll(".week");
			md[0].innerHTML = customdate(date)[0];
			week[0].innerHTML = customdate(date)[1];
			for (var i = 1; i < 6; i++) {
				date.setDate(date.getDate() + 1);
				md[i].innerHTML = customdate(date)[0];
				week[i].innerHTML = customdate(date)[1];
			}
		}
		function customdate(date) {
			var date = new Date(date);
			var arr = [];
			var mon = date.getMonth() + 1;
			var week = date.getDay();
			var day = date.getDate();
			var str1 = (mon = mon < 10 ? "0" + mon : mon) + "-" + (day = day < 10 ? "0" + day : day);
			var str2 = "";
			switch (week) {
				case 0:
					str2 = "(周日)"
					break;
				case 1:
					str2 = "(周一)"
					break;
				case 2:
					str2 = "(周二)"
					break;
				case 3:
					str2 = "(周三)"
					break;
				case 4:
					str2 = "(周四)"
					break;
				case 5:
					str2 = "(周五)"
					break;
				case 6:
					str2 = "(周六)"
					break;
			}
			arr[0] = str1;
			arr[1] = str2;
			return arr;
		}
	</script>
</body>

</html>