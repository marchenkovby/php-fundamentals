<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptas culpa minima, quidem ipsum reiciendis, ratione perferendis repellat autem sunt ad, a enim error labore nulla voluptate magnam eaque quos!</p>

<?php

$nums = [1, 2, 3, 4, 5];

foreach ($nums as $num) {
    echo "<p>$num</p>";
}

?>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptas culpa minima, quidem ipsum reiciendis, ratione perferendis repellat autem sunt ad, a enim error labore nulla voluptate magnam eaque quos!</p>
</body>
</html>