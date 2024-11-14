<?php
    session_start();
    $frase = $_POST['textarea'];
    $importanza = $_POST['importanza'];
    if (!isset($_SESSION["wordCount"])) {
        $_SESSION["frasImportanti"] = array();
        if($importanza == "4") {
            $_SESSION["frasImportanti"][] = $frase;
        }
        $_SESSION["wordCount"] = str_word_count($frase);
        $_SESSION["charCount"] = strlen($frase);
    } else {
        if($importanza == "4") {
            $_SESSION["frasImportanti"][] = $frase;
        }
        $_SESSION["wordCount"] += str_word_count($frase);
        $_SESSION["charCount"] += strlen($frase);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
       echo "Frase : $frase <br> Livello importanza : $importanza";
    ?>
    <br><a href="./frase.html">Re-inserisci Dati</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>