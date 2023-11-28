
<?php
echo '<form action="your_action_file.php" method="post">';

// Rodzaj
echo '<h2>Rodzaj</h2>';
echo '<input type="checkbox" name="rodzaj[]" id="pistolet"> Pistolet <br>';
echo '<input type="checkbox" name="rodzaj[]" id="rewolwer"> Rewolwer <br>';

// Kaliber
echo '<h2>Kaliber</h2>';
echo '<input type="checkbox" name="kaliber[]" id="22lr"> .22 Lr <br>';
echo '<input type="checkbox" name="kaliber[]" id="44magnum"> .44 Magnum <br>';
echo '<input type="checkbox" name="kaliber[]" id="9mm"> 9 Mm <br>';

// Producent
echo '<h2>Producent</h2>';
echo '<input type="checkbox" name="producent[]" id="firma1"> Firma 1<br>';
echo '<input type="checkbox" name="producent[]" id="firma2"> Firma 2<br>';
echo '<input type="checkbox" name="producent[]" id="firma3"> Firma 3<br><br>';

// Submit button
echo '<input type="submit" value="Filtruj" class="filtr-btn">';

echo '</form>';
?>

