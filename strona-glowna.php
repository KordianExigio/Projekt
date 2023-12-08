<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     //<link rel="stylesheet" href="stronaGlowna.css">
      <link rel="stylesheet" href="dropdown.css">
     <link rel="stylesheet" href="kategoria.css">
     <title>strona glowna</title>
</head>

<body class="body">

     <div class="grid-container">
          <nav>
               <div class="navigation">
                    
                   <img src="logo1.png" alt="logo">
                   <input type="text" name="" id="" placeholder="wyszukaj">
                   <button class="glowna-button" onclick="przenies('strona-glowna.php')">strona głowna</button>
                    <button class="sklep-button" onclick='przenies("sklep.php?zmienna=BronDluga")'>sklep</button>
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

          <div class="kategoria">
              <h1><bold>Sklep z bronia i amunicja</bold></h1>
              <div class="line-1"></div>
              <div class="kategoria-opcje">
                <div class="button-left">
                  <button id="btn-left" onclick='przesun("left")'><</button>
                </div>
                <div class="kategorie-produktow" id="kategoria-one">
                    <div class="kategoria-btn">
                      <h2 id="h21">Bron Krotka</h2>
                      <h3 id="h31">Pistolety i rewolwery</h3>
                      <img src="zdjeciaProduktow\glock.jfif" alt="" id="image1"><br>
                      <button class="kategoria-zobacz"><a href="sklep.php?zmienna=BronKrotka" id="a1">Zobacz</a></button>
                    </div>
                </div>
                <div class="kategorie-produktow">
                    <div class="kategoria-btn" id="kategoria-two">
                      <h2 id="h22">Bron Dluga</h2>
                      <h3 id="h32">Karabiny i sztucery</h3>
                      <img src="zdjeciaProduktow\ak47.jfif" alt="" id="image2"><br>
                      <button class="kategoria-zobacz"><a href="sklep.php?zmienna=BronDluga" id="a2">Zobacz</a></button>
                    </div>
                </div>
                <div class="kategorie-produktow">
                    <div class="kategoria-btn" id="kategoria-three">
                      <h2 id="h23">Amunicja</h2>
                      <h3 id="h33">Amunicja do broni</h3>
                      <img src="amunicja.jfif" alt="" id="image3"><br>
                      <button class="kategoria-zobacz"><a href="sklep.php?zmienna=Amunicja" id="a3">Zobacz</a></button>
                    </div>
                </div>
                <div class="button-right">
                  <button id="btn-right" onclick='przesun("right")'>></button>
                </div>
                
              </div>
            
          </div>
          
          </div>
     </div>
     <div class="O-Nas">
              <div class="opis"><h1>O nas</h1><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p></div>  
      </div>
      <div class="kontakt">
        <h1>GDZIE NAS ZNAJDZIESZ?</h1>
        <div class="line-4"></div>
        <div class="kontakt-tekst"><p>Odwiedz nasze sklepy w XXX, XXX lub w XXX pod XXXXX. Jesli masz pytania – napisz lub zadzwon do nas !</p></div>
        <div class="mapy">
          <div class="mapa"><p>Cyngiel s.c. ul. Radomska 302-323 Warszawawarszawa@cyngiel.com.pltel. +48 22 111 30 40
Pracujemy od poniedziałku do piątkuw godzinach 10:00 – 18:00</p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11415.627650956436!2d-46.6782088329323!3d-24.486311273009118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1b776f04e34eb%3A0x59503abf3edf1075!2sIlha%20da%20Queimada%20Grande!5e1!3m2!1spl!2spl!4v1700417121227!5m2!1spl!2spl"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          <div class="mapa"><p>Cyngiel s.c. ul. Radomska 302-323 Warszawawarszawa@cyngiel.com.pltel. +48 22 111 30 40
Pracujemy od poniedziałku do piątkuw godzinach 10:00 – 18:00</p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13876.84890575543!2d-74.02525793621088!3d40.71274411825745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a197c06b7cb%3A0x40a06c78f79e5de6!2s1%20World%20Trade%20Center!5e1!3m2!1spl!2spl!4v1700417168386!5m2!1spl!2spl"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          <div class="mapa"><p>Cyngiel s.c. ul. Radomska 302-323 Warszawawarszawa@cyngiel.com.pltel. +48 22 111 30 40
Pracujemy od poniedziałku do piątkuw godzinach 10:00 – 18:00</p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22811.74202434853!2d19.210243055183895!3d51.46313218564452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a3fc659b28d75%3A0xb9cceb952d6c559d!2s97-425%20Zel%C3%B3w!5e1!3m2!1spl!2spl!4v1700417202905!5m2!1spl!2spl"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
      </div>
      <div class="stopka">
        <div class="stopka-kontakt"><img src="telefon.png" alt=""><p>Kontakt: 000 000 000</p></div>
        <div class="stopka-main"><img src="mailIcon.png" alt=""><p>sklepzbronia@gmail.com</p></div>
        <div class="stopka-ulica"><img src="route.png" alt=""><p>ul. Wierzbinska XX, Aleksandrow lodzki XX-XXX</p></div>
      </div>

     <script src="dropdown.js"></script>
     <script src="slide-category.js"></script>
     <?php
     
     
     ?>
     
</body>

</html>
