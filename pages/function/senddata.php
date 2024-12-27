<?php 
include "../../config/config.php";
include "../class/account.php";

try {
   
    $nom=$_POST['nom'];
    $balance=$_POST['balance'];
    $accountType=$_POST['accountType'];

    if (!$nom || !$balance || !$accountType) {
        die("Invalid input data");
    }

     $client = new account($nom, $balance, $accountType);

     $stmt = $pdo->prepare(query: "INSERT INTO account (nom, balance, accountType) VALUES (:nom, :balance, :accountType)");
    $stmt->execute([
        ':nom' => $client->getNom(),
        ':balance' => $client->getBalance(),
        ':accountType' => $client->getAccountType()
    ]);
    $lastId = $pdo->lastInsertId();
    echo "Account created with ID: " . htmlspecialchars($lastId);

     if ($accountType == "3") {  
        $stmt = $pdo->prepare("INSERT INTO savingaccount (nom, balance, accountType) VALUES (:nom, :balance, :accountType)");
        $stmt->execute([
            ':nom' => $client->getNom(),
            ':balance' => $client->getBalance(),
            ':accountType' => $client->getAccountType()
        ]);
        echo "god insert";
    }else{
        echo 'bad value';
    }
} catch (PDOException $e) {
    // error_log("Database error: " . $e->getMessage());
    echo "Failed to insert data.";
}
?>
