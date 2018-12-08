<?php
if(isset($_COOKIE['anun'])){
$name = $_COOKIE['anun'];
	setcookie("anun",$name,time()-5);
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Das4</title>
	<meta charset="utf-8">
</head>
<body>


<h1>Page Page.php</h1>
<a href="index.php">Page page.php</a><br><br>
<h3>Cookies deleted!!</h3>

</body>
</html>

<!-- else{
	$name ="Guest.";
} -->