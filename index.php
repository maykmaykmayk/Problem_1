<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem_1</title>
    <?php session_start(); ?>
</head>

<body>
    <h1>WELCOME TO JOEMIKE POGI'S WEBSITE</h1>
    <form action="login.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="Username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="Password">
        </div>
        <div>
            <input type="submit" value="Login" id="loginbtn" name="loginbtn">
        </div>
    </form>

    <div>
        <a href="logout.php">
            <button>Logout</button>
        </a>
    </div>

    <?php
    if (isset($_SESSION['userLoggedIn'])) {
        echo "<h2>User logged in: " . $_SESSION['userLoggedIn'] . "</h2>";
    } elseif (isset($_SESSION['Username']) && isset($_SESSION['Password'])) {
        echo "<h2>User logged in: " . $_SESSION['Username'] . "</h2>";
        echo "<h2>Password: " . $_SESSION['Password'] . "</h2>";
    }
    ?>
</body>

</html>
