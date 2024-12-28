<?php 

include('account.php');
class CurrentAccount extends Account{
    protected $currentid;
    public $limit;

    public function __construct($pdo,$currentid=null,$limit=null, $id = null, $nom = null, $balance = null, $accountType = null){
        parent::__construct($pdo,$id,$nom,$balance,$accountType);
        $this->currentid=$currentid;
        $this->limit=$limit;
    }

    public function getAllcurrentaccount(){
        $stmt = $this->pdo->prepare(
         "SELECT c.currentAcocuntID ,c.limitt,a.accountID
            FROM currentaccount c
            INNER JOIN account a
            ON c.accountID=a.accountID
            "
        );

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}

?>