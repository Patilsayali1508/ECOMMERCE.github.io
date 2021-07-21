<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use PDF;
use Illuminate\Support\Facades\File;




class NewProductAdd extends Controller
{
    function add(Request $req)

    {

        $newImageName= time() .'-' .$req->product_name.'.' .$req->product_image->extension();

    	
        $test=$req->product_image->move(public_path('images'),$newImageName);
        

    	$ProductAdd = new Product;
    	$ProductAdd->product_name=$req->product_name;
    	$ProductAdd->product_category=$req->product_category;
     /* $ProductAdd->product_category=$req->product_category1; */     
        $ProductAdd->original_price=$req->original_price;
        $ProductAdd->discount_price=$req->discount_price;
        $ProductAdd->product_image=$newImageName;
        $ProductAdd->main_category=$req->main_category;
        $ProductAdd->sub_category=$req->sub_category;
/*        $ProductAdd->main_category=$req->main_category1;
        $ProductAdd->sub_category=$req->sub_category1;*/
        

        $ProductAdd->save();

        return redirect('/home');



    }

    function upload(Request $req)
    {
        


        $test=$req->file('file')->store('uploadimages');
       
        return ["result"=>$test];

        

    }

    function Delete($id){

         $data = Product::find($id);
         $data->delete();
         return redirect('products');



    }

    function Show_product_details($id){

         $data = Product::find($id);
         
         return view('layouts/edit_product',['data'=>$data]);



    }

    function Update_product_details(Request $req,$id){
        

        $data = Product::find($req->id);
        $data->original_price=$req->original_price;
        $data->discount_price=$req->discount_price;

  
        if($req->hasfile('product_image'))
        {
            $destination='images/'.$data->product_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
        $data->product_name=$req->product_name;
        $newImageName= time() .'-' .$req->product_name.'.' .$req->product_image->extension(); 
        $data->product_image=$newImageName;  
        $test=$req->product_image->move(public_path('images'),$newImageName);

            

        }
        
        $data->update();
        return redirect('admin');
    

    }

    public function index()
    {
        $countries = DB::table("countries")->pluck("name","id");
        return view('edit_product',compact('countries'));
    }

    public function getState(Request $request)
    {
        $states = DB::table("states")
        ->where("country_id",$request->country_id)
        ->pluck("name","id");
        return response()->json($states);
    }

    public function getCity(Request $request)
    {
        $cities = DB::table("cities")
        ->where("state_id",$request->state_id)
        ->pluck("name","id");
        return response()->json($cities);
    }


    function show(){

        $data = Product::where('sub_category',1)->get();

        return view('layouts/men_shirt',['products'=>$data]);

  
    }

    function women_kurtas_suits(){

        $data = Product::where('sub_category',12)->get();

        return view('layouts/women_kurta_suite',['products'=>$data]);

  
    }


    function women_ethnic_wear(){

        $data = Product::where('sub_category',13)->get();

        return view('layouts/women_kurta_suite',['products'=>$data]);

  
    }

    function women_sarees(){

        $data = Product::where('sub_category',14)->get();

        return view('layouts/women_sarees',['products'=>$data]);

  
    }

    function women_skirts_palazzos(){

        $data = Product::where('sub_category',15)->get();

        return view('layouts/women_skirts_palazzos',['products'=>$data]);

  
    }

    function women_western_wear_dresses(){

        $data = Product::where('sub_category',16)->get();

        return view('layouts/women_western_wear_dresses',['products'=>$data]);

  
    }
    function women_jumpsuits(){

        $data = Product::where('sub_category',17)->get();

        return view('layouts/women_jumpsuits',['products'=>$data]);

  
    }

    function women_top(){

        $data = Product::where('sub_category',18)->get();

        return view('layouts/women_top',['products'=>$data]);

  
    }

    function women_jeans(){

        $data = Product::where('sub_category',19)->get();

        return view('layouts/women_jeans',['products'=>$data]);

  
    }
    function women_shorts_skirts(){

        $data = Product::where('sub_category',20)->get();

        return view('layouts/women_shorts_skirts',['products'=>$data]);

  
    }
function women_flats(){

        $data = Product::where('sub_category',21)->get();

        return view('layouts/women_flats',['products'=>$data]);

  
    }

    function women_casual_shoes(){

        $data = Product::where('sub_category',22)->get();

        return view('layouts/women_casual_shoes',['products'=>$data]);

  
    }

function women_heels(){

        $data = Product::where('sub_category',23)->get();

        return view('layouts/women_heels',['products'=>$data]);

  
    }

    function women_fashion_jewellery(){

        $data = Product::where('sub_category',24)->get();

        return view('layouts/women_fashion_jewellery',['products'=>$data]);

  
    }

    function women_fine_jewellery(){

        $data = Product::where('sub_category',25)->get();

        return view('layouts/women_fine_jewellery',['products'=>$data]);

  
    }

    function women_earrings(){

        $data = Product::where('sub_category',26)->get();

        return view('layouts/women_earrings',['products'=>$data]);

  
    }

    function men_t_shirt(){

        $data = Product::where('sub_category',1)->get();

        return view('layouts/men_t_shirt',['products'=>$data]);

  
    }

