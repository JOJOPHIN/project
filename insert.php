<?php

if(isset($_POST['submit']))
{
     
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$housename=$_POST['housename'];
$locality=$_POST['locality'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$registrationno=$_POST['registrationno'];
$pickuppoint=$_POST['pickuppoint'];
$droppoint=$_POST['droppoint'];
$busroute=$_POST['busroute'];
$phoneno=$_POST['phoneno'];
$fees=$_POST['fees'];


$con=new mysqli("localhost","root","","register");



if(!empty($firstname) || !empty($lastname) || !empty($housename) || !empty($locality) || !empty($district) || !empty($pincode) || !empty($branch) || !empty($year) || !empty($registrationno) || !empty($pickuppoint) || !empty($droppoint) || !empty($busroute) || !empty($phoneno) || !empty($fees))
{
     $sql="insert into student(firstname,lastname,housename,locality,district,pincode,branch,year,registrationno,pickuppoint,droppoint,busroute,phoneno,fees) values('$firstname','$lastname','$housename','$locality','$district','$pincode','$branch','$year','$registrationno','$pickuppoint','$droppoint','$busroute','$phoneno','$fees')";
     if($con->query($sql)==TRUE)
    {
       echo "Your account has been created";

    } 
    else
    {
       echo " ".$con->error;
    }

}
else
{
    echo "Please enter all the required fields";
}


}




?>
