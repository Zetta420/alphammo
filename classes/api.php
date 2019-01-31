<?php

/**
 * Système de connexion via API en PHP pour UnrealEngine
 * Développé par Zetta420
 * Nécessitant l'asset "VaRest" pour le blueprint
 */
class api extends users
{

    public function loginCheck($user, $pass)
    {


        if ((!users::usernameExists($user)) and (!users::emailExists($user))) {
            return "E1";
        }

        if(filter_var($user, FILTER_VALIDATE_EMAIL)){
            $user = users::getUsernameID(users::getIdMail($user));
        }

            $sql = "SELECT username, password FROM users WHERE username='" . $user."'";
            $rep = functions::db()->query($sql)->fetch();

            $dbPass = $rep['password'];
            if(($user == $rep['username']) && password_verify($pass, $dbPass) == true){

                return "true";

            }

            return "E2";





    }
}