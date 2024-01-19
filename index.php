<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
</head>
<body>
    <h2>News</h2>
    <ul id="newsList"></ul>
    <script>
        fetch("database/")
            .then(response => response.json())
            .then(posts => {
                const newsList = document.getElementById("newsList");
                posts.forEach(post => {
                    const listItem = document.createElement("li");
                    listItem.textContent = `Title: ${post.title}, Content: ${post.content}`;
                    newsList.appendChild(listItem);
                });
            });
    </script>
</body>
</html>
