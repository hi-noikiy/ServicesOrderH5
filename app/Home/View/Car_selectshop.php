<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/mui.picker.min.css"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
		.show-data,
		#userResult，.xslc {
			margin-right: 40px;
			float: right;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<ul class="mui-table-view">
			<li class="mui-table-view-cell">
				<a class="mui-navigate-right btn" id='selectdate'>预约日期<span class="show-data" id="selectdateshow">请选择预约日期</span></a>
			</li>
		</ul>
		<ul class="mui-table-view mui-table-view-chevron">
			<?php
			if ( $list ) {
				foreach ( $list as $v ) {
					?>
			<li class="mui-table-view-cell mui-media">
				<a href="<?php echo U('home/car/selectorder?subcode='.$v['subCode']); ?>" class="mui-navigate-right" onClick="return isSubmit('{$v['subCode']}','{$v['subName']}','{$v['subAddr']}','{$v['subPicture']}');">
						<img class="mui-media-object mui-pull-left" src="<?php if($v['subPicture']==''){ ?>__PUBLIC__/assets/images/none-shop.jpg<?php }else{ ?>{$v['subPicture']}<?php } ?>">
						<div class="mui-media-body">
							{$v['subName']}
							<p class='mui-ellipsis'>{$v['subAddr']}</p>
						</div>
					</a>
			
			</li>
			<?php
			}
			}
			?>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script src="__PUBLIC__/assets/js/mui.picker.min.js"></script>
	<script>
		var dtPicker = new mui.DtPicker( {
			type: 'date',
			beginDate: new Date( <?php echo date('Y',time()); ?>,<?php echo date('m',time()); ?>-1,<?php echo date('d',time()); ?>+1 ),
			endDate: new Date(<?php echo date('Y',time()+2592000); ?>,<?php echo date('m',time()+2592000); ?>-1,<?php echo date('d',time()+2592000); ?>+1 )
		} );
		jQuery( '#selectdate' ).click( function () {
			dtPicker.show( function ( s ) {
				jQuery( '#selectdateshow' ).text( s.y.value + '年' + s.m.value + '月' + s.d.value + '日' );
				_SAVEDATA( 'selectdate', s.y.value + '年' + s.m.value + '月' + s.d.value + '日' ); //保存进本地存储
			} )
		} );
		var data = _GETDATA( 'selectdate' );
		if ( data != undefined && data != null && data != "" ) {
			jQuery( '#selectdateshow' ).text( data );
		}

		function isSubmit( subCode, subName, subAddr, subPicture ) {
			var data = _GETDATA( 'selectdate' );
			if ( data == undefined || data == null || data == "" ) {
				mui.alert( '请选择预约日期' );
				return false;
			}
			_SAVEDATA( 'subCode', subCode ); //保存进本地存储
			_SAVEDATA( 'subName', subName );
			_SAVEDATA( 'subAddr', subAddr );
			_SAVEDATA( 'subPicture', subPicture );
			return true;
		}
	</script>
</body>

</html>