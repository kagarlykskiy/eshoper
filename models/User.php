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
     * @param $id
     * @param $name
     * @param $password
     * @return bool
     */
    public static function edit($id, $name, $password)
    {
        $db = Db::getConnection();
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "UPDATE user SET name = :name, password = :password WHERE id = :id";
        $result = $db->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * @param $email
     * @param $password
     * @return bool true if email/password pare is correct, false if not
     */
   public static function checkUserData($email, $password)
   {
       $db = Db::getConnection();
       $pass = "SELECT password FROM user WHERE email = :email";
       $result = $db->prepare($pass);
       $result->bindParam(':email', $email, PDO::PARAM_STR);
       $result->execute();
       $hash = $result->fetch();

       if(password_verify($password, $hash['password'])) {
           $sql = "SELECT * FROM user WHERE email = :email AND password = :password";

           $result = $db->prepare($sql);
           $result->bindParam(':email', $email, PDO::PARAM_STR);
           $result->bindParam(':password', $hash['password'], PDO::PARAM_STR);
           $result->execute();

           $user = $result->fetch();
           if($user) {
               return $user['id'];
           }
       }

       return false;
   }

   public static function getUserById($userId)
   {
       $userId = intval($userId);

       if($userId) {
           $db = Db::getConnection();
           $sql = "SELECT * FROM user WHERE id = :id";

           $result = $db->prepare($sql);
           $result->bindParam(':id', $userId, PDO::PARAM_INT);

           $result->setFetchMode(PDO::FETCH_ASSOC);
           $result->execute();

           return $result->fetch();
       }
   }

    /**
     * @param $userId
     */
   public static function auth($userId)
   {
       $_SESSION['user'] = $userId;
   }

   public static function checkLogged()
   {
       if(isset($_SESSION['user'])) {
           return $_SESSION['user'];
       }

       header ("Location: /user/login");
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

    public static function checkPhone($phone)
    {
        if(strlen($phone) >= 10) {
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
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
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

        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    /**
     * @return bool true if user is guest
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

}

