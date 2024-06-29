<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <style>
    .card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover .card-img {
      filter: brightness(0.8);
    }
    .card:hover .card-content {
      background-color: #f5f5f5;
    }
    .contact-card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    li{
      background-color: #F2EAD3;
    }
    .duration-1000 {
    transition: transform 1.5s ease-in-out;
    }
    @media (max-width: 768px) {
    .comment-block {
      padding: 10px; /* Menambahkan ruang di sekitar komentar pada layar kecil */
    }
    .profile-img {
      width: 40px; /* Mengatur ukuran gambar profil pada layar kecil */
      height: 40px;
    }
    .customer-name {
      font-size: 14px; /* Mengurangi ukuran font nama pada layar kecil */
    }
  }
  </style>
</head>
<body>
<nav class="bg-[#F2EAD3] border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="/photos/logo.png" class="h-14 w-full" alt="Flowbite Logo" />
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse bg-[#F2EAD3]">
      <button type="button" class="text-Brown bg-Brown-700 focus:ring-3 font-bold rounded-lg text-xl px-4 py-2 text-center">Login</button>
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="bg-[#F2EAD3] items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-cta">
    <ul class="bg-[#F2EAD3] flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-Bround bg-white-700 rounded md:bg-transparent md:text-Brown-700 md:dark:text-Brown-500" aria-current="page">Home</a>
        </li>
        <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
        </li>
        <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
    </ul>
</div>
</div>
</nav>

<!-- Carousel -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <div class="relative h-56 md:h-96 lg:h-[565px] overflow-hidden shadow-lg">
       <!-- Item 1 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="/photos/carousel-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="absolute inset-0 bg-Brown bg-opacity-40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
              <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white sm:text-3xl md:text-5xl lg:text-6xl">Beauty and Elegance Redefined</h1>
              <p class="mb-8 text-sm sm:text-base md:text-lg lg:text-xl font-bold text-gray-200 lg:text-xl sm:px-13 lg:px-48">We prioritize the best quality service and attention to detail.</p>
              <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border-2 border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                  Booking Now
              </a>  
              </div>
          </div>
          </div>
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="/photos/carousel-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="absolute inset-0 bg-Brown bg-opacity-40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
              <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white sm:text-3xl md:text-5xl lg:text-6xl">Beauty and Elegance Redefined</h1>
              <p class="mb-8 text-sm sm:text-base md:text-lg lg:text-xl font-bold text-gray-200 lg:text-xl sm:px-13 lg:px-48">We prioritize the best quality service and attention to detail.</p>
              <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border-2 border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                  Booking Now
              </a>  
              </div>
          </div>
          </div>
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="/photos/carousel-3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="absolute inset-0 bg-Brown bg-opacity-40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
              <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white sm:text-3xl md:text-5xl lg:text-6xl">Beauty and Elegance Redefined</h1>
              <p class="mb-8 text-sm sm:text-base md:text-lg lg:text-xl font-bold text-gray-200 lg:text-xl sm:px-13 lg:px-48">We prioritize the best quality service and attention to detail.</p>
              <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border-2 border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                  Booking Now
              </a>  
              </div>
          </div>
          </div>
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="/photos/carousel-4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="absolute inset-0 bg-Brown bg-opacity-30"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
              <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white sm:text-3xl md:text-5xl lg:text-6xl">Beauty and Elegance Redefined</h1>
              <p class="mb-8 text-sm sm:text-base md:text-lg lg:text-xl font-bold text-gray-200 lg:text-xl sm:px-13 lg:px-48">We prioritize the best quality service and attention to detail.</p>
              <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                  <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border-2 border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Booking Now
                </a>  
              </div>
          </div>
          </div>
      </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
  </div>
</div>

{{-- About --}}
<div id="about" class="about shadow-lg shadow-gray-300">
  <!-- About Us Section -->
  <section class="mt-16 py-5 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-800">About Us</h2>
        <p class="mt-4 text-lg text-gray-600 font-bold">Discover more about SEA SALON and our commitment to beauty and elegance.</p>
      </div>
      <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
          <img src="/photos/About.jpg" alt="SEA SALON" class="rounded-lg shadow-lg">
        </div>
        <div class="w-full lg:w-1/2">
          <p class="text-lg text-gray-800 mb-3">
            At SEA SALON, we believe in redefining beauty and elegance. Our team of expert stylists and beauticians is dedicated to providing exceptional services that exceed your expectations. Whether you're looking for a new hairstyle, a relaxing spa treatment, or professional makeup services, we've got you covered.
          </p>
          <p class="text-lg text-gray-800 mb-3">
            Our salon is equipped with the latest technology and premium products to ensure that you receive the best care possible. We prioritize quality, attention to detail, and customer satisfaction in everything we do.
          </p>
          <p class="text-lg text-gray-800 mb-3">
            Join us at SEA SALON and experience a transformation that enhances your natural beauty and boosts your confidence. We look forward to serving you and making you feel your absolute best.
          </p>
        </div>
      </div>
    </div>
  </section>
</div>

 <!-- Services Section -->
 <section class="mt-16 py-12 bg-[#A79277]">
  <div class="container mx-auto px-6 lg:px-20">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-gray-800">Our Services</h2>
      <p class="mt-4 text-lg text-gray-600 font-bold">Experience the best in beauty and wellness with our range of services.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out">
        <img src="/photos/Haircuts.jpg" alt="Haircuts and Styling" class="card-img w-full h-50 object-cover">
        <div class="card-content p-6">
          <h3 class="text-2xl font-semibold mb-3">Haircuts and Styling</h3>
          <p class="text-gray-600 mb-4">Get the perfect haircut and style to match your personality and lifestyle.</p>
          <a href="#" class="text-blue-700 hover:underline">Learn more</a>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out">
        <img src="/photos/Manicure.jpg" alt="Manicure and Pedicure" class="card-img w-full h-50 object-cover">
        <div class="card-content p-6">
          <h3 class="text-2xl font-semibold mb-3">Manicure and Pedicure</h3>
          <p class="text-gray-600 mb-4">Pamper your hands and feet with our luxurious manicure and pedicure services.</p>
          <a href="#" class="text-blue-700 hover:underline">Learn more</a>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out">
        <img src="/photos/Facial.jpg" alt="Facial Treatments" class="card-img w-full h-50 object-cover">
        <div class="card-content p-6">
          <h3 class="text-2xl font-semibold mb-3">Facial Treatments</h3>
          <p class="text-gray-600 mb-4">Rejuvenate your skin with our customized facial treatments.</p>
          <a href="#" class="text-blue-700 hover:underline">Learn more</a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Review --}}
