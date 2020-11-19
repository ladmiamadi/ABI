<?php
class Message
{
    const LIMIT_USERNAME=3;
    const LIMIT_MESSAGE=10;
    private $username;
    private $message;
    private $date;
 

    public function __construct($username, $message, ?DateTime $date=null)
    {
        $this->username=$username;
        $this->message=$message;
        $this->date=$date ?: new DateTime();// si ca n'existe pas créer une date
       
    }

    public function isValid():bool
    {
        return empty($this->getErrors());
    }

    public function getErrors():array
    {
        $errors=[];
        if(strlen($this->username)<self::LIMIT_USERNAME)
        {
            $errors['username']='votre pseudo est trop court';
        }
        if(strlen($this->message)<self::LIMIT_MESSAGE)
        {
            $errors['message']='votre message est trop court';
        }
        return $errors;
    }
    public function toHtml():string
    {
        return <<<HTML
        <p><strong>{$this->username}:</strong><br/>
        <p><strong>Message:</strong> {$this->message};
HTML;
    }
    public function toJSON():string
    {
       return json_encode( [
            'username'=>$this->username,
            'message'=>$this->message,
            'date'=>$this->date->getTimestamp()
        ]);

    }
}

?>