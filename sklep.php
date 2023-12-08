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
            <img src="pobrane.jpg" alt="logo">
            <input type="text" name="" id="" placeholder="wyszukaj">
            <button class="glowna-button" onclick="przenies('strona-glowna.php')">strona głowna</button>
            <button class="sklep-button" onclick="przenies('sklep.php')">sklep</button>
            <button class="regulamin-button" onclick="przenies('regulamin.php')">regulamin</button>
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

                    <button class="cart_button" onclick="przekierujNaKorzyk()"><img src="cart.png" alt="" class="cart-img"></button> 
        </div>
    </nav>
    <div class="sklep">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "bron");
        $sql = "SELECT * FROM `bron_dluga`";
        $maxCena = "";
        $baza = "";

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if(!isset($_GET['zmienna'])){
          $baza = "BronDluga";
        }else{
          $baza = $_GET['zmienna'];
        }

        


        if ($baza == "BronKrotka") {
            $sql = "SELECT * FROM `bron_krotka`";
    
        } elseif ($baza == "BronDluga") {
            $sql = "SELECT * FROM `bron_dluga`";
         
        } elseif (empty($baza)){
            $sql = "SELECT * FROM `bron_dluga`";
        } elseif ($baza == "Amunicja"){
          $sql = "SELECT * FROM `ammo`";
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
        <div class="filtr">
          <?php
          
          if ($baza == "BronKrotka") {
            include "filter_bronKrotka.php";
          } elseif ($baza == "BronDluga") {
            include "filter_BronDluga.php";
          }elseif ($baza == "Amunicja"){
            include "filter_amunicja.php";
          }

          echo $baza;
          
          ?>
          
        </div>
        <div class="produkty">
          
            <script>
                var jsonData = <?php echo file_get_contents('dane.json'); ?>;
            </script>
            <script src="FiltrowanieProduktow.js"></script>
        </div>
    </div>
</div>
<script src="dropdown.js"></script>
<script>
    function przekierujNaKorzyk() {
               var adresStronyPHP = 'http://localhost/strona/koszyk.php';
               window.location.href = adresStronyPHP;
          }
</script>
</body>
</html>
