<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Admin </title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    background: #007bff;
		background: url(../IMG/4.jpg);
		background-position: center;
        background-size: cover;
        height: 100vh;
	}


	#login{
		position: absolute;
		width:80%;
		left: 80px;
		top: 160px;
		background:white;
		display: flex;
		/* align-items: center; */
	}
	.form{
        margin-left: 40%;
        width: 750px;
        height: 570px;
        background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
        position: absolute;
        top: 180px;
		right: 400px;
        transform: translate(0%,-5%);
        border-radius: 10px;
        padding: 25px;
    }
   

.menu{
    width: 1150px;
    float: left;
    height: 70px;
	color: #ff7300;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}
ul li{
    list-style: none;
    margin-right: 120px;
    margin-top: 25px;
    font-size: 17px;
}
ul li a{
    text-decoration: none;
    color: #ff7300;
    font-family: Georgia;
    font-weight: bold;
    transition: 0.9s ease-in-out;
}
ul li a:hover{
    color: #ffffff;
}

</style>

<body>

            <div class="menu">
                <ul>
                    <li><a href="../Index.html">Online Flight Booking <br> Management System</a></li>
                </ul>
            </div>

  <main id="main" class=" bg-dark">

  <div class="form">	
  <div id="login">
  			<div class="card col-md-8">
  				<div class="card-body">
					
  					<form id="login-form" >
					  <p align=center >ADMIN LOGIN</p>
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
		 
		  </div>

  </main>

  <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>