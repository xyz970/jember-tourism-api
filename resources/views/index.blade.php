<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="dicoding:email" content="luthfit64@gmail.com">
  <title>JemberTourism</title>
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="icon" href="{{asset('favicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('styles/output.css')}}">
  <link rel="stylesheet" href="{{asset('styles/main.css')}}">

  <style>
    html{
      scroll-behavior: smooth;
    }
  </style>

</head>

<body>

  <!-- Navbar -->
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
            <li><a href="#">Home</a></li>
            <li>
              <a href="#futures">Features</a>
            </li>
            <li>
              <a href="">About Us</a>
              <i class="bx bxs-chevron-down js-arrow arrow"></i>
              <ul class="js-sub-menu sub-menu">
                <li><a href="https://www.linkedin.com/in/luthfi-taufiqulhakim/">Luthfi</a></li>
                <li><a href="https://www.linkedin.com/in/farhan-ansyah-182491284/">Farhan</a></li>
                <li><a href="https://www.instagram.com/_irmeliagst?igsh=Y3ZyZTk5eW1sYTE2">Ira</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Jumbotron -->
  <section class="bg-cover bg-center flex flex-col md:flex-row items-center justify-center p-6"
    style="background: url('{{asset("images/background-mini.svg")}}');">
    <div class="md:w-1/2 max-w-md lg:max-w-lg xl:max-w-2xl text-center md:text-left m-3 text-white space-y-4">
      <p class="text-lg font-semibold">Destinasi terbaik di sekitar Jember !</p>
      <h1 class="text-3xl md:text-4xl font-bold">Checklist impian, lengkapi destinasi yang pernah dikunjungi</h1>
      <button id="goToMap"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Coba
        Sekarang</button>
    </div>

    <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
      <img src="{{asset('images/heros.svg')}}" alt="Hero Image" class="max-w-full h-auto" />
    </div>
  </section>

  <!-- Feutures -->
  <section id="futures" class="features bg-gray-100 py-8 md:py-12 mb-5">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl md:text-4xl font-bold text-center mb-4 md:mb-8">Features</h1>
      <h3 class="text-lg md:text-xl font-semibold text-center mb-4 md:mb-6">Fitur Yang Ada</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        <div class="flex flex-col items-center bg-white p-4 md:p-6 rounded-lg shadow-md">
          <img src="{{asset('images/tiny-image1.png')}}" alt="" class="w-12 h-12 md:w-16 md:h-16 mb-2 md:mb-4">
          <h4 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">2D Map Model</h4>
          <p class="text-sm text-center">Menggunakan teknologi map yang bisa di hover.</p>
        </div>
        <div class="flex flex-col items-center bg-white p-4 md:p-6 rounded-lg shadow-md">
          <img src="{{asset('images/tiny-image4.png')}}" alt="" class="w-12 h-12 md:w-16 md:h-16 mb-2 md:mb-4">
          <h4 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">Detail</h4>
          <p class="text-sm text-center">Melihat detail suatu destinasi beserta reviewnya.</p>
        </div>
        <div class="flex flex-col items-center bg-white p-4 md:p-6 rounded-lg shadow-md">
          <img src="{{asset('images/tiny-image2.png')}}" alt="" class="w-12 h-12 md:w-16 md:h-16 mb-2 md:mb-4">
          <h4 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">Article</h4>
          <p class="text-sm text-center">Mini artikel berita seputar pariwisata Jember.</p>
        </div>
        <div class="flex flex-col items-center bg-white p-4 md:p-6 rounded-lg shadow-md">
          <img src="{{asset('images/tiny-image3.png')}}" alt="" class="w-12 h-12 md:w-16 md:h-16 mb-2 md:mb-4">
          <h4 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">Responsibility</h4>
          <p class="text-sm text-center">Dengan experience dan tampilan yang tidak bikin bosan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 3 Step -->
  <section class="bg-cover bg-center py-12" style="background: url('{{asset("images/background-mini.svg")}}');">
    <div class="container mx-auto px-8">
      <!-- Header Section -->
      <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold text-white">3 Langkah Mudah Melengkapi Destinasimu</h1>
      </div>

      <!-- Steps Section -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="flex flex-col items-center">
          <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer">
            <img src="{{asset('images/tiny-image5.png')}}" alt="" class="w-20 h-20 md:w-24 md:h-24 mx-auto mb-4">
            <h2 class="text-xl font-semibold text-center mb-2">Langkah 1</h2>
            <p class="text-center text-gray-700">Deskripsi langkah 1 yang menarik dan informatif.</p>
          </div>
        </div>
        <div class="flex flex-col items-center">
          <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer">
            <img src="{{asset('images/tiny-image6.png')}}" alt="" class="w-20 h-20 md:w-24 md:h-24 mx-auto mb-4">
            <h2 class="text-xl font-semibold text-center mb-2">Langkah 2</h2>
            <p class="text-center text-gray-700">Deskripsi langkah 2 yang menarik dan informatif.</p>
          </div>
        </div>
        <div class="flex flex-col items-center">
          <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer">
            <img src="{{asset('images/tiny-image7.png')}}" alt="" class="w-20 h-20 md:w-24 md:h-24 mx-auto mb-4">
            <h2 class="text-xl font-semibold text-center mb-2">Langkah 3</h2>
            <p class="text-center text-gray-700">Deskripsi langkah 3 yang menarik dan informatif.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Riview -->
  <section class="review min-h-96 bg-cover bg-center" style="background: url('{{asset("images/background-mini.svg")}}');">
    <div class="flex flex-col md:flex-row items-center justify-around h-full p-8">
      <div class="mb-4 flex flex-col mt-10 text-center md:text-left">
        <h3 class="text-xl font-semibold text-white">About Us</h3>
        <div class="flex flex-col items-center md:items-start mt-4">
          <h1 class="text-2xl md:text-4xl font-bold text-white">Apa yang kau tahu tentang</h1>
          <img src="{{asset('images/logo.svg')}}" alt="Logo" class="inline-block w-40 h-12 md:w-60 md:h-12 mt-4 md:ml-3">
        </div>
      </div>

      <div class="flex justify-center mt-8 md:mt-0">
        <img src="{{asset('images/review.svg')}}" alt="Review" class="w-full h-auto max-w-xs md:max-w-md" />
      </div>
    </div>
  </section>

  <section class="quote bg-white shadow-md rounded-lg p-4">
    <div class="quote-content flex justify-center">
      <img src="{{asset('images/quote.svg')}}" alt="Quote" class="w-full h-auto max-w-2xl" />
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="flex flex-col items-center py-10"
    style="background: url('{{asset("images/background-mini.svg")}}');">
    <div class=" flex flex-wrap justify-center items-center bg-white p-8 rounded-lg shadow-md w-full max-w-4xl">
      <img src="{{asset('images/man.svg')}}" width="300" alt="man" class="mb-4 md:mb-0 md:mr-8">
      <div class="">
        <form target="_blank" action="https://formsubmit.co/f372b075a582ae3648e13e40d8e2c9e6" method="POST"
          class="w-full md:w-1/2">
          <div class="flex flex-col mb-4">
            <input type="text" name="name"
              class="form-control p-2 mb-2 border rounded border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Nama" required />
            <input type="email" name="email"
              class="form-control p-2 mb-2 border rounded border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Email" required />
          </div>

          <div id="textarea" class="mb-4">
            <textarea placeholder="Your Message"
              class="form-control p-2 w-full border rounded border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
              name="message" rows="10" required></textarea>
          </div>

          <button type="submit"
            class="submit-btn w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">Send</button>
        </form>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <section class="footer text-white py-12" style="background: url('{{asset("images/background-mini.svg")}}');">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
      <img src="{{asset('images/logo.svg')}}" width="300px" alt="logo" class="mb-8 md:mb-0">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="footer-row">
          <h3 class="text-lg font-semibold mb-4">Resources</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">Application</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Documentation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">System</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
          </ul>
        </div>

        <div class="footer-row">
          <h3 class="text-lg font-semibold mb-4">Resources</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">Application</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Documentation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">System</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
          </ul>
        </div>

        <div class="footer-row">
          <h3 class="text-lg font-semibold mb-4">Resources</h3>
          <ul>
            <li><a href="#" class="text-gray-400 hover:text-white">Application</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Documentation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">System</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.getElementById('goToMap').addEventListener('click', function () {
      window.location.href = 'map';
    });

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
  </script>

  {{-- <script src="{{asset('index.js')}}"></script> --}}
</body>

</html>