    function men_casual_shirt(){

        $data = Product::where('sub_category',2)->get();

        return view('layouts/men_casual_shirt',['products'=>$data]);

  
    }

    function men_formal_shirt(){

        $data = Product::where('sub_category',3)->get();

        return view('layouts/men_formal_shirt',['products'=>$data]);

  
    }

    function men_jeans(){

        $data = Product::where('sub_category',4)->get();

        return view('layouts/men_jeans',['products'=>$data]);

  
    }

    function men_casual_trousers(){

        $data = Product::where('sub_category',5)->get();

        return view('layouts/men_casual_trousers',['products'=>$data]);

  
    }

    function men_formal_trousers(){

        $data = Product::where('sub_category',6)->get();

        return view('layouts/men_formal_trousers',['products'=>$data]);

  
    }

    function men_casual_shoes(){

        $data = Product::where('sub_category',7)->get();

        return view('layouts/men_casual_shoes',['products'=>$data]);

  
    }

    function men_sports_shoes(){

        $data = Product::where('sub_category',8)->get();

        return view('layouts/men_sports_shoes',['products'=>$data]);

  
    }

    function men_formal_shoes(){

        $data = Product::where('sub_category',9)->get();

        return view('layouts/men_formal_shoes',['products'=>$data]);

  
    }

    function men_kurta_set(){

        $data = Product::where('sub_category',10)->get();

        return view('layouts/men_kurta_set',['products'=>$data]);

  
    }

    function men_sherwani(){

        $data = Product::where('sub_category',11)->get();

        return view('layouts/men_sherwani',['products'=>$data]);

  
    }

    function kids_boys_t_shirt(){

        $data = Product::where('sub_category',27)->get();

        return view('layouts/kids_boys_t_shirt',['products'=>$data]);

  
    }

    function kids_boys_shirts(){

        $data = Product::where('sub_category',28)->get();

        return view('layouts/kids_boys_shirts',['products'=>$data]);

  
    }

    function kids_boys_shorts(){

        $data = Product::where('sub_category',29)->get();

        return view('layouts/kids_boys_shirts',['products'=>$data]);

  
    }

    function kids_boys_jeans(){

        $data = Product::where('sub_category',30)->get();

        return view('layouts/kids_boys_jeans',['products'=>$data]);

  
    }

    function kids_boys_ethnic_wear(){

        $data = Product::where('sub_category',31)->get();

        return view('layouts/kids_boys_ethnic_wear',['products'=>$data]);

  
    }

    function kids_girls_dresses(){

        $data = Product::where('sub_category',32)->get();

        return view('layouts/kids_girls_dresses',['products'=>$data]);

  
    }

    function kids_girls_tops(){

        $data = Product::where('sub_category',33)->get();

        return view('layouts/kids_girls_tops',['products'=>$data]);

  
    }

    function kids_girls_t_shirts(){

        $data = Product::where('sub_category',34)->get();

        return view('layouts/kids_girls_t_shirts',['products'=>$data]);

  
    }

    function kids_girls_ethnic_wear(){

        $data = Product::where('sub_category',35)->get();

        return view('layouts/kids_girls_ethnic_wear',['products'=>$data]);

  
    }

    function kids_boys_casual_shoes(){

        $data = Product::where('sub_category',36)->get();

        return view('layouts/kids_boys_casual_shoes',['products'=>$data]);

  
    }

    function kids_boys_sports_shoes(){

        $data = Product::where('sub_category',37)->get();

        return view('layouts/kids_boys_sports_shoes',['products'=>$data]);

  
    }

    

    function kids_boys_sandals(){

        $data = Product::where('sub_category',38)->get();

        return view('layouts/kids_boys_sandals',['products'=>$data]);

  
    }

    function kids_girls_flats(){

        $data = Product::where('sub_category',39)->get();

        return view('layouts/kids_girls_flats',['products'=>$data]);

  
    }

    function kids_girls_casual_shoes(){

        $data = Product::where('sub_category',40)->get();

        return view('layouts/kids_girls_casual_shoes',['products'=>$data]);

  
    }

    function kids_girls_sports_shoes(){

        $data = Product::where('sub_category',41)->get();

        return view('layouts/kids_girls_casual_shoes',['products'=>$data]);

  
    }

    function kids_girls_heels(){

        $data = Product::where('sub_category',42)->get();

        return view('layouts/kids_girls_heels',['products'=>$data]);

  
    }

    function home_decor_clocks(){

        $data = Product::where('sub_category',43)->get();

        return view('layouts/home_decor_clocks',['products'=>$data]);

  
    }

    function home_decor_mirrors(){

        $data = Product::where('sub_category',44)->get();

        return view('layouts/home_decor_mirrors',['products'=>$data]);

  
    }

    function home_decor_wall_decor(){

        $data = Product::where('sub_category',45)->get();

        return view('layouts/home_decor_wall_decor',['products'=>$data]);

  
    }

    function home_decor_wall_shelves(){

        $data = Product::where('sub_category',46)->get();

        return view('layouts/home_decor_wall_shelves',['products'=>$data]);

  
    }

