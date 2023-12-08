<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="nawigacja.css">
     <link rel="stylesheet" href="regulamin.css">
     <link rel="stylesheet" href="dropdown.css">
     <link rel="stylesheet" href="sklep.css">
     <title>regulamin</title>
</head>
<body class="body">

     <div class="grid-container">
     <nav>
        <div class="navigation">
            <img src="pobrane.jpg" alt="logo">
            <input type="text" name="" id="" placeholder="wyszukaj">
            <button class="glowna-button" onclick="przenies('strona-glowna.php')">strona głowna</button>
            <button class="sklep-button" onclick="przenies('sklep.php?zmienna=BronDluga')">sklep</button>
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
    <div class="regulamin">
     <h1>Regulamin Sklepu Internetowego</h1>
     <p>


     <h3>§ 1. Postanowienia ogólne</h3>
<p>1. Sklep internetowy z bronią (dalej "Sklep") prowadzony jest przez [nazwa firmy], z siedzibą w [adres], NIP: [numer NIP].</p>

<p>2. Sklep oferuje sprzedaż broni zgodnie z obowiązującymi przepisami prawa.</p>

<p>3. Klient może korzystać ze Sklepu, przeglądać ofertę oraz składać zamówienia, pod warunkiem akceptacji niniejszego regulaminu.</p>

<p>4. Zamówienia można składać za pomocą formularza dostępnego na stronie internetowej Sklepu.</p>

<h3>§ 2. Produkty</h3>
<p>1. Produkty oferowane w Sklepie są zgodne z obowiązującymi przepisami prawa.</p>

<p>2. Opisy i parametry produktów są dokładnie określone. W przypadku pytań Klient może skontaktować się z obsługą Sklepu.</p>

<p>3. Sklep zastrzega sobie prawo do zmiany cen produktów, wprowadzania nowych produktów do oferty oraz prowadzenia i odwoływania promocji.</p>

<h3>§ 3. Zamówienia</h3>
<p>1. Zamówienia składane są za pomocą formularza dostępnego na stronie internetowej Sklepu.</p>

<p>2. Po złożeniu zamówienia, Klient otrzyma potwierdzenie na podany adres e-mail, zawierające informacje dotyczące zamówienia.</p>

<p>3. Sklep zastrzega sobie prawo do odmowy realizacji zamówienia w przypadku naruszenia przepisów prawa lub braku dostępności produktu.</p>

<h3>§ 4. Dostawa</h3>
<p>1. Koszty dostawy są określone w cenniku dostępnych na stronie internetowej Sklepu.</p>

<p>2. Termin dostawy jest uzależniony od dostępności produktu i wybranego sposobu dostawy.</p>

<p>3. Klient jest zobowiązany sprawdzić paczkę w obecności kuriera i zgłosić wszelkie uszkodzenia.</p>

<h3>§ 5. Płatności</h3>
<p>1. Sklep oferuje różne formy płatności, takie jak przelew bankowy, płatności kartą, itp. Szczegóły dostępne są na stronie internetowej Sklepu.</p>

<p>2. Zamówienia są realizowane po potwierdzeniu wpłaty.</p>

<h3>§ 6. Reklamacje</h3>
<p>1. Klient ma prawo do reklamacji w przypadku wad produktu zgodnie z obowiązującymi przepisami.</p>

<p>2. Reklamację należy zgłosić pisemnie lub drogą elektroniczną w terminie 14 dni od daty otrzymania produktu.</p>

<p>3. Sklep zobowiązuje się do rozpatrzenia reklamacji w terminie 30 dni od daty jej otrzymania.</p>

<h3>§ 7. Odstąpienie od umowy</h3>
<p>1. Klient ma prawo do odstąpienia od umowy w terminie 14 dni od daty otrzymania towaru.</p>

<p>2. Procedura odstąpienia od umowy oraz zwrotu produktu jest opisana w regulaminie odstąpienia od umowy.</p>

<h3>§ 8. Ochrona danych osobowych</h3>
<p>1. Administratorem danych osobowych Klienta jest Sklep.</p>

<p>2. Klient ma prawo dostępu do swoich danych osobowych, ich poprawiania, usunięcia lub ograniczenia przetwarzania.</p>

<p>3. Szczegóły dotyczące przetwarzania danych osobowych są opisane w polityce prywatności dostępnej na stronie internetowej Sklepu.</p>

<h3>§ 9. Postanowienia końcowe</h3>
<p>1. Niniejszy regulamin wchodzi w życie od dnia [data].</p>

<p>2. Sklep zastrzega sobie prawo do zmiany regulaminu. Zmiany wchodzą w życie po ich opublikowaniu na stronie internetowej Sklepu.</p>

<p>3. W sprawach nieuregulowanych niniejszym regulaminem mają zastosowanie przepisy prawa polskiego.</p>


</p><label for="" class="uwaga">Regulamin zostal wygenerowany maszynowo i ma mozliwosc wspominać o funkcjach i mozliwosciach sklepu ktorych nawet nie ma.</label>
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