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
        $success = '';
        $error = '';
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
            $this->user = new User($data);
            $result = $this->userManager->login($this->user);
            $user = $this->userManager->findByEmail($this->user->getEmail());
            if ($result) {
                $_SESSION['user'] = $result;
                $page = 'home';
            } else {
                $error = "Identifiants incorrects. Veuillez réessayer";
                $success = '';
                $page = 'login';
            }
            require('./View/main.php');
        }
    }

    public function create()
    {
        $error = '';
        $page = 'signup';
        require('./View/main.php');
    }

    public function doCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'email' => $_POST["email"],
                'password' => sha1($_POST["password"]),
                'lastName' => $_POST["lastName"],
                'firstName' => $_POST["firstName"],
                'address' => $_POST["address"],
                'postalCode' => $_POST["postalCode"],
                'city' => $_POST["city"],
            );

            $alreadyExist = $this->userManager->findByEmail($_POST['email']);
            $error = '';
            if (!$alreadyExist) {
                $this->user = new User($data);
                $this->userManager->create($this->user);
                $page = 'login';
                $success = 'L\'utilisateur a bien été créé, veuillez vous connecter';
            } else {
                $error = " L'email " . $_POST['email'] . " est déjà utilisé par un autre utilisateur. Veuillez recommencer l'inscription";
                $page = 'signup';
            }
            require('./View/main.php');
        };
    }

    public function home()
    {
        $page = 'home';
        require('./View/main.php');
    }

    public function logOut()
    {
        unset($_SESSION["user"]);
        $page = 'home';
        require('./View/main.php');
    }

    public function userList()
    {
        $users = $this->userManager->findAll();
        if ($_SESSION["user"]['admin'] == 1) {
            $page = 'userList';
        } else {
            $page = 'unauthorized';
        }
        require('./View/main.php');
    }
}