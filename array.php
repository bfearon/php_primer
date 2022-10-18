<?php 
$title = "Array";
include 'includes/header.php'?> 
<body>
    <h1><?php echo $title?></h1>
    <?php 
    // a variable
     $num = 3;

     //an array
     // Only one data type
     $numbers = array(1,2,3,4,5,6,7,8,9,10);
     // You can access the value in a subscript of the array using the index.

     echo $numbers[5];

    //  echo "<p>$numbers[5]</p>";

    $size = count($numbers);
     echo "<p>Size of the Array is: $size</p> ";


     for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]</p>";

     }
    ?>
    
    <?php require 'includes/footer.php' ?>