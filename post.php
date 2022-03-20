<?php

$err_status = 0;
$conn = new mysqli("localhost","root","","testrants");
if (isset($_POST['rant_name'])){
	$rantname = $_POST['rant_name'];
}
if (isset($_POST['rant_context'])){
	$rantrant = $_POST['rant_context'];
}
if (isset($_POST['rant_url'])){
	// Check if valid url
	if(filter_var($_POST['rant_url'], FILTER_VALIDATE_URL)){
		$url = $_POST['rant_url'];
	}
	else{
		$url = "Not Valid/Not Set";
	}
}
else{
	$url = "";
}
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
$stmt = $conn->prepare("INSERT INTO testrants(`name`,`context`,`ipv4`,`url`) VALUES (?,?,INET_ATON(?),?);");
$stmt->bind_param("ssss",$rantname,$rantrant,$ip,$url);
$stmt->execute();
$conn->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Rant posted!</title>
	</head>
	<body style="font-family:Arial;font-size:30px;text-align:Center">
		<div id="postsuccess">
		<p>Your post has actually not been posted. This is here for archive purposes</p>
		<p>ROL has been shut down. See the <a href="shutdown.php">blog post</a></p>
		<h3 id="postedH3">Posted!</h3>
		<p><?php echo $rantname;?>, your rant has been posted! Now go chill and <a href="/coffeetime.php">have a coffee</a></p>
		</div>
		<div id="postfail1" style="display:none">
		<h3 id="fail1H3">Failed to post</h3>
		<p>Username cannot be empty!</p>
		</div>
		<div id="postfail2" style="display:none">
		<h3 id="fail2H3">Failed to post</h3>
		<p>Rant cannot be empty!</p>
		</div>
		<div id="postfail3" style="display:none">
		<h3 id="fail3H3">Failed to post</h3>
		<p>URL given is not valid!</p>
		</div>
		<p><a href="readerpp.php">Read posts</a></p>
		<p style="font-size:14px">A little thing by Ian</p>
	</body>
</html>
