<?php
echo "<h1>Welcome to IS218</h1>";
echo "<h2>Functions for working with string length and substrings</h2>";
$f_name="";
if(empty($f_name))
{
	echo "Pls input your first name!<br>";
}
$name="Xi\"an China";
$length =strlen($name);
echo $length."<br>";
echo "City: ".substr($name,0,5)."<br>";
echo "Country: ".substr($name,6,5)."<br>";
echo "Country: ".substr($name,-5)."<br>";
echo "City: ".substr($name,-11,5)."<br>";

echo "<h2>Functions for searching a string</h2>";
$msg = "I love PHP. love I love PHP, too<br>";
echo strpos($msg, 'love')."<br>";
echo strpos($msg,'hate')."<br>";
echo strrpos($msg, 'love')."<br>";
echo strpos($msg,'love',3)."<br>";
echo stripos($msg, 'php')."<br>";
echo strripos($msg, 'php')."<br>";
echo "<h2>Functions for replacing part of a string</h2>";
$msg = "Hello World!<br>";
echo $msg;
echo str_replace("World", "Peter",$msg);
echo str_replace("world", "Peter",$msg);
echo str_ireplace("world", "Peter",$msg);
$msg = "Hello World!Hello World!Hello World!<br>";
echo $msg;
echo str_replace("World", "Peter", $msg);
echo str_replace("World", "Peter", $msg,$count);
echo $count;

echo "<h2>Functions for modifying string</h2>";
echo strtolower("Hello")."<br>";
echo strtoupper("hello")."<br>";
echo ucfirst("hello world")."<br>";
echo lcfirst("Hello World")."<br>";

echo "<h2>Functions that convert between character and integer</h2>";

$num = 65;
echo chr($num)."<br>";

$c = 'B';
echo ord($c)."<br>";

echo "<h2>Functions for comapring two string</h2>";

echo strcmp("hello", "hello")."<br>";
echo strcmp("Hello", "hello")."<br>";
echo strcmp("hello", "Hello")."<br>";

echo strcasecmp("hello", "Hello")."<br>";

echo strcmp("2hello", "10hello")."<br>";
echo strnatcmp("2hello", "10hello")."<br>";

echo strnatcmp("hello2", "Hello10")."<br>";
echo strnatcasecmp("hello2", "Hello10")."<br>";

echo "<h2>Conversion between an integer and string</h2>";

echo (int)'42'."<br>";
echo (int)'42.5'."<br>";
echo (int)'42 miles'."<br>";
echo (int)'2,500 feet'."<br>";
echo (int)'miles'."<br>";
echo (int)'42'."<br>";










echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
echo "<br><br><br><br><br><br>";
?>









