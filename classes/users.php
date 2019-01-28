<?php

class users extends functions
{


    //Check si l'id du joueur est inscrite dans la basse de donnée
    public function haveGameID($id){

        $sql = "SELECT id FROM ".userDataTable." WHERE id=".$id;
        if(functions::db()->query($sql)){
            return true;
        }

        return false;
    }

    // Fonction pour check si le nom d'utilisateur $user est inscris dans la BDD
    public function usernameExists($user){

        $sql = "SELECT username FROM ".userDataTable." WHERE username=".$user;
        if(functions::db()->query($sql)){
            return true;
        }

        return false;

    }

    // Fonction pour check si l'email $email est inscrite dans la BDD
    public function emailExists($mail){

        $sql = "SELECT username FROM ".userDataTable." WHERE email=".$mail;
        if(functions::db()->query($sql)){
            return true;
        }

        return false;

    }

    //Récupérer l'id du joueur avec son pseudo
    public function getIdUsr($user){

        $sql = "SELECT id FROM ".userDataTable." WHERE username=".$user;
        if($req = functions::db()->query($sql)){
            $id = $req->fetch();
            return $id;
        }

        return false;
    }

    //Récupérer l'id du joueur avec son mail
    public function getIdMail($mail){

        $sql = "SELECT id FROM ".userDataTable." WHERE email=".$mail;
        if($id = functions::db()->query($sql)->fetch()){
            return $id;
        }

        return false;
    }

    //Récupérer le mail du joueur en fonction de son ID
    public function getEmailID($id){

        $sql = "SELECT email FROM ".userDataTable." WHERE id=".$id;
        if($mail = functions::db()->query($sql)->fetch()){
            return $mail;
        }

        return false;
    }

    //Récupérer le nom d'utilisateur du joueur en fonction de son ID
    public function getUsernameID($id){

        $sql = "SELECT username FROM ".userDataTable." WHERE id=".$id;
        if($username = functions::db()->query($sql)->fetch()){
            return $username;
        }

        return false;
    }

    //Récupérer le mot de passe du joueur en fonction de son ID
    public function getPasswordID($id){

        $sql = "SELECT password FROM ".userDataTable." WHERE id=".$id;
        if($password = functions::db()->query($sql)->fetch()){
            return $password;
        }

        return false;
    }

    public function encryptPass($pass){

            return password_hash($pass, PASSWORD_ARGON2I);

    }



}