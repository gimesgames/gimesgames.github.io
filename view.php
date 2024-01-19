<?php
$timestamp = isset($_GET['timestamp']) ? $_GET['timestamp'] : null;
if (!$timestamp) {
    header("Location: index.php");
    exit;
}

$filename = "./database/post_" . $timestamp . ".json";
if (!file_exists($filename)) {
    echo "Post not found";
    exit;
}

$post = json_decode(file_get_contents($filename), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?></title>
</head>
<body>
    <h2><?php echo $post['title']; ?></h2>
    <p><?php echo $post['content']; ?></p>
    <p>Published on: <?php echo date('Y-m-d H:i:s', $post['timestamp']); ?></p>
    <p><a href="index.php">Back to News</a></p>
</body>
</html>