    function Lamps_Floor(){

        $data = Product::where('sub_category',47)->get();

        return view('layouts/Lamps_Floor',['products'=>$data]);

  
    }

    function Lamps_Table(){

        $data = Product::where('sub_category',48)->get();

        return view('layouts/Lamps_Table',['products'=>$data]);

  
    }

function Lamps_Wall(){

        $data = Product::where('sub_category',49)->get();

        return view('layouts/Lamps_Wall',['products'=>$data]);

  
    }


function Flooring_carpets(){

        $data = Product::where('sub_category',50)->get();

        return view('layouts/Flooring_carpets',['products'=>$data]);

  
    }

function Flooring_floor_mats(){

        $data = Product::where('sub_category',51)->get();

        return view('layouts/Flooring_floor_mats',['products'=>$data]);

  
    }

function Flooring_door_mats(){

        $data = Product::where('sub_category',52)->get();

        return view('layouts/Flooring_door_mats',['products'=>$data]);

  
    }

function Beauty_Makeup_Lipstick(){

        $data = Product::where('sub_category',53)->get();

        return view('layouts/Beauty_Makeup_Lipstick',['products'=>$data]);

  
    }

function Beauty_Makeup_Foundation(){

        $data = Product::where('sub_category',54)->get();

        return view('layouts/Beauty_Makeup_Foundation',['products'=>$data]);

  
    }

function Beauty_Makeup_Kajal(){

        $data = Product::where('sub_category',55)->get();

        return view('layouts/Beauty_Makeup_Kajal',['products'=>$data]);

  
    }

function Beauty_Haircare_Shampoo(){

        $data = Product::where('sub_category',56)->get();

        return view('layouts/Beauty_Haircare_Shampoo',['products'=>$data]);

  
    }

    function Beauty_Haircare_Haircream(){

        $data = Product::where('sub_category',57)->get();

        return view('layouts/Beauty_Haircare_Shampoo',['products'=>$data]);

  
    }

    function Beauty_Haircare_Oil_Serums(){

        $data = Product::where('sub_category',58)->get();

        return view('layouts/Beauty_Haircare_Oil_Serums',['products'=>$data]);

  
    }

    function Beauty_Fragrances_Premium(){

        $data = Product::where('sub_category',59)->get();

        return view('layouts/Beauty_Fragrances_Premium',['products'=>$data]);

  
    }

    function Beauty_Fragrances_Perfume(){

        $data = Product::where('sub_category',60)->get();

        return view('layouts/Beauty_Fragrances_Perfume',['products'=>$data]);

  
    }

    function Beauty_Fragrances_Deodorants(){

        $data = Product::where('sub_category',61)->get();

        return view('layouts/Beauty_Fragrances_Deodorants',['products'=>$data]);

  
    }

    function show_products_admin(){

        $data = Product::paginate(10);

        return view('layouts/products_list',['products'=>$data]);

  
    }

    function addToCart(Request $req){

        
        if($req->session()->has('user'))
        {
    

          $cart = new Cart;
          $cart->user_id=$req->session()->get('user')['id'];
          $cart->product_id=$req->product_id;      
          $cart->save();
          return redirect("home");
        


        }
        else {
            return redirect("login");
        }


}

static function cartItem()
    {

        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
        return redirect("home");

    }

    function cartList(){
        $userId=Session::get('user')['id'];

      $products=DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->where('cart.user_id',$userId)
      ->select('products.*')
      ->get();

      return view('layouts/cartlist',['data'=>$products]);


    }

   /* function RomoveCartItem($id){

        $data = Cart::find($id);
        $data->delete();
        return redirect('home');



   }
*/
public function RomoveCartItem($id) {
    try {
      $data = Cart::where('product_id',$id)->first();
    } catch (ModelNotFoundException $e) {
      return redirect('home');
    }
  
    $data->delete();
  
    return redirect('home');
  } 

  function orderNow()
  {

    $userId=Session::get('user')['id'];

       $total=DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->where('cart.user_id',$userId)
      ->sum('products.discount_price');
      

      return view('layouts/ordernow',['total'=>$total]);

      
  }

  function orderPlace(Request $req){
    $userId=Session::get('user')['id'];
      $allcart=Cart::where('user_id',$userId)->get();

     foreach ($allcart as $cart)
     {
         $order = new Order;
         $order->product_id= $cart['product_id'];
         $order->user_id= $cart['user_id'];
         $order->status="pending";
         $order->payment_method=$req->payment;
         $order->payment_status="pending";
         $order->address=$req->address;
         $order->save();
         Cart::where('user_id',$userId)->delete();


     }
     return redirect('home');
     }

     function myOrders()
     
     {

        $userId=Session::get('user')['id'];
        $data=DB::table('orders')
      ->join('products','orders.product_id','=','products.id')
      ->where('orders.user_id',$userId)
      ->get();
      return view('layouts/myorders',['data'=>$data]);


     }

     function generatePDF($id)
     {
        

        $data = Product::where('id',$id)->get();
        $pdf = PDF::loadView('layouts/pdf',['data'=>$data]);
        return $pdf->download('productdetails.pdf');

     }
     
     
  


}
