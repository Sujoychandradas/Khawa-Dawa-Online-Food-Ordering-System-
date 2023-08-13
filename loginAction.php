<?php
session_start();

if (isset($_POST['login'])) {
    $l_email = $_POST['l_email'];
    $l_pass = $_POST['l_pass'];

    if (empty($l_email) || empty($l_pass)) {
        $_SESSION['login_error'] = "Please fill in all the fields";
        header('Location: login.php');
        exit();
    }

    include('admin/config/config.php');

    $result = mysqli_query($conn, "SELECT * FROM register WHERE LOWER(db_email) = '$l_email' AND db_password = '$l_pass'");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $l_email; 
        header('Location: index.php');
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid Credentials"; 
        header('Location: login.php'); 
        exit();
    }
}
?>
