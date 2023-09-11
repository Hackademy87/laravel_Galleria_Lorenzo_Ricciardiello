<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="my-form">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="numeric" name='price' class="form-control">
    </div>

    <div class="mb-3">
        <label  class="form-label">Categoria</label>
        <select class="form-control" name="category_id">

        <option value="null" disabled >seleziona una categoria</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      </div>

    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="img" class="form-control">
    </div>
    <button type="submit" class="btn">Aggiungi</button>
</form>







