<?php

// Rodzaj
echo '<h2>Rodzaj</h2>';
echo '<input type="checkbox" name="rodzaj[]" id="pistolet"> Karabin Sztrumowy <br>';
echo '<input type="checkbox" name="rodzaj[]" id="rewolwer"> Karabin Snajperski <br>';
echo '<input type="checkbox" name="rodzaj[]" id="rewolwer"> Krabin Maszynowy <br>';
echo '<input type="checkbox" name="rodzaj[]" id="rewolwer"> Strzelba <br>';
echo '<input type="checkbox" name="rodzaj[]" id="rewolwer"> inne <br>';

// Kaliber
echo '<h2>Kaliber</h2>';
echo '<input type="checkbox" name="kaliber[]" id="22lr"> 5.56x45mm <br>';
echo '<input type="checkbox" name="kaliber[]" id="44magnum"> 7.62 mm<br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> .308 Winchester <br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> 6.5mm Creedmoor <br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> 12 <br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> 50 BMG <br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> 338 Lapua Magnum<br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> inna<br>';

// Producent
echo '<h2>Producent</h2>';
echo '<input type="checkbox" name="producent[]" id="firma1"> Firma 1<br>';
echo '<input type="checkbox" name="producent[]" id="firma2"> Firma 2<br>';
echo '<input type="checkbox" name="producent[]" id="firma3"> Firma 3<br><b4>';

// Submit button
echo '<input type="submit" value="Filtruj" name="submit" class="filtr-btn">';

?>