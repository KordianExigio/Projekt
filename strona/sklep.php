<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="nawigacja.css">
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
     
          </nav>
          
     </div>


     <script src="dropdown.js"></script>

     <?php
          if(empty($_GET['zmienna'])){
               echo "<h1>Witaj w sklepie - Wszystko wiswyetla</h1>";
          }else{
               $zmienna = $_GET['zmienna'];
               echo "<h1>Witaj w sklepie - $zmienna</h1>";
          }
     
     ?>
     
</body>
</html>