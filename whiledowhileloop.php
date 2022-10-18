<?php
$title = "whiledowhileloop";
 include 'includes/header.php'?> 
<body>
    <h1>While Loop</h1>
    <?php 
        $grade = 0;
        //Infinite Loop
        //while($grade < 10){
        //    echo '<p>I AM LESS THAN 10</p>';
       // }
       //Pre condition Loop
       while($grade < 10){
          echo '<p>I AM LESS THAN 10</p>';
        $grade++;
       }
       echo 'EXIT LOOP!';
    ?>
    
    <h1>Do-While Loop</H1>
    <?php 
      //Post Condition Loop
      $grade = 0;
       do{
        echo '<p>I AM DO WHILE LOOP 10</p>';
        $grade++;
           }while($grade < 10);
       echo 'EXIT LOOP!';

    ?>
    
    <?php require 'includes/footer.php' ?>