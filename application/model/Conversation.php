<?php

class Conversation
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


    public function findAllByUser($id)
    {
        $sql = "select c.id as id , c.created as created from conversation c  INNER JOIN member m ON c.id = m.conversation where m.user = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':id' => $id,
        );
        $query->execute($parameters);
        return $query->fetchAll();
    }


    public function getMembers($id)
    {
        $sql = "select u.email from member m INNER JOIN user u ON m.user = u.id where m.conversation = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':id' => $id,
        );
        $query->execute($parameters);
        return $query->fetchAll();
    }


    public function add($users)
    {
        $sql = "INSERT INTO conversation () VALUES ()";
        $query = $this->db->prepare($sql);
        $query->execute();
        $conversionId = $this->db->lastInsertId();
        foreach ($users as $user)
        {
            $sql = "INSERT INTO member (conversation,user) VALUES (:idConversation,:idUser)";
            $query = $this->db->prepare($sql);
            $parameters = array(
                ':idConversation' => $conversionId,
                ':idUser'         => $user,
            );
            $query->execute($parameters);
        }
    }


}
