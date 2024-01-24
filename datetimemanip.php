<?php 

    $title = "datetimemanip";
    include 'includes/header.php'
?>
    <h1 style='color:blue'>Date and Time Manipulation</h1>
    <?php 
        $datenow = getdate();
        echo "La fecha es: <br/>";
        echo $datenow['mday'] .'<br/>';
        echo $datenow['mon']."<br/>";
        echo $datenow['year']."<br/>";
    
        echo "La fecha de hoy es: ". $datenow['mon'].'/'. $datenow['mday'].'/'. $datenow['year'], '<br/>';
        echo time(). '<br/>';


        print date("m/d/y G.i:s<br>", time()).'<br/>';
        print "Hoy es";
        print date("j of F Y, \a\\t g.i a", time());
    

    ?>
<?php require 'includes/footer.php' ?>  