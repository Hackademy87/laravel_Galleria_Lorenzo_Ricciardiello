<section class="container mt-5" >
<div class="row" >
<div class="col-12 col-md-3 bordi">
<div class="card" style="width: 19rem;height: 33rem;">
<img class="px-2 py-2" style="height:270px; width:200px;" src="{{ Storage::url($product->img)}}" alt="">
<div class="card-body text-center">
<h5 class="card-title">{{$product->name}}</h5>
<p class="card-text">Artista</p>
@if($product->category)
<p>{{ $product->category->name }}</p>
@else
<p>Senza Categoria</p>
@endif
<p class="card-text">{{$product->price}}€</p>
</div>
</div>
</div>
</div>
</section>



