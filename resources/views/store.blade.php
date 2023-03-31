<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  .separator-ih {
  height: 1px;
  margin: 10px 0;
  background-color: #ccc;
}
/* .main-carousel {
    position: relative;
    top: 50px;
} */
.productlist1 {
    position: relative;
    top: 300px;
}
.productlist2 {
    position: relative;
    top: 300px;
}
.login-icon{
  position: relative;
  right : 100px;;
}
.carts{
  position: relative;
  bottom : 30px;;
}
.m-0{
  position: relative;
  left : 100px;;
  top: 30px;
}

</style>
    @vite('resources/css/app.css')
    
    <title>Store</title>
</head>
<body>
    <div>
        <section>  
        <!-- ส่วนหัวขอเว็บ  -->
        <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <img src="{{URL::asset('/image/default.png')}}" class="round-image" alt="profile Pic"  height="80" width="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" >
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">WhiteStore</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900">Mobile</a>
      <a class="mr-5 hover:text-gray-900">Computer</a>
      <a class="mr-5 hover:text-gray-900">Clothes</a>
      <a class="mr-5 hover:text-gray-900">Accessories</a>
      
      

      <form class="flex items-center">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
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
    <div class="carts">
    <div class="object-right-top">
    <button type="button" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
</svg>
</button></div></div>
      
    </section>
  </div>
  
</header>
<!-- /ส่วนสไลด์รูปสินค้า -->
        </section>
    </div>
    <section class="main-carousel">
    <div class="mx-48 h-24 p-15">
    <div class="maincontent">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/b1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/b2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/b3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    </div>
</div>
    </section>
    
<section>
  <div class="productlist1">
<div class="bg-white">
  <h1 class="m-0" style="font-size: 30px ;font-weight: bold;"><span style="color:#d4001a">New</span> Products</h1>
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/20210920172751_48689_352_2.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Monitor Lg-32</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$350</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://admin.ihavecpu.com/data/img/shop1/product/product2139_800.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Kingston Fury Beast RGB 16(8GBx2)</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$125</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/20220701095243_53968_352_1.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">NOTEBOOK ASUS TUF GAMING F15</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$1099</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/2022051708580853264_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Smart TV Neo QLED 4K</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$945</p>
      </a>


      <!-- More products... -->
    </div>
  </div>
</div>

  </div>
  
</section>
<section>
  <div class="productlist2">
<div class="bg-white">
<h1 class="m-0" style="font-size: 30px ;font-weight: bold;"><span style="color:#d4001a">Best Seller</span> Products</h1>
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/20210827154620_30959_66_1.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Rezer Essential</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$288</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/2021070114335747470_1.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">VGA GALAX GEFORCE RTX 3060</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$545</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/20221119095911_21543_352_1.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">CASE DEEPCOOL WAVE V2</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$79</p>
      </a>

      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.jib.co.th/img_master/product/original/20210827144211_43126_23_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">CPU INTEL CORE I3-10100F 3.60 GHz </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$99</p>
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>

  </div>
</section>
    </div>
    <section>
      <div class="carousel-img">
        

      </div>
    </section>
  </body>
</html>