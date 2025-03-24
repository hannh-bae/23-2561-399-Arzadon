<?php
echo "Variables and Operators \n";
$a = 15;
$b = 7;

echo "Sum is: " . ($a + $b) . " \n";
echo "Difference is: " . ($a - $b) ."\n";
echo "Product is: " . ($a * $b) . "\n";
echo "Quotient is: " . ($a / $b) . "\n";

echo "\nConditional Statements \n";

$number = readline('Enter a number: ');
if ($number % 2 == 0){
echo "$number is Even \n";
} else {
echo "$number is Odd \n";
}

echo "\nLoops \n";
for ($i = 1; $i <= 100; $i++) {
if ($i % 3 === 0) {
echo "Fizz ";
} elseif ($i % 5 === 0) {
echo "Buzz ";
} else{
echo "FizBuzz ";
}
}
echo "\n \nFibonacci Sequence \n";
$num1 = 0;
$num2 = 1;

for ($i = 0; $i < 10; $i++) {
$next = $num1 + $num2;
if ($next % 2 == 0) {
echo $next . ", ";
}
$num1 = $num2;
$num2 = $next;
}

echo "\n \nFunctions \n";
echo "Greetings \n";
$name = readline('Enter a name: ');
function greet($name) {
return "Hello, " . $name . "!";
}
echo "\n" . greet($name) . "\n" ;

echo "\nSquare of a Number \n";
$num = readline('Enter a number: ');
function square($num) {
return $num * $num;
}
echo "\n" . square($num) . "\n" ;

echo "\n \nForm Handling \n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submit Text</title>
</head>
<body>
<h2>Enter Some Text</h2>
<form action="process.php" method="post">
<label for="user_text">Text:</label>
<input type="text" id="user_text" name="user_text" required>
<button type="submit">Submit</button>
</form>
</body>
</html>