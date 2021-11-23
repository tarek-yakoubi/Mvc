<?php


class User
{

    function __construct($db)
    {
        try
        {
            $this->db = $db;
        } catch (PDOException $e)
        {
            exit('Database connection could not be established.');
        }
    }


    public function login($email, $pwd)
    {
        $sql = "select * from user where email = :email            ";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':email' => $email,
        );
        $query->execute($parameters);
        $user = $query->fetch();

        if ($user and $user->password == hash('sha256', $pwd))
            return $user;
        else
            return null;
    }

    public function getOtherMembers()
    {
        $sql = "select email,id from user where id <> :id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':id' => $_SESSION['current_user_id'],
        );
        $query->execute($parameters);
        return $query->fetchAll();
    }


}
