<?php
if(isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if($username == "admin" && $password == "admin") {
        echo "Login Berhasil";
    }
}
?>