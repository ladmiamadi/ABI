<?php
require_once './classes/Message.php';
class GoldenBook
{
    private $file;
    public function __construct(string $file)
    {
        if(!file_exists($file)){
            touch($file);
            }
        $this->file=$file;
        
    }
    public function addMessage(Message $message)
    {
        file_put_contents($this->file, $message->toJSON()."\n", FILE_APPEND);
       
    }
    public function getMessage(): array
    {
        
        $messages=[];
        
        $content=trim(file_get_contents($this->file));// enlever la derniere ligne qui est vide
        $lines= explode(PHP_EOL, $content);
       foreach($lines as $line)
       {
           $data= json_decode($line);
           $messages[]=new Message($data['username'], $data['message'], new DateTime("@".$data['date']));

       }
       return array_reverse($messages);
    }
}

?>