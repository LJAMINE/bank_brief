
<?php 

include "../../config/config.php";

class account{
protected $nom;
public $balance;
protected $accountType;
public function __construct($nom,$balance,$accountType){
    $this->nom=$nom;
    $this->balance=$balance;
    $this->accountType=$accountType;
}
public function getNom() {
    return $this->nom;
}


public function getBalance() {
    return $this->balance;
}


public function getAccountType() {
    return $this->accountType;
}

};


