<?php
include('header.php');
include('../method.php');
if(isset($_POST['register'])){
    CreateUser("employee",$_POST['emp-name'],$_POST['emp-no'],$_POST['role-name'],$_POST['password'],$_POST['number']);   
}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css1/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css1/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="POST">
				<h2>Add Employee</h2>

        
        



				<div class="form-row">
					<label for="full-name">Name</label>
					<input type="text" name="emp-name" id="full-name" class="input-text" placeholder="Emp Name" required>
					
				</div>

        


        



        <div class="form-row">
					<label for="full-name">Empno</label>
					<input type="text" name="emp-no" id="emp no" class="input-text" placeholder="Emp No" required>
					
				</div>



        <div class="form-row">
					<label for="full-name">Designation</label>
					<input type="text" name="role-name" id="role-name" class="input-text" placeholder="Job Role" required>
					
				</div>



				
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					
				</div>



        <div class="form-row">
					<label for="your-email">Mobile No</label>
					<input type="text" name="number" id="number" class="input-text" placeholder="Mob No" required>
					
				</div>




				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>




<?php
include 'footer.php';
?>        