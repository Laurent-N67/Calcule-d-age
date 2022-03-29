
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
</head>
<body> 
    <h1>INFORMATIONS</h1>
    <main>
        <?php
        session_start();
        require "function.php";
        if(!isset($_SESSION['donneePers']) || empty($_SESSION['donneePers'])){
            echo "<p class='noDonnee'> Aucune données dans les informations...";
        }else{ 
            foreach($_SESSION['donneePers'] as $index => $donneePers){
                echo $donneePers['name']." né le ".$donneePers['date']->format("d-m-Y"). " et a ".$donneePers['age']." ans<br>";
            }
        }
        ?>
    </main>
</body>
</html>