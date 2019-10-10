<?php

$url = "http://localhost/backend/inl%c3%a4mningsuppgift3/api.php";
//$url = "http://testsida.eu/myAPI/products/api.php";

$json = file_get_contents($url);

$array = json_decode($json, true);
// true skapar en associativ array

// SLÄNG EN LIMIT FÖR <1 PRODUKTER!!!

$limit = 10;
//Skriver ut antal visade produkter av totalt antal
function numberOfProducts($xArray, $xLimit){
$productAmount = count($xArray);
echo '<div class="max-produkter">';       
echo "<p><strong>Visar $xLimit av $productAmount produkter.</strong></p>";
echo '</div>';
}
//Skriver ut produktinfo
function productInfo($xArray, $xLimit){
    for($i=0; $i<$xLimit; $i++){
        $product = $xArray[$i];
        echo '<div class="item">';
        echo $product['image'] . '<br>';
        echo '<strong>' . $product['name'] . '</strong>' . '<br><br>';
        echo '<p>' . $product['description'] . '</p>' . '<br>';
        echo '<p>' . 'Pris: ' . $product['price'] . 'kr' . '<br>' . '</p>';
        echo '<p>Antal i lager: ' . rand(0,50) . 'st.' . '<br></p>';
        echo '</div>';
    }
}

//Formulär för antal produkter med GET
echo '<div class="form-container">';
echo '<form class="form" action="#" method="GET">';
echo '<p><strong>Välj antal produkter att visa!</strong></p>';
echo '<input id="limit1" name="limit" type="submit" value="5">';
echo '<input id="limit2" name="limit" type="submit" value="50">';
echo '<input id="limit3" name="limit" type="submit" value="100">';
echo '<input id="limit4" name="limit" type="submit" value="250">';
echo '</form>';
echo '</div>';

//Utan GET-Request. Laddar 10 produkter
if(!isset($_GET['limit'])){
    numberOfProducts($array, $limit);
    productInfo($array, $limit); /*
    for($i=1; $i<=$limit; $i++){
        $product = $array[$i];
        echo '<div class="item">';
        echo $product['image'] . '<br>';
        echo '<strong>' . $product['name'] . '</strong>' . '<br><br>';
        echo '<p>' . $product['description'] . '</p>' . '<br>';
        echo '<p>' . 'Pris: ' . $product['price'] . 'kr' . '<br>' . '</p>';
        echo '<p>Antal i lager: ' . rand(0,50) . 'st.' . '<br></p>';
        echo '</div>';
    }*/
}
//Med GET-Request. Laddar valt antal produkter
else if(isset($_GET['limit'])){
        $limit = $_GET['limit'];
        //Begränsar limit att max visa det antal arrayen innehåller
        if($limit>count($array)){
            $limit = count($array);
                echo '<div class="max-produkter">';       
                echo "<p><strong>Endast $limit st produkter i lager.<br>Visar alla produkter.</strong></p>";
                echo '</div>'; 
                
        }
        else if($limit<=count($array)){
            numberOfProducts($array, $limit);
        }
        productInfo($array, $limit); 
    }/*
            //Visar antal valda produkter
            for($i=0; $i<$limit; $i++){
                $product = $array[$i];
                echo '<div class="item">';
                echo $product['image'] . '<br>';
                echo '<strong>' . $product['name'] . '</strong>' . '<br><br>';
                echo '<p>' . $product['description'] . '</p>' . '<br>';
                echo '<p>' . 'Pris: ' . $product['price'] . 'kr' . '<br>' . '</p>';
                echo '<p>Antal i lager: ' . rand(0,50) . 'st.' . '<br></p>';
                echo '</div>';
            }*/


    // Visar alla produkter
    /*
    else {
        $productAmount = count($array);
        numberOfProducts($array, $limit);
        foreach ($array as $key => $value) {
            echo '<div class="item">';
            echo $value['image'] . '<br>';
            echo '<strong>' . $value['name'] . '</strong>' . '<br><br>';
            echo '<p>' . $value['description'] . '</p>' . '<br>';
            echo 'Pris: ' . $value['price'] . 'kr' . '<br>';
            echo 'Antal i lager: ' . rand(0,50) . 'st.' . '<br>';
            echo '</div>';

        }
    }
    */

?>