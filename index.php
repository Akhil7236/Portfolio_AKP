<?php
$server="localhost";
$userName="root";
$pass="";
$con=mysqli_connect($server,$userName,$pass);
if(!$con){
    die("Connection not build".mysqli_connect_error());
    
}
// echo"Connection Build";
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];

$sql="INSERT INTO `Portfolio`.`comment` (`Name`, `Email`, `Comments`, `Time`) VALUES ('$Name', '$Email', '$Message',current_timestamp());";
echo$sql;
if($con->query($sql)== true){
    echo"Succesfully Inserted";
}
else{
    echo"ERROR:$sql <br> $con-> error";
}
$con->close();
?>

