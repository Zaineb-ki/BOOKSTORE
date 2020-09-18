<?php 
$bd = new PDO('mysql:host=localhost;dbname=bookstore-ecommerce;charset=utf8','root','');

  session_start();
 

    if(isset($_POST['login'])){
    $user = $_POST['mail'];
    $pass = $_POST['password'];

    $req = $bd->query('select count(*) from clients where email="'.$user.'" and password="'.$pass.'"');

    $res = $req->fetchColumn();
    if($res == 1){
        $_SESSION['mail']=$user;
        header('location:Acceuil.php');
    }else{
        header('location: login.php?message=error');
    }

   }

?>