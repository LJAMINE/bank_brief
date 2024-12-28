<?php 
require_once('../class/account.php');
require_once('../../config/config.php');

if (isset($_POST['delete'])&&isset($_POST['id_to_delete'])) {

$id=$_POST['id_to_delete'];

$account=new Account($pdo,$id);


if ($account->deleteAccount()) {
    header("Location:../index.php?status=success");
    exit();

} else {
    header("Location:../index.php?status=error");
    exit();

}
}






?>