<!-- Author: Neil Bryan Caoile 
     StudentId: 817643697
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/index.css" />
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Thank You!</title>
</head>
<body>
<header>
    <img src="images/tims-logo.png" alt="tims logo" />
</header>
<main>
    <!-- Get Datas -->
    <?php
        $cupsize   = $_REQUEST['cup-size'];
        $numCoffee = $_REQUEST['num-coffee'];
        $numSugar  = $_REQUEST['num-sugar'];
        $numCream  = $_REQUEST['num-cream'];
        
        
        if($cupsize == "small"){
            $cupSizeImg  = '<img id="small-img" src="images/cup.png" alt="tims logo" />'; 
            $cost = 1.59;
        }else if($cupsize == "medium"){
            $cupSizeImg  ='<img id="medium-img" src="images/cup.png" alt="medium" />';
            $cost = 1.79;
        }else if($cupsize == "large"){
            $cupSizeImg  ='<img id="large-img" src="images/cup.png" alt="large" />';
            $cost = 1.99;
        }else if($cupsize == "x-large"){
            $cupSizeImg  ='<img id="x-large-img" src="images/cup.png" alt="x-large" />';
            $cost = 2.19;
        }
        //Calculations for the overall cost
                        $totalCost = $cost * $numCoffee;
                                $hst = $totalCost * 13 / 113;  
                $overAllTotalCost = $totalCost + $hst;
                    $hstFormatted = number_format($hst,2); 
        $overAllTotalCostFormatted   = number_format($overAllTotalCost,2);
    ?>
    <!-- Print Cofee cup cream and sugar -->
    <?php 
        for($i= 0; $i < (int)$numCoffee; $i++ ){
            
            echo '<div class="order-output-container">';
                echo '<div>';
                    echo $cupSizeImg;
                echo '</div>';

                echo '<div>';
                    for($j=0; $j <$numSugar; $j++ ){
                        echo '<img id="sugar" src="images/sugar.png" alt="tims logo" />';
                    }
                echo '</div>';


                echo '<div>';
                    for($k=0; $k <$numCream; $k++ ){
                        echo '<img id="sugar" src="images/cream.png" alt="cream" />';
                    }
                echo '</div>';
            echo '</div>';
        }
    ?> 

    <!-- Print price -->
    <div class="print-price">
        <?php 
            #print price
            echo "<p>The cost of a <b>$cupsize</b> cup cofee is <b>\$$cost</b></p> <br>";
            echo "<p>HST:       <b>$$hstFormatted</b></p><br>";
            echo '<div class="total-cost">';
            echo "<p>TotalCost: <b>$$overAllTotalCostFormatted</b></p><br>";
            echo '</div>';
        ?>
    </div>
</main>





<footer>
    <span>ASSIGNMENT 3</span>
</footer>




    

</body>
</html>