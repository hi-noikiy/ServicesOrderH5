<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/mui.picker.min.css"/>
	<style>
		.mui-row {
			text-align: center;
			background: #777;
			line-height: 20px;
			padding: 5px 0;
		}
		
		.mui-col-xs-2 {
			padding: 5px 0;
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
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-row">
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md"></span>
				<div class="week"></div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md"></span>
				<div class="week"></div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md">03-25</span>
				<div class="week"></div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md"></span>
				<div class="week"></div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md"></span>
				<div class="week"></div>
			</div>
			<div class="mui-col-xs-2" id="select-time" style="font-size: 10px;line-height: 15px"><a href="#">
				选择<br>时间
			</div>
		</div>
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
				
				var global_year; /*获取时间年份*/
				$( ".time-box" ).click( function () {
					var selectedTime = $( ".selected-time" );
					if ( selectedTime ) {
						selectedTime.removeClass( "selected-time" );
					}
					$( this ).addClass( "selected-time" );
					var month = $( this ).find( ".md" ).html();
					var year;
					if(global_year){
						year = global_year;
					}else{
						year=new Date();
						year=year.getFullYear();
					}
					savetime( year + "-" + month );
					
				} );
				/*保存 时间*/
				function savetime(time){
					var selecteddate = new Date(time);
					var selectedtime = selecteddate.getFullYear() + "年" + ( selecteddate.getMonth() + 1 ) + "月" + selecteddate.getDate() + "日";
					_SAVEDATA( 'selectdate',selectedtime )
				}
				
				$(function(){
				var nextdate;//声明时间
					var num=0;
				//如果location里面有时间
				if(_GETDATA( 'selectdate' )){
					var str=_GETDATA( 'selectdate' ).replace(/[\u4e00-\u9fa5]/g,"-");
					str=str.substring(0,str.length-1);
					nextdate =new Date(str);
				}else{
					nextdate = new Date();
					nextdate.setDate( nextdate.getDate() + 1 );
				}
				if(checkedEndTime(nextdate)){num=4};
				printtimeOn( nextdate,num);
				})
				 /*验证是否为 最后一天*/
				function checkedEndTime(nextdate){
					var endtime=new Date( <?php echo date('Y',time()+2592000); ?>, <?php echo date('m',time()+2592000); ?> - 1, <?php echo date('d',time()+2592000); ?> + 1 );
					var currenttime=new Date(nextdate);
					if(currenttime.getTime()>=endtime.getTime()){
						return true;
					};
					return false;
				}
				document.getElementById( "select-time" ).onclick = selecttime;
				function selecttime() {
					var dtpicker = new mui.DtPicker( {
						type: "date", //设置日历初始视图模式 
						beginDate: new Date( <?php echo date('Y',time()); ?>, <?php echo date('m',time()); ?> - 1, <?php echo date('d',time()); ?> + 1 ), //设置开始日期 
						endDate: new Date( <?php echo date('Y',time()+2592000); ?>, <?php echo date('m',time()+2592000); ?> - 1, <?php echo date('d',time()+2592000); ?> + 1 ) //设置结束日期 
					} );
					
					dtpicker.show( function ( obj ) {
						var selectedTime = $( ".selected-time" );
						if ( selectedTime ) {
							selectedTime.removeClass( "selected-time" );
						}
						var olddate = obj.text;
						savetime(olddate);//保存时间
						var date = new Date( olddate );
						global_year=date.getFullYear();
						var num=0;
						if(checkedEndTime(unifyTime(date))){num=4};
						printtimeOn( date,num)

					} )
				}
				/*时间打印到页面*/
				function printtimeOn( date,num) {
					date.setDate( date.getDate() -num);
					var md = document.querySelectorAll( ".md" );
					var timeBox=document.querySelectorAll(".time-box");
						$(timeBox[num]).addClass("selected-time ");
					var week = document.querySelectorAll( ".week" );
					md[ 0 ].innerHTML = customdate( date )[ 0 ];
					week[ 0 ].innerHTML = customdate( date )[ 1 ];
					for ( var i = 1; i < 5; i++ ) {
						date.setDate( date.getDate() + 1 );
						md[ i ].innerHTML = customdate( date )[ 0 ];
						week[ i ].innerHTML = customdate( date )[ 1 ];
					}
				}
				/*定制时间格式*/
				function customdate( date ) {
					var arr = [];
					var mon = date.getMonth() + 1;
					var week = date.getDay();
					var day = date.getDate();
					var str1 = ( mon = mon < 10 ? "0" + mon : mon ) + "-" + day;
					var str2="";
					switch ( week ){
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
					arr[ 0 ] = str1;
					arr[ 1 ] = str2;
					return arr;
				}
				function unifyTime(date){
					var str;
					var year=date.getFullYear();
					var mon = date.getMonth() + 1;
					var week = date.getDay();
					var day = date.getDate();
					var str =year+"-"+mon +"-"+day;
					return str;
				}
				/*保存数据*/
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