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
                'PizzaIngrediënts' => 'Chicken, barbecue sauce, onions, cheese'
            ],
            [
                'PizzaName' => 'Hawaii Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/HawaiiPizza.png',
                'PizzaIngrediënts' => 'Ham, pineapple, cheese, tomato sauce'
            ],
            [
                'PizzaName' => 'Salami Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/SalamiPizza.png',
                'PizzaIngrediënts' => 'Salami, cheese, mushrooms, tomato sauce'
            ],
            [
                'PizzaName' => 'Tonijn Pizza',
                'PizzaPrice' => 10.99,
                'PizzaImage' => 'PizzaFotos/TonijnPizza.png',
                'PizzaIngrediënts' => 'Tuna, onions, olives, cheese, tomato sauce'
            ],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}
