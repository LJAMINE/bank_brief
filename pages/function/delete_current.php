<?php
require_once('../class/current_class.php');
require_once('../../config/config.php');

if (isset($_POST['delete']) && isset($_POST['id_to_delete'])) {
    $id = $_POST['id_to_delete']; 

    $businessAccount = new CurrentAccount($pdo, null, null, $id);

    if ($businessAccount->deleteAccount()) {
        
        header("Location: ../accounts/current.php?status=success");
        exit();
    } else {
        header("Location: ../accounts/current.php?status=error");
        exit();
    }
}
?>
