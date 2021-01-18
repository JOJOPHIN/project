 <?php
 
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

if.(!empty($firstname) || !empty($lastname) || !empty($housename) || !empty($locality) || !empty($district) || !empty($pincode) || !empty($branch) || !empty($year) || !empty($registrationno) || !empty($pickuppoint) || !empty($droppoint) || !empty($busroute) || !empty($phoneno) || !empty($fees))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="register";
//craete connection
$conn= new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}else{
    $SELECT = "SELECT phoneno From student where phoneno=? Limit 1";
    $INSERT = "INSERT Into student (firstname, lastname, housename, locality, district, pincode, branch, year, registrationno, pickuppoint, droppoint, busroute, phoneno, fees) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
   //prepare statement
   $stmt = $conn->prepare($SELECT);
   $stmt->bind_param("i",$phoneno);
   $stmt->execute();
   $stmt->bind_result($phoneno);
   $stmt->store_result();
   $rnum = $stmt->num rows;

   if ($rnum==0) {
       $stmt->close();

       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("ssssii", $firstname, $lastname, $housename, $locality, $district, $pincode, $branch, $year, $registrationno, $pickuppoint, $droppoint, $busroute, $phoneno, $fees);
       $stmt->execute();
       echo "New record inserted successfully";
}else{
    echo "SOMEONE ALREADY REGISTERED USING THIS PHONE NO";
}
$stmt->close();
$conn->close();

}

}else {
    echo"All Fields Are Required";
    die();
} 

?>