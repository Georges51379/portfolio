<?php
require_once 'connection.php';
session_start();
$_SESSION['adm_email'] = "";
$errors = '';

// admin LOGIN
if(isset($_POST['admLogin'])){
    $adm_email = $_POST['adm_email'];
    $adm_pinCode = $_POST['adm_pinCode'];

    $checkAdminQuery = mysqli_query($con, "SELECT * FROM admin_tbl WHERE adm_email = '$adm_email' AND adm_pinCode = '$adm_pinCode' AND adm_status = 'Active' ");
    if ($checkAdminNumRws = mysqli_num_rows($checkAdminQuery) == 1) {
        $checkAdminRws = mysqli_fetch_array($checkAdminQuery);
        $_SESSION['adm_email'] = $checkAdminRws['adm_email'];
        header('Location: admin/dashboard.php');
        exit();
    }
    else{
        header('Location: admin/page404.php');
        exit();
    }
}











$getTitleQuery = mysqli_query($con, "SELECT t_name FROM title WHERE t_status = 'Active' ");
$getTitleRws = mysqli_fetch_array($getTitleQuery);

?>