<?php

require APP . 'model/User.php';
require APP . 'model/Conversation.php';
require APP . 'model/Message.php';


class Home extends Controller
{

    public function index()
    {
        $conversationModel = new Conversation($this->db);
        $coversations = $conversationModel->findAllByUser($this->getCurrentUserId()); //get all conversion where current user is member
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }


    public function conversation($id)
    {
        $messageModel = new Message($this->db);
        $conversationModel = new Conversation($this->db);
        if ($_POST and $_POST['content'] and $_POST['content'] != "") //check if have data posted & heck if si valid form
        {
            $messageModel->saveMessage($id, $_POST['content']); // save message
            header('location: ' . URL . "?controller=home&action=conversation&id=$id");//redirection
        }
        $messages = $messageModel->getMessages($id);
        $members = $conversationModel->getMembers($id);
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/message.php';
        require APP . 'view/_templates/footer.php';
    }

    public function newConversation()
    {
        $conversationModel = new Conversation($this->db);
        if ($_POST and $_POST['users'] and count($_POST['users']) > 0) //check if have data posted & heck if si valid form
        {
            $users = $_POST['users'];
            $users[] = $this->getCurrentUserId($users);
            $conversationModel->add($users);
            header('location: ' . URL);
        }
        $userModel = new User($this->db);
        $users = $userModel->getOtherMembers();
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/new_conversation.php';
        require APP . 'view/_templates/footer.php';
    }


}
