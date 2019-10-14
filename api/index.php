<?php

header("Content-Type: application/json; charset=UTF-8");

$products = [
    [
        'id' => '001',
        'name' => 'Aberfeldy',
        'description' => 'Nyanserad, maltig smak med fatkaraktär, inslag av ljunghonung, päron, halm, apelsinmarmelad och vanilj. Serveras vid rumstemperatur som avec.',
        'image' => "<img src='http://testsida.eu/api_images/aberfeldy.webp' alt='Aberfeldy'>",
        'price' => 385,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '002',
        'name' => 'Aberlour',
        'description' => 'Nyanserad smak med fatkaraktär, inslag av päron, nötter, torkad frukt, ljunghonung, örter och apelsin. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/aberlour.webp' alt='Aberlour'>",
        'price' => 399,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '003',
        'name' => 'Akashi',
        'description' => 'Fruktig smak med inslag av fat, torkade aprikoser, marsipan, gula plommon, mjölkchoklad, vanilj och smörkola. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/akashi.webp' alt='Akashi'>",
        'price' => 489,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '004',
        'name' => 'Ardbeg',
        'description' => 'Smakrik, komplex, påtagligt rökig whisky med fatkaraktär, inslag av tjärpastiller, torkad frukt, salmiak, mörk choklad och nötter. Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/ardbeg.webp' alt='Ardbeg'>",
        'price' => 725,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '005',
        'name' => 'The Macallan',
        'description' => 'Balanserad, maltig smak med tydlig fatkaraktär, inslag av apelsinskal, valnötter, mörk choklad, farinsocker, vanilj och honung. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/macallan.webp' alt='The Macallan'>",
        'price' => 539,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '006',
        'name' => 'The Glenrothes',
        'description' => 'Fruktig, nyanserad smak med fatkaraktär, inslag av halm, apelsin, vanilj, torkade päron, klöverblommor, nougat och choklad. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/glenrothes.webp' alt='The Glenrothes'>",
        'price' => 399,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '007',
        'name' => 'The Glenlivet',
        'description' => 'Nyanserad, maltig smak med tydlig fatkaraktär, inslag av torkade aprikoser, farinsocker, pomerans, choklad, tobak och vanilj. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/glenlivet.webp' alt='The Glenlivet'>",
        'price' => 709,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '008',
        'name' => 'Hibiki Harmony',
        'description' => 'Fruktig, kryddig, nyanserad smak med fatkaraktär, inslag av torkade aprikoser, ananas, vanilj, gula päron, apelsinmarmelad och örter. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/hibiki.webp' alt='Hibiki Harmony'>",
        'price' => 689,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '009',
        'name' => 'Highland Park',
        'description' => 'Nyanserad, maltig, rökig smak med fatkaraktär, inslag av valnötter, ljunghonung, torkad frukt, jod, örter och vanilj. Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/highlandpark.webp' alt='Highland Park'>",
        'price' => 399,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '010',
        'name' => 'Longmorn',
        'description' => 'Nyanserad, maltig smak med tydlig fatkaraktär, inslag av torkad frukt, knäck, örter, päron, vanilj och apelsinskal. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/longmorn.webp' alt='Longmorn'>",
        'price' => 699,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '011',
        'name' => 'Balvenie',
        'description' => 'Nyanserad smak med tydlig fatkaraktär, inslag av gula päron, honung, macadamianötter, vanilj och pomerans. Serveras rumstempererad som avec, 
             gärna med en skvätt vatten.',
        'image' => "<img src='http://testsida.eu/api_images/balvenie.webp' alt='Balvenie'>",
        'price' => 699,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '012',
        'name' => 'Glengoyne',
        'description' => 'Komplex, smakrik whisky med tydlig karaktär av sherryfat, inslag av valnötter, torkad frukt, kakao, lakrits och honung. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/glengoyne.webp' alt='Glengoyne'>",
        'price' => 1399,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '013',
        'name' => 'Lagavulin',
        'description' => 'Komplex, maltig, påtagligt rökig smak med fatkaraktär, inslag av pomerans, choklad, nötter, apelsin, jod, tjära och smörkola. 
             Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/lagavulin.webp' alt='Lagavulin'>",
        'price' => 699,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '014',
        'name' => 'Kavalan',
        'description' => 'Fyllig och oljig med torkad frukt och kryddor som dröjer kvar i munnen samt en touch av kaffe.',
        'image' => "<img src='http://testsida.eu/api_images/kavalan.webp' alt='Kavalan'>",
        'price' => 1301,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '015',
        'name' => 'Oban',
        'description' => 'Elegant, balanserad, rökig smak med fatkaraktär, inslag av ljunghonung, aprikos, jod, örter, knäck och pomerans. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/oban.webp' alt='Oban'>",
        'price' => 559,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '016',
        'name' => 'Auchentoshan',
        'description' => 'Elegant, fruktig smak med fatkaraktär, inslag av nötter, halm, torkade örter, päron och smörkola. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/auchentoshan.webp' alt='Auchentoshan'>",
        'price' => 399,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '017',
        'name' => 'Caol Ila',
        'description' => 'Nyanserad, tydligt rökig smak med fatkaraktär, inslag av päron, honung, örter, apelsin och halm. Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/caolila.webp' alt='Caol Ila'>",
        'price' => 499,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '018',
        'name' => 'Dalwhinnie',
        'description' => 'Maltig smak med fatkaraktär och viss rökighet, inslag av ljunghonung, halm, macadamianötter och apelsin. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/dalwhinnie.webp' alt='Dalwhinnie'>",
        'price' => 479,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '019',
        'name' => 'Glenfiddich',
        'description' => 'Maltig, nyanserad smak med fatkaraktär, inslag av päron, halm, ljunghonung, citrus och vanilj. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/glenfiddich.webp' alt='Glenfiddich'>",
        'price' => 399,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '020',
        'name' => 'Glenmorangie',
        'description' => 'Nyanserad, maltig smak med fatkaraktär, inslag av apelsin, honung, halm, vanilj, örter och nougat. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/glenmorangie.webp' alt='Glenmorangie'>",
        'price' => 429,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '021',
        'name' => 'Talisker',
        'description' => 'Smakrik, påtagligt rökig whisky med fatkaraktär, inslag av tjärpastill, apelsinmarmelad, ljunghonung, mörk choklad och jod. 
             Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/talisker.webp' alt='Talisker'>",
        'price' => 499,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '022',
        'name' => 'Strathisla',
        'description' => 'Nyanserad, fruktig smak med fatkaraktär, inslag av torkade aprikoser, nougat, örter, ananas och mandarin. Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/strathisla.webp' alt='Strathisla'>",
        'price' => 359,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '023',
        'name' => 'Spirit of Hven',
        'description' => 'Komplex, rökig smak med tydlig fatkaraktär, inslag av torkad frukt, kanel, apelsinskal, honung, jod, choklad, örter och nötter. 
             Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/hven.webp' alt='Spirit of Hven'>",
        'price' => 495,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '024',
        'name' => 'Reki',
        'description' => 'Fruktig, nyanserad rökig smak med fatkaraktär, inslag av torkade aprikoser, apelsin, ljunghonung, lakritsrot, örter och vanilj. 
             Serveras rumstempererad.',
        'image' => "<img src='http://testsida.eu/api_images/reki.webp' alt='Reki'>",
        'price' => 599,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '025',
        'name' => 'Nikka',
        'description' => 'Komplex, maltig smak med fatkaraktär och viss rökighet, inslag av torkad frukt, apelsinblommor, honung, marsipan och salmiak. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/nikka.webp' alt='Nikka'>",
        'price' => 439,
        'stock' => rand(0, 50)
    ],

    [
        'id' => '101',
        'name' => 'Motörhead',
        'description' => 'Maltig smak med tydlig fatkaraktär, inslag av torkade aprikoser, halm, vaniljfudge, smörkola, pomerans och gula päron. 
             Serveras rumstempererad som avec.',
        'image' => "<img src='http://testsida.eu/api_images/motorhead.webp' alt='Motörhead'>",
        'price' => 666,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '101',
        'name' => 'Timmermans Kriek Lambicus',
        'description' => 'Fruktig, något syrlig smak med sötma och tydlig karaktär av körsbär, inslag av mandel. Serveras vid cirka 8°C som aperitif, som sällskapsdryck eller till inte alltför söta chokladdesserter.',
        'image' => "<img src='http://testsida.eu/api_images/timmerman.webp' alt='timmerman'>",
        'price' => 20,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '102',
        'name' => 'Sofiero Original',
        'description' => 'Maltig smak med inslag av ljust bröd, halm och citrus. Serveras vid 8-10°C till husmanskost eller som sällskapsdryck.',
        'image' => "<img src='http://testsida.eu/api_images/sofiero.webp' alt='Sofiero'>",
        'price' => 11,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '103',
        'name' => 'Duvel',
        'description' => 'Fruktig smak med inslag av vetebröd, citron, halm och honung.',
        'image' => "<img src='http://testsida.eu/api_images/duvell.webp' alt='Duvell'>",
        'price' => 27,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '104',
        'name' => 'Adelsö Boom Boom Blonde',
        'description' => 'Fruktig smak med inslag av ingefära, citrus, örter och kryddnejlika.',
        'image' => "<img src='http://testsida.eu/api_images/boomboomblonde.webp' alt='Boom Boom Blonde'>",
        'price' => 25,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '105',
        'name' => 'Samuel Adams Rebel IPA',
        'description' => 'Har tydlig doft av humle',
        'image' => "<img src='http://testsida.eu/api_images/rebelipa.webp' alt='Duvell'>",
        'price' => 25,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '106',
        'name' => 'Stigbergets West Coast',
        'description' => 'Humlearomatisk, fruktig smak med tydlig beska, inslag av ananas, passionsfrukt, honung, apelsin, mango och tallbarr.',
        'image' => "<img src='http://testsida.eu/api_images/stigbergetswestcoast.webp' alt='Westcoast IPA'>",
        'price' => 33,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '107',
        'name' => 'Södvik Supersäsong',
        'description' => 'Kryddig smak med liten sötma, inslag av banankaka, kryddnejlika, aprikos, pomerans och honung.',
        'image' => "<img src='http://testsida.eu/api_images/supersasong.webp' alt='Supersäsong'>",
        'price' => 139,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '108',
        'name' => 'Iron Maiden Trooper',
        'description' => 'Drycken lagerförs av leverantör och inte av Systembolaget.',
        'image' => "<img src='http://testsida.eu/api_images/trooper.webp' alt='Iron Maiden Trooper'>",
        'price' => 23,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '109',
        'name' => 'GWs Rosa',
        'description' => 'Drycken lagerförs av leverantör och inte av Systembolaget. ',
        'image' => "<img src='http://testsida.eu/api_images/GWsRosa.webp' alt='Gws Rosa'>",
        'price' => 99,
        'stock' => rand(0, 50)
    ],
    [
        'id' => '110',
        'name' => 'GWs Röda',
        'description' => 'Fruktig smak med inslag av svarta vinbär, lakrits, blåbär, viol och örter.',
        'image' => "<img src='http://testsida.eu/api_images/GWsroda.webp' alt='GWs Roda'>",
        'price' => 109,
        'stock' => rand(0, 50)
    ],
];


if(!isset($_GET['limit'])){
    $limit = count($products);
    $json = json_encode($products,
    JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
    
    echo $json; 

}
    else {
        $limit = htmlspecialchars($_GET['limit']);
        if(!is_numeric($_GET['limit'])){
            echo '{"error":"Input must be numeric"}';
            die;
        }
        if($limit>count($products) || $limit<1){
                echo '{"error":"Limit must be between 1 and 36"}';
                die;
            }
        
        else{
            for ($i=0; $i < $limit; $i++){
                $product[] = $products[$i];
            }
            $json = json_encode($product,
            JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
            
            echo $json;
            }
        
    }
?>