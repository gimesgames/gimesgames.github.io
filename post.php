<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
</head>
<body>
    <?php
    if (isset($_GET['timestamp'])) {
        $timestamp = $_GET['timestamp'];
        $postFile = "./database/post_" . $timestamp . ".json";
        
        if (file_exists($postFile)) {
            $post = json_decode(file_get_contents($postFile), true);
            echo "<h2>{$post['title']}</h2>";
            echo "<p>{$post['content']}</p>";
        } else {
            echo "<p>Post not found</p>";
        }
    } else {
        echo "<p>Invalid request</p>";
    }
    ?>
</body>
</html>
