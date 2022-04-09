<?php
	session_start();
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	if (!isset($_COOKIE['admin'])) {
	   setcookie('admin', 'false');
	   $_COOKIE['admin'] = 'false';
	   echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1><p>Have you tried the <a href="http://34.125.213.242/terminal.php" target="_blank">The Eval Gamestonk Terminal</a> yet?</center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{4629d7b096bf8209b0553ea3588fbe90a33b3d2a045d4f266ec068d08b4a3d0c}-->';
     }
     elseif (isset($_COOKIE['admin']) && strcmp($_COOKIE['admin'], 'true') == 0) {
     	    echo "<!DOCTYPE html><html><head><title>Main</title></head><body><p>Congratulations! Here you go: key{838aae934b57ccba55230bf12835a5395af7e9a8363c334cd050cd08dfde5c42}</p></body></html>";
     }
     else {
                echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1><p>Have you tried the <a href="http://34.125.213.242/terminal.php" target="_blank">The Eval Gamestonk Terminal</a> yet?</center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{4629d7b096bf8209b0553ea3588fbe90a33b3d2a045d4f266ec068d08b4a3d0c}-->';}
?>
