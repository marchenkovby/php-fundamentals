<?php error_reporting(-1);

// print_r($_POST);

//isset()
//empty()

/*$x = '';

if (isset($x)) {
    var_dump($x);
}

if (empty($x)) {
    echo 'X is empty';
}*/

/*if (!empty($_POST['agree'])) {
    var_dump($_POST);
    foreach($_POST['lang'] as $lang) {
        var_dump($lang);
    }
}

if (isset($_POST['form1'])) {
    echo 'Was send first form';
}

if (isset($_POST['form2'])) {
    echo 'Was send second form';
}*/

//var_dump($_GET);

var_dump($_REQUEST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">

    <p>Name: <input type="text" name="name"></p>
    <p>E-mail: <input type="email" name="email"></p>
    <p>Message: <textarea name="message" cols="30" rows="10"></textarea></p>
    <p>
        <select name="lang[]" multiple>
            <option value="ru">Russian</option>
            <option value="en">English</option>
            <option value="fr">France</option>
        </select>
    </p>
    <p>Agree: <input type="checkbox" name="agree"></p>
    <p><button name="form1">Send</button></p>

</form>
<hr>
<form action="index.php" method="get">

    <p>Search: <input type="text" name="s"></p>
    <p><button name="form2" value="search">Send</button></p>

</form>

<a href="?name=Andre&age=30">Link</a>

</body>
</html>
