@extends('index')
@section('css')
<link rel="stylesheet" href="./common/css/Style_User_Login.css" ></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@endsection
@section('container')

<div class="form-full-row">
	<div class="box_form_register">

		<p style="text-align: center;"><b>Đăng Ký</b></p>

		<form  method="post" class="form" role="form" action="register">  

			<div class="form-group has-feedback">
				<i class="glyphicon glyphicon-user form-control-feedback"></i>
			    <input type="text" class="form-control" name="name" placeholder="Họ và tên" />
			</div>
			<div class="form-group has-feedback">
				<input type="email" name="email" placeholder="Email" class="form-control">
				<i class="glyphicon glyphicon-envelope form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<i class="glyphicon glyphicon-phone form-control-feedback"></i>
				<input type="phone" name="phone" placeholder="Số điện thoại" class="form-control">
			</div>
			<div class="form-group has-feedback">
				<i class="glyphicon glyphicon-lock form-control-feedback"></i>
				<input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
			</div>
			<div class="form-group has-feedback">
				<i class="glyphicon glyphicon-lock form-control-feedback"></i>
				<input type="password" name="repass" placeholder="Nhập lại mật khẩu" class="form-control">
			</div>
	    	<br> 
	    	<button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
		    	
	   </form> 
	</div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
@endsection