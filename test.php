<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php include 'testJSON.php';?>

     <div class="filter">
        <p>CENA</p>
        Od:<input type="number" name="cenaMIN" id="cenaMin" value="0">
        Do:<input type="number" name="cenaMAX" id="cenaMax" value="9999"><br><br>
        
        <p>Rodzaj</p>
        <input type="checkbox" name="rodzajBroni" value="pistolet"> Pistolet <br>
        <input type="checkbox" name="rodzajBroni" value="rewolwer"> Rewolwer<br><br>

        <p>Kaliber</p>
        <input type="checkbox" name="kaliber" value="22lr"> 22 lr <br>
        <input type="checkbox" name="kaliber" value="9mm"> 9mm <br>
        <input type="checkbox" name="kaliber" value="45acp"> 45 ACP <br>
        <input type="checkbox" name="kaliber" value="44magnum"> 44 Magnum <br>
        <input type="checkbox" name="kaliber" value="357magnum"> 357 Magnum<br><br>

        <p>Producent</p>
        <input type="checkbox" name="producent" value="1"> Firma 1 <br>
        <input type="checkbox" name="producent" value="2"> Firma 2 <br>
        <input type="checkbox" name="producent" value="3"> Firma 3<br><br>

        <button onclick="filtruj()">FILTRUJ</button><br><br>
    </div>

     <div id="produkty"></div>



    <script>var jsonData = <?php echo file_get_contents('dane.json'); ?>;</script>
     <script src="FiltrowanieProduktow.js"></script>
     
</body>
</html>
