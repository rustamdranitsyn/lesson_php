<?php

//     $name["Ivanov"] = "Alex";
//     $name["Wilsher"]="Jeff";
//     $name["Spectr"] = "Harvey";
//     echo $name["Ivanov"];

//     define('masiv' ,
//         ["ivonova" => ["name"=>"ivan", "born"=>"12-03-1990"]]    
// );
// echo masiv["ivonova"]["name"];
// $number = count($name);
// echo $number;

// while ($i < 32) {
//     echo $i++;
// }

// $x = 1;
// do {
//     echo $x;
// }
// while ($x++<10);

// for ($x=0; $x++<10;) 
//     echo $x;

// $birth = [
//     "Thomas"=>"1980-11-18",
//     "John"=>"1992-04-28"
// ];
// foreach ($birth as $k=>$v)
//     echo "$k Родился $v <br>";

// function myFSqr($n) {
//     return $n *$n;
// }
// $value = myFSqr(5);
// echo $value;

    // function funcCount() {
    //     static $count = 0;
    //     $count++;
    //     echo $count;
    // }
    // for ($i = 0; $i<5; $i++)
    // funcCount();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Ваше имя: <input type="text" name="name"> </p>
    <p>Ваш возраст: <input type="text" name="age"></p>
    <p><input type="submit"></p>
</form>
Привет <?php echo htmlspecialchars($_POST['name']); ?>.
Вам <?php echo htmlspecialchars($_POST['age']); ?> лет.
</body>
</html>
