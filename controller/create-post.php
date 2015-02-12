<?php
require_once(__DIR__ . "/../model/config.php");

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

//closes my connection to the database but i dont need to use it anymore so i have it commented out
//$connection->close();
