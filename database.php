<?php

$email=$_POST['email'];
$customername=$_POST['customername'];
$amount=$_POST['amount'];

$conn =mysqli_connect('localhost','root','','banking');
if(!$conn){
    die('not connected');    
}
$query="INSERT INTO customer(email,customername,amount)VALUES('$email','$customername','$amount')";
$result=mysqli_query($conn,$query);
if(!$result){
    die('Query FAILER').mysqli_error();

}else{
    echo" Transfered money Successfully ";
}



?>