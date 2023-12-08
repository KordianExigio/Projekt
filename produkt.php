<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="sklep.css">
     <link rel="stylesheet" href="opisproduktu.css">
    <link rel="stylesheet" href="dropdown.css">
     <title>Document</title>
</head>
<body>

<div class="grid-container">
    <nav>
        <div class="navigation">
            <img src="pobrane.jpg" alt="logo">
            <input type="text" name="" id="" placeholder="wyszukaj">
            <button class="glowna-button" onclick="przenies('strona-glowna.php')">strona głowna</button>
            <button class="sklep-button" onclick="przenies('sklep.php')">sklep</button>
            <button class="regulamin-button" onclick="przenies('regulamin.php')">regulamin</button>
            <button class="kontakt-button" onclick="przenies('kontakt.php')">kontakt</button>
        </div>
        <div class="shop-navigation">
        <div class="dropdown" id="bron-button">
                         <button onclick="dropdown('myDropdown')" class="dropbtn">Broń ⬇</button>
                         <div id="myDropdown" class="dropdown-content">
                           <a href="sklep.php?zmienna=BronKrotka">Broń Krótka</a>
                           <a href="sklep.php?zmienna=BronDluga">Broń Długa</a>

                         </div>
                       </div>

                       <div class="dropdown" id="amunicja-button">
                         <button onclick="przekierujNaInnaStrone()" class="dropbtn">Amunicja</button>
                       </div>

                    <button class="cart_button"><img src="cart.png" alt="" class="cart-img"></button> 
        </div>
    </nav>
    <div class="opisprodukt">
     <?php
          $conn = mysqli_connect("localhost","root","","bron");
          $baza = $_GET['baza'];
          $idproduktu = $_GET['idproduktu'];
          $sql= "";

          if($baza == "Amunicja"){
               $sql = 'SELECT `id`, `nazwa`, `img`, `cena`, `kaliber` FROM `ammo` WHERE id = '.$idproduktu;
          }elseif($baza == "BronKrotka"){
               $sql = "SELECT * FROM `bron_krotka` WHERE id = ". $idproduktu;
          }elseif($baza == "BronDluga"){
               $sql = "SELECT `id`, `nazwa`, `img`, `cena`, `promocja`, `kaliber`, `producent`, `rodzaj` FROM `bron_dluga` WHERE id= ". $idproduktu;
          }

          $result  = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);
     
     
     ?>
     <div class="pole">
          <div class="divdiv">
               <div class="image">
                    <img  src="<?php echo $row['img']?>" alt=" ">

               </div>
                <div class="opis">
                    <h1><?php echo $row['nazwa']?></h1>
                    <p class="cena_produktu">Cena: <?php echo $row['cena'];?></p>
                    <p class="p"> Kaliber: <?php  echo $row['kaliber'] ?></p>
                    <p class="p"> <?php
                         if($baza == "BronDluga" && $row['rodzaj'] != "strzelba"){
                              echo " Rodzaj broni: Karabin ".$row['rodzaj'];
                         }elseif($baza == "BronDluga" && $row['rodzaj'] == "strzelba"){
                              echo "Rodzaj broni: ".$row['rodzaj'];
                         }elseif($baza == "BronKrotka"){
                              echo "Rodzaj broni: ".$row['rodzaj'];
                         }

                    ?></p>
                    <?php
                         if($baza == "BronKrotka" or $baza == "BronDluga"){
                              echo "<p class='uwaga'>Ten produkt nie jest mozliwy do zakupienia przez nasz sklep intrnetowy.
                              Konieczne bedzie odwiedzenie jednego z naszych sklepow stacjonarnych ze zezwoleniem ze bron by miec mozliwosc kupna takiego.</p>";
                         }else{
                              echo '<button class="buy-btn">Dodaj do koszyka</button>';
                         }

                    ?>
               </div>
              
          </div>
         
     </div>
          
    </div>
     </div>
     <script src="dropdown.js"></script>
     <script>function przekierujNaInnaStrone() {
               var adresStronyPHP = 'http://localhost/strona/sklep.php?zmienna=Amunicja';

               window.location.href = adresStronyPHP;
 }</script>
</body>
</html>