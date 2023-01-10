<?php

class UserManager
{

    private $db;

    public function __construct($db1)
    {
        $this->db = $db1;
    }


    public function login(User $user)
    {
        $req = $this->db->prepare('Select email from users where email = :email and password = :password');
        $req->execute(
            array(
                'email' => $user->getEmail(),
                'password' => $user->getPassword()
            )
        );
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function create(User $user)
    {
        $req = $this->db->prepare(
            'INSERT INTO users ( email, password, firstName, lastName, address, postalCode, city, admin ) VALUES ( :email, :password, :firstName, :lastName,   :address, :postalCode, :city,  0 )'
        );

        $req->execute(
            array(
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'address' => $user->getAddress(),
                'postalCode' => $user->getPostalCode(),
                'city' => $user->getCity(),
            )
        );
        // if ($req) {
        //     echo 'Le compte a bien été créé, veuillez vous connectez';
        // } else {
        //     echo 'erreur lors de la création du compte, veuillez rééssayer';
        // }
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public final function update(User $user)
    {

        $req = $this->db->prepare(' Update users
             set lastName = :lastName, firstName = :firstName, email = :email, address = :address, postalCode = :postalCode, city = :city, password = :password where id = :id');

        $req->execute(
            array(
                'lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'postalCode' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'password' => $user->getPassword(),
                'id' => $user->getId()
            )
        );
    }

    public final function delete(User $user)
    {
        $req = $this->db->prepare('delete from users where id = :id');
        $req->bindvalue(':id', $user->getId());
        $req->execute;
    }

    public function findAll()
    {
        $req = $this->db->prepare('SELECT * FROM users');
        $req->execute();
        return $req->fetchAll();
    }

    public final function findOne(User $user)
    {
        $req = $this->db->prepare('SELECT * FROM users where id = :id');
        $req->bindvalue(':id', $user->getId());
        $req->execute();
        return $req->fetch();
    }

    public final function findByEmail($email)
    {
        $req = $this->db->prepare('SELECT * FROM users where email = :email');
        $req->bindvalue(':email', $email);
        $req->execute();
        return $req->fetch();
    }
}