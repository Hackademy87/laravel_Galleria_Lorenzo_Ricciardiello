<x-layout>



<form action="{{route('product.update', $product)}}" method="POST" enctype="multipart/form-data" >
@method('PUT')

@csrf



  <div class="mb-3">

    <label class="form-label">Nome</label>

    <input type="text" name="name" value="{{$product->name}}" class="form-control">

  </div>



  <div class="mb-3">

    <label  class="form-label">Prezzo</label>

    <input type="numeric" name='price' value="{{$product->price}}" class="form-control" >

  </div>



  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <select name="category_id" class="form-control">
        @foreach ($productCategories as $category)
            <option
                value="{{ $category->id }}"
                @if ($product->category->id == $category->id)
                    selected
                @endif
                >
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>



  <div class="mb-3">

    <label  class="form-label">Foto</label>

    <input type="file" name="img" class="form-control" >

    <img src="{{ Storage::url($product->img)}}" alt="">

  </div>

  <button type="submit" class="btn btn-success">Aggiungi</button>

</form>



</x-layout>
