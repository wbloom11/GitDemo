<html>

<head>
</head>

<body>

<h1>Hi! This is my first PHP file suckka!</h1>

<h4>code output:</h4>
<br/>

<!-- Invisible comment -->
<?php

    #Comment
    //Also Comment

    /*multi line
    comment */

    $name = "Wallie";

    $otherName = "Newton";

        echo "Hi, my name is: " .$name."! Nice to have met you, " .$otherName."!";
?>
<br/><br/>
<?php

    $num = 3.14;
    $result = round($num);

    echo $num. " rounded = " .$result;
?>

<br/><br/>

<?php
//numbers
$bigNum = 3526856214524554;

echo $bigNum. " formatted = " .number_format($bigNum);

?>

<br/><br/>

<?php
//constants

define('USERNAME','WallieBloom');

echo "Username = " .USERNAME. " and PHP version = " .PHP_VERSION. " and PHP OS = " .PHP_OS;

?>

<br/><br/>

<?php
//arrays


?>
</body>
</html>