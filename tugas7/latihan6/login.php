<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>

    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = "roymartin";
        $password = "silaban";

        $input_username = $_POST["username"];
        $input_password = $_POST["password"];

        if ($input_username === $username && $input_password === $password) {
            header("Location: admin.php");
            exit;
        } else {
            echo "<p>Username atau password salah. Silakan coba lagi.</p>";
        }
    }
    ?>

</body>
</html>