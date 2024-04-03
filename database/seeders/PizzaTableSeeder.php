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
                'pizzaIngrediënts_id' => '4'
            ],
            [
                'pizzaName' => 'Hawaii Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/HawaiiPizza.png',
                'pizzaIngrediënts_id' => '4'
            ],
            [
                'pizzaName' => 'Salami Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/SalamiPizza.png',
                'pizzaIngrediënts_id' => '4'
            ],
            [
                'pizzaName' => 'Tonijn Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/TonijnPizza.png',
                'pizzaIngrediënts_id' => '4'
            ],
            [
                'pizzaName' => 'Doner Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/doner.png',
                'pizzaIngrediënts_id' => '4'
            ],
            [
                'pizzaName' => 'Mixed BBQ Grill Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/BBQ_mixed_grill-.png',
                'pizzaIngrediënts_id' => '5'
            ],
            [
                'pizzaName' => 'Californian Veggie Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/californian_veggie.png',
                'pizzaIngrediënts_id' => '7'
            ],
            [
                'pizzaName' => 'Vierkaas Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/VierKaasPizza.png',
                'pizzaIngrediënts_id' => '1'
            ],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}
