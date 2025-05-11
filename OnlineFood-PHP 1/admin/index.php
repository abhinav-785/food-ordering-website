<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hardcoded credentials
        if ($username === 'admin' && $password === 'admin@123') {
            $_SESSION["adm_id"] = 1; // Just a dummy ID
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid Username or Password!');</script>";
        }
    }
    ?>

    <!-- <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form> -->
    <div class="form">
  <h2>Admin Panel</h2>
  <form class="login-form" action="index.php" method="post">
    <input type="text" placeholder="Username" name="username" required/>
    <input type="password" placeholder="Password" name="password" required/>
    <input type="submit" name="submit" value="Login" />
  </form>
</div>
</body>
</html>
