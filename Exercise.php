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
    echo "\nFibonacci Sequence \n";
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < 10; $i++) {
        $next = $num1 + $num2;
        if ($next % 2 == 0) {
            echo $next . "\n";
        }
        $num1 = $num2;
        $num2 = $next;
    }
    
    echo "\nFunctions \n";
    $name = readline('Enter a name: ');
    function greet($name) {
            return "Hello, " . $name . "!";
        }
        echo " greet("Alic") " ;
    ?>