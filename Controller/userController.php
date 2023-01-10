<?php

class userController
{

    private $userManager;
    private $user;

    public function __construct($db1)
    {
        require('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }

    public function display()
    {
        $page = 'home';
        require('./View/main.php');
    }

    public function login()
    {
        $page = 'login';
        require('./View/main.php');
    }

    public function doLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'email' => $_POST["email"],
                'password' => $_POST["password"],
            );
            //$user = $this->user = new User($data);
            $user = $this->user = new User($data);
            $result = $this->userManager->login($this->user);
            if ($result) {
                $info = "Connexion reussie";
                $_SESSION['user'] = $result;
            } else {
                $info = "Identifiants incorrects.";
            }
            $page = 'accueil';
            require('./View/main.php');
        }
    }

    public function create()
    {
        $page = 'signup';
        require('./View/main.php');
    }

    public function doCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'email' => $_POST["email"],
                'password' => $_POST["password"],
                'lastName' => $_POST["lastName"],
                'firstName' => $_POST["firstName"],
                'address' => $_POST["address"],
                'postalCode' => $_POST["postalCode"],
                'city' => $_POST["city"],
            );

            $this->user = new User($data);
            $this->userManager->create($this->user);

            // $name = $data['lastName'];
            //var_dump($result);
            // if ($result) {
            //     $info = "L'utilisateur a bien été créé";
            // } else {
            //     $info = "L'utilisateur n'a pas pu être créé.";
            // }
            $page = 'login';
            require('./View/main.php');
        };
    }

    public function logOut()
    {
        session_destroy();
        $page = 'home';
        require('./View/main.php');
    }
}