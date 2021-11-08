<?php
include '../database.php';
$admin = new Admin();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $user_admin = $_POST['user_admin'];
    $pass_admin = $_POST['pass_admin'];

    if ($aksi == "create"){
        $admin->create($user_admin,$pass_admin);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $admin->update($id, $user_admin, $pass_admin);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $admin->delete($id);
        header("location:index.php");
    }
}
?>