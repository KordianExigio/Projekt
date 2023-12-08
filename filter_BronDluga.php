<?php

// Rodzaj
echo '
<div class="filter">
     <input type="hidden" id="base" value="BronDluga">
    <p>CENA</p>
    Od:<input type="number" name="cenaMIN" id="cenaMin" value="0">
    Do:<input type="number" name="cenaMAX" id="cenaMax" value="99999999999"><br><br>
    
    <p>Rodzaj</p>
    <input type="checkbox" name="rodzajBroni" value="szturmowy"> Karabin Szturmowy <br>
    <input type="checkbox" name="rodzajBroni" value="maszynowy"> Karabin Maszynowy <br>
    <input type="checkbox" name="rodzajBroni" value="snajperski"> Karabin Snajperski <br>
    <input type="checkbox" name="rodzajBroni" value="strzelba"> Strzelba <br><br>

    <p>Kaliber</p>
    <input type="checkbox" name="kaliber" value="7,62"> 7,62mm <br>
    <input type="checkbox" name="kaliber" value="7,65mm"> 7,65mm <br>
    <input type="checkbox" name="kaliber" value="308 Winchester"> 308 Winchester <br>
    <input type="checkbox" name="kaliber" value="50 BMG"> 50 BMG <br>
    <input type="checkbox" name="kaliber" value="6.5mm"> 6.5mm<br>
    <input type="checkbox" name="kaliber" value="5.56x45"> 5.56x45 <br>
    <input type="checkbox" name="kaliber" value="338 Lapua Magnum"> 338 Lapua Magnum <br>
    <input type="checkbox" name="kaliber" value="12"> 12<br>
    <input type="checkbox" name="kaliber" value="inna"> inna <br>

    <p>Producent</p>
    <input type="checkbox" name="producent" value="1"> Firma 1 <br>
    <input type="checkbox" name="producent" value="2"> Firma 2 <br>
    <input type="checkbox" name="producent" value="3"> Firma 3<br>
    <input type="checkbox" name="producent" value="EpicGames"> Epic Games <br>
    <input type="checkbox" name="producent" value="Bazarek zelowski"> Bazarek Zelowski<br><br>

    <button onclick="filtruj()">FILTRUJ</button><br><br>
</div>';


?>