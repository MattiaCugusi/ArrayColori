<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Colori</title>
</head>
<body>
    <?php
      $num = rand(10,20);

      $lista = [];

      for ($i = 0; $i <= $num; $i++){
        $lista[$i] = $i;
      }

      $colori = ["red", "black", "green", "purple", "blue"];

      $cas = rand (0, 4);

      echo "<ol>";

      for ($i = 0; $i < $num ; $i++){
        echo "<li style = 'color: " . $colori[$cas] . "'>" . $lista[$i] . "</li>";
      }

      echo "</ol>";

      
    ?>

    
</body>
</html>