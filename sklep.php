<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="sklep.css">
     <link rel="stylesheet" href="dropdown.css">
     <title>sklep</title>
</head>
<body class="body">

     <div class="grid-container">
     <nav>
               <div class="navigation">
                    
                   <img src="" alt="logo">
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
                           <a href="sklep.php?zmienna=BronBiala">Broń Biała</a>
                         </div>
                       </div>

                       <div class="dropdown" id="amunicja-button">
                         <button onclick="dropdown('myDropdown1')" class="dropbtn">Amunicja ⬇</button>
                         <div id="myDropdown1" class="dropdown-content">
                           <a href="sklep.php?zmienna=AmmoDoPistoletow">Do pistoletow i rewolwerów</a>
                           <a href="sklep.php?zmienna=AmmoDoKarabinow">Do karabinów</a>
                           <a href="sklep.php?zmienna=AmmoDoStrzelby">Do strzelby</a>
                           <a href="sklep.php?zmienna=AmmoInna">Inna</a>
                         </div>
                       </div>

                       <div class="dropdown" id="optyka-button">
                         <button onclick="dropdown('myDropdown2')" class="dropbtn">Optyka ⬇</button>
                         <div id="myDropdown2" class="dropdown-content">
                           <a href="sklep.php?zmienna=CelownikiKolimetrowe">Celowniki kolimetrowe</a>
                           <a href="sklep.php?zmienna=Lunety">Lunety</a>
                           <a href="sklep.php?zmienna=Lornetki">Lornetki</a>
                         </div>
                       </div>

                       <div class="dropdown" id="akcesoria-button">
                         <button onclick="dropdown('myDropdown3')" class="dropbtn">Akcesoria ⬇</button>
                         <div id="myDropdown3" class="dropdown-content">
                           <a href="sklep.php?zmienna=DoBroni">Do broni</a>
                           <a href="sklep.php?zmienna=Inne">Inne</a>
                         </div>
                       </div> 
                    <button class="cart_button"><img src="cart.png" alt="" class="cart-img"></button>   
               </div>
     
          </nav>
          <div class="sklep">
               <?php
                    $conn = mysqli_connect("localhost", "root", "", "bron");
                    $sql ="";
              
                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }



                    $typ_broni = $_GET["zmienna"];
               
               
               ?>
               <div class="filtr">
                    <div class="form">
                    <form action="sklep.php" method="post">
                         <h2>Cena</h2>
                         <label for="">Min:</label><input type="number"><br>
                         <label for="">Maks:</label><input type="number"><br><br>

                         <?php

                              if($typ_broni == "BronKrotka"){
                                   include('filter_BronKrotka.php');
                                   $sql = "SELECT `id`, `nazwa`, `img`, `cena`, `promocja`, `amunicja_kaliber`, `producent`, `rodzaj` FROM `bron_krotka`";
                              }elseif($typ_broni == "BronDluga"){
                                   include('filter_BronDLuga.php');
                                   $sql = "SELECT `id`, `nazwa`, `img`, `cena`, `promocja`, `amunicja_kaliber`, `producent`, `rodzaj` FROM `bron_dluga`";
                              }elseif($typ_broni == "BronBiala"){
                                   include('filter_BronBiala.php');
                                   $sql = "SELECT `id`, `nazwa`, `img`, `cena`, `promocja`, `producent` FROM `bron_biala`";
                              }

                         ?>

                    </form>
                    </div>
                    
               </div>
               <div class="produkty">   

                    <?php
                         
                         
                        $result = mysqli_query($conn, $sql);
                         // Wyświetl wyniki
                         if (mysqli_num_rows($result) > 0) {
                             while ($row = mysqli_fetch_assoc($result)) {
                                 echo '<div class="produkt" id="' . $row['id'] . '">';
                                 echo '<img src="' . $row['img'] . '" alt="">';
                                 echo '<div class="nazwa-produktu"><p>' . $row['nazwa'] . " " . $row['id'] . '</p></div>';
                                 echo '<div class="cena-produktu"><p>' . $row['cena'] . ' zł</p></div>';
                                 echo '</div>';
                             }
                         } elseif(mysqli_num_rows($result) <= 0) {
                             echo "Brak produktów z tej kategori";
                         }

                         if(isset($_POST['submit'])){
                              Location("sklep.php?zmienna=BronDluga");
                         }
                         
                         ?> 
                    
               </div>
          </div>

          
     </div>
     <script src="dropdown.js"></script>
</body>
</html>