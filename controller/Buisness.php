<?php


namespace ABI\controller;
use ABI\model\Client;
use ABI\model\Secteur;
use ABI\model\Database;
use Exception;

class Buisness
{
    public static function viewClients()
    {
        $results= new Client('abi');
        return $results->getClients();
       
    }
    public static function addClientBuisness($secteur, $raison_sociale, $adresse, $code_postale, $ville, $effectif, $telephone)
    {
        $results= new Client('abi');
        $sect=new Secteur('abi');
        $id_secteur=(int) $sect->getSecteur($secteur);
        $result=$results->addClient($id_secteur,$raison_sociale,$adresse,$code_postale,$ville,$effectif, $telephone);
        header('Location:./index.php?page=buisness&successAdd=true');
    
        return $result;
    }
    public static function viewSecteurs()
    {
        try{
            $results= new Secteur('abi');

            $secteurs=$results->getSecteurs();
            foreach($secteurs as $secteur)
            {
               echo '<option>'.$secteur->ACTIVITE.'</option>';

            }
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
        
    }
    public static function showClientBuisness($value)
    {
        try
        {
            $results= new Database('abi');
        $result=$results->showClients($value);
       
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
        return $result;
    }
    public static function showDetailClient($id_client)
    {
        try
        {
            $results= new Client('abi');
            $result=$results->getClient($id_client);
       
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
        return $result;
    }
   public static function updateClientBuisness($id_client,$id_secteur, $raison_sociale, $adresse, $code_postale, $ville, $effectif, $telephone)
   {
    $results= new Client('abi');
   
    $status=$results->updateClient((int)$id_client,(int) $id_secteur,$raison_sociale,$adresse,(int)$code_postale,$ville,(int)$effectif, (int)$telephone);
    
    header('Location:./index.php?page=buisness&successUpdate=true');
   

   }
   public static function deleteClientBuisness($id_client)
   {
    $results= new Client('abi');
    $status=$results->deleteClient((int)$id_client);
    
    
        header('Location:./index.php?page=buisness&successDelete=true');
    

   }

    
}

?>