<?php
$query="";

function CreateUser($type,$Name,$Empno,$Designation,$Password,$MobileNo){
    
$con=mysqli_connect("localhost","root","","hotel");
    if($type=="employee"){
        $query="insert into employee(Name,Empno,Designation,Password,MobileNo) values (
            '$Name','$Empno','$Designation','$Password','$MobileNo'
        )";
    }else if($type=="customer"){
        $query="insert into customer (Name,MobileNo,MailID,Password,IDProof) values ('$Name','$MobileNo','$MailID','$Password','$IdProof')";
    
    }
    echo $query;
    mysqli_query($con,$query);?>
        <script>
            windows.location.href="admin/Add Employees.php";
        </script>
    <?php 
}
?>