<?php
    include __DIR__ . "/partials/database.php";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Logo-della-Spotify.png" alt="">
    </header>

    <main>
        
        <div class="dischi">
            <?php
                foreach ($db as $disco) {
                    echo
                    "<div class='disco'>" . 
                    "<img src=" . $disco["poster"] . " alt=''>" . 
                    "<h3>" . $disco["title"] . "</h3>" . 
                    "<p>" . $disco["author"] . "</p>" . 
                    "<p>" . $disco["year"] . "</p>" . 
                    "</div>";
                }
            ?>
        </div>
        
    </main>

</body>
</html>