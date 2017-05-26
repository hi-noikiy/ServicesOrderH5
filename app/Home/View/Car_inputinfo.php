<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/mui.picker.min.css"/>
	<style>
		.mui-content>.mui-table-view:first-child {
			margin-top: 0;
		}
		
		.show-data,
		#userResult，.xslc {
			margin-right: 40px;
			float: right;
		}
		
		.mui-navigate-right input {
			border: none;
			outline: none;
			width: 200px;
		}
	</style>
</head>

<body>
	<div class="mui-content">
		<div class="title">请完善一下信息便于更精确的为您提供保养套餐</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell">
				<a class="mui-navigate-right btn" id='buydate'>
						 购车时间
						 <span class="show-data" id="buydateshow"></span>
				</a>
			
			</li>
			<li class="mui-table-view-cell" style="padding:0">
				<div class="mui-input-row" style="padding-right:50px">
					<label>行驶里程</label>
					<input id="licheng" type="number" placeholder="请输入公里数" style="text-align:right">
				</div>
				<span class="mui-badge mui-badge-inverted">万公里</span>
			</li>
			<li class="mui-table-view-cell">
				<a class="mui-navigate-right" id="selectcity">
						城市
						<span class="show-data" id="selectcityshow"></span>
				</a>
			</li>
		</ul>
		<a href="<?php echo U('home/car/selectproduct') ?>" onClick="return isSubmit();" style="color: #FFFFFF;position: fixed;z-index: 10;line-height: 50px;text-align: center;width: 100%;bottom: 0px;left: 0px;background-color: #CE0104;max-width: 640px;">查看保养方案</a>
	
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script src="__PUBLIC__/assets/js/mui.picker.min.js"></script>
	<script>
		_SAVEDATA('carModelCode','<?php echo I('get.id'); ?>');//将选择的车型编号保存进本地存储
		var dtPicker = new mui.DtPicker({type:'date',beginDate:new Date(<?php echo date('Y',time()); ?>-20,01,01),endDate:new Date()}); 
		jQuery('#buydate').click(function(){
			dtPicker.show(function (s) {
				jQuery('#buydateshow').text(s.y.value+'-'+s.m.value+'-'+s.d.value);
				_SAVEDATA('buydate',s.y.value+'-'+s.m.value+'-'+s.d.value);//保存进本地存储
			})
		});
		var picker = new mui.PopPicker();
		picker.setData([
			<?php
			if($list){
				foreach($list as $v){
			?>
			{value:'{$v['cityCode']}',text:'{$v['cityName']}'},
			<?php
				}
			}
			?>
		]);
		jQuery('#selectcity').click(function(){
			picker.show(function (selectItems) {
				jQuery('#selectcityshow').text(selectItems[0].text);
				_SAVEDATA('selectcity',selectItems[0].value);//保存进本地存储
				//console.log(selectItems[0].text);//智子
				//console.log(selectItems[0].value);//zz 
			})
		});
		jQuery('#licheng').blur(function(){
			_SAVEDATA('licheng',jQuery('#licheng').val());//保存进本地存储
		});
		function isSubmit(){
			if(jQuery('#buydateshow').text()==''){
				mui.alert('请填写购车日期');
				return false;
			}
			if(jQuery('#licheng').val()==''){
				mui.alert('请填写行驶里程');
				return false;
			}
			if(jQuery('#selectcityshow').text()==''){
				mui.alert('请选择您的城市');
				return false;
			}
			return true;
		}
	</script>
</body>

</html>