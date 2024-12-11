<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about',  [HomeController::class, 'about'])->name('home.about');

Route::get('/contact',  [HomeController::class, 'contact'])->name('home.contact');

Route::resource('bikes', BikeController::class);


/*
Route::get('/store', function () {
  // return view('welcome');
  $category = request('category');    // 이 페이지로 넘어온 데이터를 전부 받을 수 있다

  if (isset($category)) {
    return strip_tags($category) . '용 스토어 페이지를 보고 있습니다.';
  }

  return '스토어 페이지를 보고 있습니다.';
});
*/
Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
  // return view('welcome');

  if (isset($category)) {
    if (isset($item)) {
      return  '스토어 페이지에서 ' . $category . '내에서 ' . $item . '카테고리를 보고 있습니다.';
    }
    return '스토어 페이지에서 ' . $category . '카테고리를 보고 있습니다.';
  }

  return '스토어 페이지를 보고 있습니다.';
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
