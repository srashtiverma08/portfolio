<?php
$servername="localhost";
$username= "root";
$password="";
$database="portfolio";

//create connection
$conn=mysqli_connect($servername, $username, $password, $database);
//die if connection not successfull
if($conn==false){
    die("sorry connection failed" .mysqli_connect_error());
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];


    //submit to databas
   //sql query to be executed
$sql="INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)){
    $_SESSION['email']=$email;
    echo "submitted successfully";
}
else{
    echo "error". mysqli_error($conn);
}
mysqli_close($conn);
?>