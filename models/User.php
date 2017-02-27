<?php

class User
{
    /**
     * @param $name
     * @param $email
     * @param $password
     * @return bool true if user added to database else return false
     */
    public static function register($name, $email, $password)
    {
        $db = Db::getConnection();
        $password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user(name,email,password,role) VALUES (:name, :email, :password, '')";

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * @param $name
     * @return bool true if name is valid else return true
     */
    public static function checkName($name)
    {
        if(strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    /**
     * @param $password
     * @return bool true if password is valid else return true
     */
    public static function checkPassword($password)
    {
        if(strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * @param $email
     * @return bool true if email is valid else return true
     */
    public static function checkEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * @param $email
     * @return bool true if email exists in database else return false
     */
    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();
        $sql = "SELECT COUNT(*) FROM user WHERE email = :email";

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()) {
            return true;
        }
        return false;
    }

}

