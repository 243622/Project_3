<style>
    header{
        background-color: #333;
    }
    body{
        color: #fff;
    }
    p{
        color: #333;
    }
    button{
        color: #333;
    }
    h1{
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
    <br>
    <h1 class="text-4xl text-center">Most popular pizza's</h1>
    <div class="grid grid-rows-3">
        <div id="pizzas" class="flex justify-between inline-block p-14">
            <div class=" text-center ">
                <p><img class="h-52" src="/PizzaFotos/TonijnPizza.png"></p>
                <h1>Tonijn Pizza</h1>
                <button class="rounded-lg bg-red-600 p-2"><a href="order">More Information</a></button>
            </div>
            <div class="text-center">
                <p><img class="h-52" src="/PizzaFotos/SalamiPizza.png"></p>
                <h1>Salami Pizza</h1>
                <button class="rounded-lg bg-red-600 p-2"><a href="order">More Information</a></button>
            </div>
            <div class="text-center">
                <p><img class="h-52" src="/PizzaFotos/HawaiiPizza.png"></p>
                <h1 class="">Hawaii Pizza</h1>
                <button class="rounded-lg bg-red-600 p-2"><a href="order">More Information</a></button>
            </div>
            <div class="text-center">
                <p><img class="h-52" src="/PizzaFotos/BarbecueChicken.png"></p>
                <h1>Barbeque Chicken Pizza</h1>
                <button class="rounded-lg bg-red-600 p-2"><a href="order">More Information</a></button>
            </div>
        </div>

        <div class="grid grid-1">
            <div id="Information" class="grid grid-rows-3 w-3/4 place-items-center place-self-center">
                <h1 class="text-4xl text-center">The history of Stonks Pizza</h1>

                <div class="m-3">
                    <p>🍕De lekkerste pizza bestel je bij New York Pizza
                        Wat is een New York pizza?
                        De enige echte New York style pizza bestel je bij New York Pizza. Al sinds 1993 bezorgen wij de echte New York pizza bij jou aan de deur. Pizza’s uit New York kenmerken zich door de medium dikke korst die knapperig is en tegelijkertijd toch een bite heeft. Dit combineren wij met smaakvolle tomatensaus, verse mozzarella en natuurlijk de heerlijkste toppings, van traditioneel tot de beste variaties. Bij ons kun je altijd de pizza bestellen die perfect bij jouw smaak past en ben je verzekerd van de meest verse ingrediënten. It's the dough!
                    </p>
                </div>
                <div class="m-2">
                    <p>
                        Eten bestellen bij New York Pizza
                        Van vlees pizza's tot vegetarische en vegan pizza’s. Voor iedereen hebben we een pizza naar wens. Ook ander eten bestellen kan bij New York Pizza. Je kunt bij ons ook terecht voor de heerlijkste pasta’s en salades. Maak je bestelling compleet met lekkere fingerfoods, zoals een Garlic Bread of Chicken pops en een van onze heerlijke desserts.
                    </p>
                </div>
                <div class="m-2">
                    <p>
                        Makkelijk je pizza bestellen
                        Elke pizza die je bij New York Pizza bestelt, kunnen wij aan je deur bezorgen. Wij garanderen dat je je pizza net zo vers en heet opeet als wanneer je hem bij ons in de keuken zou krijgen. Bestel via de website, de app of geef ons een belletje. Waar je ook bent, wanneer je ook wilt, bezorgen wij jou de echte New York style pizza. Natuurlijk is het ook mogelijk om je pizza af te halen, door van tevoren je pizza bestelling door te geven via de website, telefoon of app. Je kunt natuurlijk ook langskomen in één van onze vestigingen en ter plaatse bestellen. De pizza maken we binnen enkele minuten voor je klaar terwijl je wacht.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 inline-block p-14 place-items-center">
            <div class="">
                <h1 class="text-xl text-center">Plastic-Free Packaging</h1>
                <p><img class="h-52" src="/PizzaFotos/SalamiPizza.png"></p>
                <p>We believe it is important to keep our impact on the environment as low as possible. That's why 95% of our packaging is already plastic-free. In addition, our pizza boxes can simply be thrown away with the waste paper. Read more about our vision and the steps we have taken here.</p>
            </div>

            <div class="">
                <h1 class="text-xl text-center">Information About Stonks Pizza</h1>
                <p><img class="h-52" src="/PizzaFotos/SalamiPizza.png"></p>
                <p>We want to do good because it feels good. Doing good for our customers, people, communities, the environment and our food. We call our mission to create a better world for everyone: Stonks For Good.</p>
            </div>

            <div class="">
                <h1 class="text-xl text-center">Stonks Most Recent Pizza</h1>
                <p><img class="h-52" src="/PizzaFotos/SalamiPizza.png"></p>
                <p>Most recent pizza created</p>
            </div>
        </div>

    </div>
</body>
</html>
