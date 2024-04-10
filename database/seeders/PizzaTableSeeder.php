<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = [
            [
                'pizzaName' => 'Barbecue Chicken Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/BarbecueChicken.png',
                'pizzaIngredients' => 'tomatensaus, chicken, paprika, onions, bbq sauce'
            ],
            [
                'pizzaName' => 'Hawaii Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/HawaiiPizza.png',
                'pizzaIngredients' => 'tomatensaus, cheese, ham, pineapple'
            ],
            [
                'pizzaName' => 'Salami Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/SalamiPizza.png',
                'pizzaIngredients' => 'tomatensaus, salami, mozzarella'
            ],
            [
                'pizzaName' => 'Tonijn Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/TonijnPizza.png',
                'pizzaIngredients' => 'tomatensaus, green olives, red onion'
            ],
            [
                'pizzaName' => 'Doner Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/doner.png',
                'pizzaIngredients' => 'tomatensaus, red onion, donër (halal)'
            ],
            [
                'pizzaName' => 'Mixed BBQ Grill Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/BBQ_mixed_grill-.png',
                'pizzaIngredients' => 'tomatensaus, mozzarella, red onion, paprika, peperoni, chicken'
            ],
            [
                'pizzaName' => 'Californian Veggie Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/californian_veggie.png',
                'pizzaIngredients' => 'tomatensaus, mozzeralla, red onion, paprika, champignon, olives'
            ],
            [
                'pizzaName' => 'Vierkaas Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/VierKaasPizza.png',
                'pizzaIngredients' => 'tomatensaus, créme fresh, mozzarella, cheddar, golden cheese, gorgonzola'
            ],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}
