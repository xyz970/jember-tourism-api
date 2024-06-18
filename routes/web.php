<?php

use App\Http\Controllers\ReviewController;
use App\Models\Review;
use App\Models\Wisata;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('map',function(){
    return view('map');
});
Route::prefix('wisata')->group(function(){
    Route::get('gunung-gambir',function(){
        $detail = Wisata::where('nama','=',"Gunung Gambir")->first();
        $review = Review::where('wisata_id','=',$detail->id)->get();
        return view('gambir',compact('detail','review'));
    });
    Route::get('watu-ulo',function(){
        $detail = Wisata::where('nama','=',"Pantai Watu Ulo")->first();
        $review = Review::where('wisata_id','=',$detail->id)->get();

        return view('watuulo',compact('detail','review'));
    });
    Route::get('papuma',function(){
        $detail = Wisata::where('nama','=',"Pantai Papuma")->first();
        $review = Review::where('wisata_id','=',$detail->id)->get();

        return view('papuma',compact('detail','review'));
    });
    Route::get('rembangan',function(){
        $detail = Wisata::where('nama','=',"Rembangan")->first();
        $review = Review::where('wisata_id','=',$detail->id)->get();

        return view('rembangan',compact('detail','review'));
    });
    Route::get('payangan',function(){
        $detail = Wisata::where('nama','=',"Pantai Payangan")->first();
        $review = Review::where('wisata_id','=',$detail->id)->get();

        return view('payangan',compact('detail','review'));
    });
});
Route::post('review/post',[ReviewController::class,'store'])->name('review-post');
