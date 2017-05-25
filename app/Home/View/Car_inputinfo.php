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
				<a class="mui-navigate-right btn" id='demo2' data-options='{"type":"date","beginYear":2014,"endYear":2016}'>
						 购车时间
						 <span class="show-data"></span>
				</a>
			</li>
			<li class="mui-table-view-cell">
				<div class="mui-input-row">
					<label>行驶里程</label>
					<input type="text" placeholder="普通输入框">
				</div>
			</li>
			<li class="mui-table-view-cell">
				<a class="mui-navigate-right" id="showUserPicker">
						城市
						<span class="show-data" id="userResult"></span>
				</a>
			

			</li>
		</ul>
		<div id='result' class="ui-alert"></div>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script src="__PUBLIC__/assets/js/mui.picker.min.js"></script>
	<script>
		( function ( $ ) {
			$.init();
			var result = $( '#demo2 span' )[ 0 ];
			var btns = $( '.btn' );
			btns.each( function ( i, btn ) {
				btn.addEventListener( 'tap', function () {
					var optionsJson = this.getAttribute( 'data-options' ) || '{}';
					var options = JSON.parse( optionsJson );
					var id = this.getAttribute( 'id' );
					/*
					 * 首次显示时实例化组件
					 * 示例为了简洁，将 options 放在了按钮的 dom 上
					 * 也可以直接通过代码声明 optinos 用于实例化 DtPicker
					 */
					var picker = new $.DtPicker( options );
					picker.show( function ( rs ) {
						/*
						 * rs.value 拼合后的 value
						 * rs.text 拼合后的 text
						 * rs.y 年，可以通过 rs.y.vaue 和 rs.y.text 获取值和文本
						 * rs.m 月，用法同年
						 * rs.d 日，用法同年
						 * rs.h 时，用法同年
						 * rs.i 分（minutes 的第二个字母），用法同年
						 */
						result.innerText = rs.text;
						/* 
						 * 返回 false 可以阻止选择框的关闭
						 * return false;
						 */
						/*
						 * 释放组件资源，释放后将将不能再操作组件
						 * 通常情况下，不需要示放组件，new DtPicker(options) 后，可以一直使用。
						 * 当前示例，因为内容较多，如不进行资原释放，在某些设备上会较慢。
						 * 所以每次用完便立即调用 dispose 进行释放，下次用时再创建新实例。
						 */
						picker.dispose();
					} );
				}, false );
			} );
		} )( mui );

		( function ( $, doc ) {
			$.init();
			$.ready( function () {
				/**
				 * 获取对象属性的值
				 * 主要用于过滤三级联动中，可能出现的最低级的数据不存在的情况，实际开发中需要注意这一点；
				 * @param {Object} obj 对象
				 * @param {String} param 属性名
				 */
				var _getParam = function ( obj, param ) {
					return obj[ param ] || '';
				};
				//普通示例
				var userPicker = new $.PopPicker();
				userPicker.setData( [ {
					value: 'ywj',
					text: '董事长 叶文洁'
				}, {
					value: 'aaa',
					text: '总经理 艾AA'
				}, {
					value: 'lj',
					text: '罗辑'
				}, {
					value: 'ymt',
					text: '云天明'
				}, {
					value: 'shq',
					text: '史强'
				}, {
					value: 'zhbh',
					text: '章北海'
				}, {
					value: 'zhy',
					text: '庄颜'
				}, {
					value: 'gyf',
					text: '关一帆'
				}, {
					value: 'zhz',
					text: '智子'
				}, {
					value: 'gezh',
					text: '歌者'
				} ] );
				var showUserPickerButton = doc.getElementById( 'showUserPicker' );
				var userResult = doc.getElementById( 'userResult' );
				showUserPickerButton.addEventListener( 'tap', function ( event ) {
					userPicker.show( function ( items ) {
						userResult.innerText = JSON.stringify( items[ 0 ] );
						//返回 false 可以阻止选择框的关闭
						//return false;
					} );
				}, false );
				//-----------------------------------------
			} );
		} )( mui, document );
	</script>
</body>

</html>