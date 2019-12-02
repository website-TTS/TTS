@extends('index')
@section('css')

	<link rel="stylesheet" href="../common/css/style.css" >
	<link rel="stylesheet" href="../common/css/StyleCart.css" >
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>

@endsection
@section('container')
	
	<div class="view_cart">
		<div class="col-md-12">
			<p>Giỏ hàng có ...sản phẩm</p>
		</div>
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active" bgcolor="red;">
					<td width="14%">Ảnh Laptop</td>
					<td width="20%">Tên sản phẩm</td>
					<td width="15%">Số lượng</td>
					<td width="16%">Đơn giá</td>
					<td width="16%">Thành tiền</td>
					<td width="19%">Hành động</td>
				</tr>
				
				<tr>
					<td><img src="" class="img-responsive"></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<button class="del_lap" type="submit">Xóa hàng</button>
						<button class="update_lap" type="submit">Cập nhật</button>
					</td>
				</tr>
				
			</table>
		</form>
	</div>
@endsection