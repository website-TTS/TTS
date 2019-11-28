@extends('index')
@section('css')
	<link rel="stylesheet" href="./common/css/Style_User_Login.css" ></link>
	<link rel="stylesheet" href="./common/css/bootstrap.css">
	<script src="./js/bootstrap.min.js"></script>
@endsection
@section('container')
	<div class="reponsive">
		<div  class="box-form-view">
			<div class="box_form_login">

				<p style="text-align: center; padding-top: 10px;"><b>Đăng nhập</b></p>

				<form  method="post" class="form" role="form">  

					<div class="form-group has-feedback">
						<input type="email" name="email" placeholder="Email hoặc số điện thoại" class="form-control">
						<i class="glyphicon glyphicon-envelope form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<i class="glyphicon glyphicon-lock form-control-feedback"></i>
						<input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
					</div>
			    	<br>
			    	<div class="checkbox">
			    		<input type="checkbox" name="remember">
			    		<label>Remember</label>
			    	</div>
			    	
			    	<button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng nhập</button> 

			    	<a href="#">Quên mật khẩu ?</a>
				    	
			   </form> 
			    
			    <?php
	     //             include('connect_user_login.php');
					 
	     //             if(isset($_POST['login_user_submit']))
					 // {
	     //                 $user=$_POST['user'];
	     //                 $pass=$_POST['pass'];
						 
	     //                 if($user == "" || $pass == "" )
						//  {
	     //                     echo '<p style="text-align:center">Hãy điền đầy đủ thông tin!!!</p>';
							 
	     //                 }
						//  else
						//  {
	     //                     $pass = md5($pass);
							 
	     //                     $sql="SELECT * FROM `userform` WHERE user = '$user' and pass = '$pass' ";
							 
	     //                     $query=mysqli_query($connect,$sql);
							 
	     //                     $num_rows= mysqli_num_rows($query);
							 
	     //                     if($num_rows!=0)
						// 	 {
	     //                         $rows= mysqli_fetch_assoc($query);
	     //                         echo '<p style="text-align:center">Bạn đã đăng nhập thành công!!!</p>';
	     //                         $_SESSION['user']=$rows['user'];
	     //                     }
						// 	 else
						// 	 {
	     //                         echo '<p style="text-align:center">Bạn đã đăng nhập không thành công!!!</p>';
	     //                     }
	     //                 }
	     //             }
	             ?>

			</div>		<!-- Kết thúc box_form_register  -->
		</div>
	</div>	
@endsection
@section('js')
	<script src="./js/jquery-1.11.1.min.js"></script>
@endsection