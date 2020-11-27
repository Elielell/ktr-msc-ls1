<?php


    class Utilisateur
    {
        private $name;
        private $company;
        private $email;
        private $telephone;
        
          
    function __construct($name,$company , $email, $telephone)
    {
        $this->name=$name;
        $this->company=$company;
        $this->email=$email;
        $this->telephone=$telephone;
       
    }
    function getname()
    {
        return $this->name;
    }
    function getcompany()
    {
        return $this->company;
    }
    function getemail()
    {
        return $this->email;
    }
    function gettelephone()
    {
        return $this->telephone;
    }
    
}
?>