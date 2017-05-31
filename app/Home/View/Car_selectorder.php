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
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-row datebox">
			<div class="mui-col-xs-10" style="padding-left: 10px;">预约日期：<span id="selectdateshow">2017年6月23日</span></div>
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
			<div class=" mui-col-xs-4" style="text-align: center">￥<span style="color: #FF0000">{$v['floatPrice']}</span></div>
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
				jQuery( '#subPicture' ).text( _GETDATA( 'subPicture' ) );
			}
		}
		function isSubmit( subTimeID, startTime, endTime, floatPrice ) {
			_SAVEDATA( 'subTimeID', subTimeID ); //保存进本地存储
			_SAVEDATA( 'startTime', startTime );
			_SAVEDATA( 'endTime', endTime );
			_SAVEDATA( 'floatPrice', floatPrice );
			return true;
		}
	</script>
</body>

</html>