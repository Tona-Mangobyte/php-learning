<?php
$hello = "Hello World!";
$hello2 = "Hello World! \n Hello World!";
$num = 12; // store 12 into the variable $num
$num_f = $num / 3;
$num_f2 = 12.5;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variables</title>
</head>

<body>
<?php echo $hello . "\n" . $hello; ?> <br/>
<?php echo '" '. $hello2 .' "'; ?> <br/>
<?php echo $num; ?><br/>
<?php echo $num_f; ?><br/>
<?php echo '"'.$num_f.'"'; ?>
<?php
$l = 12;
$m = 13;
/* A comment begins here
?>
<p>Some stuff you want to be HTML.</p>
<?= $n = 14; ?>
*/
// $n = 14;
echo("l=$l m=$m n=$n\n"); ?><br/>

<?php
// Constants
define('PUBLISHER', "O'Reilly Media");

echo PUBLISHER;
?><br/>

<?php

echo is_int($num); // if true return 1
echo is_integer($num); // return 1
echo is_integer($num_f); // return 1
echo is_int($num_f2); // not return
?>
<br/>
<?php
// ===== Strings=====
$name = "Guido";
echo "Hi, $name <br/>";
echo 'Hi, $name';
echo is_string($name);
?>
</body>
</html>