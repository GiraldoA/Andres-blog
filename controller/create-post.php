<?php

require_once(__DIR__ . "/../view/navigation.php");
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}

/* allows my submit button to work */
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

if ($query) {
    echo "<p>sucessfully inserted post: $title</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

//closes my connection to the database but i dont need to use it anymore so i have it commented out
//$connection->close();
