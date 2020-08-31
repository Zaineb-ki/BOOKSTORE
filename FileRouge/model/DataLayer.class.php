<?php

class DataLayer{

    private $connexion;

    function __construct(){
        try {
            $this->connexion = new PDO("mysql:host=".HOST.";dbname =".DB_NAME,DB_USER,DB_PASSWORD);
            //echo "connexion  à la base de données réussie";
        } catch (PDOException $th) {
            echo $th->getMessage();
            
        }
    }



//Pour le client
//S'inscrire 

/*
* Fonction qui créer un clients en base de données
*@param username c'est le nom du client
*@param email c'est l'email du client
*@param password c'est le mot de pass du client
*@return TRUE si en cas de création avec succès du client, FALSE si il y a un erreur
*@return NULL s'il y a une exception déclenchée

*/

    function createCustomers($username,$email,$password){

        $sql = "INSERT INTO clients (username, email, password) VALUES (:username, :email, :password)";
        try {
                $result = $this->connexion->prepare($sql);
                $var = $result->execute(array(
                    ':username' => $username,
                    ':email' => $email,
                    ':password' => sha1($password)
                ));
                    if($var){
                        return TRUE;
                    }else{
                        return FALSE;
                    }
        } catch (PDOException $th) {
            return NULL;
        }
    }

//Se connect / déjà client 

        function authentifier($email, $password){
        $sql = "SELECT * FROM clients WHERE email = :email";
        $result = $this->connexion->prepare($sql);
        $result->execute(array(':email'=>$email));
        $data = $result->fetch(PDO::FETCH_ASSOC);
            if ($data && ($data['password'] == sha1($password))) {
               return 'Authentification ok';
            }else{
                return 'désolé, Authentification échouée';
            }
    }
















}
?>
