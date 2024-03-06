<?php
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MPizzaController;
use App\Http\Controllers\MItemsController;
use App\Http\Controllers\MIngredientsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return ('Dashboard');
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
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/crudmedewerkers', function () {
    return view('crudmedewerkers');
});

Route::resource('/crudmedewerkers/pizza', MPizzaController::class);
Route::resource('/crudmedewerkers/items', MItemsController::class);
Route::resource('/crudmedewerkers/ingredients', MIngredientsController::class);


//Route::get('/crudmedewerkers/pizza', [MPizzaController::class, 'index'])->name('pizza.index');
//Route::get('/crudmedewerkers/pizza/create', [MPizzaController::class, 'create'])->name('pizza.create');
//Route::get('/crudmedewerkers/pizza/{idnummer}', [MPizzaController::class, 'show'])->name('pizza.show');
//Route::delete('/crudmedewerkers/pizza/{idnummer}', [MPizzaController::class, 'destroy'])->name('pizza.destroy');
//Route::put('/crudmedewerkers/pizza/{idnummer}', [MPizzaController::class, 'update'])->name('pizza.update');
//Route::get('/crudmedewerkers/pizza/{idnummer}/edit', [MPizzaController::class, 'edit'])->name('pizza.edit');
//Route::post('/crudmedewerkers/pizza', [MPizzaController::class, 'store'])->name('pizza.store');



//Route::get('/crudmedewerkers/items', [MItemsController::class, 'index'])->name('items.index');
//Route::get('/crudmedewerkers/items/create', [MItemsController::class, 'create'])->name('items.create');
//oute::get('/crudmedewerkers/items/{idnummer}', [MItemsController::class, 'show'])->name('items.show');
//Route::delete('/crudmedewerkers/items/{idnummer}', [MItemsController::class, 'destroy'])->name('items.destroy');
//Route::put('/crudmedewerkers/items/{idnummer}', [MItemsController::class, 'update'])->name('items.update');
//Route::get('/crudmedewerkers/items/{idnummer}/edit', [MItemsController::class, 'edit'])->name('items.edit');
//Route::post('/crudmedewerkers/items', [MItemsController::class, 'store'])->name('items.store');




//Route::get('/crudmedewerkers/ingredients', [MIngredientsController::class, 'index'])->name('ingredients.index');
//Route::get('/crudmedewerkers/ingredients/create', [MIngredientsController::class, 'create'])->name('ingredients.create');
//Route::get('/crudmedewerkers/ingredients/{idnummer}', [MIngredientsController::class, 'show'])->name('ingredients.show');
//Route::delete('/crudmedewerkers/ingredients/{idnummer}', [MIngredientsController::class, 'destroy'])->name('ingredients.destroy');
//Route::put('/crudmedewerkers/ingredients/{idnummer}', [MIngredientsController::class, 'update'])->name('ingredients.update');
//Route::get('/crudmedewerkers/ingredients/{idnummer}/edit', [MIngredientsController::class, 'edit'])->name('ingredients.edit');
//Route::post('/crudmedewerkers/ingredients', [MIngredientsController::class, 'store'])->name('ingredients.store');
