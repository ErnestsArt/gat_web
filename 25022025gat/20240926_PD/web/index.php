<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="app.js"></script>

    <h1>Piesakies webināram!</h1>
    <form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="level">Level: </label>
        <select name="level" id="level">
            <option value="Advanced">Advanced</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermed">Intermed</option>
        </select>
        <br>
        <p>vai vēlies saņemt info?</p>
        <label for="radio">jā</label>
        <input type="radio" name="yes" id="yes">
        <label for="radio">nē</label>
        <input type="radio" name="yes" id="yes">
        <br>
        <input type="submit" value="Nosūtīt">
    </form>
    <h1>jau reģistrējušies: </h1>
    
    <?php 
    $registeredUsers = [
        [
            "name" => "janis",
            "email" => "janis@inbox.lv",
            "level" => "Advanced"
        ],
        [
            "name" => "Locco",
            "email" => "Locco@inbox.lv",
            "level" => "Beginner"
        ],
        [
            "name" => "artur",
            "email" => "art12@inbox.lv",
            "level" => "Advanced"
        ]
        ];
        foreach($registeredUsers as $reguser){
            echo "Vārds: "
                . $reguser["name"]
                . ", E-pasts: "
                . $reguser["email"]
                . ", Līmenis: "
                . $reguser["level"]
                . "<br>";
        }
    ?>
    <a href="blog.php">Next page</a>
</body>
</html>