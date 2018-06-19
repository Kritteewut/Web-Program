<html>
<body>
<?php   


//$servername = "localhost";
//$username = "root";
//$password = "";
/*
$_POST['username'];
$_POST['password'];
$_POST['email'];
$_POST['name'];
$_POST['telephone'];
echo $_POST['username']. "<br>";
echo $_POST['password']. "<br>";
echo $_POST['email']. "<br>";
echo $_POST['name']. "<br>";
echo $_POST['telephone']. "<br>";
$name = $_POST['username'];
*/
// Create connection
$conn = new mysqli("localhost", "root", "", "myfirstdatabase");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO users (username, password, email, name, telephone)
VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[name]', '$_POST[telephone]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//echo '<A HREF = "index.html"><br>กลับหน้าหลัก</A>'
header("location:index.html");

?>
</body>
</html>