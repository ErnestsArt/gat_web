<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h1>Apstiprinājums</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Vārds: " . $_POST["name"] . "</p>";
        echo "<p>E-pasts: " . $_POST["email"] . "</p>";
        echo "<p>Līmenis: " . $_POST["level"] . "</p>";
        echo "<p>Info saņemšana: " . ($_POST["info"] ?? "Nav izvēlēts") . "</p>";
    }
    ?>

    <a href="index.php">Atpakaļ</a>
</body>
</html>
