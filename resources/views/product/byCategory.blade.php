

<x-layout>
<br>
<br>

    <div class="container my-5">

        <div class="row">

            <div class="col-12">

                <h2>Prodotti per categoria {{ $category->name }}</h2>

            </div>

        </div>
    </div>
<div class="container">
        <div class="row">

            @foreach($category->products as $product)

                <div class="col-12 col-md-6">

                    <x-cards :product="$product" />

                </div>

            @endforeach

        </div>

    </div>





</x-layout>
