<?php
$link = mysqli_connect("localhost", "root","","busticketing");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$reg_no = mysqli_real_escape_string($link, $_POST['reg_no']);
$owner = mysqli_real_escape_string($link, $_POST['owner']);
$route_no = mysqli_real_escape_string($link, $_POST['route_no']);

$sql = "INSERT INTO bus (registration_no, owner, route_no) VALUES ('$reg_no', '$owner', '$route_no')";

if(mysqli_query($link, $sql)){
    readfile('regsuccess.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
mysqli_close($link);
?>