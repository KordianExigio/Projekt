var i = 2;



function zmienZawartosc(i){
     const h2 = ["Bron Krotka", "Bron Dluga", "Amunicja", "Optyka", "Akcesoria"];
     const h3 = ["Pistolety i rewolwery", "Karabiny i sztucery", "Amunicja do broni", "optyka", "akcesoria..."];
     const img = ["zdjeciaProduktow\scar.jfif", "SCAR.jfif", "amunicja.jfif", "optyka.jfif", "NERF_SUBMACHINEGUN.jfif"];
     const link = ["sklep.php?zmienna=BronKrotka", "sklep.php?zmienna=BronDluga", "sklep.php?zmienna=Amunicja", "sklep.php?zmienna=Optyka", "sklep.php?zmienna=Akcesoria"];


    var x;
    if(i == 0){
          x = 4;
    }else{
          x = i - 1;
    }

    var y;
    if(i == 4){
          y = 0;
    }else{
          y = i + 1;
    }

     console.log("Lewy:");
     document.getElementById("h21").innerHTML = h2[x];
     document.getElementById("h31").innerHTML = h3[x];
     document.getElementById("image1").src = img[x];
     document.getElementById("a1").href = link[x];
     console.log(x);

     console.log("Srodek:");
     document.getElementById("h22").innerHTML = h2[i];
     document.getElementById("h32").innerHTML = h3[i];
     document.getElementById("image2").src = img[i];
     document.getElementById("a2").href = link[i];
     console.log(i);

     console.log("Prawy:");
     document.getElementById("h23").innerHTML = h2[y];
     document.getElementById("h33").innerHTML = h3[y];
     document.getElementById("image3").src = img[y];
     document.getElementById("a3").href = link[y];
     console.log(y);
}



function przesun(kierunek){

      if(kierunek == "right"){
           if(i == 4){
                i = 0;
           }else{
                i += 1;
           }
           console.log(i);
      }else if(kierunek == "left"){
           if(i == 0){
                i = 4;
           }else{
                i += -1;
           }
      }
 
      zmienZawartosc(i);
 
 }
