












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Любовь стоит...</title>
</head>

<body>
    


<h1 class="zag">Любовь Стоит того чтобы ждать</h1>
<?php

    $today = time();
    $targetDate = strtotime('2020-06-16');
    $diffInDays = floor(($today - $targetDate) / (60 * 60 * 24));

    if($diffInDays % 10 == 1 && $diffInDays % 100 != 11){
        echo '<h2>'. $diffInDays. ' день' . '</h2>';
    }elseif($diffInDays % 10 >= 2 && $diffInDays % 10 <= 4 && ($diffInDays % 100 < 10 || $diffInDays % 100 >= 20)){
        echo '<h2>'. $diffInDays. ' дня' . '</h2>';
    }else{
        echo '<h2>'. $diffInDays. ' дней' . '</h2>';
    }

?>


<?php
$today = new DateTime();
$targetDate = new DateTime('2020-06-16 00:00:00');
$interval = $today->diff($targetDate);
$diffInHours = $interval->days * 24 + $interval->h;

if($diffInHours % 10 == 1 && $diffInHours % 100 != 11){
    echo '<h2>'. $diffInHours. ' час' . '</h2>';
}elseif($diffInHours % 10 >= 2 && $diffInHours % 10 <= 4 && ($diffInHours % 100 < 10 || $diffInHours % 100 >= 20)){
    echo '<h2>'. $diffInHours. ' часа' . '</h2>';
}else{
    echo '<h2>'. $diffInHours. ' часов' . '</h2>';
}


?>

<?php
$today = new DateTime();
$targetDate = new DateTime('2020-06-16 00:00:00');
$interval = $today->diff($targetDate);
$diffInMinutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;

if($diffInMinutes % 10 == 1 && $diffInMinutes % 100 != 11){
    echo '<h2>'. $diffInMinutes. ' минута' . '</h2>';
}elseif ($diffInMinutes % 10 >= 2 && $diffInMinutes % 10 <= 4 && ($diffInMinutes % 100 < 10 || $diffInMinutes % 100 >= 20)){
    echo '<h2>'. $diffInMinutes. ' минуты' . '</h2>';
}else{
    echo '<h2>'. $diffInMinutes. ' минут' . '</h2>';
}




?>

<?php
$today = new DateTime();
$targetDate = new DateTime('2020-06-16 00:00:00');
$interval = $today->diff($targetDate);
$diffInSeconds = $interval->days * 24 * 60 * 60 + $interval->h * 60 * 60 + $interval->i * 60 + $interval->s;

if($diffInSeconds % 10 == 1 && $diffInSeconds % 100 != 11){
    echo '<h2>'. $diffInSeconds. ' секунда' . '</h2>';
}elseif ($diffInSeconds % 10 >= 2 && $diffInSeconds % 10 <= 4 && ($diffInSeconds % 100 < 10 || $diffInSeconds % 100 >= 20)){
    echo '<h2>'. $diffInSeconds. ' секунды' . '</h2>';
}else{
    echo '<h2>'. $diffInSeconds. ' секунд' . '</h2>';
}


?>


</body>

</html>
