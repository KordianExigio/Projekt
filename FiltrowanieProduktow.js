var baza = document.getElementById('base').value;
console.log(baza);


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

    var produktyContainer = document.querySelector('.produkty');
    produktyContainer.innerHTML = '';

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
    
        // Dodaj obsługę kliknięcia do każdego elementu produktDiv
        produktDiv.addEventListener('click', function() {
            
            console.log('Kliknięto na produkt o id: ' + item.id);
            var urlProduktu = 'produkt.php?idproduktu=' + item.id + '&baza=' + baza;
            window.location.href = urlProduktu;
        });
    
        produktyContainer.appendChild(produktDiv);
    });
    
 }

 filtruj();

 function przekierujNaInnaStrone() {
     var adresStronyPHP = 'http://localhost/strona/sklep.php?zmienna=Amunicja';

     window.location.href = adresStronyPHP;
 }