<style>
    header{
        background-color: #333;
    }
    body{
        color: #fff;
    }
    h1{
        color: black;
    }
    p{

        color: #333;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite('resources/css/app.css')
</head>
<body class="">
<header class="flex justify-around gap-3 items-center">
    <nav>
        <ul class="flex flex-row space-x-4">
            <li><a class="text-xl" href="">Homepage</a></li>
            <li><a class="text-xl" href="order">Order</a></li>
            <li><a class="text-xl" href="checkout">Checkout</a></li>
            <a class="w-24 space-x-2"><img src="/PizzaFotos/_09253db4-5f28-4da4-b255-46c05fda052b-removebg-preview.png"></a>
        </ul>
    </nav>
</header>

<div class="grid grid-cols-2 gap-32 p-12">
    <div class="grid place-content-end text-center">
        <p><img class="h-52" src="/PizzaFotos/TonijnPizza.png"></p>
        <h1>Tonijn Pizza</h1>
        <button onclick=""></button>
    </div>
    <div class="grid place-content-start text-center">
        <p><img class="h-52" src="/PizzaFotos/SalamiPizza.png"></p>
        <h1>Salami Pizza</h1>
        <p>beschrijving</p>
    </div>
    <div class="grid place-content-end text-center">
        <p><img class="h-52" src="/PizzaFotos/HawaiiPizza.png"></p>
        <h1>Hawaii Pizza</h1>
        <p>beschrijving</p>
    </div>
    <div class="grid place-content-start text-center">
        <p><img class="h-52" src="/PizzaFotos/BarbecueChicken.png"></p>
        <h1>Barbeque Chicken Pizza</h1>
        <p>beschrijving</p>
    </div>
</div>
</body>
</html>
