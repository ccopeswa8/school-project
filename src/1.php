 <?php
     // Create a new array with 10 random numbers between 1 and 50
     $numbers = array_rand(range(1, 50), 10);
     
     // Print the sum of all the numbers in the array
     echo "Sum: " . array_sum($numbers) . "\n";
 ?>