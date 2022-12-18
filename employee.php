<?php
$con=mysqli_connect("localhost","root","","hotel");
session_start();
if(isset($_POST['register'])){
    
    $Name=$_POST['emp-name'];
    $Empno=$_POST['emp-no'];
    $Designation=$_POST['role-name'];
    $Password=$_POST['password'];
    $MobileNo=$_POST['number'];
    

    $query="insert into employee (Name,Empno,Designation,Password,MobileNo) values ('$Name','$Empno','$Designation','$Password','$MobileNo')";
    mysqli_query($con,$query);
    header("Location:Add Employees.php");
} 

    
   /* 
if(isset($_POST['signin']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query="select * from cust where name='$name' and password='$password'";
    
    $user=mysqli_query($con,$query);
    $count=mysqli_num_rows($user);
    echo $count;
    if($count>0){
    $user_data=mysqli_fetch_assoc($user);
    
    $_SESSION['name']=$user_data['name'];
    $_SESSION['email']=$user_data['email'];
    header("Location:indexpage.php");
    }
    else{
        header("Location:signup.php");
    }
    

}*/

?>