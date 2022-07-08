<?php
$paragrafo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
Voluptatem corporis eligendi eius impedit delectus. Mollitia, odio, pariatur
magnam dolorem minus ipsum ducimus ullam voluptate ab repudiandae, atque ipsa soluta animi?";


$paragrafoLenght =strlen($paragrafo);
$parolaX =key_exists("parola", $_GET) ? $_GET ["parola"] : "";
$paragrafoCensurato = str_ireplace($parolaX,"***", $paragrafo);
$paragrafoCensuratoLength = strlen("paragrafoCensurato");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container py-5">
<p><?php echo $paragrafo ?></p>
<strong>lunghezza paragrafo: <? echo $paragrafoLenght?></strong>
</div>


</body>

</html>



