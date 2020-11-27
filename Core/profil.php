<?php


require_once("../config.php");
require_once ("../Entities/user.php");


class UtilisateurC {


function afficherUtilisateurs(){
			
        $sql="SELECT * FROM eliane";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }	

function ajouterUtilisateur($user){
    $sql="INSERT INTO eliane (name,company, email, telephone ) 
    values (:name,:company,:email,:telephone)";
    $db = config::getConnexion();
    try{
        $query= $db->prepare($sql);

        $query->execute([
            'name'=>$user->getname(),
            'company'=>$user->getcompany(),
            'email'=>$user->getemail(),
            'telephone'=>$user->gettelephone(),
        ]);
   
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    
}
}


 /*$req=$db->prepare($sql);
           
    $name=$Utilisateur->getname();
    $company=$Utilisateur->getcompany();
    $email=$Utilisateur->getemail();
    $telephone=$Utilisateur->gettelephone();
    

    
    $req->bindValue(':name',$name);
    $req->bindValue(':company',$company);
    $req->bindValue(':email',$email);
    $req->bindValue(':telephone',$telephone);
    
    
    
        $req->execute();*/
?>