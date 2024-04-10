<?php
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MPizzaController;
use App\Http\Controllers\MUnitController;
use App\Http\Controllers\MIngredientController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

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

Route::get('/log', function () {
    return view ('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/order',[PizzaController::class, 'index'])->name('pizzas.index');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/checkout/create', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/crudmedewerkers', function () {
    return view('crudmedewerkers');
})->name('crudmedewerkers.index');

Route::resource('/crudmedewerkers/pizza', MPizzaController::class);
//Route::resource('/crudmedewerkers/item', MUnitController::class);
Route::resource('/crudmedewerkers/ingredient', MIngredientController::class);


//Route::get('/crudmedewerkers/pizza', [MPizzaController::class, 'index'])->name('pizza.index');
//Route::get('/crudmedewerkers/pizza/create', [MPizzaController::class, 'create'])->name('pizza.create');
//Route::get('/crudmedewerkers/pizza/{idnummer}', [MPizzaController::class, 'show'])->name('pizza.show');
//Route::delete('/crudmedewerkers/pizza/{idnummer}', [MPizzaController::class, 'destroy'])->name('pizza.destroy');
//Route::put('/crudmedewerkers/pizza/{idnummer}', [MPizzaController::class, 'update'])->name('pizza.update');
//Route::get('/crudmedewerkers/pizza/{idnummer}/edit', [MPizzaController::class, 'edit'])->name('pizza.edit');
//Route::post('/crudmedewerkers/pizza', [MPizzaController::class, 'store'])->name('pizza.store');



//Route::get('/crudmedewerkers/item', [MItemsController::class, 'index'])->name('item.index');
//Route::get('/crudmedewerkers/item/create', [MItemsController::class, 'create'])->name('item.create');
//oute::get('/crudmedewerkers/item/{idnummer}', [MItemsController::class, 'show'])->name('item.show');
//Route::delete('/crudmedewerkers/item/{idnummer}', [MItemsController::class, 'destroy'])->name('item.destroy');
//Route::put('/crudmedewerkers/item/{idnummer}', [MItemsController::class, 'update'])->name('item.update');
//Route::get('/crudmedewerkers/item/{idnummer}/edit', [MItemsController::class, 'edit'])->name('item.edit');
//Route::post('/crudmedewerkers/item', [MItemsController::class, 'store'])->name('item.store');




//Route::get('/crudmedewerkers/ingredient', [MIngredientsController::class, 'index'])->name('ingredient.index');
//Route::get('/crudmedewerkers/ingredient/create', [MIngredientsController::class, 'create'])->name('ingredient.create');
//Route::get('/crudmedewerkers/ingredient/{idnummer}', [MIngredientsController::class, 'show'])->name('ingredient.show');
//Route::delete('/crudmedewerkers/ingredient/{idnummer}', [MIngredientsController::class, 'destroy'])->name('ingredient.destroy');
//Route::put('/crudmedewerkers/ingredient/{idnummer}', [MIngredientsController::class, 'update'])->name('ingredient.update');
//Route::get('/crudmedewerkers/ingredient/{idnummer}/edit', [MIngredientsController::class, 'edit'])->name('ingredient.edit');
//Route::post('/crudmedewerkers/ingredient', [MIngredientsController::class, 'store'])->name('ingredient.store');

route::get('admin/dashboard', [StaffController::class, 'index'])->middleware('admin');

Route::get('admin/{order}', [StaffController::class, 'show'])->name('orders.show')->middleware('admin');
