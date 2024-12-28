<?php
require_once('../class/saving_class.php');
require_once('../../config/config.php');

if (isset($_POST['delete']) && isset($_POST['id_to_delete'])) {
    $id = $_POST['id_to_delete']; 

    $businessAccount = new SavingAccount($pdo, null, null, $id);

    if ($businessAccount->deleteAccount()) {
        
        header("Location: ../accounts/saving.php?status=success");
        exit();
    } else {
        header("Location: ../accounts/saving.php?status=error");
        exit();
    }
}
?>
