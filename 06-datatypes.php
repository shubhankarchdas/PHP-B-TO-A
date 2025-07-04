<!-- PHP has eight built-in data types:
four scalar types (boolean, integer, float, string),
two compound types (array, object), 
and two special types (resource, NULL). 


1. Scalar Types:

    Boolean: Represents a truth value, either TRUE or FALSE.
    Integer: Represents whole numbers, without a decimal point.
    Float: Represents numbers with a decimal point, also known as doubles.
    String: Represents a sequence of characters. 

2. Compound Types:

    Array: An ordered map that associates keys with values. Arrays can be used to represent lists, dictionaries, and more. 

    Object: Instances of user-defined classes, capable of holding both data and functions. 

3. Special Types:

    Resource: Holds references to external resources, like database connections.
    NULL: Represents a variable with no value.  -->



<?php  

// integer
$a = 10;
var_dump($a);  //You can get the data type of any object by using the var_dump() function.
echo "<br>";


// String
$a = "Hello world!";
$b = 'Hello world!';

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";


// float
$a = 10.365;
var_dump($a);
echo "<br>";


// boolean
$a = true;
var_dump($a);
echo "<br>";


// array
$a = array("apple", "banana", "cherry");
$b = ["apple", "banana", "cherry"];
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";


// object
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "<br>";

 
// NULL

$a = null;
echo var_dump($a);
echo "<br>";

// resource
// A Resource in PHP is a special data type that represents a reference to an external resource, such as a file, database connection, or network stream.
// PHP uses functions to create and manage these resources, and the Zend engine's reference counting system automatically handles their destruction when they are no longer needed.
// Examples include fopen() for file handles, curl_init() for cURL sessions, and mysql_connect() for database links.

$connection = ftp_connect("127.0.0.1") or die ("local host not found");
echo var_dump($connection);

?>



