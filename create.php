<?php include 'config.php'; ?>
<form method="POST">
    <input name="title" placeholder="Title">
    <textarea name="content" placeholder="Content"></textarea>
    <button type="submit" name="create">Create</button>
</form>

<?php
if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    echo "Post added!";
}
?>
