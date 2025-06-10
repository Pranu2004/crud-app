<?php include 'config.php'; ?>
<a href="create.php">Add Post</a> | <a href="logout.php">Logout</a><br><br>

<?php
$res = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
while ($row = $res->fetch_assoc()) {
    echo "<h2>{$row['title']}</h2>";
    echo "<p>{$row['content']}</p>";
    echo "<a href='edit.php?id={$row['id']}'>Edit</a> | ";
    echo "<a href='delete.php?id={$row['id']}'>Delete</a><hr>";
}
?>
