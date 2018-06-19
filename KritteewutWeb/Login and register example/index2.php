<?php
session_start();
?>
<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>

</head>
<body>

<?php
echo "Hello " . $_SESSION['username'] . ".<br><br>";
?>

<INPUT TYPE="BUTTON" VALUE="ออกจากระบบ" ONCLICK="window.location.href='logout.php'">




</body>

</html>

