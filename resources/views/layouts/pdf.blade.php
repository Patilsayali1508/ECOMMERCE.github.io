<!DOCTYPE html>

<html>

<head>
<title>PDF</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--<link rel="stylesheet" type="text/css" href="{{ public_path('css/app.css') }}" media="screen">-->
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">    
</head>

<body>

@foreach($data as $item)

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
         <h2 class="font-serif  font-bold text-xl uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Product Details</h2>

      
        

        <div class="relative z-0 w-full mb-4">
    <p class="font-serif  font-bold text-lg uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Product Name:{{$item->product_name}}</p>
    <br>
    <p class="font-serif  font-bold text-lg uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Original Price:{{$item->original_price}}</p>
    <br>
    <p class="font-serif  font-bold text-lg uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Discount Price:{{$item->discount_price}}</p>
    <br>
    <p class="font-serif  font-bold text-lg uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Product Image:<img class="w-48 h-48 " src="{{public_path('images/'.$item->product_image)}}"></p>
    <br>
    
    

        </div>



       

      

        
       



        
      </div>
    </div>
  </div>
</div>
  
    @endforeach
</body>



</html>