<?php 

session_start();

if (isset($_POST['loginbtn'])) {

    $username = $_POST['Username'];
    $password = md5($_POST['Password']); 

    if (isset($_SESSION['Username'])) {
        $_SESSION['userLoggedIn'] = $_SESSION['Username'] . " already logged in.";
        header('Location: index.php');
        exit();
    }
    
    $_SESSION['Username'] = $username;
    $_SESSION['Password'] = $password;

    header('Location: index.php');
    exit();
}

?>
