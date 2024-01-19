<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
</head>
<body>
    <h2>News</h2>
    <ul id="newsList">
        <?php
        $postFiles = glob('./database/post_*.json');
        foreach ($postFiles as $file) {
            $post = json_decode(file_get_contents($file), true);
            echo "<li><a href='view.php?timestamp={$post['timestamp']}'>{$post['title']}</a></li>";
        }
        ?>
    </ul>
</body>
</html>
