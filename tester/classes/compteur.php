<?php
class Compteur 
{
    public $fichier;
    

    public function __construct(string $fichier)
    {
        $this->$fichier=$fichier;
    }
    public function incrementer()
    {
        $nombre=0;
      
       
        $nombre=file_get_contents($this->fichier);
        $nombre++;
        file_put_contents($this->fichier, $nombre);
    }
    public function recuperer_vue()
    {
        return  file_get_contents($this->fichier);
    }
}

?>