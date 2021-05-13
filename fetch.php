<?php
include("./connection.php");
header('Content-Type: application/json');
$sql="select * from options";

$result=mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>=1)
{
 $output = "[";
 $total = 0;
 $row=mysqli_fetch_array($result);
 while($row)
 {
	$output .= "{";
	$output .= '"name" : "'. $row['name'] .'", ';
	$output .= '"counter" : '. $row['counter'] ;
	$output .= "}";
    $total +=$row['counter'];
    $row=mysqli_fetch_array($result);
    if($row)
    {
$output .= ",";
    }

 }
  $output .= "]";
 echo '{"options":'.$output .', "total":' .$total . '}';
}

?>