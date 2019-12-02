@extends('index')
@section('title')
| ShoppingCart </title>
@endsection
@section('css')
	<link rel="stylesheet" href="./common/css/shopping.css" >
@endsection
@section('container')
	<div class="reponsive">
		<div class="shopping">
			<div class="shopping-box">
				<div class="shopping-top">
					<a href="home" class="shopping-top__homebtn">TIẾP TỤC MUA HÀNG</a>
					<p class="js-deletebtn shopping-top__Clearbtn">XÓA GIỎ HÀNG</p>
				</div>
				<div class="shopping-goods">
					<div class="shopping-goods-img">
						<img src="./common/img/ACER/Aspire-5/Acer_Aspire_5_A514.jpg">
					</div>
					<div class="shopping-goods-info">
						<div class="shopping-goods-info-content">
							<h4>XXXXXXXX</h4>
						</div>
						<div class="shopping-goods-info-delete">
							<img  class="shopping-goods-info-delete__img" src="./common/img/recycle-bin.png">
							<p>Xóa khỏi giỏ hàng</p>
						</div>
					</div>
					<div class="shopping-goods-info-math">
						<div class="js-minusbtn shopping-goods-info-math__minus">-</div>
						<div class="js-number shopping-goods-info-math__number">1</div>
						<div class="js-plusbtn shopping-goods-info-math__plus">+</div>
					</div>
				</div>
				<div class="shopping-goods">
					<div class="shopping-goods-img">
						<img src="./common/img/ACER/Aspire-5/Acer_Aspire_5_A514.jpg">
					</div>
					<div class="shopping-goods-info">
						<div class="shopping-goods-info-content">
							<h4>XXXXXXXX</h4>
						</div>
						<div class="shopping-goods-info-delete">
							<img  class="shopping-goods-info-delete__img" src="./common/img/recycle-bin.png">
							<p>Xóa khỏi giỏ hàng</p>
						</div>
					</div>
					<div class="shopping-goods-info-math">
						<div class="js-minusbtn shopping-goods-info-math__minus">-</div>
						<div class="js-number shopping-goods-info-math__number">1</div>
						<div class="js-plusbtn shopping-goods-info-math__plus">+</div>
					</div>
				</div>
			</div>
			<div class="pay">
			 	<div class="pay-provisional">
			 		<div class="pay-provisional-left">
				 		<p>Tạm tính: </p>
				 		<p>Tạm tính: </p>
				 		<p>Tạm tính: </p>
				 	</div>
			 		<div class="pay-provisional-right">
				 		<p>xxxxxx</p>
				 		<p>xxxxxx</p>
				 		<p>xxxxxx</p>
				 		<p>(Đả bao gồm VAT)</p>
					 </div>
			 	</div>
			 	<div style="width: 90%; margin: 0 auto;"><hr></div>
			 	<div class="pay-buy">
			 		<div class="pay-buy-login">
			 			<a href="#">THANH TOÁN</a>
			 		</div>
			 		<div class="pay-buy-unlogin">			 			
			 			<a href="#">
			 				<img src="./common/img/buying.png" style="padding-right: 5px;">
			 				Thanh toán ngay không cần đăng nhập
			 			</a>
			 		</div>
			 	</div>
			</div>
		</div>		
	</div>
@endsection
@section('js')
	<script  src="./common/js/shoppingcart.js"></script>
@yield('js')
@endsection