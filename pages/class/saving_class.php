<?php 

include('account.php');
class SavingAccount extends Account{
    protected $savingId;
    public $interet;

    public function __construct($pdo,$savingId=null,$interet=null, $id = null, $nom = null, $balance = null, $accountType = null){
        parent::__construct($pdo,$id,$nom,$balance,$accountType);
        $this->savingId=$savingId;
        $this->interet=$interet;
    }

    public function getAllsavingaccount(){
        $stmt = $this->pdo->prepare(
         "SELECT s.savingAccountID,s.interet,a.accountID
            FROM savingaccount s
            INNER JOIN account a
            ON a.accountID=s.accountID
            "
        );

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}

?>