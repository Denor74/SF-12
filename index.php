<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Модуль 12</title>
</head>
<body class="p-5">
    <h1 class="text-uppercase text-center text-danger mb-4">Модуль 12</h1>
    <?php
//    $a = 100;
//    $b = 5;
   
//    echo $a /= $b * $b;

   
//    var_dump(!!0);
//    var_dump(!!-23);
//    var_dump(!!null);
//    var_dump(!!'null');
   
   // -> bool(false)
   // -> bool(true)
   // -> bool(false)
   // -> bool(true)

   echo '\n';

   $c = 5;
var_dump($c <=> 5);
   echo "\n";
   echo (($c <=> 5)? true : false );
   echo "<br />";

   $name = 'Антон' && 'Борис' && 'Вадим' &&('Гарик' || 'Донателло');
echo $name;
echo "<br />";

echo false =='00x00';
echo true == NAN;
echo 1 !== true;
echo true && 1;
echo !false != !true;
echo true == '0b0000001';

echo "<br />";

$a = 1;

if ($a > 0 ) {
    echo "Верно";
} 
else {
    echo "Неверно";
}

    ?>
</body>
</html>