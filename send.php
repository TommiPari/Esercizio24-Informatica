<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sender = $_POST["sender"];
        $recipient = $_POST["recipient"];
        $object = $_POST["object"];
        $message = $_POST["message"];
        $out = "";
        $out .= "<h1>Mail creata</h1>";
        $out .= "<h3>Informazioni</h3> <div style='background-color: skyblue'> <p>Mittente: $sender</p> <p>Destinatario: $recipient</p> <p>Oggetto: $object</p> </div> <br>";
        $out .= "<h3>Corpo della mail</h3> <div style='background-color: orange; widht:50%'> <p>$message</p> </div> <br> <hr>";
        $out .= "<h3>Statistiche corpo mail</h3> <div style='background-color: gray'> <p>" . strlen($message) . "</p> <p>" . str_word_count($message) . "</p> </div>";
        echo $out;
    ?>
</body>
</html>