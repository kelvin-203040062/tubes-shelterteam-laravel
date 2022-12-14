<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductController;
use App\Models\Category;


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
    return view('home', [
        "title" => "Home",
        "active" => 'home',

        'slider' => 'Welcome to .conf Shoes Store',
        'slider2' => 'Happy Shopping!',

        'img' => '122.jpg',
        'img2' => '14.png',
        'img3' => '15.jpg',

        'img4' => 'Adidas.jpg',
        'tit' => 'Adidas',
        'img5' => 'Nike.jpg',
        'tit2' => 'Nike',
        'img6' => 'Puma.jpg',
        'tit3' => 'Puma',
        'button' => 'Explore',

        'contact' => 'Contact Us',
        'loc' => 'Location',
        'storename' => '.CONF Shoes Store',
        'addr' => 'Jl. Baleendah Kab. Bandung Selatan No.92',

        'css' => 'home.css'

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us",
        "active" => 'about',

        'storename' => '.CONF Shoes Store',
        'team' => 'Shelter Team',

        'about' => '.conf adalah sebuah website yang menyediakan berbagai macam jenis sepatu mulai dari Adidas, Nike sampai Puma, kami menjual sepatu yang berkualitas dn nyaman saat digunakan. Beberapa keungulan dari sepatu yang kami jual adalah :',
        'one' => '- Harga Terjangkau',
        'two' => '- Kualitas Terbaik',
        'three' => '- Bervariatif',
        'about2' => '.conf memberikan harga tetap terjangkau tanpa mengurangi kualitas produknya. Kami bertujuan untuk menciptakan seni dalam bentuk sepatu. Kami percaya bahwa setiap pasangan adalah ekspresi yang tidak dapat disalin atau dibuat ulang. Kami ingin berbagi berbagai bentuk seni yang mewakili ANDA.',

        'product' => 'Aneka produk sepatu yang kami sediakan.',
        'product2' => 'Selain harga yang terjangkau dan kualitas yang baik, .conf memiliki banyak pilihan jenis dan model sehingga Anda mungkin tidak akan bosan.',
        'product3' => 'Adidas',
        'product4' => 'Nike',
        'product5' => 'Puma',

        "name" => 'Hervin Fakhrul',
        'job' => 'Back End',
        'image' => 'hervin.jpeg',
        'quote' => 'Saya tidak menyangka dengan harga semurah itu saya bisa mendapatkan sepatu original dengan kualitas sebagus ini, top 10 bintang untuk penjualnya.',

        "name2" => 'Kelvin Ardiansyah',
        'job2' => 'Team Leader',
        'image2' => 'kelvin.jpeg',
        'quote2' => 'Wah barangnya bagus banget, nyaman dipakai, ga nyesel belanja disini, terpercaya banget, harga juga terjangkau, penjualnya juga ramah, chat langsung dibalas.',

        "name3" => 'Rizky Mahendra',
        'job3' => 'Back End',
        'image3' => 'mahendra.jpeg',
        'quote3' => 'Sangat cantik. Ukurannya juga sempurna. Sepertinya kualitas ini akan bertahan sangat lama. Terima kasih!',

        "name4" => 'Yulius Yogi Yuwono',
        'job4' => 'Front End',
        'image4' => 'yulius.jpeg',
        'quote4' => 'Pengirimannya cepat, beli produk disini sangat berbaloi, harga terjangkau, adminnya responsif banget, recommended banget belanja di toko ini.',

        "name5" => 'Religi Realista Esthetika',
        'job5' => 'Front End',
        'image5' => 'religi.jpeg',
        'quote5' => 'Keracunan temen yang membeli produk ini karena pas sampai barangnya bagus jadi langsung checkout, tidak mengecewakan. Sangat direkomendasikan.',

        'css' => 'home.css',
        'css2' =>'about.css'

    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Product Categories',
        'active' => 'categories',

        'home' => 'Kategori Kami',
        'par1' => 'Saat memilih alas kaki, pastikan kamu menyesuaikannya dengan jenis acara dan kemana kamu akan pergi. Memilih sepatu yang tepat akan mempercantik penampilan dan menambah rasa percaya diri.',
        'button' => 'Selengkapnya',
        'categories' =>Category::all()
    ]);
});

Route::get('/cart', function () {
    return view('cart', [
        'title' => 'Cart',
        'active' => 'cart'

    ]);
});

// All Product
Route::get('/product', [ProductController::class, 'index']);
// Single Product
Route::get('/products/{product:slug}', [ProductController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' =>'Dashboard',
        'css' => 'dashboard.css',
        'js' => 'dashboard.js',
        'tcss' => 'trix.css',
        'tjs' => 'trix.js'
        ]);
})->middleware('auth');

Route::get('/dashboard/products/checkSlug', [DashboardProductController::class, 'checkSlug']) ->middleware('auth');
Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');

Route::resource('/dashboard/categories', \App\Http\Controllers\AdminCategoryController::class)->except('show')->middleware('admin');
//Route::get('/cart,{$id}', [ProductController::class, 'cart']) ->middleware('auth');
