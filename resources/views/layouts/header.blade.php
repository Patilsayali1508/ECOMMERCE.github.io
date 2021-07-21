<?php
use App\Http\Controllers\NewProductAdd;

$total=0;
if(Session::has('user'))
{
  $total=NewProductAdd::cartItem();
}

?>
<!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">


<style>

.dropdown:hover > .dropdown-content {
	display: block;
}
  @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
  
  li>ul                 { transform: translatex(100%) scale(0) }
  li:hover>ul           { transform: translatex(101%) scale(1) }
  li > button svg       { transform: rotate(-90deg) }
  li:hover > button svg { transform: rotate(-270deg) }

  /* Below styles fake what can be achieved with the tailwind config
     you need to add the group-hover variant to scale and define your custom
     min width style.
     See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
     for implementation with config file
  */
  .group:hover .group-hover\:scale-100 { transform: scale(1) }
  .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
  .scale-0 { transform: scale(0) }
  .min-w-32 { min-width: 8rem }
</style>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

  <script src= "{{asset('js/jquery_min.js')}}"></script>
  <script src="{{asset('js/jquery.elevatezoom.js')}}"></script>
</head>
<body>

<nav class="w-full flex shadow-lg bg-gradient-to-r from-pink-400 to-purple-600 lg:px-8 px-2 py-1 text-white items-center relative justify-between md:justify-start ">
        <div class="mr-auto md:hidden block">
            <button class="p-2 text-gray-300 focus:outline-none focus:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
            </button>
        </div>
        <div class="flex text-xl font-bold tracking-wider space-x-2 md:mx-0 mx-auto">
              <img src="{{asset('img/e5.png')}}" class="h-12 w-12 sm:h-12 bg-white rounded-full overflow-hidden focus:ring-2 focus:ring-white focus:outline-none" />
           
                <title>SHOP</title>
                <g>
               <path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path>
                </g>
            
            <span class="py-2">SHOP NOW</span>
        </div>
        <ul class="text-gray-300 flex md:space-x-2 p-2 md:px-0 md:space-y-0 space-y-1 md:ml-4 md:relative absolute top-full  flex-col md:flex-row left-0 right-0">
            <li>
                <a href="home" class="font-semibold px-4 py-2  bg-gray-700 rounded-lg block text-white" >Home</a>
            </li>
            <li>

               <div class="group inline-block">

  <button class="flex items-center py-2">
    <a href="#" class="font-semibold px-4 hover:bg-gray-700 hover:text-white rounded-lg block hover:py-5">Women</a>

    <span>
      <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
  </button>
  <ul class="absolute rounded-lg  text-gray-700 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
 <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Indian & Fusion Wear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_kurta_suite">Kurtas & Suits<a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_ethnic_wear">Ethnic Wear</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_sarees">Sarees</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_skirts_palazzos">Skirts & Palazzos</a></li>
      </ul>
    </li>
<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Western Wear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_western_wear_dresses">Dresses</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_jumpsuits">Juimpsuits</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_top">Top</a></li>
                <li class="px-3 py-1 hover:bg-gray-100"><a href="women_jeans">Jeans</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_shorts_skirts"> Shorts & Skirts</a></li>
      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Footwear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_flats">Flats</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_casual_shoes">Casual Shoes</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_heels">Heels</a></li>
      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Jewellery</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_fashion_jewellery">Fashion Jewellery</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_fine_jewellery">Fine Jewellery</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="women_earrings">Earrings</a></li>
      </ul>
    </li>
  
</div>

            </li>
            <li>
<div class="group inline-block">

  <button class="flex items-center py-2">
    <a href="#" class="font-semibold px-4 hover:bg-gray-700 hover:text-white rounded-lg block hover:py-5">Men</a>

    <span>
      <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
  </button>
  <ul class="absolute rounded-lg  text-gray-700 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
 <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Topwear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_t_shirt">T-Shirts</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_casual_shirt">Casual Shirts</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_formal_shirt">Formal Shirts</a></li>

      </ul>
    </li>
<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Bottomwear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_jeans">Jeans</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_casual_trousers">Casual Trousers</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_formal_trousers">Formal Trousers</a></li>

      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Footwear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_casual_shoes">Casual Shoes</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_sports_shoes">Sports Shoes</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_formal_shoes">Formal Shoes</a></li>
      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Indian & Festive Wear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_kurta_set">Kurtas & Kurta Sets</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="men_sherwani">Sherwanis</a></li>

      </ul>
    </li>
  
