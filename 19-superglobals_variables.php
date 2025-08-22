<!-- PHP Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
The next chapters will explain some of the superglobals, and the rest will be explained in later chapters. -->


<?php
// $GLOBALS
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()

//------------------------------------------------------------------------------------------------------

// $_SERVER
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
// The example below shows how to use some of the elements in $_SERVER:

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];

// ------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------

// $_REQUEST
// $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
// In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

// <html>
// <body>

// <form method="post" action="demo_request.php">
//   Name: <input type="text" name="fname">
//   <input type="submit">
// </form>

// </body>
// </html>

// When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.

// In the action file we can use the $_REQUEST variable to collect the value of the input field.

?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>