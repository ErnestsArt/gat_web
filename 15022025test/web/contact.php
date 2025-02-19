<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jautā man!</h1>

    <form action="" method="get">
        <label for="name">Vārds: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">E-pasts: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="type">Ziņas tips: </label>
        <select name="type" id="type">
            <option value="Atsauksme">Atsauksme</option>
            <option value="Ieteikums">Ieteikums</option>
            <option value="Jautajums">Jautājums</option>
        </select>
        <br>
        <label for="checkbox1">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label>
        <input type="checkbox" name="checkbox1" id="checkbox1">
        <br>
        <label for="checkbox2">Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</label>
        <input type="checkbox" name="checkbox2" id="checkbox2">
        <br>
        <input type="submit" value="Nosūtīt">
    </form>
    <ul>
        <li><a href="index.php">Index page</a></li>
        <li><a href="portfolio.php">Portfolio page</a></li>
    </ul>
</body>
</html>