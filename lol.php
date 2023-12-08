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
        $sql = "";

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $baza = $_GET['zmienna'];

        ?>
        <div class="filtr">
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
      </div>
            <?php
$conn = mysqli_connect("localhost", "root", "", "bron");
$sql = "";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$baza = $_GET['zmienna'];

if ($baza == "BronKrotka") {
    $sql = "SELECT * FROM `bron_krotka`";
} elseif ($baza == "BronDluga") {
    $sql = "SELECT * FROM `bron_dluga`";
}

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$json_data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('dane.json', $json_data);

mysqli_close($conn);
?>
        </div>
        <div class="produkty">
            
        </div>
    </div>
</div>
<script src="dropdown.js"></script>
<script>
var jsonData = <?php echo file_get_contents('dane.json'); ?>;

// Function to filter and display products
function filtruj() {
    var cenaMin = parseFloat(document.getElementById('cenaMin').value);
    var cenaMax = parseFloat(document.getElementById('cenaMax').value);

    var rodzaj = Array.from(document.querySelectorAll('input[name="rodzajBroni"]:checked')).map(function (checkbox) {
        return checkbox.value;
    });
    var kaliber = Array.from(document.querySelectorAll('input[name="kaliber"]:checked')).map(function (checkbox) {
        return checkbox.value;
    });
    var producent = Array.from(document.querySelectorAll('input[name="producent"]:checked')).map(function (checkbox) {
        return checkbox.value;
    });

    var produktyContainer = document.getElementById('produkty-container');
    produktyContainer.innerHTML = ''; // Clear previous content

    var filteredData = jsonData.filter(function (item) {
        var cenaProduktu = parseFloat(item.cena);
        var rodzajProduktu = rodzaj.length === 0 || rodzaj.includes(item.rodzaj);
        var kaliberProduktu = kaliber.length === 0 || kaliber.includes(item.kaliber);
        var producentProduktu = producent.length === 0 || producent.includes(item.producent);

        return (!isNaN(cenaMin) && cenaProduktu >= cenaMin) && (!isNaN(cenaMax) && cenaProduktu <= cenaMax) && rodzajProduktu && kaliberProduktu && producentProduktu;
    });

    filteredData.forEach(function (item) {
        var produktDiv = document.createElement('div');
        produktDiv.classList.add('produkt');
        produktDiv.id = item.id;

        var imgElement = document.createElement('img');
        imgElement.src = item.img;
        imgElement.alt = '';

        var nazwaProduktuDiv = document.createElement('div');
        nazwaProduktuDiv.classList.add('nazwa-produktu');
        nazwaProduktuDiv.innerHTML = '<p>' + item.nazwa + ' ' + item.id + '</p>';

        var cenaProduktuDiv = document.createElement('div');
        cenaProduktuDiv.classList.add('cena-produktu');
        cenaProduktuDiv.innerHTML = '<p>' + item.cena + ' zł</p>';

        produktDiv.appendChild(imgElement);
        produktDiv.appendChild(nazwaProduktuDiv);
        produktDiv.appendChild(cenaProduktuDiv);

        produktyContainer.appendChild(produktDiv);
    });
}

// Call the filtruj function after defining it
filtruj();




</script>
</body>
</html>
