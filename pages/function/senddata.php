<?php
include "../../config/config.php";

try {
    $nom = $_POST['nom'];
    $balance = $_POST['balance'];
    $accountType = $_POST['accountType'];

    if (!$nom || !$balance || !$accountType) {
        die("Invalid input data");
    }

    $stmt = $pdo->prepare("INSERT INTO account (nom, balance) VALUES (:nom, :balance)");
    $stmt->execute([
        ':nom' => $nom,
        ':balance' => $balance
    ]);

    $lastId = $pdo->lastInsertId();

    if ($accountType == "1") {
        $stmt = $pdo->prepare("INSERT INTO businessaccount (fee, accountID) VALUES (:fee, :accountID)");
        $stmt->execute([
            ':fee' => 50.00, 
            ':accountID' => $lastId
        ]);
        echo "Business account created successfully!";
    } elseif ($accountType == "2") { 
        $stmt = $pdo->prepare("INSERT INTO currentaccount (limitt, accountID) VALUES (:limitt, :accountID)");
        $stmt->execute([
            ':limitt' => 5000.00, 
            ':accountID' => $lastId
        ]);
        echo "Current account created successfully!";
    } elseif ($accountType == "3") {
        $stmt = $pdo->prepare("INSERT INTO savingaccount (interet, accountID) VALUES (:interet, :accountID)");
        $stmt->execute([
            ':interet' => 0.02,
            ':accountID' => $lastId
        ]);
        echo "Saving account created successfully!";
    } else {
        echo "Invalid account type selected.";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
