{{View::make('layouts.header')}}


<style>
  @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
</style>

<div class="grid lg:grid-cols-3 grid-cols-1 lg:gap-3 justify-items-center  lg:pt-0  mt-18 md:-mx-4  max-w-screen-2xl ">

@foreach($products as $item)



<!--      <div class="w-full mb-2 md:w-1/2 md:mx-4 border  shadow-lg"> -->
   <div class="max-w-sm  mb-4 md:w-1/2 md:mx-4 border  shadow-lg">

  <a href="#" class="mb-4">
            <img class="w-full fill h-56 zoom_01" src="{{asset('images/'.$item['product_image'])}}">
        </a>

  <div class="px-6 justify-items-center ">
    <div class="font-bold text-xl mb-2 px-6 ">{{$item['product_name']}}
 </div>
   
    <span class="inline-block line-through   bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">Original Price:Rs.{{$item['original_price']}}</span>
    <span class="inline-block bg-grey-lighter rounded-full mb-2 px-3 py-1 text-sm font-semibold text-grey-darker">Discount Price:Rs.{{$item['discount_price']}}</span>
   <!--  <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span> -->

  <div class=" mb-4  grid-flow-col justify-items-center" >
    <form action="add_to_cart" method="POST">
      @csrf
      <input type="hidden" name="product_id" value="{{$item['id']}}">
      
      <button id="button" type="submit" class="lg:max-w-sm w-full px-6  text-lg text-white transition-all 
     duration-150 ease-linear rounded-lg shadow outline-none  bg-purple-600 hover:bg-pink-600 hover:shadow-lg focus:outline-none">Add to cart <i class="mdi mdi-cart-outline text-xl"></i>
   </button>
  

    </form>
    </div>
    
  </div>
  
</div>

 @endforeach

</div>


  

  

{{View::make('layouts.footer')}}
