<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "praarambha";
$conn = mysqli_connect($servername, $username, $password, $database);


$email = $_POST['email'];
$password = $_POST['psw'];
$sql = "SELECT * FROM `data_list`";
$result = mysqli_query($conn, $sql);
echo $row['email'];
// echo $password;
while($row = mysqli_fetch_assoc($result)){
    if(($row['email'] == $email) && ($row['password'] == $password)){
        echo '<script>alert("Login Sucessful")</script>';
        echo '<script type="text/javascript">document.location.href ="welcome.html";</script>';
    }
    else
    {
        echo '<script>alert("Login Failed")</script>';
        echo '<script type="text/javascript">document.location.href ="login.html";</script>';
    }
}   
?>