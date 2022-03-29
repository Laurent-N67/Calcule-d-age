<?php
session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Age</title>
</head>
<body>
     <main>
       <h1>PHP Session</h1> 
       <form action="traitement.php" method="post">
       <label for="name">Prénom : </label><input type="text" name="name"><br>
       <label for="date">Date de naissance :</label><input type="date" name="date"><br>
       <input type="submit" name="submit" value="Envoyer">
       </form>
     </main>
</body>
</html>