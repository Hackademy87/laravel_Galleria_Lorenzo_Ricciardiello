

<x-layout>



    <h1>{{$products->first()->category->name}}</h1>



    <div class="form-check">
  <a href=""><input class="form-check-input" name="uomo" type="checkbox" value="uomo" ></a>
  <label class="form-check-label" >
    Uomo
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" name="donna" type="checkbox" value="donna">
  <label class="form-check-label" >
    Donna
  </label>
</div>





<div class="container">

    <div class="row">

        @foreach($products as $product)

        <div class="col-12 col-md-3">

        <a style="text-decoration: none;" href="{{route('product.show',$product)}}"><x-cards  :product=$product></x-cards></a>

        </div>

        @endforeach

    </div>

</div>



</x-layout>
