<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite('resources/css/app.css')
</head>
<body class="">
<header class="flex border-4 border-amber-950 justify-around gap-3 items-center">
    <nav>
        <ul class="flex flex-row space-x-4">
            <li><a class="text-xl" href="">Homepage</a></li>
            <li><a class="text-xl" href="order">Order</a></li>
            <li><a class="text-xl" href="checkout">Chechout</a></li>
            <a class="w-24 space-x-2"><img src="/PizzaFotos/_09253db4-5f28-4da4-b255-46c05fda052b-removebg-preview.png"></a>
        </ul>
    </nav>
</header>

<div class="grid grid-cols-2 text-center border-green-800 justify-items-start gap-10 p-12 bg-green-300">
    <div class="justify-end">
        <p><img class="h-52" src="/PizzaFotos/TonijnPizza.png"></p>
        <h1>Tonijn Pizza</h1>
        <p>beschrijving m-28</p>
    </div>
    <div>
        <p><img class="h-52" src="/PizzaFotos/SalamiPizza.png"></p>
        <h1>Salami Pizza</h1>
        <p>beschrijving</p>
    </div>
    <div>
        <p><img class="h-52 w-56" src="/PizzaFotos/HawaiiPizza.png"></p>
        <h1>Hawaii Pizza</h1>
        <p>beschrijving</p>
    </div>
    <div>
        <p><img class="h-52" src="/PizzaFotos/BarbecueChicken.png"></p>
        <h1>Barbeque Chicken Pizza</h1>
        <p>beschrijving</p>
    </div>
</div>
</body>
</html>
