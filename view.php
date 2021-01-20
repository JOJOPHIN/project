<!DOCTYPE html>
<html>
<head>

<title>Student Details</title>

<style>

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

th, td {
border: 3px solid black;
background-color: #868de9;
color: black;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>

<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="navbar">
  <a class="active" href="http://localhost/project/login/view.html"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="http://localhost/project/login/login.html"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>

<br>
<br>
<br>
<br>
<table style="border-collapse:seperate;width: 50%;color: #588c7e;font-family: monospace;font-size: 20px;text-align: center;">
<tr>
<th>Seat No</th>
<th>First Name </th>
<th>Last Name</th>
<th>House Name</th>
<th>Locality</th>
<th>District</th>
<th>Pincode</th>
<th>Branch</th>
<th>Year</th>
<th>Registration No</th>
<th>Pick Up Point</th>
<th>Drop Point</th>
<th>Bus Route</th>
<th>Phone No</th>
<th>Fees</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "register");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT seatno, firstname, lastname, housename, locality, district, pincode, branch, year, registrationno, pickuppoint, droppoint, busroute, phoneno, fees FROM student";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $row["seatno"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" .  $row["housename"]. "</td><td>" . $row["locality"]. "</td><td>" . $row["district"]. "</td><td>" . $row["pincode"]. "</td><td>" . $row["branch"]. "</td><td>" . $row["year"]. "</td><td>" . $row["registrationno"]. "</td><td>" . $row["pickuppoint"]. "</td><td>" . $row["droppoint"]. "</td><td>" . $row["busroute"]. "</td><td>" . $row["phoneno"]. "</td><td>" . $row["fees"]. "</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
