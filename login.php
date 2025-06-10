<?php include 'config.php'; ?>
<form method="POST">
    <input name="username" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $res = $conn->query("SELECT * FROM users WHERE username='$user'");
    $row = $res->fetch_assoc();
    if ($row && password_verify($pass, $row['password'])) {
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>
