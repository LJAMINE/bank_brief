<?php 

include('account.php');
class BusinessAccount extends Account{
    protected $businessid;
    public $fee;

    public function __construct($pdo,$businessid=null,$fee=null, $id = null, $nom = null, $balance = null, $accountType = null){
        parent::__construct($pdo,$id,$nom,$balance,$accountType);
        $this->businessid=$businessid;
        $this->fee=$fee;
    }

    public function getAllbusinessaccount(){
        $stmt = $this->pdo->prepare(
         "SELECT c.businessAcocuntID  ,c.fee,a.accountID
            FROM businessaccount c
            INNER JOIN account a
            ON c.accountID=a.accountID
            "
        );

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}

?>