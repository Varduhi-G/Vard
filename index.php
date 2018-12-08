<?php
if (isset($_POST['anun']) && !empty($_POST['anun'])) {
	$name = $_POST['anun'];
	setcookie("anun",$name,time()+ 5000);
}

elseif (isset($_COOKIE['anun'])) {
	$name = $_COOKIE['anun'];
}else{
	$name = "Guest.";

}





?>
<!DOCTYPE html>
<html>
<head>
	<title>Das4</title>
	<meta charset="utf-8">
</head>
<body>


<h1>Page Index.php</h1>
<a href="page.php">Page page.php</a><br><br>
<form method="post">
	<label for="name">Name: </label>
	<input type="text" name="anun" id="name"><br><br>
	<input type="submit">

</form>
<h3>Welcome <?=$name?></h3>


</body>
</html>