<?php
function Autoload($className)
{
    $name = $className . ".php";
    if (file_exists($name))
        require_once $name;
}

spl_autoload_register("Autoload");
ini_set('display_errors', 0);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HW-2</title>
</head>
<body>

<?php

// ************** SESSION *******************
echo "<b style='color: coral'>SESSION FUNCTOR : </b><br>";
functor::init("Session", "exists", "name");
functor::init("Session", "put", "name", "AmirHossein");
functor::init("Session", "get", "name");
//functor::init("Session", "flash", "name");
//functor::init("Session", "get", "name");
functor::init("Session", "flash", "Family", "Samaee");
functor::init("Session", "get", "Family");
functor::init("Session", "exists", "Family");
//functor::init("Session", "delete", "name");
//functor::init("Session", "get", "name");
echo "<hr><br>";

// ************** COOKIES *******************
echo "<b style='color: coral'>COOKIES FUNCTOR : </b><br>";
functor::init("Cookie", "exists", "name");
functor::init("Cookie", "put", "name", "AmirHossein", (60 * 60 * 24 * 30));
functor::init("Cookie", "exists", "name");
functor::init("Cookie", "get", "name");
//functor::init("Cookie", "delete", "name");
//functor::init("Cookie", "exists", "name");

?>
<hr>
<br>
<b style='color: coral'>REDIRECT : </b><br>
<!--  *************** REDIRECT ************* -->
<form action="" method="post">
    <label>
        <input type="text" name="redirect_to">
    </label>
    <input type="submit" value="REDIRECT" name="redirect">
</form>
<?php
if (isset($_POST['redirect'])) {
    $path = $_POST['redirect_to'];
    if (file_exists($path))
        functor::init("redirect", "to", $path);
    else {
        echo "page not found !!!";
    }
}
?>

<!--  *************** INPUT ************* -->
<hr>
<br>
<b style='color: coral'>INPUT : </b><br>
<form action="" method="post">
    <label for="NAME">Name : </label><input type="text" name="name" id="NAME">
    <!--    <label for="email">E-mail:</label><input type="text" name="email" id="email"><br>-->
    <input type="submit" name="SUBN" value="SUBMIT">
</form>
<form action="" method="get">
    <label for="EMAIL">Email &nbsp;: </label><input type="email" name="email" id="EMAIL">
    <!--    <label for="email">E-mail:</label><input type="text" name="email" id="email"><br>-->
    <input type="submit" name="SUBE" value="SUBMIT">
</form>
<?php
functor::init("input", "exists");
//functor::init("input", "get", "post");
//functor::init("input", "get", "get");
?>
</body>
</html>
