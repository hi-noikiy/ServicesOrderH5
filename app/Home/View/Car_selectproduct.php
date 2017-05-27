<!doctype html>
<html>

<head>
	<include file="./app/Home/View/Include_head.php"/>
	<style>
		.title {
			text-align: center;
		}
		
		.mui-table-view-cell.mui-checkbox input[type=checkbox],
		.mui-table-view-cell.mui-checkbox input[type=radio] {
			top: 18px;
		}
		
		.mui-checkbox {
			font-size: 12px;
		}
		
		.mui-off-canvas-left,
		.mui-off-canvas-right {
			background-color: #FFFFFF;
		}
	</style>
</head>

<body>
	<div style="position: fixed;z-index: 10;height: 50px; line-height: 50px;width: 100%;bottom: 0px;left: 0px;background-color: #FFFFFF;overflow: hidden;" class="mui-row">
		<div class="mui-col-xs-8" style="padding-left: 10px;font-size: 12px;">合计：￥<span style="font-size: 18px;color: red;" id="sumPrice">0</span>
		</div>
		<div class="mui-col-xs-4"><a href="<?php echo U('home/car/selectshop') ?>" id="gourl" onClick="return isSubmit();" style="display: block;color: #FFFFFF;text-align: center;background-color: #D50225;max-width: 640px;">下一步</a>
		</div>
	</div>
	<div class="mui-content" style="padding-bottom: 50px;">
		<div class="mui-row" style="background-color: #FFFFFF;">
			<div class="mui-col-xs-8" style="padding: 10px;border-right:solid 1px #eeeeee;">
				<div class="mui-row">
					<div class="mui-col-xs-5"><img src="__PUBLIC__/assets/images/none-car.jpg" alt="" width="90%" id="carimg">
					</div>
					<div class="mui-col-xs-7"><span id="carname">加载中...</span><br><span style="font-size: 12px;color: #999999;" id="carModelName">加载中...</span>
					</div>
				</div>
			</div>
			<div class="mui-col-xs-4" style="padding: 10px;">
				<span id="licheng"></span>万公里<br><span style="font-size: 12px;color: #999999;" id="selectcityname">加载中...</span>
			</div>
		</div>
		<?php
		if ( $list ) {
			foreach ( $list[ 'serviceList' ] as $rs1 ) {
				?>
		<div class="title" style="line-height: 33px;">{$rs1['serviceName']}</div>
		<?php
		if ( $rs1[ 'serviceItemList' ] ) {
			foreach ( $rs1[ 'serviceItemList' ] as $rs2 ) {
				?>
		<?php
		if ( $rs2[ 'productList' ] ) {
			foreach ( $rs2[ 'productList' ] as $rs3 ) {
				?>
		<ul class="mui-table-view">
			<?php
			if ( $rs3 ) {
				foreach ( $rs3 as $rs4 ) {
					?>
			<li class="mui-table-view-cell mui-checkbox mui-left mui-media" style="line-height: 42px;">
				<input id="ckb{$rs4['productID']}" type="checkbox" mydata-id="{$rs4['productID']}" mydata-name="{$rs4['productName']}" mydata-price="{$rs4['salePrice']}" mydata-img="{$rs4['imgSrc']}"><img class="mui-media-object mui-pull-left" src="<?php if($rs4['imgSrc']==''){ ?>__PUBLIC__/assets/images/none-shop.jpg<?php }else{ ?>{$rs4['imgSrc']}<?php } ?>" width="42" height="42">{$rs4['productName']}<span class="mui-badge mui-badge-danger mui-badge-inverted">￥{$rs4['salePrice']}</span>
			</li>
			<?php
			}
			}
			?>
		</ul>
		<?php
		}
		}
		?>
		<?php
		}
		}
		?>
		<?php
		}
		}
		?>
	</div>
	<include file="./app/Home/View/Include_foot.php"/>
	<script>
		var carSeriesCode = _GETDATA( 'carSeriesCode' );
		var carSeriesImg = _GETDATA( 'carSeriesImg' );
		var carSeriesName = _GETDATA( 'carSeriesName' );
		var carModelCode = _GETDATA( 'carModelCode' );
		var carModelName = _GETDATA( 'carModelName' );
		var licheng = _GETDATA( 'licheng' );
		var selectcityname = _GETDATA( 'selectcityname' );
		jQuery( '#carname' ).html( carSeriesName );
		jQuery( '#carModelName' ).html( carModelName );
		jQuery( '#licheng' ).html( licheng );
		jQuery( '#selectcityname' ).html( selectcityname );
		if ( carSeriesImg != "" ) {
			jQuery( '#carimg' ).attr( 'src', carSeriesImg );
		}

		//alert( JSON.stringify( cplistjson ) );
		function createList() {
			var cplistjson = [];
			var sumPrice = 0;
			jQuery( ':checked' ).each( function ( index ) {
				cplistjson.push({
					productID:jQuery( this ).attr( 'mydata-id' ),
					productName:jQuery( this ).attr( 'mydata-name' ),
					salePrice:jQuery( this ).attr( 'mydata-price' ),
					imgSrc:jQuery( this ).attr( 'mydata-img' ),
					productNum:'1'
				});
				sumPrice += parseFloat(jQuery( this ).attr( 'mydata-price' ));
			} );
			jQuery('#sumPrice').text(sumPrice);
			_SAVEDATA('productList',JSON.stringify( cplistjson ));
			//alert( JSON.stringify( cplistjson ) );
		}
		jQuery( ':checkbox' ).change( function () {
			createList();
		} );
		
		var productList = _GETDATA( 'productList' );
		var sumPrice = 0;
		if(productList!=undefined && productList!=null && productList!="" && productList!="[]"){
			//alert(productList);
			productList = eval('('+productList +')');
			jQuery.each(productList,function(entryIndex,data){
				jQuery('#ckb'+data['productID']).prop('checked',true);
				sumPrice += parseFloat(data['salePrice']);
			});
			jQuery('#sumPrice').text(sumPrice);
		}
		function isSubmit(){
			var productList = _GETDATA( 'productList' );
			//alert(productList);
			if(productList==undefined || productList==null || productList=="" || productList=="[]"){
				mui.alert('请选择保养项目');
				return false;
			}
			jQuery('#gourl').attr('href',jQuery('#gourl').attr('href')+'?cityid='+_GETDATA( 'selectcity' ));
			return true;
		}
	</script>
</body>

</html>