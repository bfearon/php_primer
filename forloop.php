<?php 
$title = "forloop";
include 'includes/header.php'?> 
<body>
    <h1>For Loops</h1>
    <?php 
    // For Loops
    for($count =0; $count <10; $count++){
        echo '<p>HELLO WORLD</p>';
    }

    for($count =0; $count <10; $count++){
        echo "<p>The count is $count</p>";
        
    }

    ?>
 <?php require 'includes/footer.php' ?>