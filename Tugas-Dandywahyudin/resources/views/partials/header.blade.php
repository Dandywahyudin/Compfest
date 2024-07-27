<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<nav class="bg-[#F2EAD3] border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/photos/logo.png" class="h-14 w-full" alt="Flowbite Logo" />
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse bg-[#F2EAD3]">
        <a href="/login"><button type="button" class="text-Brown bg-Brown-700 focus:ring-3 font-bold rounded-lg text-xl px-4 py-2 text-center">Login</button></a>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>
      </div>
      <div class="bg-[#F2EAD3] items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-cta">
        <ul class="bg-[#F2EAD3] flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:dark:bg-gray-900">
          <li>
            <a href="/" class="block py-2 px-3 md:p-0 text-Bround bg-white-700 rounded md:bg-transparent md:text-Brown-700 md:dark:text-Brown-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="about" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="services" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="reservations" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 md:dark:hover:bg-transparent">Reservation</a>
          </li>
          <li>
            <a href="contact" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#3F2305]-700 md:dark:hover:text-[#3F2305]-500 md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  