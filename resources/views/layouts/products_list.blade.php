@include('layouts.sidebar')

<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}"> 
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
</style>

<div class="table w-full pl-72 pt-10 p-2 table-auto">
    <h1 class="text-center font-serif  text-4xl font-bold text-xl uppercase px-24  text-base leading-6 text-purple-600  sm:leading-7">Update Product Details</h1>
    <br><br>
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-800 border-b text-white border-gray-200">
                   <!--  <th class="border-r p-2">
                        <input type="checkbox">
                    </th> -->
                    <th class="p-1 border-r cursor-pointer text-sm font-serif text-white">
                        <div class="flex items-center justify-center">
                            Sr.No
                          
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-serif text-white">
                        <div class="flex items-center justify-center">
                            Product Name
                        
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-serif text-white">
                        <div class="flex items-center justify-center">
                            Orginal Price
                          
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-serif text-white">
                        <div class="flex items-center justify-center">
                            Discount Price
                    
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-serif text-white">
                        <div class="flex items-center justify-center">
                            Product image
                     
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-serif text-white">
                        <div class="flex items-center justify-center">
                            Action
                     
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
           
                @foreach($products as $item)
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                   <!--  <td class="p-2 border-r">
                        <input type="checkbox">
                    </td> -->
                    <td class="p-2 border-r">{{$item['id']}}</td>
                    <td class="p-2 border-r">{{$item['product_name']}}</td>
                    <td class="p-2 border-r">{{$item['original_price']}}</td>
                    <td class="p-2 border-r">{{$item['discount_price']}}</td>
                    <td class="p-2 border-r"><img src="{{asset('images/'.$item['product_image'])}}" class="fill zoom_01" name="product_image" width="40" height="30">
                        </td>
                    

                    <!--   <button id="button" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-purple-600 hover:bg-pink-600 hover:shadow-lg focus:outline-none">Add Product</button> -->
                    <td>
                        <a href={{"Edit/".$item['id']}} class="text-lg  px-4 py-1 text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-pink-600 hover:bg-purple-600 hover:shadow-lg focus:outline-none"><i class="mdi mdi-pencil-outline text-xl"></i>Edit</a>
                        <a href={{"Delete/".$item['id']}} onclick="return confirm('Are you sure?')" class="text-lg px-4 py-1 text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-purple-600 hover:bg-pink-600 hover:shadow-lg focus:outline-none"><i class="mdi mdi-delete-outline text-xl"></i>Remove</a>
                        <a href={{"generatepdf/".$item['id']}} class="text-lg  px-4 py-1 text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none  bg-blue-400 hover:bg-purple-600 hover:shadow-lg focus:outline-none"><i class="mdi mdi-file-outline text-xl"></i> PDF</a>
                    </td>
                </tr>

                    @endforeach
               
             
            </tbody>
        </table>

        <span>{{$products->links()}}</span>
    </div>
<style>
	.w-5 {
		display: none;
	}
</style>
