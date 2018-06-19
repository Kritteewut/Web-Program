<html>
<body>
<?php   
session_start();
$conn = new mysqli("localhost", "root", "", "myfirstdatabase");



$sql = "SELECT username and password FROM users WHERE username = '$_POST[username]' and password = '$_POST[username]'";
$result = $conn->query($sql);

if(!$result){
    echo "Login Failed!";
    echo '<A HREF = "index.html"><br>กลับหน้าหลัก</A>';
}else{
    echo "Login Successfully";
    $_SESSION["username"] = $_POST["username"];
}

$conn->close();

//echo '<A HREF = "index.html"><br>กลับหน้าหลัก</A>'
header("location:index2.php");

?>
</body>
</html>