<section class="mt-10 py-10">
  <div class="container mx-auto px-6 lg:px-20">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-gray-800">Review</h2>
      <p class="mt-4 text-lg text-gray-600 font-bold">What they said.</p>
    </div>

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-20 overflow-hidden rounded-lg md:h-96">
        @foreach ($reviews as $review)
        <div class="hidden duration-1500 ease-in-out" data-carousel-item>
          <figure class="max-w-screen-md mx-auto text-center">
            <div class="flex items-center justify-center mb-4">
              @for ($i = 0; $i < $review->star_rating; $i++)
                <svg class="w-8 h-8 me-1 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
              @endfor
            </div>
            <blockquote>
              <p class="text-xl italic font-medium text-gray-900 dark:text-white">{{ $review->comment }}</p>
              <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                  <cite class="pe-3 text-xl font-medium text-gray-900 dark:text-white">{{ $review->customer_name }}</cite>
                </div>
              </figcaption>
            </blockquote>
          </figure>
        </div>
        @endforeach
      </div>
    </div> 
  </div>
</section>


<!-- Contact Details Section -->
 <section class="mt-16 py-12 bg-white">
  <div class="container mx-auto px-6 lg:px-20">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-gray-800">Contact Details</h2>
      <p class="mt-4 text-lg text-gray-600 font-bold">Feel free to reach out to our team for any inquiries or appointments.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Contact Card 1 -->
      <div class="contact-card bg-[#A79277] rounded-lg shadow-lg overflow-hidden p-6 hover:shadow-2xl transition duration-300 ease-in-out flex items-center space-x-4">
        <div class="flex-shrink-0">
          <img class="h-16 w-16 rounded-full" src="https://randomuser.me/api/portraits/men/65.jpg" alt="Thomas Avatar">
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-gray-800">Thomas</h3>
          <p class="text-gray-600">Phone Number: <a href="tel:08123456789" class="text-blue-700 hover:underline">08123456789</a></p>
        </div>
      </div>
      <!-- Contact Card 2 -->
      <div class="contact-card bg-[#A79277] rounded-lg shadow-lg overflow-hidden p-6 hover:shadow-2xl transition duration-300 ease-in-out flex items-center space-x-4">
        <div class="flex-shrink-0">
          <img class="h-16 w-16 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sekar Avatar">
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-gray-800">Sekar</h3>
          <p class="text-gray-600">Phone Number: <a href="tel:08164829372" class="text-blue-700 hover:underline">08164829372</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="bg-[#F2EAD3] py-6 mt-12">
  <div class="container mx-auto px-6 lg:px-20 text-center">
    <p class="text-Brown">&copy; 2024 SEA SALON. All rights reserved.</p>
  </div>
</footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</html>