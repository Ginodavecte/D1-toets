<?php
//Exercise 1. Comment the echo statement using multi-line comments. Comment the for-loop using single-line comments.

/*echo​ "Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
dicta sunt explicabo.";*/

//for​($i=0; $i<100; $i++) {}
//---------------------------------------------------------------------------------------------------------------------
//Exercice 2. Declare three variables called a,b and c and assign the values 1000, 1200 and
//1400. Print a line of text to the output screen that reads: “The sum of a,b and c is” followed
//by the sum of the three numbers.
    $a = 1000;
    $b = 1200;
    $c = 1400;
    $sum = $a+$b+$c;

    echo "The sum of $a,$b,$c is $sum. <br><br>";
//---------------------------------------------------------------------------------------------------------------------
//Exercise 3. Explain what’s wrong in the code below:

$number1 = 100;
$number2 = 500;
//function​ addNumbers​() {
 //   echo​ $number1 + $number2;
//}
//


//?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????/
//Exercise 4. Transform $testString to lowercase and print the string.
$testString = "Hello World";
echo strtolower($testString)."<br><br>";
//----------------------------------------------------------------------------------------------------------------------
//Exercise 5. Add your own code to the script below that lists the datatype of each of the
//variables defined below (name, age, male and list). Your echo statements may include no
//words except “Value is”. In other words, use the function that will output the variable type to
//get the requested text.
//Expected output:
//Value is string
//Value is integer
//Value is boolean
//Value is array
//    The script:
    echo "Variabele name is een string<br>";
    echo "Variabele age is een integer<br>";
    echo "Variabele male is a boolean<br>";
    echo "Variabele list is een array <br><br>";
//---------------------------------------------------------------------------------------------------------------------
//Exercise 6. Calculate the sum, subtraction, division,multiplication and exponentiation of the
//numbers 5 and 10 using PHP arithmetic operators.

    $a = 5;
    $b = 10;
    $sum = $a+$b;  echo $sum."<br>";
    $subtraction = $a-$b; echo $subtraction."<br>";
    $division = $a/$b;  echo $division."<br>";
    $multiplication = $a*$b; echo $multiplication."<br>";
    $exponentation = $a**$b; echo $exponentation."<br><br>";
//---------------------------------------------------------------------------------------------------------------------
//Excercise 7. Write a PHP script that replaces the first 'the' of the following string with 'That'.
//String: the quick brown fox jumps over the lazy dog.
//Expected result : That quick brown fox jumps over the lazy dog.

    $string = "the quick brown fox jumps over the lazy dog.";
    echo preg_replace('/the/', 'That', $string, 1)."<br><br>";

//---------------------------------------------------------------------------------------------------------------------
//Exercise 8. Write a script that prints “temperature is low” if temperature is equal to or below
//50 and writes “temperature is ok” if temperature is above 50.

$temperature = 10;
if($temperature <=50){
    echo "Temperature is low<br><br>";
}else{
    echo "Temperature is ok<br><br>";
}
//--------------------------------------------------------------------------------------------------------------------
//Exercise 9. Create an array with the following city names: New York City, Seoul, Tokyo,
//Mexico City, Shanghai, Lagos, Cairo, Buenos Aires, London and Mumbai. Sort the array and
//print the values in the array separated by commas using a for loop. Next, add the following
//cities to the array: Calcutta, Los Angeles, Osaka and Beijing. Next, sort the array and print
//    the values in the array separated by commas using a for loop.

    $cities = array("New York","Seoul","Tokyo","Mexico City","Shanghai","Lagos","Cairo","Buenos Aires","London","Mumbai");
    sort($cities);
    $count =  count($cities);
    for($i=0;$i<$count;$i++){
        echo $cities[$i].",<br> ";
    }
    array_push($cities,"Calcutta","Los Angelas","Okaka","Bejing");
    sort($cities);
    $count = count($cities);
     for($i=0;$i<$count;$i++){
         echo $cities[$i].",<br> ";
     }
//----------------------------------------------------------------------------------------------------------------------
//Excercise 10.In this exercise use two nested for loops to create a table as shown below:
?><br><br>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
$x = 0;
for($i=1;$i<=5;$i++)
{

    echo "<tr>";
    for ($j=1;$j<=5;$j++)
    {
        $x++;    echo "<td>$x</td>";
    }
    echo "</tr>";
}
?>
</table><br><br><br><br><br><br><br><br><br><br><br>
<?php
//----------------------------------------------------------------------------------------------------------------------
//Exercise 11. Write a form that accepts user input. Supply two text boxes, one for width and one for height.
//Write your own function that accepts two parameters (width and height) and
//calculates the area (product). The function should return a sentence “The calculated area of
//width (user inserted width) and height (user inserted height) is: (calculated area)”. This
//sentence should be printed on screen.
function oppervlakte($width,$height){
    $product = $width * $height;
    echo "The area of width ".$width." and height ".$height." is: ".$product.".";
}
if(isset($_POST['submitOppervlakte'])){
    $width = $_POST['width'];
    $height = $_POST['height'];
    oppervlakte($width,$height);
}
    ?>
<form action="toets.php" method="post">
    <input type="text" name="width" placeholder="width"><br>
    <input type="text" name="height" placeholder="height"><br>
    <input type="submit" name="submitOppervlakte" value="Bereken oppervlakte!">
</form>




































