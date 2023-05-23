<?php 

	session_start();

	if(isset($_SESSION['userlogin'])){
		header("Location: ./Assistant/home.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Agriculture Management System - Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/style.css">
		<style>
        body {
        background-image: url("images/image\ 1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }
    </style>
</head>
<body>
<header>
      <h2>ISPAAD MANAGEMENT SYSTEM</h2>
      <nav>
        <button >
            <a href="index.php">Home</a>
        </button>
      </nav>
    </header>

	<br>
<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
	<br>
		<div class="user_card">
				<form method="post" action="">
					
				<h2>Login</h2>

					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
					<button type="button" name="button" id="login" class="button">Login</button> 

			</div>
			</form>
			
		</div>
	</div>
</div>

<div class="footer">
      <p>© 2023 Agriculture Management System</p>
      <p>Agricultural Department dedicated to providing innovative solutions to farmers and agricultural businesses to improve productivity, profitability, and sustainability in the agricultural industry</p>
      <p>All rights reserved | Design by BIDA21 GROUP2C></p>
    </div>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "./Assistant/home.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>