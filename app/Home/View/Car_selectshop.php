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