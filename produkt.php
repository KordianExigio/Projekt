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
        $cena = isset($_POST['produkt_cena']) ? $_POST['produkt_cena'] : 0; // Sprawdzamy, czy cena istnieje

        dodajDoKoszyka($produktId, $ilosc, $cena);

        // Przekieruj do strony koszyka
        header("Location: koszyk.php");
        exit();
    } elseif (isset($_POST['usun_z_koszyka'])) {
        $produktId = $_POST['produkt_id'];

        usunZKoszyka($produktId);

        // Przekieruj do strony koszyka
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
     <link rel="stylesheet" href="opisproduktu.css">
    <link rel="stylesheet" href="dropdown.css">
     <title>Document</title>
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
    <div class="opisprodukt">
     <?php
          $conn = mysqli_connect("localhost","root","","bron");
          $baza = $_GET['baza'];
          $idproduktu = $_GET['idproduktu'];
          $sql= "";

          if($baza == "Amunicja"){
               $sql = 'SELECT `id`, `nazwa`, `img`, `cena`, `kaliber` FROM `ammo` WHERE id = '.$idproduktu;
          }elseif($baza == "BronKrotka"){
               $sql = "SELECT * FROM `bron_krotka` WHERE id = ". $idproduktu;
          }elseif($baza == "BronDluga"){
               $sql = "SELECT `id`, `nazwa`, `img`, `cena`, `promocja`, `kaliber`, `producent`, `rodzaj` FROM `bron_dluga` WHERE id= ". $idproduktu;
          }

          $result  = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);

          if ($row) {
     ?>
     <div class="pole">
          <div class="divdiv">
               <div class="image">
                    <img  src="<?php echo $row['img']?>" alt=" ">

               </div>
                <div class="opis"> 
                    <form action="produkt.php" method="post">
                         <h1><?php echo $row['nazwa']?></h1>
                         <p class="cena_produktu">Cena: <?php echo $row['cena'];?></p>
                         <p class="p"> Kaliber: <?php  echo $row['kaliber'] ?></p>
                         <p class="p"> <?php
                              if($baza == "BronDluga" && $row['rodzaj'] != "strzelba"){
                                   echo " Rodzaj broni: Karabin ".$row['rodzaj'];
                              }elseif($baza == "BronDluga" && $row['rodzaj'] == "strzelba"){
                                   echo "Rodzaj broni: ".$row['rodzaj'];
                              }elseif($baza == "BronKrotka"){
                                   echo "Rodzaj broni: ".$row['rodzaj'];
                              }

                         ?></p>
                         <?php
                              if($baza == "BronKrotka" or $baza == "BronDluga"){
                                   echo "<p class='uwaga'>Ten produkt nie jest mozliwy do zakupienia przez nasz sklep intrnetowy.
                                   Konieczne bedzie odwiedzenie jednego z naszych sklepow stacjonarnych ze zezwoleniem ze bron by miec mozliwosc kupna takiego.</p>";
                              }else{
                                   echo '<input type="hidden" name="produkt_id" value='.$row['id'].' >';
                                   echo '<input type="hidden" name="produkt_cena" value='.$row['cena'].' >';
                                   echo '<button type="submit" name="dodaj_do_koszyka" class="dodajdokoszyka-btn">Dodaj do koszyka</button>';
                                   echo '<div class="ilosc">Ilosc:<input type="number" name="produkt_ilosc" value="1"></div>';
                                   
                              }
                         ?>
                    </form>
                    <p class="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
              
          </div>
         
     </div>
     <?php
          } else {
               echo "Brak danych dla podanego produktu.";
          }
     ?>
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