</div>

            </li>
            <li>
             <div class="group inline-block">

  <button class="flex items-center py-2">
    <a href="#" class="font-semibold px-4 hover:bg-gray-700 hover:text-white rounded-lg block hover:py-5">Kids</a>

    <span>
      <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
  </button>
  <ul class="absolute rounded-lg  text-gray-700 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
 <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Boys Clothing</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_t_shirt">T-shirts</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_shirts">Shirts</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_shorts">Shorts</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_jeans">Jeans</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_ethnic_wear">Ethnic Wear</a></li>
      </ul>
    </li>
<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Girls Clothing</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_dresses">Dresses</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_tops">Tops</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_t_shirts">T-shirts</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_ethnic_wear">Ethnic Wear</a></li>
        
      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1"> Boys Footwear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
           <a href="kids_boys_ethnic_wear"> transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_casual_shoes">Casual Shoes</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_sports_shoes">Sports Shoes</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_boys_sandals">Sandals</a></li>
      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Girls Footwear</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
        <a href="kids_girls_ethnic_wear">      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_flats">Flats</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_casual_shoes">Casual Shoes</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_sports_shoes">Sports Shoes</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="kids_girls_heels">Heels</a></li>
      </ul>
    </li>
  
</div>

            </li>
            <li>
<div class="group inline-block">

  <button class="flex items-center py-2">
    <a href="#" class="font-semibold px-4 hover:bg-gray-700 hover:text-white rounded-lg block hover:py-5">Home & Living</a>

    <span>
      <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
  </button>
  <ul class="absolute rounded-lg  text-gray-700 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
 <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Home Decor</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="home_decor_clocks">Clocks</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="home_decor_mirrors">Mirrors</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="home_decor_wall_decor">Wall Decor</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="home_decor_wall_shelves">Wall Shelves</li>
      </ul>
    </li>
<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Lamps & Lighting</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Lamps_Floor">Floor Lamps</li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Lamps_Table">Table Lamps</li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Lamps_Wall">Wall Lamps</li>

      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Flooring</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Flooring_carpets">Carpets</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Flooring_floor_mats">Floor Mats & Dhurries</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Flooring_door_mats">Door Mats</a></li>
      </ul>
    </li>
   
  
</div>

            </li>
            <li>
<div class="group inline-block">

  <button class="flex items-center py-2">
    <a href="#" class="font-semibold px-4 hover:bg-gray-700 hover:text-white rounded-lg block hover:py-5">Beauty</a>

    <span>
      <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
  </button>
  <ul class="absolute rounded-lg  text-gray-700 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
 <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Makeup</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Makeup_Lipstick">Lipstick & Lip Glosses</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Makeup_Foundation">Foundations,Primers & Concealers</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Makeup_Kajal">Kajal,Eyeliners & Maskara</a></li>
        
      </ul>
    </li>
<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Haircare</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Haircare_Shampoo">Shampoo & Condioners</li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Haircare_Haircream">Hair creams & Masks</li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Haircare_Oil_Serums">Oil & Serums</li>
                
      </ul>
    </li>
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button class="w-full text-left flex items-center outline-none focus:outline-none">
        <span class="pr-1 flex-1">Fragrances</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class=" absolute rounded-lg  text-gray-700 bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Fragrances_Premium">Premium Fragrances</a></li>
      
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Fragrances_Perfume">Perfumes</a></li>
        <li class="px-3 py-1 hover:bg-gray-100"><a href="Beauty_Fragrances_Deodorants">Deodorants</a></li>
      </ul>
    </li>

  
</div>

            </li>


</ul>

        <div class="ml-auto flex space-x-2 items-center">
        <button class="rounded-full shadow-lg bg-white text-gray-700 px-6 py-2 hover:bg-pink-400 hover:text-white hover:ring-2 hover:ring-white"><a href="/myorders">Orders</a></button>
            
 
            <a href="/cartlist"> Cart({{$total}})</a><i class="mdi mdi-cart-outline text-xl"></i></a>
                   @if(Session::has('user'))
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <span>{{session('user')['name']}}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute bg-white right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-gray rounded-md shadow dark-mode:bg-gray-800">
            <a class="block text-black px-4 py-2 mt-2 text-sm font-semibold bg-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-white dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline" href="/logout">Logout</a>
         
          </div>
        </div>
      </div> 

    
	
  
 
                
	@else

  <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <span>Login</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block  text-black px-4 py-2 mt-2 text-sm font-semibold bg-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/login">Login</a>
            <a class="block text-black px-4 py-2 mt-2 text-sm font-semibold bg-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/register">Register</a>
  
           
          </div>
        </div>
      </div> 




  
@endif
            </div>
        </div>
    </nav>

   
    
    <br>
   

   
 <script>
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");
        

        loopSlider();
       
    
    });

  
  </script>

  
  </body>
  </html>



  
  