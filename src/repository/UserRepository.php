<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getId(string $email){
        $stmt = $this->database->connect()->prepare('
        SELECT id FROM users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user['id'];
    }

    public function geEmailByID(int $id){
        $stmt = $this->database->connect()->prepare('
        SELECT email FROM users WHERE id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user['email'];
    }

    public function getUser(string $email): ?User{

        $stmt = $this->database->connect()->prepare('
        SELECT * FROM users u LEFT JOIN users_details ud 
            ON u.id_user_details = ud.id WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //28:00 filmik z baza danych
        if($user == false){
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['town'],
            $user['country'],
            $user['description']
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (name, surname,town,country,description)
            VALUES (?, ?,?,?,?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getTown(),
            $user->getCountry(),
            $user->getDescription()
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, id_user_details)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user)
        ]);
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_details WHERE name = :name AND surname = :surname AND town = :town AND country = :country AND description = :description
        ');
        $stmt->bindParam(':name', $user->getName(),PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->bindParam(':town', $user->getTown(), PDO::PARAM_STR);
        $stmt->bindParam(':country', $user->getCountry(), PDO::PARAM_STR);
        $stmt->bindParam(':description', $user->getDescription(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }

}