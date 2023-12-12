<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>

    <div>
        <h1>BAD WORDS</h1>
        <form action="newfile.php" method="GET">

            <label for="text">Text to filter</label>
            <input type="text" id="text" name="text">

            <br>

            <label for="bad-word">Bad Word to censur</label>
            <input type="text" name="bad-word" id="bad-word">

            <br>

            <button type="submit">Censura!</button>

        </form>
    </div>
    
</body>
</html>