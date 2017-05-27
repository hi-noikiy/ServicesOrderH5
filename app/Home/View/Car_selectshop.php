<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/mui.picker.min.css"/>
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
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
			</div>
			<div class="mui-col-xs-2 time-box"><a href="#">
				<span class="md">03-25</span>
				<div class="week">（周二）</div>
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
				})
				printtimeOn(new Date)
				document.getElementById("select-time").onclick=selecttime;
				function selecttime(){
					var dtpicker = new mui.DtPicker( {
						type: "date", //设置日历初始视图模式 
						beginDate: new Date( 2015, 04, 25 ), //设置开始日期 
						endDate: new Date( 2016, 04, 25 ) //设置结束日期 
					} )
				
				dtpicker.show( function ( obj ) {
					var olddate= obj.text;
					var date=new Date(olddate);
					printtimeOn(date)
					
				} )
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
					console.log(arr);
					return arr;
				}
			</script>
</body>

</html>