<?php
$who = 'Kilroy';
$where = 'here';
echo "$who was $where"; // Kilroy was here

echo "<br/>";

$n = 12;
echo "You are the {$n}th person"; // You are the 12th person

echo "<br/>";

// Newline
$topic = "PHP is programming languages\n php is powerful";
echo $topic."<br/>";
// echo "PHP is programming languages<br/> php is powerful", PHP_EOL;
echo nl2br('PHP is programming languages'. PHP_EOL . ' php is powerful'. PHP_EOL);
$content = str_replace(PHP_EOL, "<br/>", $topic);
echo nl2br($topic);

echo "<br/>";
// Here Documents

$clerihew = <<< EndOfQuote
Sir Humphrey Davy
Abominated gravy.
He lived in the odium
Of having discovered sodium.

EndOfQuote;
echo $clerihew;

echo "<br/>";

printf(<<< Template
%s is %d years old.
Template
    , "Fred", 35);

echo "<br/>";

$dialogue = <<< NoMore
"It's not going to happen!" she fumed.
He raised an eyebrow. "Want to bet?"
NoMore;
echo $dialogue;

echo "<br/>";

function sayIt() {
    $ws = <<< "StufftoSay"
 The quick brown fox
 Jumps over the lazy dog.
 StufftoSay;
    return $ws;
}

echo sayIt() ;

echo "<br/>";
printf('%.2f', 27.452); // 27.45
echo "<br/>";
printf('The hex value of %d is %x', 214, 214); // The hex value of 214 is d6
echo "<br/>";
printf('Bond. James Bond. %03d.', 7);
echo "<br/>";
$month = 02;
$day = 15;
$year = 2005;
printf('%02d/%02d/%04d', $month, $day, $year); // 02/15/2005

echo "<br/>";
printf('%.2f%% Complete', 2.1); // 2.10% Complete

echo "<br/>";
printf('You\'ve spent $%5.2f so far', 4.1); // You've spent $ 4.10 so far

echo "<br/>";
$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
print_r($a);
var_dump($a);

echo "<br/>";
$string = 'Hello';
$length = strlen($string); // $length is 12
echo "$length<br/>";
for ($i=0; $i < strlen($string); $i++) {
    printf("The %dth character is %s\n", $i, $string[$i]);
}

echo "<br/>";
// Removing Whitespace
$trim = trim(" The     programming          center");
$ltrim = ltrim(" The     programming        left");
$rtrim = rtrim(" The     programming        right");
echo "$trim <br/>";
echo "$ltrim <br/>";
echo "$rtrim <br/>";

// Changing Case
$string1 = "FRED flintstone";
$string2 = "barney rubble";
print(strtolower($string1)); // fred flintstone
print(strtoupper($string1)); // FRED FLINTSTONE
print(ucfirst($string2)); // Barney rubble
print(ucwords($string2)); // Barney Rubble
print(ucwords(strtolower($string1))); // Fred Flintstone

echo "<br/>";
// Entity-quoting all special characters
$string = htmlentities("Einstürzende Neubauten");
echo "$string <br/>"; // Einstürzende Neubauten

$input = <<< End
"Stop pulling my hair!" Jane's eyes flashed.<p>
End;

$double = htmlentities($input); // "Stop pulling my hair!" Jane's eyes flashed.<p>
echo "$double <br/>";
$both = htmlentities($input, ENT_QUOTES); // "Stop pulling my hair!" Jane's eyes flashed.<p>
echo "$both <br/>";
$neither = htmlentities($input, ENT_NOQUOTES); // "Stop pulling my hair!" Jane's eyes flashed.<p>
echo "$neither <br/>";

// Removing HTML tags
$input = '<p>Howdy, "Cowboy";</p>';
$output = strip_tags($input); // Howdy, "Cowboy";
echo "$output <br/>";

$input = 'The <b>bold</b> tags will <i>stay</i><p>';
$output = strip_tags($input, '<b>'); // The <b>bold</b> tags will stay
echo "$output <br/>";

// Extracting meta tags
$metaTags = get_meta_tags('https://www.pocket-gaming.io/');
echo "Web page made by {$metaTags['description']} <br/>";
var_dump($metaTags);

