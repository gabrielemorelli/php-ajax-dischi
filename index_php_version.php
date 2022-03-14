<?php

require __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href="style.css">
</head>
<body>
<header>
  <div class="logo">
    <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/400px-Spotify_App_Logo.svg.png?20210620075506 alt="">
  </div>

    <main>
        <div class="container">
            <?php

                foreach($database as $disco){
                    echo '<div class="card">';
                    echo "<img src=". $disco['poster'] . ">";
                    echo "<h3>". $disco['title'] . "</h3>";
                    echo "<div>". $disco['author'] . "</div>";
                    echo "<div>". $disco['genre'] . "</div>";
                    echo "<div>". $disco['year'] . "</div>";
                   echo"</div>";
                }

            ?>
        </div>
</body>
</html>

