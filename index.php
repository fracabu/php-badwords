<?php
$paragrafo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
Voluptatem corporis eligendi eius impedit delectus. Mollitia, odio, pariatur
magnam dolorem minus ipsum ducimus ullam voluptate ab repudiandae, atque ipsa soluta animi?";


$paragrafoLenght =strlen($paragrafo);
$parolaX =key_exists("parola", $_GET) ? $_GET ["parola"] : "";
$paragrafoCensurato = str_ireplace($parolaX,"***", $paragrafo);
$paragrafoCensuratoLength =


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?php echo $paragrafo ?></p>
<strong>lunghezza paragrafo: <? echo $paragrafo?></strong>


</body>

</html>



