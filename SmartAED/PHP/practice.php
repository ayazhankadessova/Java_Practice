<!DOCTYPE html>
<html>
<body>

<?php
# 1. concat
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";


# empty line
echo "<br>";

# 2. For - loops
$color2 = "blue";
for ($x = 0; $x <= 10; $x++) {
	echo "My car is " . $color2 . "<br>";
} 

# empty line
echo "<br>";

/* 3. Use comments to leave out parts of the code.
Such as: 5 + 10 + 5 -> don't need 10 anymore.
*/

$x = 5 /* + 15 */ + 5;

# empty line
echo "<br>";

# 4. Creating different variables

$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt . "<br>";
echo $x . "<br>";
echo $y . "<br>";

# 5. Testing global scope 

$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

# 6. Use the global variable to access a global variable from within the function

$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
} 

myTest2();  // run function
echo $y . "<br>"; // output the new value for variable $y

# empty line
echo "<br>";

# 7. Use the $GLOBALS[] array to access the global variables from within a function

$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest3();
echo $y."<br>";

# empty line
echo "<br>";

# 8. Use static not to let local variables be deleted after the function execution

function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();

# 9. Display strings with the echo command

echo "<h2>PHP is Fun!</h2>";
echo "<h3>Hello world!</h3><br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

# 10. Display strings and variables with an echo command

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

# 11. Return Data Rype
$x = 5985;
var_dump($x);

# array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

# 12. PHP Object
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

$myCar = new Car("black", "Volvo");
echo "<br>";
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

# 13. PHP NULL Value
echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);

/* 14. Common string functions
strlen(), str_word_count(), strrev()
strpos() - Search For a Text Within a String. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

echo strpos("Hello world!", "world"); // outputs 6

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

*/

?>

</body>
</html>

