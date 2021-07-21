<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

    input:focus ~ label,
  input:not(:placeholder-shown) ~ label,
  textarea:focus ~ label,
  textarea:not(:placeholder-shown) ~ label,
  select:focus ~ label,
  select:not([value='']):valid ~ label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
      skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
  }

  input:focus ~ label,
  select:focus ~ label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
  }

</style>


</head>
<body>

<div class="min-h-screen bg-purple-100 py-6 flex flex-col justify-center sm:py-12">
  <div class="relative py-2 sm:max-w-xl sm:mx-auto">
    <div class="absolute inset-0 bg-gradient-to-r from-pink-400 to-purple-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
    <div class="relative px-2 py-6 bg-white shadow-lg sm:rounded-3xl sm:p-20">
      <div class="max-w-md mx-auto">
         <div class="flex flex-row">

            <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-32 mx-auto shadow-lg flex justify-center items-center">
                <i class="mdi mdi-cart-outline text-3xl"></i>
            </div>

        </div>
         <h2 class="font-serif  font-bold text-xl uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Registration form</h2>

         <form method="POST" action="add">

          @csrf

        <div class="relative z-0 w-full mb-4">
        <input type="email" name="email" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter email</label>
        <span class="text-sm text-red-600 hidden" id="error">Email is required</span>
        </div>

        <div class="relative z-0 w-full mb-4">
        <input type="password" name="password" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter password</label>
        <span class="text-sm text-red-600 hidden" id="error">Password is required</span>
        </div>


        <div class="relative z-0 w-full mb-4">
        <input type="name" name="name" placeholder=" " class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter name</label>
        <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
        </div>


        <div class="relative z-0 w-full mb-4">
        <input type="name" name="address" placeholder=" " class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter address</label>
        <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
        </div>

        <div class="relative z-0 w-full mb-4">
        <input type="name" name="mobile" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter Mobile</label>
        <span class="text-sm text-red-600 hidden" id="error">Mobile is required</span>
        </div>

        <button id="button" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-purple-600 hover:bg-pink-600 hover:shadow-lg focus:outline-none">Sign Up</button>

        </form>



        
      </div>
    </div>
  </div>
</div>

</body>
</html>