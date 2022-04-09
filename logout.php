<?php
	session_start();
	if ($_SESSION['login'] == null) {
		header("Location: admin.php");
		exit;
	}
    else {
        session_destroy();
        echo '<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
<link rel="stylesheet" type="text/css" href="yui.2.css" />
<link rel="stylesheet" type="text/css" href="global.6.css" />
</head>
<body>
<h2>You are now logged out.</h2>
<p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>FLAG: key{496f7ad9cb6296332cdbee7476830a86b87d0527708f9c4bdfc54cfb1edb2bed}</p>
</body>
</html>';}
?>
