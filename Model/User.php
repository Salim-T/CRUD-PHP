<?php

class User
{
    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $address;
    private $postalCode;
    private $city;

    //basic constructor for an User 
    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate($data)
    {
        foreach ($data as $fieldName => $fieldValue) {
            $this->$fieldName = $fieldValue;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public final function setId($id1)
    {
        $this->id = $id1;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        if (is_string($firstName)) {
            return $this->firstName = $firstName;
        }
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        if (is_string($lastName)) {
            return $this->lastName = $lastName;
        }
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        return $this->address = $address;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        return $this->postalCode = $postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        return $this->city = $city;
    }
}