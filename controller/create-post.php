<?php
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password, $database);

/*allows my submit button to work*/
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

if ($query) {
    echo "<p>sucessfully inserted post: $title</p>";
}
else {
    echo "<p>$connection->error</p>";
}

//closes my connection to the database
$connection->close();
