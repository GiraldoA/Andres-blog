<?php
//the /../ takes us out of the folder we are in
//allowing us to acess anyother folder like the model folder
 require_once(__DIR__ .  "/../model/config.php");
?>

<nav>
    <ul>
  <!--the code that i have below are the links to all the different important pages-->
        <li><a href="<?php echo $path . "posts.php"?>">Blog post form</a></li>
        <li><a href="<?php echo $path . "index.php"?>">Home</a></li>
        <li><a href="<?php echo $path . "register.php"?>">Sign up!</a></li>
        <li><a href="<?php echo $path . "login.php"?>">Login</a></li>
        <li><a href="<?php echo $path . "logout-user.php"?>">Logout</a></li>
    </ul>
</nav>