<?php
if(isset($_GET['method']) && (!empty($_GET['method']))){

    switch ($_GET['method']) {
        // Methode pour la connexion
        case "loginCheck":
            if (isset($_GET['user']) && (!empty($_GET['user']))) {

                if (isset($_GET['password']) && !empty($_GET['password'])) {

                    $api = new api();

                    switch ($api->loginCheck($_GET['user'], $_GET['password'])) {
                        case true:
                            // Connection OK
                            $return = array("type" => "success", "message" => successLoginMessage);
                            echo json_encode($return);
                            break;
                        case "E1":
                            // Erreur, nom d'utilisateur innexistant
                            $return = array("type" => "error", "message" => usernameNotRegisteredMessage);
                            echo json_encode($return);
                            break;
                        case "E2":
                            // Erreur, le mot de passe est incorrect
                            $return = array("type" => "error", "message" => passwordInvalidMessage);
                            echo json_encode($return);
                            break;
                            
                    }


                }
            }
            break;
    }
    }

