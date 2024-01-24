<?php 
    $title = "index";
    include 'includes/header.php'
    ?>
    <!--Basico HTML -->
    <h1 style= 'color:blue'>Hola Mundo - PHP primer</h1>
    <br/>
    <?php 
        //Utilizando echo
        echo "Hola";
        echo"<br/>";
        echo "Segunda Linea";
        echo"<br/>";
    ?>

    <?php 
        $name = "Jennifer Lizeth Salas Ramirez"; 
        $age = 19;  
        //echo variable
        echo $name;
        echo "<h1 style= 'color: pink'>Mi nombre es: ".$name." </h1>";
        echo "<h1 style= 'color: red'>Mi edad es: ".$age." </h1>";
    //echo usando double
        echo "<h1 style= 'color: purple'>Mi nombre es: $name</h1>";
    ?>

<button type="button" class="btn btn-dark"> PULSAME</button>
<?php require 'includes/footer.php' ?>  