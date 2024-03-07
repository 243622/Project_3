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
                'PizzaName' => 'Barbecue Chicken Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/BarbecueChicken.png',
                'PizzaIngrediënts_id' => '4'
            ],
            [
                'PizzaName' => 'Hawaii Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/HawaiiPizza.png',
                'PizzaIngrediënts_id' => '4'
            ],
            [
                'PizzaName' => 'Salami Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/SalamiPizza.png',
                'PizzaIngrediënts_id' => '4'
            ],
            [
                'PizzaName' => 'Tonijn Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/TonijnPizza.png',
                'PizzaIngrediënts_id' => '4'
            ],
            [
                'PizzaName' => 'Doner Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/doner.png',
                'PizzaIngrediënts_id' => '4'
            ],
            [
                'PizzaName' => 'Mixed BBQ Grill Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/BBQ_mixed_grill-.png',
                'PizzaIngrediënts_id' => '5'
            ],
            [
                'PizzaName' => 'Californian Veggie Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/californian_veggie.png',
                'PizzaIngrediënts_id' => '7'
            ],
            [
                'PizzaName' => 'Vierkaas Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/VierKaasPizza.png',
                'PizzaIngrediënts_id' => '1'
            ],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}
