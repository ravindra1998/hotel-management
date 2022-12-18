<?php
$con=mysqli_connect("localhost","root","","hotel");
session_start();
if(isset($_POST['submit'])){
    
    $Name=$_POST['name'];
    $MobileNo=$_POST['mobile'];
    $MailID=$_POST['mail'];
    $Password=$_POST['password'];
    $IDProof=$_POST['proof'];
    

    $query="insert into customer (Name,MobileNo,MailID,Password,IDProof) values ('$Name','$MobileNo','$MailID','$Password','$IdProof')";
    mysqli_query($con,$query);
    header("Location:login.html");
}
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
    

}







?>