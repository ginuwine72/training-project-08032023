<!DOCTYPE html>
  <html lang="en">
  <head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
      <title>product</title>
      <script>
      var checkbox = document.querySelector('#sizebut');
      var button = document.querySelector('#sizebut');

      checkbox.addEventListener('change', function() {
          if (this.checked) {
              button.classList.add('ticked');
          } else {
              button.classList.remove('ticked');
          }
      });
  </script>
      <style>
   
    .frame:hover {
      border: 2px solid red;
      cursor: pointer;
    }
   

          .login-icon{
    position: relative;
    right : 100px;
    top:  20px;
  }
  .carts{
    position: relative;
    top:  -6px;
  }
  .sticky-header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 80px;
      background-color: #fff;
      z-index: 999;
      /* Add any other styles as desired */
  }
  #sizebut {
          background-color: gray;
          color: white;
          border: none;
          padding: 10px 20px;
      }

      #sizebut {
          background-color: green;
      }

      </style>
  </head>
  <body>
      <!--
    This example requires some changes to your config:
    
    ```
    // tailwind.config.js
    module.exports = {
      // ...
      theme: {
        extend: {
          gridTemplateRows: {
            '[auto,auto,1fr]': 'auto auto 1fr',
          },
        },
      },
      plugins: [
        // ...
        require('@tailwindcss/aspect-ratio'),
      ],
    }
    ```
  -->
  <!-- <header class="sticky-header"> -->
  <section>  

          <!-- ส่วนหัวขอเว็บ  -->
          <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="/store" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="{{URL::asset('/image/default.png')}}" class="round-image" alt="profile Pic"  height="80" width="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" >
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">WhiteStore</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <ul>
    <a href="/"class="mr-5 hover:text-gray-900">Mobile</a>
      <a href="/computer"class="mr-5 hover:text-gray-900">Computer</a>   
      <a href="/"class="mr-5 hover:text-gray-900">Clothes</a> 
      <a href="/"class="mr-5 hover:text-gray-900">Accessories</a>
      </ul>
        

        <form class="flex items-center"type="get" action="{{url('/search')}}">   
      <label for="simple-search" class="sr-only">Search</label>
      <div class="relative w-full">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </div>
          <input type="search" name="search"id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
      </div>
      <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <span class="sr-only">Search</span>
      </button>
  </form>



      </nav>
      <section>
        <div class="login-icon">
          <!-- <ส่วนล็อกอินไอคอน> -->
        <button class="inline-flex items-center bg-transparent border-0 py-1 px-3 focus:outline-none hover:bg-transparent rounded text-base mt-4 md:mt-0">Login
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    Login<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
  </svg>
      </button></div>
      <!-- ส่วนตะกร้าไอคอน -->
      <div class="dropdown">
     <button type="button" class="btn btn-primary" data-toggle="dropdown">
      <div class="carts">
      <div class="object-right-top">
        <a href="">
      <button type="button" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
  </svg>
  </button></a></div></div>
        
  
    
      </section>
    
  </header>
 @yield('content') 
</body>
</HTML>