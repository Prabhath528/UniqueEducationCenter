<?php 

    class Auth{
        private $validUser = "hndit24";
        private $validPass = "123LKA";

        public function login($username, $password){
            if($username == $this->$validUser && $password == $this->$validPass){
                return "Login Successful";
            }else{
                return "Loging Failed: Ivalid username or password";
            }
        }
    }

    $auth = new Auth();

    $inputUser = "hndit24";
    $inputPassword = "wrong";

    echo $auth->login($inputUser, $inputPassword);

?>