<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\NewProductAdd;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\SessionAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view("home","layouts/main");
Route::view("register","layouts/register");
Route::post("add",[Register::class,'register']);
Route::view("login","layouts/login");
Route::post("login",[Register::class,'login']);

Route::view("admin","layouts/sidebar");
Route::view("products","layouts/products_list");
Route::get("Delete/{id}",[NewProductAdd::class,'Delete']);
Route::get("Edit/{id}",[NewProductAdd::class,'Show_product_details']);
Route::post("/Update/{id}",[NewProductAdd::class,'Update_product_details']);

Route::post("add_product",[NewProductAdd::class,'add']);

Route::get("men_shirt",[NewProductAdd::class,'show']);
Route::get("women_kurta_suite",[NewProductAdd::class,'women_kurtas_suits']);
Route::get("women_ethnic_wear",[NewProductAdd::class,'women_ethnic_wear']);
Route::get("women_sarees",[NewProductAdd::class,'women_sarees']);
Route::get("women_skirts_palazzos",[NewProductAdd::class,'women_skirts_palazzos']);
Route::get("women_western_wear_dresses",[NewProductAdd::class,'women_western_wear_dresses']);
Route::get("women_jumpsuits",[NewProductAdd::class,'women_jumpsuits']);
Route::get("women_top",[NewProductAdd::class,'women_top']);
Route::get("women_jeans",[NewProductAdd::class,'women_jeans']);
Route::get("women_shorts_skirts",[NewProductAdd::class,'women_shorts_skirts']);
Route::get("women_flats",[NewProductAdd::class,'women_flats']);
Route::get("women_casual_shoes",[NewProductAdd::class,'women_casual_shoes']);
Route::get("women_heels",[NewProductAdd::class,'women_heels']);
Route::get("women_fashion_jewellery",[NewProductAdd::class,'women_fashion_jewellery']);
Route::get("women_fine_jewellery",[NewProductAdd::class,'women_fine_jewellery']);
Route::get("women_earrings",[NewProductAdd::class,'women_earrings']);


Route::get("men_t_shirt",[NewProductAdd::class,'men_t_shirt']);
Route::get("men_casual_shirt",[NewProductAdd::class,'men_casual_shirt']);
Route::get("men_formal_shirt",[NewProductAdd::class,'men_formal_shirt']);
Route::get("men_jeans",[NewProductAdd::class,'men_jeans']);
Route::get("men_casual_trousers",[NewProductAdd::class,'men_casual_trousers']);
Route::get("men_formal_trousers",[NewProductAdd::class,'men_formal_trousers']);
Route::get("men_casual_shoes",[NewProductAdd::class,'men_casual_shoes']);
Route::get("men_sports_shoes",[NewProductAdd::class,'men_sports_shoes']);
Route::get("men_formal_shoes",[NewProductAdd::class,'men_formal_shoes']);
Route::get("men_kurta_set",[NewProductAdd::class,'men_kurta_set']);
Route::get("men_sherwani",[NewProductAdd::class,'men_sherwani']);


Route::get("kids_boys_t_shirt",[NewProductAdd::class,'kids_boys_t_shirt']);
Route::get("kids_boys_shirts",[NewProductAdd::class,'kids_boys_shirts']);
Route::get("kids_boys_shorts",[NewProductAdd::class,'kids_boys_shorts']);
Route::get("kids_boys_jeans",[NewProductAdd::class,'kids_boys_jeans']);
Route::get("kids_boys_ethnic_wear",[NewProductAdd::class,'kids_boys_ethnic_wear']);
Route::get("kids_girls_dresses",[NewProductAdd::class,'kids_girls_dresses']);
Route::get("kids_girls_tops",[NewProductAdd::class,'kids_girls_tops']);
Route::get("kids_girls_t_shirts",[NewProductAdd::class,'kids_girls_t_shirts']);
Route::get("kids_girls_ethnic_wear",[NewProductAdd::class,'kids_girls_ethnic_wear']);
Route::get("kids_boys_casual_shoes",[NewProductAdd::class,'kids_boys_casual_shoes']);
Route::get("kids_boys_sports_shoes",[NewProductAdd::class,'kids_boys_sports_shoes']);
Route::get("kids_boys_sandals",[NewProductAdd::class,'kids_boys_sandals']);
Route::get("kids_girls_flats",[NewProductAdd::class,'kids_girls_flats']);
Route::get("kids_girls_casual_shoes",[NewProductAdd::class,'kids_girls_casual_shoes']);
Route::get("kids_girls_sports_shoes",[NewProductAdd::class,'kids_girls_sports_shoes']);
Route::get("kids_girls_heels",[NewProductAdd::class,'kids_girls_heels']);



