<?php
$myString="hello";
echo $myString;
echo "<h5>I love php!</h5> and <h4>I love \" me \" ";
echo "My name is Bob $myString! Who are you?";
$doublequote = "A doublequote is \" and a dollar sign is \$";
//comment
#single line comment
/*  multiple line comments uidwgiuetgurigtrui
*/
echo "<br> learnt about comments</br>";
//add two string using the dot operator
$hereString = $myString."heelo<br/>";
echo $hereString;
echo "let us learn about while loops ab tables in HTML<br/>";

$brushPrice = 5;
$counter = 10;

echo "<table border=\"1\"align = \"center\">";
echo "<tr><th> Quantity</th>";
echo "<th>Price</th></tr>";
while($counter <= 100){
  echo "<tr><td>";
  echo $counter;
  echo "</td><td>";
  echo $brushPrice * $counter ;
  echo "</td></tr>";
  $counter = $counter + 10;
}

echo "</table>";

echo "<h6> Learning for each loop with associative arrays</h6>";
$employee["Bob"] = 34;
$employee["Brandon"] = 35;
$employee["Gilmore"] = 28;
$employee["Bingham"] = 30;
$employee["Brann"] = 34;

foreach ($employee as $key => $value) {
	# code...
	echo "Name:$key, Age:$value";
}

echo "<h1> PHP date funciton </h1>";
echo " <p>the current server time is ".date("H:i:s a")."</p>";
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("y"));
echo "<p> Tomorrow's date is ".date("m/d/y",$tomorrow);



$myFile = "testFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New Stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);
unlink($myFile);
?>
