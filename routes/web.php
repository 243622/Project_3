<?php

use App\Http\Controllers\MedewerkerIngredients;
use App\Http\Controllers\MedewerkerPizza;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedewerkerController;
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

Route::get('/crudmedewerkers/pizza', [MedewerkerPizza::class, 'index'])->name('pizza.index');
Route::get('/crudmedewerkers/pizza/create', [MedewerkerPizza::class, 'create'])->name('pizza.create');
Route::get('/crudmedewerkers/pizza/{idnummer}', [MedewerkerPizza::class, 'show'])->name('pizza.show');
Route::delete('/crudmedewerkers/pizza/{idnummer}', [MedewerkerPizza::class, 'destroy'])->name('pizza.destroy');
Route::put('/crudmedewerkers/pizza/{idnummer}', [MedewerkerPizza::class, 'update'])->name('pizza.update');
Route::get('/crudmedewerkers/pizza/{idnummer}/edit', [MedewerkerPizza::class, 'edit'])->name('pizza.edit');
Route::post('/crudmedewerkers/pizza', [MedewerkerPizza::class, 'store'])->name('pizza.store');

Route::get('/crudmedewerkers/items', [MedewerkerController::class, 'index'])->name('items.index');
Route::get('/crudmedewerkers/items/create', [MedewerkerController::class, 'create'])->name('items.create');
Route::get('/crudmedewerkers/items/{idnummer}', [MedewerkerController::class, 'show'])->name('items.show');
Route::delete('/crudmedewerkers/items/{idnummer}', [MedewerkerController::class, 'destroy'])->name('items.destroy');
Route::put('/crudmedewerkers/items/{idnummer}', [MedewerkerController::class, 'update'])->name('items.update');
Route::get('/crudmedewerkers/items/{idnummer}/edit', [MedewerkerController::class, 'edit'])->name('items.edit');
Route::post('/crudmedewerkers/items', [MedewerkerController::class, 'store'])->name('items.store');

Route::get('/crudmedewerkers/ingredients', [MedewerkerIngredients::class, 'index'])->name('ingredients.index');
Route::get('/crudmedewerkers/ingredients/create', [MedewerkerIngredients::class, 'create'])->name('ingredients.create');
Route::get('/crudmedewerkers/ingredients/{idnummer}', [MedewerkerIngredients::class, 'show'])->name('ingredients.show');
Route::delete('/crudmedewerkers/ingredients/{idnummer}', [MedewerkerIngredients::class, 'destroy'])->name('ingredients.destroy');
Route::put('/crudmedewerkers/ingredients/{idnummer}', [MedewerkerIngredients::class, 'update'])->name('ingredients.update');
Route::get('/crudmedewerkers/ingredients/{idnummer}/edit', [MedewerkerIngredients::class, 'edit'])->name('ingredients.edit');
Route::post('/crudmedewerkers/ingredients', [MedewerkerIngredients::class, 'store'])->name('ingredients.store');
