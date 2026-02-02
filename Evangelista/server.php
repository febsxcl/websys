<?php
include 'config.php';
$result = mysqli_query($db, "SELECT * FROM tbl_users");

if(isset($_POST['Submit'])) {
    $username = $_POST ['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (empty($username) || empty ($name) || empty ($password)) {
        echo 'Please input Username, Nmae, and Passsword.';
    }
    else {
        $sql = "INSERT INTO tbl_users (Username, Name, Password) VALUES ('$username', '$name', '$password')";
        mysqli_query($db,$sql);
        header("location: index.php");
    }

}
?>
