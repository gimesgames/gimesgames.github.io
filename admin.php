<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $post = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'timestamp' => time()
    ];

    $filename = "./database/post_" . $post['timestamp'] . ".json";
    file_put_contents($filename, json_encode($post));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Create Post</h2>
    <form action="admin.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea>
        <br>
        <input type="submit" value="Create Post">
    </form>
</body>
</html>
