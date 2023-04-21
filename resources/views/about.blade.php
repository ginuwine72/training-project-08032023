<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----<title> Website Layout | CodingLab</title>---->
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <title>About Us</title>
  <style>
		.move-text {
			position: relative; /* set position to relative */
			top: 20px; /* move the text 20 pixels down from its original position */
			left: 140px; /* move the text 30 pixels to the right from its original position */
		}
	</style>
</head>
<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }

  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }

  .sidenav a:hover {
    color: #f1f1f1;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {
      padding-top: 15px;
    }

    .sidenav a {
      font-size: 18px;
    }
  }
</style>
</head>

<body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/">Home</a>
    <a href="/contract">Contact</a>
    <a href="/login">LogIn</a>
    <a href="/register">Register</a>
  </div>


  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    /* Set the width of the side navigation to 250px */
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

  <body>

  

  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Our Vision.</span></h1>


  


  <figure class="max-w-screen-md mx-auto text-center">
    <svg aria-hidden="true" class="w-12 h-12 mx-auto mb-3 text-gray-400" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
    <blockquote>
        <p class="text-2xl italic font-medium text-gray-900">"No man goes before his time — unless the boss leaves early"</p>
    </blockquote>
    <figcaption class="flex items-center justify-center mt-6 space-x-3">
        
<img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300" src="https://scontent.fhdy3-1.fna.fbcdn.net/v/t1.6435-9/117356695_2608839099370410_5490819344117460886_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE8YNIEo5YCXdQ0Qsvv0S1hOhN_AXngW186E38BeeBbX-kODDzuPs_uptDo8sp4bFdPynEOY6EhZargEO3cFAOM&_nc_ohc=MD3y0p1p0JQAX_Fi67e&_nc_ht=scontent.fhdy3-1.fna&oh=00_AfDu0cAUR2g3d3aidHf2JrMMYB94GF11Z5MhLdqSbW4z7w&oe=644B1950" alt="Bordered avatar">

        <div class="flex items-center divide-x-2 divide-gray-500">
            <cite class="pr-3 font-medium text-gray-900">TonyWn</cite>
            <cite class="pl-3 text-sm text-gray-500">Intern at Google</cite>
        </div>
    </figcaption>
</figure>


    <!-- <div class="container">
      <h1><b>About Us </b></h1>
      <p>We are a team of passionate individuals dedicated to creating high-quality products that make a difference in people's lives.</p>

      <h2>Our Story</h2>
      <p>Our journey began in 2010, when we noticed a gap in the market for affordable and eco-friendly home products. Since then, we have grown our product line and expanded our team, while maintaining our commitment to sustainability and innovation.</p> -->

      <!-- <h2 >Meet the Team</h2>
      <div class="row">
        <div class="col-md-4">
          <img src="https://img.freepik.com/free-photo/waistup-shot-asian-business-man-standing-moddle-office-holding-digital-tablet_1098-20813.jpg?w=740&t=st=1679977752~exp=1679978352~hmac=ba98434c56aafa684f66148694aa97d68d728e6efe61ab8abfe9168742ac0d9e" alt="Team Member 1">
          <h3>John Doe</h3>
          <p>Co-founder and CEO</p>
        </div>
        <div class="col-md-4">
          <img src="https://img.freepik.com/free-photo/business-finance-employment-entrepreneur-money-concept-creative-young-asian-businesswoman-have-smart-idea-thinking-scheming-prepare-plan-steeple-finger-look-up-dreamy_1258-59185.jpg?w=740&t=st=1679977865~exp=1679978465~hmac=9863fc57e90406a93a1b773306313c754f4e28631da964ce955819af3a52a251" alt="Team Member 2">
          <h3>Jane Smith</h3>
          <p>Head of Marketing</p>
        </div>
        <div class="col-md-5">
          <img src="https://img.freepik.com/free-photo/african-american-psychologist-talking-partners-couple-therapy-attending-counseling-session-solve-issues-explaining-psychoanalysis-giving-professional-relationship-advice_482257-46137.jpg?w=360&t=st=1679977809~exp=1679978409~hmac=aa3008f6bcb7e2e283ffeda8ffa6096ecfb458bd87a9694847e1f9eb5cd91ef8" alt="Team Member 3">
          <h3 class="move-text">Mike Johnson</h3>
          <p class="move-text">Lead Designer</p>
        </div>
      </div>
    </div>
    <br> -->


    @vite('resources/css/app.css')

    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
          <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to deploy your app</p>
          <p class="mt-6 text-lg leading-8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
          <dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
            <div class="relative pl-16">
              <dt class="text-base font-semibold leading-7 text-gray-900">
                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                  </svg>
                </div>
                Push to deploy
              </dt>
              <dd class="mt-2 text-base leading-7 text-gray-600">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
            </div>

            <div class="relative pl-16">
              <dt class="text-base font-semibold leading-7 text-gray-900">
                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                </div>
                SSL certificates
              </dt>
              <dd class="mt-2 text-base leading-7 text-gray-600">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
            </div>

            <div class="relative pl-16">
              <dt class="text-base font-semibold leading-7 text-gray-900">
                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                  </svg>
                </div>
                Simple queues
              </dt>
              <dd class="mt-2 text-base leading-7 text-gray-600">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
            </div>

            <div class="relative pl-16">
              <dt class="text-base font-semibold leading-7 text-gray-900">
                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                  </svg>
                </div>
                Advanced security
              </dt>
              <dd class="mt-2 text-base leading-7 text-gray-600">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <br>

    
<footer class="bg-white rounded-lg shadow m-4">
    <div class="w-full container mx-auto p-4 md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="http://whitesoftsulution.com/" class="flex items-center mb-4 sm:mb-0">
                <img src="http://whitesoftsulution.com/images/company-logos/whitsoft-logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">White Softsolution</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="http://whitesoftsulution.com/" class="hover:underline">White Softsolution™</a>. All Rights Reserved.</span>
    </div>
</footer>





  </body>

</html>