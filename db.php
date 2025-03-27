<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "praarambha";
$conn = mysqli_connect($servername, $username, $password, $database);

$name = $_POST['name'];
$email = $_POST['eP'];
$password =$_POST['psw'];
$gender =$_POST['gender'];
$date =$_POST['birthday'];
// $fname = 'aa';
// $lname = "bb";
// $email = 'cc@adgasd.com';
// $password = 'avsdvasdv';

$sql = "INSERT INTO `data_list` (`name`,`email`,`password`,`gender`,`date`) VALUES ('$name','$email', '$password','$gender','$date')";
// $result = mysqli_query($conn, $sql);

while($result = mysqli_query($conn, $sql)){
        echo '<script>alert("SIGNUP Sucessful")</script>';
        echo '<script type="text/javascript">document.location.href ="login.html";</script>';
    }
?>