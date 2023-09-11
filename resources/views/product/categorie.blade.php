

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



@foreach($products as $product)

<x-card :product=$product></x-card>

@endforeach



</x-layout>
