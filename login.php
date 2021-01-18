<?php

if(isset($_POST['submit']))
{
     
$username=$_POST['username'];
$password=$_POST['password'];


$con=new mysqli("localhost","root","","college");



if(!empty($username) || !empty($password));
{
     $sql="insert into login(username,password) values('$username','$password')";
     if($con->query($sql)==TRUE)
    {
       echo "Your account has been created";

    } 
    else
    {
       echo " ".$con->error;
    }

}



}




?>