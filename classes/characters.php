<?php


class characters extends users
{

    public function getCharactersIdUser($user)
    {

        if (users::usernameExists($user)) {

            $userId = users::getIdUsr($user);
            $sql = "SELECT id FROM " . charactersDataTable . " WHERE userId=" . $userId;

            if ($req = functions::db()->query($sql)) {
                while ($rep = $req->fetch()) {
                    return array("id" => $rep["id"]);
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
            if($userId = functions::db()->query($sql)->fetch()){
                return $userId;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterName($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT name FROM ".charactersDataTable." WHERE id=".$characterId;
            if($name = functions::db()->query($sql)->fetch()){
                return $name;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterRaceId($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT raceId FROM ".charactersDataTable." WHERE id=".$characterId;
            if($raceId = functions::db()->query($sql)->fetch()){
                return $raceId;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterClassId($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT classId FROM ".charactersDataTable." WHERE id=".$characterId;
            if($classId = functions::db()->query($sql)->fetch()){
                return $classId;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterLevel($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT level FROM ".charactersDataTable." WHERE id=".$characterId;
            if($level = functions::db()->query($sql)->fetch()){
                return $level;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterExp($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT exp FROM ".charactersDataTable." WHERE id=".$characterId;
            if($exp = functions::db()->query($sql)->fetch()){
                return $exp;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterNeedExp($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT needExp FROM ".charactersDataTable." WHERE id=".$characterId;
            if($needExp = functions::db()->query($sql)->fetch()){
                return $needExp;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterMaxHp($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT maxHp FROM ".charactersDataTable." WHERE id=".$characterId;
            if($maxHp = functions::db()->query($sql)->fetch()){
                return $maxHp;
            }

            return "ER2";
        }

        return "ER1";

    }

    public function getCharacterMaxStrenght($characterId){

        if($this->characterExists($characterId)){

            $sql = "SELECT maxStrenght FROM ".charactersDataTable." WHERE id=".$characterId;
            if($maxStrenght = functions::db()->query($sql)->fetch()){
                return $maxStrenght;
            }

            return "ER2";
        }

        return "ER1";

    }
}