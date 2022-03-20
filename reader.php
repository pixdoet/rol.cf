<?php

$conn = new mysqli("localhost","root","","testrants");

if (isset($_GET['postid'])){
	$postid = $_GET['postid'];
}
$s = "SELECT * FROM testrants WHERE id = '".$postid."'";
$result = $conn->query($s);

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$uname = $row['name'];
		$ctext = $row['context'];
		$iaddr = long2ip(sprintf("%d", $row['ipv4']));
		$pturl = $row['url'];
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<title>Read people's rants</title>
	</head>
	<body style="font-family:Arial;font-size:30px;text-align:Center">
		<a href="index.php"><img src="https://fontmeme.com/permalink/210420/4f8aad7e8520c39f0c95ea18ff483b16.png" alt="supreme-font" border="0"></a>
		<h3>Post #<?php echo htmlspecialchars($postid);?></h3>
		<p>User <?php echo htmlspecialchars($uname);?>(ip address: <?php echo htmlspecialchars($iaddr);?>) ranted: <br><?php echo htmlspecialchars($ctext);?></p>
		<p>Post URL: <?php if (isset($pturl)){echo $pturl;} else {echo "None";} ?></p>
		<form method="get" action="reader.php">
			<label for="postid">Search another with id: </label>
			<input type="text" name="postid">
			<input type="Submit" value="Search!">
		</form>
		<p><a href="index.php">Post something</a></p>
	</body>
</html>
