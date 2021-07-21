@include('layouts.sidebar')


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


<div class="min-h-screen  bg-purple-100  flex flex-col justify-center  ml-64 sm:py-12">
  <div class="relative py-2 sm:max-w-xl sm:mx-auto">
    <div class="absolute inset-0 bg-gradient-to-r from-pink-400 to-purple-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
    <div class="relative px-2 py-6 bg-white shadow-lg sm:rounded-3xl sm:p-20">
      <div class="max-w-md mx-auto">
         <div class="flex flex-row">

        </div>
         <h2 class="font-serif  font-bold text-xl uppercase px-24  text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">Add New Product</h2>

         <form method="POST" action="add_product" enctype="multipart/form-data">

          @csrf
        <div class="relative z-0 w-full mb-4">
        <input type="text" name="product_name" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Product Name</label>
        <span class="text-sm text-red-600 hidden" id="error">Email is required</span>
        </div>

       <!--  <div class="relative z-0 w-full mb-4">
        <input type="text" name="product_category" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Product Category</label>
        <span class="text-sm text-red-600 hidden" id="error">Password is required</span>
        </div> -->


      <div class="relative z-0 w-full mb-4">

  
    <div class="flex items-center py-2">
      <label for="country" class="text-gray-500">Product Category:</label>
    <select id="country" name="product_category" class="font-semibold rounded-lg block text-gray-500">
        <option value="" selected disabled>Product Category</option>
         @foreach($countries as $key => $country)
         <option value="{{$key}}">{{$country}}</option>
         @endforeach
         </select>

    </div>

    </div>

    <div class="relative z-0 w-full mb-4">

    <div class="flex items-center py-2">
      <label for="state" class="text-gray-500">Main Category:</label>
      <select name="main_category" id="state" class="font-semibold rounded-lg block text-gray-500"></select>
    </div>
  </div>

  <div class="relative z-0 w-full mb-4">

  <div class=" flex items-center py-2">
      <label for="city" class="text-gray-500">Sub Category:</label>
      <select name="sub_category" id="city" class="font-semibold rounded-lg block text-gray-500"></select>
    </div>
  </div>


                






        <div class="relative z-0 w-full mb-4">
        <input type="name" name="original_price" placeholder=" " class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Original Price</label>
        <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
        </div>


        <div class="relative z-0 w-full mb-4">
        <input type="name" name="discount_price" placeholder=" " class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Discount Price</label>
        <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
        </div>

        <div class="relative z-0 w-full mb-4">
        <input type="file" name="product_image" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple border-gray-200"/>
        <!-- <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Product Image</label> -->
        <span class="text-sm text-red-600 hidden" id="error">Mobile is required</span>
        </div>

        <button id="button" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-purple-600 hover:bg-pink-600 hover:shadow-lg focus:outline-none">Add Product</button>

        </form>



        
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

  <script src= "{{asset('js/jquery_min.js')}}"></script>
  <script src="{{asset('js/jquery.elevatezoom.js')}}"></script>

<script type=text/javascript>
  $('select[name="product_category"]').change(function(){

/*  var countryID = $('#country option:selected').data('countryID');*/

 var countryID = $(this).val(); 
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('getState')}}?country_id="+countryID,
      success:function(res){        
      if(res){
        $('select[name="main_category"]').empty();
        $('select[name="main_category"]').append('<option>Select Main Category</option>');
        $.each(res,function(key,value){
          $('select[name="main_category"]').
          append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $('select[name="main_category"]').empty();
      }
      }
    });
  }else{
    $('select[name="main_category"]').empty();
    $('select[name="sub_category"]').empty();
  }   
  });
  $('select[name="main_category"]').on('change',function(){
  var stateID = $(this).val();  
  if(stateID){
    $.ajax({
      type:"GET",
      url:"{{url('getCity')}}?state_id="+stateID,
      success:function(res){        
      if(res){
        $('select[name="sub_category"]').empty();
    $('select[name="sub_category"]').append('<option>Select Sub Category</option>');
        $.each(res,function(key,value){
          $('select[name="sub_category"]').append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $('select[name="sub_category"]').empty();
      }
      }
    });
  }else{
    $('select[name="sub_category"]').empty();
  }
    
  });
</script>

