function przenies(podstrona) {
     window.location.href = podstrona; // Corrected to use window.location.href
}

function dropdown(id) {
     var dropdownContent = document.getElementById(id);
     dropdownContent.classList.toggle("show");
}

window.onclick = function(event) { // Corrected the event handler
     if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          for (var i = 0; i < dropdowns.length; i++) {
               var openDropdown = dropdowns[i];
               if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show'); // Corrected from classlist to classList
               }
          }
     }
}