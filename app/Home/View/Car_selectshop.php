<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/mui.picker.min.css"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/icons-extra.css"/>
	<style>
		.datebox {
			font-size: 18px;
			background-color: #999999;
			color: #ffffff;
			line-height: 50px;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="mui-row datebox">
		<div class="mui-col-xs-10" style="padding-left: 10px;" id="selectdateshow">2017年6月23日</div>
		<div class="mui-col-xs-2" style="padding-right: 10px;text-align: right;font-size: 25px;" id="selectdate"><i class="mui-icon-extra mui-icon-extra-calendar"></i></div>
		</div>
		<ul class="mui-table-view mui-table-view-chevron">
		<?php
			if($list){
				foreach($list as $v){
			?>
			<li class="mui-table-view-cell mui-media">
				<a href="<?php echo U('home/car/selectorder?subcode='.$v['subCode']); ?>" class="mui-navigate-right" onClick="return isSubmit('{$v['subCode']}','{$v['subName']}','{$v['subAddr']}','{$v['subPicture']}');">
						<img class="mui-media-object mui-pull-left" src="<?php if($v['subPicture']==''){ ?>__PUBLIC__/assets/images/none-shop.jpg<?php }else{ ?>{$v['subPicture']}<?php } ?>">
						<div class="mui-media-body">
							{$v['subName']}
							<p class='mui-ellipsis'>{$v['subAddr']}</p>
						</div>
					</a>
<<<<<<< Updated upstream
				
				</li>
				<li class="mui-table-view-cell mui-media">
					<a href="javascript:;">
						<img class="mui-media-object mui-pull-left" src="../../../public/assets/images/shop.png">
						<div class="mui-media-body">
							武汉中发雪铁龙4S店
							<p class='mui-ellipsis'>武汉市洪山区大学园路7号</p>
						</div>
					</a>
				
				</li>
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
			</div>
			<include file="./app/Home/View/Include_foot.php"/>
			<script src="__PUBLIC__/assets/js/mui.picker.min.js"></script>
			<script>
				$(".time-box").click(function(){
					$(".selected-time").removeClass("selected-time");
					$(this).addClass("selected-time");
				});
				
				var nextdate=new Date();
				nextdate.setDate(nextdate.getDate()+1);
				printtimeOn(nextdate);
				document.getElementById("select-time").onclick=selecttime;
				
				function selecttime(){
					var dtpicker = new mui.DtPicker( {
						type: "date", //设置日历初始视图模式 
						beginDate: new Date( 2015, 04, 25 ), //设置开始日期 
						endDate: new Date( 2016, 04, 25 ) //设置结束日期 
					} )
				
					dtpicker.show( function ( obj ) {
						$(".selected-time").removeClass("selected-time");
						var olddate= obj.text;
						var date=new Date(olddate);
						printtimeOn(date)

					})ngc
				}
				function printtimeOn(date){
					date.setDate(date.getDate());
					var md=document.querySelectorAll(".md");
					var timeBox=document.querySelectorAll(".time-box");
						$(timeBox[0]).addClass("selected-time ");
					var week=document.querySelectorAll(".week");
						md[0].innerHTML=printdate(date)[0];
						week[0].innerHTML=printdate(date)[1];
					for(var i=1;i<5;i++){
						date.setDate(date.getDate()+1);
						md[i].innerHTML=printdate(date)[0];
						week[i].innerHTML=printdate(date)[1];
					}
				}
				function printdate(date){
					var arr=[];
					var mon=date.getMonth()+1;
					var week=date.getDay();
					var day=date.getDate();
					var str1=(mon=mon<10?"0"+mon:mon)+"-"+day;
					switch(week){
						case 0:
						str2="（周日）"
						break;
							case 1:
						str2="(周一）"
						break;
							case 2:
						str2="（周二）"
						break;
							case 3:
						str2="（周三）"
						break;
							case 4:
						str2="（周四）"
						break;
							case 5:
						str2="（周五）"
						break;
							case 6:
						str2="（周六）"
						break;
					}
					arr[0]=str1;
					arr[1]=str2;
					return arr;
=======
			</li>
				<?php
>>>>>>> Stashed changes
				}
			}
			?>
		</ul>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script src="__PUBLIC__/assets/js/mui.picker.min.js"></script>
	<script>
		var dtPicker = new mui.DtPicker({type:'date',beginDate:new Date(<?php echo date('Y',time()); ?>-20,01,01),endDate:new Date()}); 
		jQuery('#selectdate').click(function(){
			dtPicker.show(function (s) {
				jQuery('#selectdateshow').text(s.y.value+'年'+s.m.value+'月'+s.d.value+'日');
				_SAVEDATA('selectdate',s.y.value+'年'+s.m.value+'月'+s.d.value+'日');//保存进本地存储
			})
		});
		var data = _GETDATA('selectdate');
		if(data!=undefined && data!=null && data!=""){
			jQuery('#selectdateshow').text(data);
		}
		
		function isSubmit(subCode,subName,subAddr,subPicture){
			var data = _GETDATA('selectdate');
			if(data!=undefined && data!=null && data!=""){
				mui.alert('请选择预约日期');
				return false;
			}
			_SAVEDATA('subCode',subCode);//保存进本地存储
			_SAVEDATA('subName',subName);
			_SAVEDATA('subAddr',subAddr);
			_SAVEDATA('subPicture',subPicture);
			return true;
		}
	</script>
</body>

</html>