<?php

    require "include.php";


    // la Gestion des requêtes demander par l'utilisateur

    $url = trim($_SERVER['PATH_INFO'], '/');
    $url = explode ('/',$url);
    $route = array("acceuil", "contact");
    
    $action = $url[0];

    //Controller  // Vérifier l'action demander par le visiteur
    if (!in_array($action,$route)) {

        $title = "Erreur";
        $content = "URL Introuvable ! ";

    }else{

        //La fontion qui va répondre à l'action de l'utilisateur
        $function = "display".ucwords($action);
        $title = $action;
        $content = $function();
        

    } 
    require VIEWS.SP."templates".SP."default.php";
?>