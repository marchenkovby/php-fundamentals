<?php error_reporting(-1);

$str1 = '<p>Hell\'o \& 1</p> \n'; // First version
$str2 = "<p>Hell\'o 2</p> \n"; // Second version

//echo $str1;

//define("PHP_TAB", "\t");
//echo PHP_TAB, PHP_TAB, PHP_TAB;
//echo "<p>Hello 1</p>";
//echo PHP_EOL . "\t\t\t";
//echo "<p>Hello \2</p>";
//echo PHP_EOL;
//echo "<p>Hello 3</p>\n";
//echo '<p>Hello \2</p>\n';

$str3 = 'Lorem "\ipsum\" dolor sit amet, consectetur adipisicing elit. Debitis ipsa officia officiis quaerat quidem quos reiciendis sapiente sequi! Aliquam consequatur dolorem laborum sequi? Accusantium aspernatur culpa necessitatibus provident temporibus voluptas.';

$name = 'Jonh';
// Third version: Heredoc
$str4 = <<<"HEREDOC"
Hello $name <br>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ipsa officia officiis quaerat quidem quos reiciendis sapiente sequi! Aliquam consequatur dolorem laborum sequi? Accusantium aspernatur culpa necessitatibus provident temporibus voluptas.</div>
    <span>Example tab for span</span>
Example slash: \\ and \n
HEREDOC;

//echo $str4;

// Fourth version: Nowdock
$str5 = <<<'NOWDOC'
Hello $name <br>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ipsa officia officiis quaerat quidem quos reiciendis sapiente sequi! Aliquam consequatur dolorem laborum sequi? Accusantium aspernatur culpa necessitatibus provident temporibus voluptas.</div>
    <span>Example tab for span</span>
Example slash: \\ and \n
NOWDOC;

//echo $str5;

var_dump((string)TRUE);
