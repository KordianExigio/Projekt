<?php

echo '<input type="hidden" id="base" value="Amunicja">
<div class="filter">
     
    <p>CENA</p>
    Od:<input type="number" name="cenaMIN" id="cenaMin" value="0"><br>
    Do:<input type="number" name="cenaMAX" id="cenaMax" value="99999999999"><br><br>

    <p>Kaliber</p>
    <input type="checkbox" name="kaliber" value="7,62"> 7,62mm <br>
    <input type="checkbox" name="kaliber" value="308 Winchester"> 308 Winchester <br>
    <input type="checkbox" name="kaliber" value="50 BMG"> 50 BMG <br>
    <input type="checkbox" name="kaliber" value="6.5mm"> 6.5mm<br>
    <input type="checkbox" name="kaliber" value="5.56x45"> 5.56x45 <br>
    <input type="checkbox" name="kaliber" value="338 Lapua Magnum"> 338 Lapua Magnum <br>
    <input type="checkbox" name="kaliber" value="12"> 12<br>
    <input type="checkbox" name="kaliber" value="22lr"> 22lr<br>
    <input type="checkbox" name="kaliber" value="9mm"> 9mm<br>
    <input type="checkbox" name="kaliber" value="45acp"> 45 ACP<br>
    <input type="checkbox" name="kaliber" value="44magnum"> 44 Magnum<br>
    <input type="checkbox" name="kaliber" value="357magnum"> 357magnum<br>


    <button onclick="filtruj()">FILTRUJ</button><br><br>
</div>';    


?>