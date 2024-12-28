<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $balance = $_POST['balance'];
    $accountType = $_POST['accountType'];

    if (!$nom || !$balance || !$accountType) {
        die("Invalid input data");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO account (nom, balance) VALUES (:nom, :balance)");
        $stmt->execute([
            ':nom' => $nom,
            ':balance' => $balance
        ]);

        $lastId = $pdo->lastInsertId();

        if ($accountType == "1") {
            $fee = $_POST['fee'];
            if (!is_numeric($fee)) {
                die("Invalid fee value");
            }

            $stmt = $pdo->prepare("INSERT INTO businessaccount (fee, accountID) VALUES (:fee, :accountID)");
            $stmt->execute([
                ':fee' => $fee,
                ':accountID' => $lastId
            ]);
            header("location:../index.php");
        } elseif ($accountType == "2") {
            $limitt = $_POST['limitt'];

            if (!is_numeric($limitt)) {
                die("Invalid limit value");
            }

            $stmt = $pdo->prepare("INSERT INTO currentaccount (limitt, accountID) VALUES (:limitt, :accountID)");
            $stmt->execute([
                ':limitt' => $limitt,
                ':accountID' => $lastId
            ]);
            header("location:../index.php");
        } elseif ($accountType == "3") {
            // Saving Account
            $interet = $_POST['interet'];

            if (!is_numeric($interet)) {
                die("Invalid interest rate");
            }

            $stmt = $pdo->prepare("INSERT INTO savingaccount (interet, accountID) VALUES (:interet, :accountID)");
            $stmt->execute([
                ':interet' => $interet,
                ':accountID' => $lastId
            ]);
            header("location:../index.php");
            // echo "Saving account created successfully!";
        } else {
            echo "Invalid account type selected.";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
