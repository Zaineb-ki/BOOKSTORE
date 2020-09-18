<?php


$bd = new PDO('mysql:host=localhost;dbname=bookstore-ecommerce;charset=utf8','root','');





 if(isset($_POST['inscrire'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $req = $bd->prepare('insert into clients (username,email,password) values(?,?,?)');
    $req->execute([$username,$email,$password]);
 
    header('location:login.php');
}
 
?>