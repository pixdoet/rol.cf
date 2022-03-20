<?php
$conn = new mysqli("localhost","root","","testrants");

$getnewid = "SELECT MAX(id) as 'maxid' FROM testrants";
$result = $conn->query($getnewid);

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()){
		$large = $row["maxid"];
	}
}
$postid = rand(1,$large);
$s = "SELECT * FROM testrants WHERE id = '".$postid."'";
$result = $conn->query($s);

if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
                $uname = $row['name'];
                $ctext = $row['context'];
		$idrow = $row['id'];
        }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Rant Feed</title>
	</head>
	<body style="font-family:Arial;font-size:30px;text-align:Center">
		<a href="index.php"><img src="https://fontmeme.com/permalink/210420/4f8aad7e8520c39f0c95ea18ff483b16.png" alt="supreme-font" border="0"></a>
		<h3>Rant Feed</h3>
		<p><b>Post #<?php echo htmlspecialchars($idrow);?></b></p>
		<p>User <?php echo htmlspecialchars($uname);?> ranted: <br><?php echo htmlspecialchars($ctext);?></p>
                <form method="get" action="reader.php">
                        <label for="postid">Search another with id: </label>
                        <input type="text" name="postid">
                        <input type="Submit" value="Search!">
                </form>
                <p><a href="feed.php">View another</a></p>
		<p><a href="index.php">Post something</a></p>
	</body>
</html>
