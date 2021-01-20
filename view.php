<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
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








