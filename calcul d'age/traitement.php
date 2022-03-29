<?php

session_start();
require "function.php";

if(isset($_POST['submit'])){
  if(!empty($_POST['date'] && !empty($_POST['name']))){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $date = filter_input(INPUT_POST,'date', FILTER_DEFAULT);
      $age =calculAge($date)[0];
      $dateFr = calculAge($date)[1];
      if($name && $dateFr && $age){     
        
          $donneePers = [
              'name' => $name,
              'date' => $dateFr,
              'age'=> $age
          ];
           $_SESSION['donneePers'][] = $donneePers;
     }   
  }
  // else{
      // "il n'y a aucune donnée"
  // }
  ;
}

header("Location:infos.php");