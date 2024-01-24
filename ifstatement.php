<?php 

    $title = "ifstatement";
    include 'includes/header.php'
?>
    <h3 style="color: red"></h3>
    <?php 
    //An If statement that will carry out an action based on the value of the variable

        echo "<h2>If Statement</h2>";
    
        $grade = 50;
    //==, >, <, <=, >=, ===
        if($grade >= 50){
            echo '<h3 style="color: green">¡Pasaste!</h3>';
        }
        else{
            echo '<h3 style="color: red">¡Fracasaste!</h3>';
        }
        $grade ='A';
        //If-Else If-Else
        if($grade == 'A'){
            echo '<h2 style="color: green">¡Eres una superestrella!</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue"> Lo hiciste bien</h2>';
        }
        else{
            echo '<h2 style="color: red">¡Fallaste!</h2>';
        }
    ?>
<?php require 'includes/footer.php' ?>  