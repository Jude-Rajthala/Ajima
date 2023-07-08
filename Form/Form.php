<?php
    $con = mysqli_connect ("localhost","root","","ajimatest");
    if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body>
<form action="form.php" method="post">
<h1>Form</h1>
<p>Name: <input type="text" name="name" /></p>
<p>Address: <input type="text" name="address" /></p>
<p>Father name: <input type="text" name="fathername" /></p>
<p>Mother name: <input type="text" name="mothername" /></p>
<p>House number: <input type="text" name="houseno" /></p>
<p>State: <input type="text" name="state" /></p>
<p>Province: <input type="text" name="prov" /></p>
<p>Continent: <input type="text" name="continent" /></p>
<p><input type="submit" /></p>
<p><input type="reset" /></p>
</form>

<?php
$name = $_POST['name'];
$address = $_POST['address'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$houseno = $_POST['houseno'];
$state = $_POST['state'];
$prov = $_POST['prov'];
$continent = $_POST['continent'];

$sql = INSERT INTO info (name, address, fathername, mothername, houseno, state, prov, continent) VALUES ('$name', '$address', '$fathername', '$mothername', '$houseno', '$state', '$prov', '$continent');

if(mysqli_connect($con,$sql))
{
    echo "Values have been inserted successfully";
}
else
{
    echo "Values have not been inserted successfully";
}
?>
</body>
</html>

