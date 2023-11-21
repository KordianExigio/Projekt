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
                    
                   <img src="logo1.png" alt="logo">
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
               <div class="filtr">
                    <div class="form">
                    <form action="">
                         <h2>Cena</h2>
                         <label for="">Min:</label><input type="number"><br>
                         <label for="">Maks:</label><input type="number"><br><br>

                         <h2>Rodzaj</h2>
                         <input type="checkbox" name="" id=""> Pistolet <br>
                         <input type="checkbox" name="" id=""> Rewolwer <br>

                         <h2>Kaliber</h2>
                         <input type="checkbox" name="" id=""> .22 Lr <br>
                         <input type="checkbox" name="" id=""> .44 Magnum <br>
                         <input type="checkbox" name="" id=""> 9 Mm <br>
                         <input type="checkbox" name="" id=""> Rakiety <br>
                         <input type="checkbox" name="" id=""> .22 Lr <br>
                         <input type="checkbox" name="" id=""> .44 Magnum <br>
                         <input type="checkbox" name="" id=""> 9 Mm <br>
                         <input type="checkbox" name="" id=""> Rakiety <br>

                         <h2>Producent</h2>
                         <input type="checkbox" name="" id=""> Firma 1<br>
                         <input type="checkbox" name="" id=""> Firma 2<br>
                         <input type="checkbox" name="" id=""> Firma 3<br>
                         <input type="checkbox" name="" id=""> Firma 4<br>
                         <input type="checkbox" name="" id=""> Firma 5<br>
                         <input type="checkbox" name="" id=""> Firma 6<br><br>
                         <input type="submit" value="Filtruj" class="filtr-btn">







                    </form>
                    </div>
                    <div class="borderline"></div>
               </div>
               <div class="produkty">
                    <div class="produkt">
                         <img src="SNIPER_RIFLE.jfif" alt="">
                         <h2>KARABIN SNAJPERSKI</h2>
                         <div>500zł</div><div><button>kup</button></div>
                    </div>
                    <div class="produkt">
                         <img src="SNIPER_RIFLE.jfif" alt="">
                         <h2>KARABIN SNAJPERSKI</h2>
                         <div>500zł</div></label><button>kup</button>
                    </div>
                    <div class="produkt">
                         <img src="SNIPER_RIFLE.jfif" alt="">
                         <h2>KARABIN SNAJPERSKI</h2>
                         <div>500zł</div></label><button>kup</button>
                    </div>
                    <div class="produkt">
                         <img src="SNIPER_RIFLE.jfif" alt="">
                         <h2>KARABIN SNAJPERSKI</h2>
                         <div>500zł</div></label><button>kup</button>
                    </div>
                    <div class="produkt">
                         <img src="SNIPER_RIFLE.jfif" alt="">
                         <h2>KARABIN SNAJPERSKI</h2>
                         <div>500zł</div></label><button>kup</button>
                    </div>

                    <div class="produkt">
                         <img src="SNIPER_RIFLE.jfif" alt="">
                         <h2>KARABIN SNAJPERSKI</h2>
                         <div>500zł</div></label><button>kup</button>
                    </div>
                 
               </div>
          </div>

          
     </div>
     <script src="dropdown.js"></script>
</body>
</html>