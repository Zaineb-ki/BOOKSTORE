<?php
    define("SRC", dirname(__FILE__));
    define("ROOT", dirname(SRC));
    define("SP", DIRECTORY_SEPARATOR);
    define("CONFIG", ROOT.SP."config");
    define("VIEWS", ROOT.SP."views");
    define("MODEL", ROOT.SP."model");


    // import du model
    require CONFIG.SP."Config.php";
    require MODEL.SP."DataLayer.class.php";

    $data = new DataLayer();
    
    $var = $data->createCustomers('Zaineb', 'Zainebkoss@gmail.com', 'Alanturing');
    // $authent = $data->authentifier('Zaineb@gmail.com','Alanturing');
    // die($authent);
    die($var);

    // Les fontions Appelé par le controleur
    require "functions.php";




?>