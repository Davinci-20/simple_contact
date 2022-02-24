<?php

require_once 'form.html';

//database
$pdo = new PDO("mysql:host=localhost;dbname=job_test", "root", "password");

//data insert into table
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into user (name,email,message) values(?,?,?)";

    $res = $pdo->prepare($sql);
    $data = $res->execute([$name, $email, $message]);

    //direct location
    if (isset($data)) {
        header("Location:show.php");

    }

}
