<?php

namespace ABI\model;
use \PDO;
use \Exception;


class Client extends Database
{


    public function getClients()
    {
        try
        {
            $req=parent::getPDO()->query('SELECT * FROM clients');
            $users=$req->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }
    public static function getClient($id_client)
    {
        try
        {
            $req=parent::getPDO();
            $result=$req->prepare('SELECT * FROM clients WHERE IDCLIENT=:id_client');
            $result->bindValue(':id_client', $id_client, PDO::PARAM_INT);
            $result->execute();
            
            return $result->fetch(PDO::FETCH_OBJ);
            

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function addClient($id_secteur,$raison_sociale,$adresse,$code_postale,$ville,$effectif,$telephone)
    {
        try
        {
            $req= parent::getPDO()->prepare("INSERT INTO clients (IDSECT, RAISONSOCIALE, ADRESSECLIENT, CODEPOSTALCLIENT, VILLECLIENT, EFFECTIF, TELEPHONECLIENT) VALUES (:id_sect,:raison_sociale,:adresse,:code_postale,:ville, :effectif, :telephone)");
                    $req->bindValue(':id_sect',$id_secteur, PDO::PARAM_INT );
                    $req->bindValue(':raison_sociale',$raison_sociale, PDO::PARAM_STR);
                    $req->bindValue(':adresse',$adresse, PDO::PARAM_STR );
                    $req->bindValue(':code_postale',$code_postale, PDO::PARAM_INT );
                    $req->bindValue(':ville',$ville, PDO::PARAM_STR );
                    $req->bindValue(':effectif',$effectif, PDO::PARAM_INT );
                    $req->bindValue(':telephone',$telephone, PDO::PARAM_INT );
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function updateClient(int $id_client,int $id_secteur,$raison_sociale,$adresse,int $code_postale,$ville,int $effectif, int $telephone)
    {
        try
        {
            $req= parent::getPDO()->prepare("UPDATE clients SET IDSECT=:id_secteur, RAISONSOCIALE=:raison_sociale, ADRESSECLIENT=:adresse, CODEPOSTALCLIENT=:code_postale, VILLECLIENT=:ville, EFFECTIF=:effectif, TELEPHONECLIENT=:telephone WHERE IDCLIENT=:id_client");
                    $req->bindValue(':id_secteur',$id_secteur, PDO::PARAM_INT );
                    $req->bindValue(':raison_sociale',$raison_sociale, PDO::PARAM_STR);
                    $req->bindValue(':adresse',$adresse, PDO::PARAM_STR );
                    $req->bindValue(':code_postale',$code_postale, PDO::PARAM_INT );
                    $req->bindValue(':ville',$ville, PDO::PARAM_STR );
                    $req->bindValue(':effectif',$effectif, PDO::PARAM_INT );
                    $req->bindValue(':telephone',$telephone, PDO::PARAM_INT );
                    $req->bindValue(':id_client', $id_client, PDO::PARAM_INT);
           $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }
    public function deleteClient(int $id_client)
    {
        try
        {
            $req= parent::getPDO()->prepare("DELETE FROM clients WHERE IDCLIENT=:id_client");
                   
                    $req->bindValue(':id_client', $id_client, PDO::PARAM_INT);
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

 
}

?>