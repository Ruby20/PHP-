<?php
function my_func($numx,$numy){
	$total = $numx + $numy;
	return total;
}
$mynumber = 0;
echo "after calling the function";
$mynumber = my_func(5,78);
echo "hello world";
echo "6+7";
echo "Using associative arrays <br/>";
$salary["Bob"] = my_func(45,67)."<br/>";
$salary["Brandon"] = my_func(46,76)."<br/>";
$salary["gilmore"] = my_func(45,67)."<br/>";
echo "Bob is paid $".$salary["Bob"]."<br/>";

$sd = 6 + 56;
echo $sd;
if(get_magic_quotes_gpc())
      echo "magic quotes are enabled";
else
      echo "not enabled"; 
?>
