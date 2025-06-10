<?php include 'config.php';
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();
?>
<form method="POST">
    <input name="title" value="<?= $post['title'] ?>">
    <textarea name="content"><?= $post['content'] ?></textarea>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: dashboard.php");
}
?>
