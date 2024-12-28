<?php 

// include "../../config/config.php";

class Account {
    protected $id;
    protected $nom;
    public $balance;
    protected $accountType;
    protected $pdo;

    // Constructor
    public function __construct($pdo, $id = null, $nom = null, $balance = null, $accountType = null) {
        $this->pdo = $pdo;
        $this->id = $id;
        $this->nom = $nom;
        $this->balance = $balance;
        $this->accountType = $accountType;
    }

    public function getNom() { return $this->nom; }
    public function getBalance() { return $this->balance; }
    public function getAccountType() { return $this->accountType; }

    public function getAllAccounts() {
        $stmt = $this->pdo->prepare("SELECT * FROM account");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addAccount() {
        $stmt = $this->pdo->prepare("INSERT INTO account (nom, balance, type) VALUES (?, ?, ?)");
        return $stmt->execute([$this->nom, $this->balance, $this->accountType]);
    }



    public function deleteAccount() {
        $stmt = $this->pdo->prepare("DELETE FROM account WHERE accountID = ?");
        return $stmt->execute([$this->id]);
    }

  
}
