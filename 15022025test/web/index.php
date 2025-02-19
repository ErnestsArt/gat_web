<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Statiskie jautājumi!</h1>

<?php
    $atsauksmes = [
        [
            "autors" => "Jānis",
            "epasts" => "janis@berzins.com",
            "tips" => "Atsauksme"
        ],
        [
            "autors" => "Anna",
            "epasts" => "anna@kalnina.lv",
            "tips" => "Ieteikums"
        ]
    ];

    echo "<ul>";
    foreach ($atsauksmes as $atsauksme) {
        echo "<li>";
        echo "Autors: <strong>{$atsauksme['autors']}</strong><br>";
        echo "E-pasts: <a href='mailto:{$atsauksme['epasts']}'>{$atsauksme['epasts']}</a><br>";
        echo "Tips: {$atsauksme['tips']}";
        echo "</li>";
    }
    echo "</ul>";
    ?>
    
<ul>
    <li><a href="contact.php">contact page</a></li>
    <li><a href="portfolio.php">Portfolio page</a></li>
</ul>
</body>
</html>