// RFC 3986 encoding and decoding
$name = "Programming PHP";
$output = rawurlencode($name); // http://localhost/Programming%20PHP
echo "http://localhost/{$output} <br/>";
$encoded = 'Programming%20PHP';
$decode = rawurldecode($encoded);
echo "$decode <br/>";

// Query-string encoding
$baseUrl = 'http://www.google.com/q=';
$query = 'PHP sessions -cookies';
$url = $baseUrl . urlencode($query); // http://www.google.com/q=PHP+sessions+-cookies
echo "$url <br/>";

// SQL
$string = <<< EOF
"It's never going to work," she cried,
as she hit the backslash (\) key.
EOF;
$string = addslashes($string);
echo "$string <br/>";
echo stripslashes($string) . "<br/>";

// Comparing Strings
$o1 = 3;
$o2 = "3";

if ($o1 == $o2) {
    echo("== returns true<br>");
}
if ($o1 === $o2) { //
    echo("=== returns true<br>");
}

$him = "Fred";
$her = "Wilma";
if ($him < $her) { // Fred comes before Wilma in the alphabet
    print "{$him} comes before {$her} in the alphabet.\n";
}

$string = "PHP Rocks";
$number = 5;
// echo "$string and $number <br/>";
if ($string < $number) {
    echo("{$string} < {$number}");
}

echo "<br/>";

echo strcmp("PHP Rocks", 5);
echo strcasecmp("Fred", "frED");


echo "<br/>";
// Approximate Equality
$known = "Fred";
$query = "Phred";
if (soundex($known) == soundex($query)) {
    print "soundex: {$known} sounds like {$query}<br>";
} else { // Fred doesn't sound like Phred
    print "soundex: {$known} doesn't sound like {$query}<br>";
}

if (metaphone($known) == metaphone($query)) { // Fred sounds like Phred
    print "metaphone: {$known} sounds like {$query}<br>";
} else {
    print "metaphone: {$known} doesn't sound like {$query}<br>";
}

$string1 = "Rasmus Lerdorf";
$string2 = "Razmus Lehrdorf";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent); // They have 13 chars in common (89.66%).

echo "<br/>";
// Substrings
$name = "Fred Flintstone";
$fluff = substr($name, 6, 4); // $fluff is "lint"
echo "$fluff <br/>";
$sound = substr($name, 11); // $sound is "tone"
echo "$sound <br/>";

$sketch = <<< EndOfSketch
Well, there's egg and bacon; egg sausage and bacon; egg and spam;
egg bacon and spam; egg bacon sausage and spam; spam bacon sausage
and spam; spam egg spam spam bacon and spam; spam sausage spam spam
bacon spam tomato and spam;
EndOfSketch;
$count = substr_count($sketch, "spam");
print("The word spam occurs {$count} times.<br/>");

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 7);
echo "$farewell <br/>";

// Miscellaneous String Functions
echo strrev("There is no cabal"). "<br/>"; // labac on si erehT

$repeat = str_repeat('_.-.', 40);
echo "$repeat <br/>";

$string = str_pad('Fred Flintstone', 30, '. ');
echo "{$string}35<br/>";

echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_LEFT) . "]<br/>";
echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_BOTH) . "]<br/>";

// Exploding and imploding

$input = 'Fred,25,Wilma';
$fields = explode(',', $input); // array('Fred', '25', 'Wilma')
var_dump($fields);
$fields = explode(',', $input, 2); // array('Fred', '25,Wilma')
var_dump($fields);

$fields = array('Fred', '25', 'Wilma');
$string = implode(',', $fields); // $string is 'Fred,25,Wilma'
echo($string);

echo "<br/>";
// Tokenizing

$string = "Fred,Flintstone,35,Wilma";
$token = strtok($string, ",");
var_dump($token);
while ($token !== false) {
    echo("{$token}<br />");
    $token = strtok(",");
}

$string = "Fred\tFlintstone (35)";
$a = sscanf($string, "%s\t%s (%d)");
var_dump($a);
print_r($a);

echo "<br/>";
// $string = "Fred\tFlintstone (35)";
$n = sscanf($string, "%s\t%s (%d)", $first, $last, $age);
echo "Matched {$n} fields: {$first} {$last} is {$age} years old<br/>";


// Decomposing URLs
$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
var_dump($bits);
print_r($bits);