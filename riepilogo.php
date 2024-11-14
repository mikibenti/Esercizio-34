<?php
    session_start();
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
    <h2 class="text-primary">Frasi Con Importanza Massima : </h2>
        <ul>
            <?php
                foreach($_SESSION["frasImportanti"] as $frase) {
                    echo "<li>$frase</li>";
                }
            ?>
        </ul>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">Numero Totale di Parole</th>
        <th scope="col">Numero Totale di Caratteri</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                echo "<td>".$_SESSION["wordCount"]."</td>";
                echo "<td>".$_SESSION["charCount"]."</td>";
            ?>
        </tr>
    </tbody>
    </table>
    <br><a href="./frase.html">Re-inserisci Dati</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>