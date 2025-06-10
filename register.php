<?php include 'config.php'; ?>
<form method="POST">
    <input name="username" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <button type="submit" name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo "Registered successfully!";
}
?>
