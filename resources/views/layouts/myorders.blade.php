{{View::make('layouts.header')}}

<style>
  @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
</style>


<!--<a href="/ordernow"  class="text-lg px-4 pr-6 ml-12 py-1 text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-purple-600 hover:bg-pink-600 hover:shadow-lg focus:outline-none"><i class="mdi mdi-shopping"></i>Order Now</a>
-->
<br><br>
<div class="grid lg:grid-cols-4 sm:grid sm:grid-cols-1  lg:pt-0  md:-mx-4 px-18 max-w-screen-2xl ml-48 pl-12">

@foreach($data as $item)



<!--      <div class="w-full mb-2 md:w-1/2 md:mx-4 border  shadow-lg"> -->
   <div class="w-full  mb-4 md:w-1/2 md:mx-4 border  shadow-lg">

  <a href="#" class="mb-4">
            <img class="w-full fill h-56 zoom_01" src="{{asset('images/'.$item->product_image)}}">
        </a>
  <div class="px-6">
    <div class="font-bold text-xl">{{$item->product_name}}
 </div>
   <!--  <p class="text-grey-darker text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p> -->
  </div>
  <div class="px-0 py-0">
    <span class="inline-block line-through   bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">Original Price:Rs.{{$item->original_price}}</span>
    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">Discount Price:Rs.{{$item->discount_price}}</span>
   <!--  <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span> -->
  </div>
  <div class="px-4 mb-4">
   <!-- <form action="add_to_cart" method="POST">-->
      
      <input type="hidden" name="id" value="{{$item->id}}">
      
         <!--</form>-->
    
  </div>
</div>

 @endforeach

</div>

  

{{View::make('layouts.footer')}}
