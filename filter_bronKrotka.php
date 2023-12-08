
<?php


echo '
<div class="filter">
     <input type="hidden" id="base" value="BronKrotka">
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
</div>';



?>

