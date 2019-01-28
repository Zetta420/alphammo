<?php
/**
 * Created by PhpStorm.
 * User: monte
 * Date: 28/01/2019
 * Time: 13:54
 */

class api extends users
{

    public function loginCheck($user, $pass)
    {

        if ((users::usernameExists($user)) or (users::emailExists($user))) {
            $sql = "SELECT username, password FROM users WHERE username=" . $user;

            $req = functions::db()->query($sql);
            $rep = $req->fetch();


            $dbPass = $rep['password'];

            $encryptedPass = users::encryptPass($pass);

            if($dbPass == $encryptedPass){

                return true;

            }

            return "E2";

        }

        return "E1";

    }
}