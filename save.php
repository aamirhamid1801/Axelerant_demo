<?php
include("./connection.php");
if(isset($_REQUEST["option"]))
{
$sql='UPDATE options SET counter = counter+1 WHERE id = ' .$_REQUEST["option"] ;
	
	if(!mysqli_query($con,$sql))
	{
		header("location:vote-count.html");
	}
	else{
		header("location:vote-count.html");

		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Submission</title>
		</head>
		<body>
			<div>
        <h1>Your Vote has been received! </h1>
		<button onclick="window.location.href='vote-count.html';">View Result</button>
</div>
		
			
		</body>
		</html>
		<?php
    }
}else {
$empty = true;
include("index.php");
}

?>
