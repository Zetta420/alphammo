<?php
/**
 * Système de connexion via API en PHP pour UnrealEngine
 * Développé par Zetta420
 * Nécessitant l'asset "VaRest" pour le blueprint
 */

class characters extends users
{

    public function getCharactersIdUser($user)
    {

        if (users::usernameExists(functions::db(), $user)) {

            $userId = users::getIdUsr($user);
            $sql = "SELECT id FROM " . charactersDataTable . " WHERE userId=" . $userId;

            if ($req = functions::db()->query($sql)) {
                while ($rep = $req->fetch()) {
                    return $rep["id"];
                }
            }
            return "ER2";

        }

        return "ER1";

    }

    public function characterExists($characterId){

        $sql = "SELECT id FROM " . charactersDataTable . " WHERE id=".$characterId;
        if(functions::db()->query($sql)){
            return true;
        }

        return false;

    }

    public function getCharacterUserId($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT userId FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['userId'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterName($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT name FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['name'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterRaceId($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT raceId FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['raceId'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterClassId($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT classId FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['classId'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterLevel($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT level FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['level'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterExp($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT exp FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['exp'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterNeedExp($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT needExp FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['needExp'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterMaxHp($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT maxHp FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['maxHp'];
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterMaxStrenght($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT maxStrenght FROM ".charactersDataTable." WHERE id=".$characterId;
            if($rep = functions::db()->query($sql)->fetch()){
                return $rep['maxStrenght'];
            }

            return "ER2";
        }

        return "ER1";

    }
}