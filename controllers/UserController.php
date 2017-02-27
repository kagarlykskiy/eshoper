<?php

/**
 * Class UserController
 * @return bool
 *
 */
class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче чем 3 символа!';
            }

            if(!User::checkEmail($email)) {
                $errors[] = 'Неправильный email!';
            }

            if(!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов!';
            }
            if(User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже зарегестрирован!';
            }

            if($errors == false) {
                $result = User::register($name, $email, $password);
            }

        }


        require_once ROOT . '/views/user/register.php';
        return true;

    }

}