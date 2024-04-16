<?php
session_start(); // Start the session

// Check if the user is already logged in, redirect to dashboard if true
if(isset($_SESSION['username'])) {
   header("Location: 23.php");
   exit;
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are correct (replace with your own logic)
    $username = "samir";
    $password = "123456";

    if($_POST['username'] == $username && $_POST['password'] == $password) {
        // Store username in session
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:datasave.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post">
        Username:<br>
        <input type="text" id="username" name="username" required><br>
        Password:<br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>