<?php
var_dump($_GET['text']);
$text = $_GET['text'];
var_dump($_GET['bad-word']);
$bad_word = $_GET['bad-word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Censured</title>
</head>
<body>
    
    <div>
        <h2>Original Text:</h2>
        <p> <?php echo $text; ?></p>
        <p>Lunghezza: <?php echo strlen($text); ?></p>
        <h2>Word to censur</h2>
        <p> <?php echo $bad_word; ?></p>
        <p>Lunghezza: <?php echo strlen($bad_word); ?></p>
        <h2>Text Censured</h2>
        <p> <?php  ?> </p>
        <p>Lunghezza: <?php echo strlen($censured_text); ?></p>
    </div>
  

</body>
</html>