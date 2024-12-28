<?php
require_once('../class/business_class.php');
require_once('../../config/config.php');

if (isset($_POST['delete']) && isset($_POST['id_to_delete'])) {
    $id = $_POST['id_to_delete'];  

    $businessAccount = new BusinessAccount($pdo, null, null, $id);

    if ($businessAccount->deleteAccount()) {
        header("Location: ../accounts/business.php?status=success");
        exit();
    } else {
        header("Location: ../accounts/business.php?status=error");
        exit();
    }
}
?>