Route::get("home_decor_clocks",[NewProductAdd::class,'home_decor_clocks']);
Route::get("home_decor_mirrors",[NewProductAdd::class,'home_decor_mirrors']);
Route::get("home_decor_wall_decor",[NewProductAdd::class,'home_decor_wall_decor']);
Route::get("home_decor_wall_shelves",[NewProductAdd::class,'home_decor_wall_shelves']);
Route::get("Lamps_Floor",[NewProductAdd::class,'Lamps_Floor']);
Route::get("Lamps_Table",[NewProductAdd::class,'Lamps_Table']);
Route::get("Lamps_Wall",[NewProductAdd::class,'Lamps_Wall']);
Route::get("Flooring_carpets",[NewProductAdd::class,'Flooring_carpets']);
Route::get("Flooring_floor_mats",[NewProductAdd::class,'Flooring_floor_mats']);
Route::get("Flooring_door_mats",[NewProductAdd::class,'Flooring_door_mats']);
Route::get("Beauty_Makeup_Lipstick",[NewProductAdd::class,'Beauty_Makeup_Lipstick']);
Route::get("Beauty_Makeup_Foundation",[NewProductAdd::class,'Beauty_Makeup_Foundation']);
Route::get("Beauty_Makeup_Kajal",[NewProductAdd::class,'Beauty_Makeup_Kajal']);
Route::get("Beauty_Haircare_Shampoo",[NewProductAdd::class,'Beauty_Haircare_Shampoo']);
Route::get("Beauty_Haircare_Haircream",[NewProductAdd::class,'Beauty_Haircare_Haircream']);
Route::get("Beauty_Haircare_Oil_Serums",[NewProductAdd::class,'Beauty_Haircare_Oil_Serums']);
Route::get("Beauty_Fragrances_Premium",[NewProductAdd::class,'Beauty_Fragrances_Premium']);
Route::get("Beauty_Fragrances_Perfume",[NewProductAdd::class,'Beauty_Fragrances_Perfume']);
Route::get("Beauty_Fragrances_Deodorants",[NewProductAdd::class,'Beauty_Fragrances_Deodorants']);

Route::get("products",[NewProductAdd::class,'show_products_admin']);




Route::post("add_to_cart",[NewProductAdd::class,'addToCart']);
Route::get("cartlist",[NewProductAdd::class,'cartList']);
Route::get("Removecartitem/{id}",[NewProductAdd::class,'RomoveCartItem']);
Route::get("ordernow",[NewProductAdd::class,'orderNow']);
Route::post("orderplace",[NewProductAdd::class,'orderPlace']);
Route::get("myorders",[NewProductAdd::class,'myOrders']);

Route::get("generatepdf/{id}", [NewProductAdd::class, 'generatePDF']);




Route::get('dropdown',[DropdownController::class, 'index']);
Route::get('getState',[DropdownController::class, 'getState'])->name('getState');
Route::get('getCity',[DropdownController::class, 'getCity'])->name('getCity');

Route::get('edit_product',[NewProductAdd::class, 'index']);



Route::view("login_session","login_session");
Route::post("login_session",[SessionAuth::class,'SessionLogin']);
