<?php
/**
 * Système de connexion via API en PHP pour UnrealEngine
 * Développé par Zetta420
 * Nécessitant l'asset "VaRest" pour le blueprint
 */
include('../config/init.php');
if(!isset($_GET['method']) && (empty($_GET['method']))){
    echo json_encode(array("type" => "error", "message" => errorMethodIsEmpty), JSON_UNESCAPED_UNICODE);
    die;
}
if(($_GET['method'] != "loginCheck") && ($_GET['method'] != "methodsList")){

    echo json_encode(array("type" => "error", "message" => errorMethodDoesntExists), JSON_UNESCAPED_UNICODE);
    die;

}
    switch ($_GET['method']) {
        // Methode pour la connexion
        case "methodsList":
            echo "<center>".methodsList."</center>";
            break;
        case "loginCheck":
            if (!isset($_GET['user']) && (empty($_GET['user']))) {
                echo json_encode(array("type" => "error", "message" => errorLoginCheckUserEmpty), JSON_UNESCAPED_UNICODE);
                die;
            }

                if (!isset($_GET['password']) && empty($_GET['password'])) {
                    echo json_encode(array("type" => "error", "message" => errorLoginCheckPasswordEmpty), JSON_UNESCAPED_UNICODE);
                    die;
                }

                $api = new api();

                    if($api->loginCheck($_GET['user'], $_GET['password']) == "true"){
                        $return = array("type" => "success", "message" => successLoginMessage);
                        echo json_encode($return, JSON_UNESCAPED_UNICODE);
                        die;
                    }
                    if($api->loginCheck($_GET['user'], $_GET['password']) == "E1"){
                        // Erreur, nom d'utilisateur innexistant
                        $return = array("type" => "error", "message" => usernameNotRegisteredMessage);
                        echo json_encode($return, JSON_UNESCAPED_UNICODE);
                        die;
                    }
                    if($api->loginCheck($_GET['user'], $_GET['password']) == "E2"){
                        // Erreur, le mot de passe est incorrect
                        $return = array("type" => "error", "message" => passwordInvalidMessage);
                        echo json_encode($return, JSON_UNESCAPED_UNICODE);
                        die;
                    }
            break;

        case "getUserInfos":
            break;
    }


