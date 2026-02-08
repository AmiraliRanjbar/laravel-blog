<?php
//مسیر روت ها
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\UserController;
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
//روت اصلی
Route::get('/', function () {
    return view('welcome');
});
//حالت های مختاف روت
//get
//post
//math
//any


//روت داینامیک
//Route::get('/article/{id?}/{slog}', function ($id, $slog) {
////    return "article id is : $id";
//    echo "atricle id is $id and slug is $slog";
//})->name('article');
//
//
//Route::get('/api' , function () {
//    return "API Page";
//});



//روت های پروژه
//Route::prefix('admin')->as('admin.')->group( function () {
//    Route::get('/atricles', function () {
//        echo  "Atricles";
//    })->name('create');
//
//    Route::post('/create_atricles', function () {
//        echo  "Create atricles";
//    });
//
//    Route::get('/edit_atricles/{id}', function (){
//        echo  "edit atricles";
//    });
//
//    Route::put('/update_atricles/{id}', function () {
//        echo  "updated atricles";
//    });
//});



//Controller Route
//Route::get('/',[\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('name');


//Route CRUD
//Route::group(['prefix' => 'admin'], function () {
//    Route::get('/articles', [\App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('articles');
//
//    Route::post('/create-articles', [\App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('create-articles');
//
//    Route::get('/edit-article/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('edit-articles');
//
//    Route::put('/update-article/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('update-articles');
//
//    Route::delete('/delete-article/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'delete'])->name('delete-articles');
//
//    Route::resource('/categories', \App\Http\Controllers\Admin\CategoryController::class);
//});


//
//Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
//Route::get('/articles', [\App\Http\Controllers\Frontend\ArticleController::class , 'index'])->name('articles');
//Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');


//CRUD Project
Route::prefix('admin')->group(function () {
    Route::get('/', PanelController::class)->name('admin.panel');
    Route::get('/user', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/deleted_user', [UserController::class, 'deletedUsers'])->name('admin.users.deleted');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

    Route::put('/user/restore/{id}', [UserController::class, 'restoreUser'])->name('admin.user.restore');
    Route::delete('/user/hard_delete/{id}', [UserController::class, 'hardDeleteUser'])->name('admin.user.hard_delete');
});





