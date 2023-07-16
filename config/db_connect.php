<?php

    // MYSQLI (PROCEDURAL)

    // connect to database
    $conn = mysqli_connect('localhost', 'gabriel', 'GabrielEze2003', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();

        echo "<?php include('templates/footer.php'); ?>";
    }

    // PDO (OBJECTS)

    // try{
    //     $conn = new PDO("mysql:host=localhost;dbname=ninja_pizza", 'gabriel', 'GabrielEze2003');
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e){
    //     echo "Connection failed: " . $e->getMessage();
    // }

    // $conn = null;


?>