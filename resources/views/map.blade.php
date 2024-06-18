<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>JemberTourism</title>
  <link rel="icon" href="public/favicon.png" type="image/x-icon">

  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('styles/map.css')}}">

</head>

<body>
  <header>
    <nav>
      <div class="navbar">
        <i class="bx bx-menu"></i>
        <div class="logo">
          <img src="{{asset('images/logo.svg')}}" width="300px" alt="" />
        </div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name"> <img src="{{asset('images/logo.svg')}}" width="100px" alt="" /></span>
            <i class="bx bx-x"></i>
          </div>
          <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li>
              <a href="#">About Us</a>
              <i class="bx bxs-chevron-down js-arrow arrow"></i>
              <ul class="js-sub-menu sub-menu">
                <li><a href="#">Luthfi</a></li>
                <li><a href="#">Farhan</a></li>
                <li><a href="#">Ira</a></li>
              </ul>
            </li>
            <li><a href="index.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="map-container">
    <div class="map-content">
      <div class="map-background">
        <img src="{{asset('images/background-map.svg')}}" alt="background-map">
        <div class="map-item">
          <img src="{{asset('images/map1.svg')}}" alt="map10" id="satu">
          <img src="{{asset('images/Group4.svg')}}" alt="map2" id="dua">
          <img src="{{asset('images/map3.svg')}}" alt="map3" id="tiga">
          <img src="{{asset('images/map4.svg')}}" alt="map4" id="empat">
          <img src="{{asset('images/map5.svg')}}" alt="map5" id="lima">
          <img src="{{asset('images/map6.svg')}}" alt="map6" id="enam">
          <img src="{{asset('images/Group5.svg')}}" alt="map7" id="tujuh">
          <img src="{{asset('images/map8.svg')}}" alt="map8" id="delapan">
          <img src="{{asset('images/map9.svg')}}" alt="map9" id="sembilan">
          <img src="{{asset('images/map10.svg')}}" alt="map10" id="sepuluh">
          <img src="{{asset('images/map11.svg')}}" alt="map11" id="sebelas">
          <img src="{{asset('images/map12.svg')}}" alt="map12" id="duabelas">
          <img src="{{asset('images/map13.svg')}}" alt="map13" id="tigabelas">
          <img src="{{asset('images/map14.svg')}}" alt="map14" id="empatbelas">
          <img src="{{asset('images/map15.svg')}}" alt="map15" id="limabelas">
          <img src="{{asset('images/Group2.svg')}}" alt="map16" id="enambelas">
          <img src="{{asset('images/map17.svg')}}" alt="map17" id="tujuhbelas">
          <img src="{{asset('images/Group1.svg')}}" alt="map18" id="delapanbelas">
          <img src="{{asset('images/map19.svg')}}" alt="map19" id="sembilanbelas">
          <img src="{{asset('images/map20.svg')}}" alt="map20" id="duapuluh">
          <img src="{{asset('images/map21.svg')}}" alt="map21" id="duasatu">
          <img src="{{asset('images/map22.svg')}}" alt="map22" id="duadua">
          <img src="{{asset('images/map23.svg')}}" alt="map23" id="duatiga">
          <img src="{{asset('images/Group3.svg')}}" alt="map24" id="duaempat">
          <img src="{{asset('images/map25.svg')}}" alt="map25" id="dualima">
          <img src="{{asset('images/map26.svg')}}" alt="map26" id="duaenam">
          <img src="{{asset('images/map27.svg')}}" alt="map27" id="duatujuh">
          <img src="{{asset('images/map28.svg')}}" alt="map28" id="duadelapan">
          <img src="{{asset('images/map29.svg')}}" alt="map29" id="duasembilan">
          <img src="{{asset('images/map30.svg')}}" alt="map30" id="tigapuluh">
          <img src="{{asset('images/map31.svg')}}" alt="map31" id="tigasatu">
          <img src="{{asset('images/map32.svg')}}" alt="map32" id="tigadua">

        </div>
      </div>
    </div>
    <div id="map-card" class="map-card" style="display: none;">
      <a id="map-name" href="watuulo.html"></a>
      <img id="map-image" src="" alt="Map Image" width="150px">
      <p id="map-description"></p>
    </div>
    <script>
      let navbar = document.querySelector(".navbar");

      // sidebar open close js code
      let navLinks = document.querySelector(".nav-links");
      let menuOpenBtn = document.querySelector(".navbar .bx-menu");
      let menuCloseBtn = document.querySelector(".nav-links .bx-x");
      menuOpenBtn.onclick = function () {
        navLinks.style.left = "0";
      }
      menuCloseBtn.onclick = function () {
        navLinks.style.left = "-100%";
      }
      document.addEventListener('DOMContentLoaded', function () {
        var mapCard = document.getElementById('map-card');
        var mapName = document.getElementById('map-name');
        var mapDescription = document.getElementById('map-description');
        var mapImage = document.getElementById('map-image');
        var mapItems = document.querySelectorAll('.map-item img');

        mapItems.forEach(function (item) {
          item.addEventListener('click', function (event) {
            var mapId = event.target.id;

            // Update content based on mapId
            switch (mapId) {
              case 'tujuh':
                mapName.textContent = 'Kebun Teh Gambir';
                mapImage.src = '{{asset("images/KebunTehGunungGambir.jpg")}}'; // Update image source
                mapDescription.textContent = 'Kebun teh yang Eksotis';
                mapName.href = "wisata/gunung-gambir"
                break;
              case 'delapanbelas':
                mapName.textContent = 'Pantai Watu Ulo';
                mapImage.src = '{{asset("images/watuulo.jpg")}}'; // Update image source
                mapDescription.textContent = 'Pantai cantik yang memiliki bumbu mistis';
                mapName.href = "wisata/watu-ulo"
                break;
              case 'duaempat':
                mapName.textContent = 'Pantai Papuma';
                mapImage.src = '{{asset("images/pantaipapuma.jpg")}}'; // Update image source
                mapDescription.textContent = 'Pantai pasir putihnya';
                mapName.href = "wisata/papuma"
                break;
              case 'enambelas':
                mapName.textContent = 'Puncak Rembangan';
                mapImage.src = '{{asset("images/rembangan.jpg")}}'; // Update image source
                mapDescription.textContent = 'Puncak bukit yang kaya spot fotonya';
                mapName.href = "wisata/rembangan"
                break;
              case 'dua':
                mapName.textContent = ' Pantai Payangan';
                mapImage.src = '{{asset("images/payangan.jpg")}}'; // Update image source
                mapDescription.textContent = 'Pantai yang penuh dengan biota laut menggemaskan';
                mapName.href = "wisata/payangan"
                break;
              // Add cases for other map items

              default:
                mapName.textContent = 'Map ' + mapId;
                mapDescription.textContent = 'Destinasi belum ada '
                mapImage.src = '{{asset("images/unknown.png")}}'; // Default image source
                break;
            }

            mapCard.style.display = 'block';
            event.stopPropagation(); // Prevent the click from propagating to the document
          });
        });

        // Close the card when clicking outside of it
        document.addEventListener('click', function (event) {
          var isClickInsideCard = mapCard.contains(event.target);

          if (!isClickInsideCard) {
            mapCard.style.display = 'none';
          }
        });

        // Prevent clicks on the card from closing it
        mapCard.addEventListener('click', function (event) {
          event.stopPropagation();
        });



      });
    </script>
</body>


</html>