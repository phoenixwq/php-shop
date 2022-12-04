<?php

class UserController
{ 
    public function actionLogin()
    {
        $email = false;
        $password = false;
        $errors = false;
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId);
                header("Location: /");
            }
        }
        $template = new Template(ROOT . '/views/user/');
        
        echo $template->render('login.php',
        [
            'email' => $email,
            'password'=> $password,
            'errors' => $errors,
            'user_status'=>User::isGuest(),
        ]);
        return true;
    }

    public function actionLogout()
    {        
        unset($_SESSION["user"]);   
        header("Location: /");
    }

}
