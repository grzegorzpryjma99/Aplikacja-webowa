<?php


class User
{

    private $email;
    private $password;
    private $name;
    private $surname;
    private $town;
    private $country;
    private $description;
    private $image;

    public function getImage(): string
    {
        return $this->image;
    }


    public function setImage(string $image)
    {
        $this->image = $image;
    }

/*
    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }
*/
    public function getTown(): string
    {
        return $this->town;
    }

    public function setTown(string $town)
    {
        $this->town = $town;
    }


    public function getCountry(): string
    {
        return $this->country;
    }


    public function setCountry(string $country)
    {
        $this->country = $country;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function __construct(string $email, string $password, string $name, string $surname, string $town, string $country, string $description, $image = 'profile.png')
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->town = $town;
        $this->country = $country;
        $this->description  = $description;
        $this->image = $image;
    }
}