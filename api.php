<?php
/*
Skapa ett RESTful API som genererar minst 10 olika produkter, 
som du kan senare använda under del 2 för att skapa en enkel webshop. 
2. Varje produkt har ett namn, beskrivning, bild och pris. 3
*/
header("Content-Type: application/json; charset=UTF-8");

$names = ["Aberfeldy","Aberlour","Akashi","Ardbeg","The Macallan","The Glenrothes","Hibiki Harmony",
          "Highland Park","Longmorn","Balvenie","Glengoyne","Lagavulin","Kavalan","Oban","Auchentoshan","Caol Ila",
          "Dalwhinnie","Glenfiddich","Glenmorangie","Talisker","Strathisla","Spirit of Hven","Reki","Nikka","Motörhead","The Glenlivet"];

$descriptions = [
                "Nyanserad, maltig smak med fatkaraktär, inslag av ljunghonung, päron, halm, apelsinmarmelad och vanilj. Serveras vid rumstemperatur som avec.",
                "Nyanserad smak med fatkaraktär, inslag av päron, nötter, torkad frukt, ljunghonung, örter och apelsin. Serveras rumstempererad som avec.",
                "Fruktig smak med inslag av fat, torkade aprikoser, marsipan, gula plommon, mjölkchoklad, vanilj och smörkola. Serveras rumstempererad som avec.",
                "Smakrik, komplex, påtagligt rökig whisky med fatkaraktär, inslag av tjärpastiller, torkad frukt, salmiak, mörk choklad och nötter. Serveras rumstempererad.",
                "Balanserad, maltig smak med tydlig fatkaraktär, inslag av apelsinskal, valnötter, mörk choklad, farinsocker, vanilj och honung. Serveras rumstempererad som avec.",
                "Fruktig, nyanserad smak med fatkaraktär, inslag av halm, apelsin, vanilj, torkade päron, klöverblommor, nougat och choklad. 
                Serveras rumstempererad som avec.",
                "Nyanserad, maltig smak med tydlig fatkaraktär, inslag av torkade aprikoser, farinsocker, pomerans, choklad, tobak och vanilj. 
                Serveras rumstempererad som avec.",
                "Fruktig, kryddig, nyanserad smak med fatkaraktär, inslag av torkade aprikoser, ananas, vanilj, gula päron, apelsinmarmelad och örter. 
                Serveras rumstempererad som avec.",
                "Nyanserad, maltig, rökig smak med fatkaraktär, inslag av valnötter, ljunghonung, torkad frukt, jod, örter och vanilj. Serveras rumstempererad.",
                "Nyanserad, maltig smak med tydlig fatkaraktär, inslag av torkad frukt, knäck, örter, päron, vanilj och apelsinskal. 
                Serveras rumstempererad som avec.",
                "Nyanserad smak med tydlig fatkaraktär, inslag av gula päron, honung, macadamianötter, vanilj och pomerans. Serveras rumstempererad som avec, 
                gärna med en skvätt vatten.",
                "Komplex, smakrik whisky med tydlig karaktär av sherryfat, inslag av valnötter, torkad frukt, kakao, lakrits och honung. 
                Serveras rumstempererad som avec.",
                "Komplex, maltig, påtagligt rökig smak med fatkaraktär, inslag av pomerans, choklad, nötter, apelsin, jod, tjära och smörkola. 
                Serveras rumstempererad.",
                "Fyllig och oljig med torkad frukt och kryddor som dröjer kvar i munnen samt en touch av kaffe.",
                "Elegant, balanserad, rökig smak med fatkaraktär, inslag av ljunghonung, aprikos, jod, örter, knäck och pomerans. 
                Serveras rumstempererad som avec.",
                "Elegant, fruktig smak med fatkaraktär, inslag av nötter, halm, torkade örter, päron och smörkola. Serveras rumstempererad som avec.",
                "Nyanserad, tydligt rökig smak med fatkaraktär, inslag av päron, honung, örter, apelsin och halm. Serveras rumstempererad.",
                "Maltig smak med fatkaraktär och viss rökighet, inslag av ljunghonung, halm, macadamianötter och apelsin. Serveras rumstempererad som avec.",
                "Maltig, nyanserad smak med fatkaraktär, inslag av päron, halm, ljunghonung, citrus och vanilj. Serveras rumstempererad som avec.",
                "Nyanserad, maltig smak med fatkaraktär, inslag av apelsin, honung, halm, vanilj, örter och nougat. Serveras rumstempererad som avec.",
                "Smakrik, påtagligt rökig whisky med fatkaraktär, inslag av tjärpastill, apelsinmarmelad, ljunghonung, mörk choklad och jod. 
                Serveras rumstempererad.",
                "Nyanserad, fruktig smak med fatkaraktär, inslag av torkade aprikoser, nougat, örter, ananas och mandarin. Serveras rumstempererad som avec.",
                "Komplex, rökig smak med tydlig fatkaraktär, inslag av torkad frukt, kanel, apelsinskal, honung, jod, choklad, örter och nötter. 
                Serveras rumstempererad.",
                "Fruktig, nyanserad rökig smak med fatkaraktär, inslag av torkade aprikoser, apelsin, ljunghonung, lakritsrot, örter och vanilj. 
                Serveras rumstempererad.",
                "Komplex, maltig smak med fatkaraktär och viss rökighet, inslag av torkad frukt, apelsinblommor, honung, marsipan och salmiak. 
                Serveras rumstempererad som avec.",
                "Maltig smak med tydlig fatkaraktär, inslag av torkade aprikoser, halm, vaniljfudge, smörkola, pomerans och gula päron. 
                Serveras rumstempererad som avec."];
$images = [
            "<img src='images/aberfeldy.webp' alt='Aberfeldy'>",
            "<img src='images/aberlour.webp' alt='Aberlour'>",
            "<img src='images/akashi.webp' alt='Akashi'>",
            "<img src='images/ardbeg.webp' alt='Ardbeg'>",
            "<img src='images/macallan.webp' alt='The Macallan'>",
            "<img src='images/glenrothes.webp' alt='The Glenrothes'>",
            "<img src='images/glenlivet.webp' alt='The Glenlivet'>",
            "<img src='images/hibiki.webp' alt='Hibiki Harmony'>",
            "<img src='images/highlandpark.webp' alt='Highland Park'>",
            "<img src='images/longmorn.webp' alt='Longmorn'>",
            "<img src='images/balvenie.webp' alt='Balvenie'>",
            "<img src='images/glengoyne.webp' alt='Glengoyne'>",
            "<img src='images/lagavulin.webp' alt='Lagavulin'>",
            "<img src='images/kavalan.webp' alt='Kavalan'>",
            "<img src='images/oban.webp' alt='Oban'>",
            "<img src='images/auchentoshan.webp' alt='Auchentoshan'>",
            "<img src='images/caolila.webp' alt='Caol Ila'>",
            "<img src='images/dalwhinnie.webp' alt='Dalwhinnie'>",
            "<img src='images/glenfiddich.webp' alt='Glenfiddich'>",
            "<img src='images/glenmorangie.webp' alt='Glenmorangie'>",
            "<img src='images/talisker.webp' alt='Talisker'>",
            "<img src='images/strathisla.webp' alt='Strathisla'>",
            "<img src='images/hven.webp' alt='Spirit of Hven'>",
            "<img src='images/reki.webp' alt='Reki'>",
            "<img src='images/nikka.webp' alt='Nikka'>",
            "<img src='images/motorhead.webp' alt='Motörhead'>"];
$prices = ["99","120","190","199","250","299","320","399","450","470","499","500","535",
"562","599","750","799","899","999","1299","1500","1899","2500","2999","3500","9000"];
/*
$products = [
             ['id'=>'001',
             'name'=>'Aberfeldy',
             'description'=>'Nyanserad, maltig smak med fatkaraktär, inslag av ljunghonung, päron, halm, apelsinmarmelad och vanilj. Serveras vid rumstemperatur som avec.',
             'image'=>"<img src='images/aberfeldy.webp' alt='Aberfeldy'>",
             'price'=>385],

             ['id'=>'002',
             'name'=>'Aberlour',
             'description'=>'Nyanserad smak med fatkaraktär, inslag av päron, nötter, torkad frukt, ljunghonung, örter och apelsin. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/aberlour.webp' alt='Aberlour'>",
             'price'=>399],

             ['id'=>'003',
             'name'=>'Akashi',
             'description'=>'Fruktig smak med inslag av fat, torkade aprikoser, marsipan, gula plommon, mjölkchoklad, vanilj och smörkola. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/akashi.webp' alt='Akashi'>",
             'price'=>489],

             ['id'=>'004',
             'name'=>'Ardbeg',
             'description'=>'Smakrik, komplex, påtagligt rökig whisky med fatkaraktär, inslag av tjärpastiller, torkad frukt, salmiak, mörk choklad och nötter. Serveras rumstempererad.',
             'image'=>"<img src='images/ardbeg.webp' alt='Ardbeg'>",
             'price'=>725],

             ['id'=>'005',
             'name'=>'The Macallan',
             'description'=>'Balanserad, maltig smak med tydlig fatkaraktär, inslag av apelsinskal, valnötter, mörk choklad, farinsocker, vanilj och honung. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/macallan.webp' alt='The Macallan'>",
             'price'=>539],

             ['id'=>'006',
             'name'=>'The Glenrothes',
             'description'=>'Fruktig, nyanserad smak med fatkaraktär, inslag av halm, apelsin, vanilj, torkade päron, klöverblommor, nougat och choklad. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/glenrothes.webp' alt='The Glenrothes'>",
             'price'=>399],

             ['id'=>'007',
             'name'=>'The Glenlivet',
             'description'=>'Nyanserad, maltig smak med tydlig fatkaraktär, inslag av torkade aprikoser, farinsocker, pomerans, choklad, tobak och vanilj. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/glenlivet.webp' alt='The Glenlivet'>",
             'price'=>709],

             ['id'=>'008',
             'name'=>'Hibiki Harmony',
             'description'=>'Fruktig, kryddig, nyanserad smak med fatkaraktär, inslag av torkade aprikoser, ananas, vanilj, gula päron, apelsinmarmelad och örter. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/hibiki.webp' alt='Hibiki Harmony'>",
             'price'=>689],

             ['id'=>'009',
             'name'=>'Highland Park',
             'description'=>'Nyanserad, maltig, rökig smak med fatkaraktär, inslag av valnötter, ljunghonung, torkad frukt, jod, örter och vanilj. Serveras rumstempererad.',
             'image'=>"<img src='images/highlandpark.webp' alt='Highland Park'>",
             'price'=>399],

             ['id'=>'010',
             'name'=>'Longmorn',
             'description'=>'Nyanserad, maltig smak med tydlig fatkaraktär, inslag av torkad frukt, knäck, örter, päron, vanilj och apelsinskal. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/longmorn.webp' alt='Longmorn'>",
             'price'=>699],

             ['id'=>'011',
             'name'=>'Balvenie',
             'description'=>'Nyanserad smak med tydlig fatkaraktär, inslag av gula päron, honung, macadamianötter, vanilj och pomerans. Serveras rumstempererad som avec, 
             gärna med en skvätt vatten.',
             'image'=>"<img src='images/balvenie.webp' alt='Balvenie'>",
             'price'=>699],

             ['id'=>'012',
             'name'=>'Glengoyne',
             'description'=>'Komplex, smakrik whisky med tydlig karaktär av sherryfat, inslag av valnötter, torkad frukt, kakao, lakrits och honung. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/glengoyne.webp' alt='Glengoyne'>",
             'price'=>1399],

             ['id'=>'013',
             'name'=>'Lagavulin',
             'description'=>'Komplex, maltig, påtagligt rökig smak med fatkaraktär, inslag av pomerans, choklad, nötter, apelsin, jod, tjära och smörkola. 
             Serveras rumstempererad.',
             'image'=>"<img src='images/lagavulin.webp' alt='Lagavulin'>",
             'price'=>699],

             ['id'=>'014',
             'name'=>'Kavalan',
             'description'=>'Fyllig och oljig med torkad frukt och kryddor som dröjer kvar i munnen samt en touch av kaffe.',
             'image'=>"<img src='images/kavalan.webp' alt='Kavalan'>",
             'price'=>1301],

             ['id'=>'015',
             'name'=>'Oban',
             'description'=>'Elegant, balanserad, rökig smak med fatkaraktär, inslag av ljunghonung, aprikos, jod, örter, knäck och pomerans. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/oban.webp' alt='Oban'>",
             'price'=>559],

             ['id'=>'016',
             'name'=>'Auchentoshan',
             'description'=>'Elegant, fruktig smak med fatkaraktär, inslag av nötter, halm, torkade örter, päron och smörkola. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/auchentoshan.webp' alt='Auchentoshan'>",
             'price'=>399],

             ['id'=>'017',
             'name'=>'Caol Ila',
             'description'=>'Nyanserad, tydligt rökig smak med fatkaraktär, inslag av päron, honung, örter, apelsin och halm. Serveras rumstempererad.',
             'image'=>"<img src='images/caolila.webp' alt='Caol Ila'>",
             'price'=>499],

             ['id'=>'018',
             'name'=>'Dalwhinnie',
             'description'=>'Maltig smak med fatkaraktär och viss rökighet, inslag av ljunghonung, halm, macadamianötter och apelsin. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/dalwhinnie.webp' alt='Dalwhinnie'>",
             'price'=>479],

             ['id'=>'019',
             'name'=>'Glenfiddich',
             'description'=>'Maltig, nyanserad smak med fatkaraktär, inslag av päron, halm, ljunghonung, citrus och vanilj. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/glenfiddich.webp' alt='Glenfiddich'>",
             'price'=>399],

             ['id'=>'020',
             'name'=>'Glenmorangie',
             'description'=>'Nyanserad, maltig smak med fatkaraktär, inslag av apelsin, honung, halm, vanilj, örter och nougat. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/glenmorangie.webp' alt='Glenmorangie'>",
             'price'=>429],

             ['id'=>'021',
             'name'=>'Talisker',
             'description'=>'Smakrik, påtagligt rökig whisky med fatkaraktär, inslag av tjärpastill, apelsinmarmelad, ljunghonung, mörk choklad och jod. 
             Serveras rumstempererad.',
             'image'=>"<img src='images/talisker.webp' alt='Talisker'>",
             'price'=>499],

             ['id'=>'022',
             'name'=>'Strathisla',
             'description'=>'Nyanserad, fruktig smak med fatkaraktär, inslag av torkade aprikoser, nougat, örter, ananas och mandarin. Serveras rumstempererad som avec.',
             'image'=>"<img src='images/strathisla.webp' alt='Strathisla'>",
             'price'=>359],

             ['id'=>'023',
             'name'=>'Spirit of Hven',
             'description'=>'Komplex, rökig smak med tydlig fatkaraktär, inslag av torkad frukt, kanel, apelsinskal, honung, jod, choklad, örter och nötter. 
             Serveras rumstempererad.',
             'image'=>"<img src='images/hven.webp' alt='Spirit of Hven'>",
             'price'=>495],

             ['id'=>'024',
             'name'=>'Reki',
             'description'=>'Fruktig, nyanserad rökig smak med fatkaraktär, inslag av torkade aprikoser, apelsin, ljunghonung, lakritsrot, örter och vanilj. 
             Serveras rumstempererad.',
             'image'=>"<img src='images/reki.webp' alt='Reki'>",
             'price'=>599],

             ['id'=>'025',
             'name'=>'Nikka',
             'description'=>'Komplex, maltig smak med fatkaraktär och viss rökighet, inslag av torkad frukt, apelsinblommor, honung, marsipan och salmiak. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/nikka.webp' alt='Nikka'>",
             'price'=>439],

             ['id'=>'026',
             'name'=>'Motörhead',
             'description'=>'Maltig smak med tydlig fatkaraktär, inslag av torkade aprikoser, halm, vaniljfudge, smörkola, pomerans och gula päron. 
             Serveras rumstempererad som avec.',
             'image'=>"<img src='images/motorhead.webp' alt='Motörhead'>",
             'price'=>666],
];
*/
/*echo "<pre>";
print_r($products);
echo "</pre>"; */
$limit = 1000;



if(!isset($_GET['limit'])){
    $limit = 1000;
    else{
    $limit = $_GET['limit'];
    }

    if($limit>1000){
        echo '{"error":"Limit must be between 1 and 1000"}';
        die;
    }

$product =  [];
for ($i=1; $i <= $limit; $i++) {
$randName = rand(0,25);
$randDescription = rand(0,25);
$randImage = rand(0,25);
$randPrice = rand(0,25);

$product = array("name"=>$names[$randName],
            "description"=>$descriptions[$randDescription],
            "image"=>$images[$randImage],
            "price"=>$prices[$randPrice]);
$products[] = $product;
}
}

$json = json_encode($products,
JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;

//SPARA I /API SOM INDEX.PHP
//BEGRÄNSA MED IF 
?>