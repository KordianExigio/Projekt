<?php
session_start();

function dodajDoKoszyka($produktId, $ilosc, $cena) {
    if (!isset($_SESSION['cart'][$produktId])) {
        $_SESSION['cart'][$produktId] = array(
            'ilosc' => 0,
            'cena' => $cena,
        );
    }

    $_SESSION['cart'][$produktId]['ilosc'] += $ilosc;
}

function usunZKoszyka($produktId) {
    unset($_SESSION['cart'][$produktId]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dodaj_do_koszyka'])) {
        $produktId = $_POST['produkt_id'];
        $ilosc = $_POST['produkt_ilosc'];
        $cena = isset($_POST['produkt_cena']) ? $_POST['produkt_cena'] : 0; 

        dodajDoKoszyka($produktId, $ilosc, $cena);

        header("Location: koszyk.php");
        exit();
    } elseif (isset($_POST['usun_z_koszyka'])) {
        $produktId = $_POST['produkt_id'];

        usunZKoszyka($produktId);


        header("Location: koszyk.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sklep.css">
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="koszyk.css">

    <title>Koszyk</title>
</head>
<body>

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



<div class="koszyk">
     <h1 class="h11">Lista Produktow W Twoim Koszyku</h1>
     <div class="lista-produktow">
     <?php
          $conn = mysqli_connect("localhost","root","","bron");
          $sql = "";
          $CalkowitaCenaZamowienia = 0;

          if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
          echo '<table border="1">';
          echo '<tr><th class="thNazwa">Nazwa</th><th class="thIlosc">Ilość</th><th class="thCena">Cena za 1szt. / Suma</th><th></th></tr>';
          foreach ($_SESSION['cart'] as $produktId => $produkt) {

               $sql = "SELECT `id`, `nazwa`, `img`, `cena`, `kaliber` FROM `ammo` WHERE id = ".$produktId;
               $result = mysqli_query($conn,$sql);
               $row = mysqli_fetch_assoc($result);

               echo '<tr>';
               echo '<td><img src="'.$row['img'].'"><label class="nazwaProduktu">' . $row['nazwa'] . '</label></td>';
               echo '<td>' . $produkt['ilosc'] . '</td>';
               echo '<td>$' . number_format($produkt['cena'], 2) .'  /  '.number_format($produkt['cena'] * $produkt['ilosc'], 2). '</td>';
               echo '<td><a href="usun_z_koszyka.php?id=' . $produktId. '">Usuń z koszyka</a></td>';
               echo '</tr>';

               $CalkowitaCenaZamowienia += number_format($produkt['cena'] * $produkt['ilosc'], 2);
          }
          echo '</table>';
          } else {
          echo '<p>Twój koszyk jest pusty.</p>';
          }
          ?>
          <form action="koszyk.php" method="post" class="formularz">
            <h2>Dane do dostawy</h2>

          <table class="formTable">

          <style>

          .formTable{
               width:500px;
               text-align:center;
          }

          .cenaZamowienia{
               color: rgb(201, 126, 20);
          }

         
          </style>
               <tr>
                    <td class="formTD"><label for="imie">Imię:</label></td>
                    <td class="formTD"><input type="text" name="imie" required><br></td>
               </tr>
               <tr>
                    <td class="formTD"><label for="nazwisko">Nazwisko:</label></td>
                    <td class="formTD"><input type="text" name="nazwisko" required><br></td>

               </tr>

               <tr>
                    <td class="formTD"><label for="adres">Adres dostawy:</label></td>
                    <td class="formTD"><input name="adres" required></input><br></td>
               </tr>

          </table>
            

            <h2>Podsumowanie zamówienia</h2>
            <p>Łączna suma zamówienia: <label class="cenaZamowienia">$<?php echo $CalkowitaCenaZamowienia;?></label></p>

            <button type="submit" name="zloz_zamowienie" class="zamowienie">Złóż zamówienie</button>

            <?php
                if (isset($_POST['zloz_zamowienie']) && $_SESSION['cart'] != array()) {
                    $imie = mysqli_real_escape_string($conn, $_POST['imie']);
                    $nazwisko = mysqli_real_escape_string($conn, $_POST['nazwisko']);
                    $adres = mysqli_real_escape_string($conn, $_POST['adres']);


                    $sqlZamowienie = "INSERT INTO zamowienia (imie, nazwisko, adres, cena) VALUES ('$imie', '$nazwisko', '$adres', $CalkowitaCenaZamowienia)";
                    mysqli_query($conn, $sqlZamowienie);


                    $ostatnieIdZamowienia = mysqli_insert_id($conn);

        
                    foreach ($_SESSION['cart'] as $produktId => $produkt) {
                        $ilosc = $produkt['ilosc'];
                        $cenaProduktu = $produkt['cena'];

                        $sqlPozycjaZamowienia = "INSERT INTO pozycje_zamowien (id_zamowienia, id_produktu, ilosc, cena) VALUES ($ostatnieIdZamowienia, $produktId, $ilosc, $cenaProduktu)";
                        mysqli_query($conn, $sqlPozycjaZamowienia);
                    }

                    $_SESSION['cart'] = array();

                    header("Location: strona-glowna.php");
                    exit();
            }
                
            
            
            
            ?>
        </form>
     </div>
     
    
</div>
<script src="dropdown.js"></script>
<script>
          function przekierujNaInnaStrone() {
               var adresStronyPHP = 'http://localhost/strona/sklep.php?zmienna=Amunicja';
               window.location.href = adresStronyPHP;
          }

          function przekierujNaKorzyk() {
               var adresStronyPHP = 'http://localhost/strona/koszyk.php';
               window.location.href = adresStronyPHP;
          }
     </script>
</body>
</html>

</html>